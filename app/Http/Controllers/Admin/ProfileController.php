<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Profile as Profiles;

class ProfileController extends Controller
{
    public function index()
    {
        $profiles = Profiles::all();
        return response()->json($profiles);
    }

    public function create()
    {
        echo 'the create form profile';
    }

    public function store(Request $request)
    {
        $create_profile = Profiles::create($request->all());
        if($create_profile){
            return response()->json($create_profile);
        }
    }

    public function show($id)
    {
        $profile = Profiles::find($id);
        return response()->json($profile);
    }

    public function edit($id)
    {
        echo 'the edit form for profile';
    }

    public function update(Request $request, $id)
    {
        $profile_to_update = Profiles::find(1);

        $update_profile = $profile_to_update->update($request->all());
        
        if($update_profile){
            return response()->json($request->all());
        }
    }

    public function destroy($id)
    {
        $profile_to_delete = Profiles::find(1);

        $delete_profile = $profile_to_delete->delete();

        if($delete_profile){
            return response()->json(['record deleted']);
        }
    }
}