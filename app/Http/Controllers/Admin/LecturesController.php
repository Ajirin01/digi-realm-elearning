<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Lecture as Lecture;
use App\Course as Course;
use Validator;

class LecturesController extends Controller
{
    public function index()
    {
        $Lecture = new Lecture;
        $lectures = Lecture::paginate(5);
        return view('Admin.Lectures.lectures-dashboard',['lectures'=>$lectures]);
    }

    public function create()
    {
        $Course = new Course;
        $courses = Course::all();
        return view('Admin.Lectures.lecture-creation-form',['courses'=>$courses]);
    }

    public function store(Request $request)
    {
        $image_src = preg_replace('/\.$/','', $request->image_src);
        $image_src = preg_replace("/\/uploads/","uploads", $image_src);
        $image_src = explode(',',$image_src);

        // return response()->json($image_src);
        // exit;
        
        $Course = new Course;
        $rules = [
            'course_name' => 'required',
            'lecture_title' => 'required|min:5|max:50',
            'lecture_description' => 'required|min:20|max:1000'
        ];

        $validator = Validator::make($request->all(),$rules);
        if($validator->fails()){
            return redirect()->back()->with('errors',$validator->errors());
        }else {
            $course_name = $request->get("course_name");
            $lecture_title = $request->get("lecture_title");
            $lecture_description = $request->get("lecture_description");
            
            $course_to_create_lecture = $Course::findOrFail($course_name);

            $create_lecture = $course_to_create_lecture->lectures()->create(['lecture_title'=>$lecture_title,
            'lecture_description_images_array'=>json_encode($image_src),
             'lecture_description'=> $lecture_description]);
            if($create_lecture->save()){
                return redirect()->back()->with('msg','lecuture was successfully created!');
            }else {
                return redirect()->back()->with('msg','ERROR!,could not create lecture');
            }
        }
    }

    public function edit($id)
    {
        $Lecture = new Lecture;
        $lecture = $Lecture::findOrFail($id);
        return view('Admin.Lectures.edit-lecture',['lecture'=>$lecture]);
    }

    public function update(Request $request, $id)
    {
        $image_src = preg_replace('/\.$/','', $request->image_src);
        $image_src = preg_replace("/\/uploads/","uploads", $image_src);
        $image_src = explode(',',$image_src);
        
        $Lecture = new Lecture;
        $rules = [
            'lecture_title' => 'required|min:5|max:50',
            'lecture_description' => 'required|min:20|max:1000'
        ];

        $validator = Validator::make($request->all(),$rules);
        if($validator->fails()){
            return redirect()->back()->with('errors',$validator->errors());
        }else {
            $lecture_title = $request->get("lecture_title");
            $lecture_description = $request->get("lecture_description");
            
            $lecture_to_update = $Lecture::findOrFail($id);

            $update_lecture = $lecture_to_update->update(['lecture_title'=>$lecture_title,
            'lecture_description_images_array'=>json_encode($image_src),
             'lecture_description'=> $lecture_description]);
            if($update_lecture){
                return redirect()->back()->with('msg','lecuture was successfully updated!');
            }else {
                return redirect()->back()->with('msg','ERROR!,could not update lecture');
            }
        }
    }

    public function destroy($id)
    {
        $Lecture = new Lecture;
        $lecture = Lecture::findOrFail($id);

        $image_src_array = $lecture->lecture_description_images_array;

        for($i=0; $i<count(json_decode($image_src_array)); $i++){
            try{
                $path = json_decode($image_src_array)[$i];

                if(file_exists($path)){
                    unlink(json_decode($image_src_array)[$i]);
                }else{
                    ;
                }
                
            }catch(Exception $e){
                ;
            }
            
        }
        
        $delete_lecture = $lecture->delete();
        if($delete_lecture){

            return redirect()->back()->with('msg','lecture was successfully deleted!');
        }else{
            return redirect()->back()->with('error','ERROR! could not delete lecture!');
        }
    }
}