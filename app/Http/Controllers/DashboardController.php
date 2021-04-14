<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile as Profile;
use Illuminate\Support\Facades\Auth as Auth;

class DashboardController extends Controller
{
    public function index(){
        $id = Auth::user()->id;
        $profile = Profile::find($id);
        return view('Dashboard.dashboard',['profile'=> $profile]);
    }

    public function calender(){
        return view('Dashboard.calender');
    }

    public function contacts(){
        return view('Dashboard.contacts');
    }

    public function record(){
        return view('Dashboard.calender');
    }

    public function directChat($id){
        $profile = Profile::find($id);
        return view('Dashboard.directChat',['profile'=>$profile]);
    }
}