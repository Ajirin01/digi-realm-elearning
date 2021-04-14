<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Profile as Profile;
use App\User as User;
use Carbon\Carbon;
use Validator;
use	Illuminate\Support\Facades\Storage;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $User = new User;
        $students = $User::where('role','student')->orderBy('id','desc')->paginate(5);
        return view('Admin.Students.students-bashboard',['students'=>$students]);
    }

    public function create()
    {
        $User = new User;
        $users = $User::all();
        return view('Admin.Students.student-creation-form',['users'=> $users]);
    }

    public function store(Request $request)
    {   
        // return response()->json($request->all());
        $User = new User;
        $user_to_create_profile = $User::findOrFail($request->get('user'));
        $rules = [
            'first_name' => 'required|min:3|max:30',
            'last_name' => 'required|min:3|max:30',
            'DOB' => 'required',
            'gender' => 'required',
            'profile_photo' => 'required',
            'address' => 'required|min:10|max:100',
            'status' => 'required',
            'phone'=> 'required',
        ];

        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            return redirect()->back()->with('errors',$validator->errors());
        }else {
            if($request->hasFile('profile_photo')){
                $image = $request->file('profile_photo');
                $image_extension = $image->getClientOriginalExtension();
                $image_name = 'profile_photo'.rand(123456789,999999999).'.'.$image_extension;
                // $path = $request->file('profile_photo')->storeAs('public/uploads', $image_name );
                $upload_path = public_path('uploads/');
                
                $profile_image = '/uploads/'.$image_name;
                $today = Carbon::today();
                $expires_at = $today->addDays(7);
                $create_profile = $user_to_create_profile->profile()->create([
                    'first_name' => $request->get('first_name'),
                    'last_name' =>  $request->get('last_name'),
                    'date_of_birth' =>  $request->get('DOB'),
                    'gender' =>  $request->get('gender'),
                    'home_address' =>  $request->get('address'),
                    'profile_photo' =>  $profile_image,
                    'status' =>  $request->get('status'),
                    'phone_number'=>  $request->get('phone'),
                    'expires_at' =>  $expires_at
                ]);
                if($create_profile->save()){
                    $image->move($upload_path, $image_name);
                    $user_to_create_profile->role = 'student';
                    $user_to_create_profile->save();
                    return redirect()->back()->with('msg','profile was successfully created!');
                }
            }else{
                return redirect()->back()->with('error','ERROR! could not create profile!');
            }
        }
    }

    public function show($id)
    {
        $Profile = new Profile;
        $profile = $Profile::findOrFail($id);
        $profile_user = $profile->user;
        // echo $profile_user;
        return view('Admin.Students.student-details',['user'=> $profile_user, 'profile'=>$profile]);
    }

    public function edit($id)
    {
        $Profile = new Profile;
        $profile = $Profile::findOrFail($id);
        return view('Admin.Students.edit-profile',['profile'=>$profile]);
    }

    public function update(Request $request, $id)
    {
        $Profile = new Profile;
        $profile_to_update = $Profile::findOrFail($id);
        $rules = [
            'first_name' => 'required|min:3|max:30',
            'last_name' => 'required|min:3|max:30',
            'DOB' => 'required',
            'gender' => 'required',
            'address' => 'required|min:10|max:100',
            'profile_photo' => 'required',
            'status' => 'required',
            'expires_at' => 'required|min:1|max:4',
            'phone'=> 'required',
        ];

        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            return redirect()->back()->with('errors',$validator->errors());
        }else {
            if($request->hasFile('profile_photo')){
                $image = $request->file('profile_photo');
                $image_extension = $image->getClientOriginalExtension();
                $image_name = 'profile_photo'.rand(123456789,999999999).'.'.$image_extension;
                $upload_path = public_path('uploads/');
                // $path = $request->file('profile_photo')->storeAs('public/uploads', $image_name );
                $expires_in = $request->get('expires_at');
                $profile_image = '/uploads/'.$image_name;
                $today = Carbon::today();
                $expires_at = $today->addDays($expires_in);
                
                $update_profile = $profile_to_update->update([
                    'first_name' => $request->get('first_name'),
                    'last_name' =>  $request->get('last_name'),
                    'date_of_birth' =>  $request->get('DOB'),
                    'gender' =>  $request->get('gender'),
                    'home_address' =>  $request->get('address'),
                    'profile_photo' =>  $profile_image,
                    'status' =>  $request->get('status'),
                    'phone_number'=>  $request->get('phone'),
                    'expires_at' =>  $expires_at
                ]);
                if($update_profile){
                    $image->move($upload_path, $image_name);
                    $profile_to_update->role = 'student';
                    $user_to_create_profile->save();
                    return redirect()->back()->with('msg','profile was successfully update!');
                }
                }else{
                    return redirect()->back()->with('error','ERROR! could not update profile!');
                }
        }
    }


    public function destroy($id)
    {
        $Profile = new Profile;
        $profile_to_delete = $Profile::findOrFail($id);
        Storage::delete('public/uploads/'.$profile_to_delete->profile_photo);
        $delete_profile = $profile_to_delete->delete();
        
        if($delete_profile){
            return redirect()->back()->with('msg','profile was successfully deleted!');
        }else{
            return redirect()->back()->with('error','ERROR! could not delete profile!');
        }
    }
}