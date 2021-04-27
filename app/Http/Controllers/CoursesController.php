<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course as Courses;

class CoursesController extends Controller
{
    public function courseDetails($id){
        $course = Courses::find($id);
        return view('course-details',['course' => $course]);
    }
}