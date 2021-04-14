@extends('layouts.admin_base')

@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h4 class="page-title">Add Course</h4>
                <h4 class="page-title text-center text-success">
                    @if(session('msg'))
                    {{session('msg')}}
                    @endif
                </h4>
                <h4 class="page-title text-center text-danger">
                    @if(session('error'))
                    {{session('error')->first('course_title')}}
                    {{session('error')->first('course_description')}}
                    {{session('error')->first('course_duration')}}
                    @endif
                </h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
            <form action="{{ route('courses.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="form-group">
                        <label>Course Name</label>
                        @if(session('errors'))
                        <div class="text text-danger">{{session('errors')->first('course_name')}}*</div>
                        @endif
                        <input class="form-control" type="text" name="course_name">
                    </div>
                    <div class="form-group">
                        <label>Course Image</label>
                        @if(session('errors'))
                        <div class="text text-danger">{{session('errors')->first('course_image')}}*</div>
                        @endif
                        <input class="form-control" type="file" name="course_image">
                    </div>
                    <div class="form-group">
                        <label>Course Duration</label>
                        @if(session('errors'))
                        <div class="text text-danger">{{session('errors')->first('course_duration')}}*</div>
                        @endif
                        {{-- <input class="form-control" type="text" name="course_duration"> --}}
                        <select class="form-control" name="course_duration" id="">
                            <option value="1 month"> 1 Month</option>
                            @php
                                for($i=2; $i<15; $i++){
                                    echo '<option value="'.$i.' months">'.$i.' Months</option>';
                                }
                            @endphp
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        @if(session('errors'))
                        <div class="text text-danger">{{session('errors')->first('course_description')}}*</div>
                        @endif
                        <textarea cols="30" rows="4" class="form-control" name="course_description"></textarea>
                    </div>
                    <div class="m-t-20 text-center">
                        <button class="btn btn-primary submit-btn">Create Course</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection