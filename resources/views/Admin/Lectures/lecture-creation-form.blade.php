@extends('layouts.admin_base')

@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h4 class="page-title">Add Lecture</h4>
                <h4 class="page-title text-center text-success">
                    @if(session('msg'))
                    {{session('msg')}}
                    @endif
                </h4>
                <h4 class="page-title text-center text-danger">
                    @if(session('error'))
                    {{session('error')}}
                    @endif
                </h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
            <form action="{{ route('lectures.store') }}" method="POST">
                @csrf
                    <div class="form-group">
                        <label>Course Name</label>
                        @if(session('errors'))
                        <div class="text text-danger">{{session('errors')->first('course_name')}}*</div>
                        @endif
                        <select class="form-control" name="course_name">
                            @foreach ($courses as $course)
                            <option value="{{$course->id}}">{{$course->course_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Lecture Title</label>
                        @if(session('errors'))
                        <div class="text text-danger">{{session('errors')->first('lecture_title')}}*</div>
                        @endif
                        <input class="form-control" type="text" name="lecture_title">
                    </div>
                    <div class="form-group">
                        <label>Lecture Description</label>
                        @if(session('errors'))
                        <div class="text text-danger">{{session('errors')->first('lecture_description')}}*</div>
                        @endif
                        <textarea cols="30" rows="15" class="form-control" id="myTextArea" type="text" name="lecture_description"></textarea>
                    </div>
                    <input type="hidden" name="image_src" id="image-src">
                    <div class="m-t-20 text-center">
                        <button class="btn btn-primary submit-btn">Save Lecture</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection