<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Course as Courses;
use App\Tutor as Tutors;
use Validator;
use	Illuminate\Support\Facades\Storage;

class CoursesController extends Controller
{
    public function index()
    {
        $courses = Courses::paginate(20);
        return view('Admin.Courses.courses-dashboard',['courses'=>$courses]);
    }

    public function create()
    {
        $Tutors = new Tutors();
        $all_tutors = $Tutors::all();
        return view('Admin.Courses.course-creation-form',['tutors' => $all_tutors ]);
    }

    public function store(Request $request)
    {
        $Tutors = new Tutors();
        $rules = [
            'course_name' => 'required|min:5|max:50',
            'course_image' => 'required',
            'tutor_id' => 'required',
            'course_duration' => 'required',
            'course_description' => 'required|min:20|max:500'
        ];
        $validator = Validator::make($request->all(),$rules);

        if($validator->fails()){
            return redirect()->back()->with('errors',$validator->errors());
        }else {
            if($request->hasFile('course_image')){
                $image = $request->file('course_image');
                $image_extension = $image->getClientOriginalExtension();
                $image_name = 'course_image'.rand(123456789,999999999).'.'.$image_extension;
                // $path = $request->file('course_image')->storeAs('public/uploads', $image_name );
                $upload_path = public_path('uploads/');
    
                $course_name = $request->course_name;
                $course_description = $request->course_description;
                $tutor_id = $request->tutor_id;
                $course_image = '/uploads/'.$image_name;
                $course_duration = $request->course_duration;
                // $create_course = Courses::create(['course_name'=>$course_name,
                // 'course_duration'=>$course_duration,
                //  'course_description'=>$course_description,
                //  'tutor_id'=>$tutor_id,
                //  'course_image'=>$course_image]);
                
                 $tutor_to_create_course = $Tutors::find($tutor_id);
                 $create_course = $tutor_to_create_course->courses()->create(['course_name'=>$course_name,
                 'course_duration'=>$course_duration,
                  'course_description'=>$course_description,
                  'tutor_id'=>$tutor_id,
                  'course_image'=>$course_image]);
                  
                if($create_course->save()){
                    $image->move($upload_path, $image_name);
                    return redirect()->back()->with('msg','course was successfully created!');
                }
            }else{
                return redirect()->back()->with('error','ERROR! could not create course!');
            }
        }
    }

    public function show($id)
    {
        $course = Courses::find($id);
        return response()->json($course);
    }

    public function edit($id)
    {
        $all_tutors = Tutors::all();
        $course = Courses::find($id);

        return view('Admin.Courses.edit-course',['course' => $course, 'tutors' => $all_tutors]);
    }

    public function update(Request $request, $id)
    {
        $Course = Courses::findOrFail($id);
        $rules = [
            'course_name' => 'required|min:5|max:50',
            'tutor_id' => 'required',
            'course_duration' => 'required',
            'course_description' => 'required|min:20|max:400'
        ];
        $validator = Validator::make($request->all(),$rules);

        if($validator->fails()){
            return redirect()->back()->with('errors',$validator->errors());
        }else {
            if($request->hasFile('course_image')){
                $image = $request->file('course_image');
                $image_extension = $image->getClientOriginalExtension();
                $image_name = 'course_image'.rand(123456789,999999999).'.'.$image_extension;
                // $path = $request->file('course_image')->storeAs('public/uploads', $image_name );
                $upload_path = public_path('uploads/');
    
                $course_name = $request->course_name;
                $course_description = $request->course_description;
                $course_duration = $request->course_duration;
                $tutor_id = $request->tutor_id;
                $course_image = '/uploads/'.$image_name;
                $create_course = $Course->update(['course_name'=>$course_name,
                 'course_description'=>$course_description,
                 'course_duration'=>$course_duration,
                 'tutor_id'=>$tutor_id,
                 'course_image'=>$course_image]);
    
                if($create_course){
                    $image->move($upload_path, $image_name);
                    return redirect()->back()->with('msg','course was successfully Updated!');
                }
            }else{
                $course_name = $request->course_name;
                $course_description = $request->course_description;
                $course_duration = $request->course_duration;
                $tutor_id = $request->tutor_id;
                $course_image = $Course->course_image;
                $create_course = $Course->update(['course_name'=>$course_name,
                 'course_description'=>$course_description,
                 'course_duration'=>$course_duration,
                 'tutor_id'=>$tutor_id,
                 'course_image'=>$course_image]);
    
                if($create_course){
                    return redirect()->back()->with('msg','course was successfully Updated!');
                }else{
                    return redirect()->back()->with('error','course was not successfully Updated!');
                }
            }
        }
    }

    public function destroy($id)
    {
        $course = Courses::findOrFail($id);
        $delete_course = $course->delete();
        if($delete_course){
            return redirect()->back()->with('msg','post was successfully deleted!');
        }else{
            return redirect()->back()->with('error','ERROR! could not delete course!');
        }
    }
}