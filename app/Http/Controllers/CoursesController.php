<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function courseDetails($id){
        return view('course-details',['id' => $id]);
    }
}