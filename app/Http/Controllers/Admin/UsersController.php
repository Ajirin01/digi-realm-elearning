<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User as User;
use Validator;

class UsersController extends Controller
{
    public function index()
    {
        $User = new User;
        $users = $User::all();
        return view('Admin.Users.users-dashboard',['users'=>$users]);
    }

    public function create()
    {
        return view('Admin.Users.create-user');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $User = new User;
        $user = $User::findOrFail($id);
        return view('Admin.Users.edit-user',['user'=>$user]);
    }

    public function update(Request $request, $id)
    {
        $User = new User;
        $rules =[
            'name' => 'required',
            'email' => 'required',
            'role' => 'required',
            'status' => 'required'
        ];

        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            return redirect()->back()->with('errors', $validator->errors());
        }else {
            $user_to_update = $User::findOrFail($id);
            $user_to_update->name = $request->get('name');
            $user_to_update->email = $request->get('email');
            $user_to_update->role = $request->get('role');
            $user_to_update->status = $request->get('status');
            if($user_to_update->save()){
                return redirect()->back()->with('msg', 'user has been successfully updated!');
            }else{
                return redirect()->back()->with('error', 'user could not be successfully updated!');
            }
        }
    }

    public function destroy($id)
    {
        $User = new User;
        $user_to_delete = $User::firstOrFail('id',$id);
        $delete_user = $user_to_delete->delete();
        if($delete_user){
            return redirect()->back()->with('msg', 'user has been successfully deleted!');
        }else{
            return redirect()->back()->with('error', 'user could not be successfully deleted!');
        }
    }
}