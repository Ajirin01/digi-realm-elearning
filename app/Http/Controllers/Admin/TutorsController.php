<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tutor as Tutors;
use Validator;
use	Illuminate\Support\Facades\Storage;

class TutorsController extends Controller
{
    public function index()
    {
        $tutors = Tutors::paginate(20);
        return view('Admin.Tutors.tutors-dashboard',['tutors'=>$tutors]);
    }

    public function create()
    {
        return view('Admin.Tutors.tutor-creation-form');
    }

    public function store(Request $request)
    {
        $rules = [
            'tutor_name' => 'required|min:5|max:50',
            'tutor_phone_number' => 'required',
        ];
        $validator = Validator::make($request->all(),$rules);

        if($validator->fails()){
            return redirect()->back()->with('errors',$validator->errors());
        }else {
                $tutor_name = $request->tutor_name;
                $tutor_phone_number = $request->tutor_phone_number;
                $create_tutor = Tutors::create(['tutor_name'=>$tutor_name,
                 'tutor_phone_number'=>$tutor_phone_number]);
    
                if($create_tutor->save()){
                    return redirect()->back()->with('msg','tutor was successfully created!');
                }else{
                    return redirect()->back()->with('error','tutor was not successfully created!');
                }
        }
    }

    public function show($id)
    {
        $tutor = Tutors::find($id);
        return response()->json($tutor);
    }

    public function edit($id)
    {
        $tutor = Tutors::find($id);

        return view('Admin.Tutors.edit-tutor',['tutor'=>$tutor]);
    }

    public function update(Request $request, $id)
    {
        $Tutor = Tutors::findOrFail($id);
        $rules = [
            'tutor_name' => 'required|min:5|max:50',
            'tutor_duration' => 'required',
            'tutor_phone_number' => 'required|min:20|max:400'
        ];
        $validator = Validator::make($request->all(),$rules);

        if($validator->fails()){
            return redirect()->back()->with('errors',$validator->errors());
        }else {
            if($request->hasFile('tutor_image')){
                $image = $request->file('tutor_image');
                $image_extension = $image->getClientOriginalExtension();
                $image_name = 'tutor_image'.rand(123456789,999999999).'.'.$image_extension;
                // $path = $request->file('tutor_image')->storeAs('public/uploads', $image_name );
                $upload_path = public_path('uploads/');
    
                $tutor_name = $request->tutor_name;
                $tutor_phone_number = $request->tutor_phone_number;
                $tutor_duration = $request->tutor_duration;
                $tutor_image = '/uploads/'.$image_name;
                $create_tutor = $Tutor->update(['tutor_name'=>$tutor_name,
                 'tutor_phone_number'=>$tutor_phone_number,
                 'tutor_duration'=>$tutor_duration,
                 'tutor_image'=>$tutor_image]);
    
                if($create_tutor){
                    $image->move($upload_path, $image_name);
                    return redirect()->back()->with('msg','tutor was successfully Updated!');
                }
            }else{
                $tutor_name = $request->tutor_name;
                $tutor_phone_number = $request->tutor_phone_number;
                $tutor_duration = $request->tutor_duration;
                $tutor_image = $Tutor->tutor_image;
                $create_tutor = $Tutor->update(['tutor_name'=>$tutor_name,
                 'tutor_phone_number'=>$tutor_phone_number,
                 'tutor_duration'=>$tutor_duration,
                 'tutor_image'=>$tutor_image]);
    
                if($create_tutor){
                    return redirect()->back()->with('msg','tutor was successfully Updated!');
                }
            }
        }
    }

    public function destroy($id)
    {
        $tutor = Tutors::findOrFail($id);
        $delete_tutor = $tutor->delete();
        if($delete_tutor){
            return redirect()->back()->with('msg','post was successfully deleted!');
        }else{
            return redirect()->back()->with('error','ERROR! could not delete tutor!');
        }
    }
}