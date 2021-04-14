@extends('layouts.admin_base')

@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h4 class="page-title">Edit Lecture</h4>
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
            <form action="{{ url('admin/lectures/'.$lecture->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Lecture Title</label>
                        @if(session('errors'))
                        <div class="text text-danger">{{session('errors')->first('lecture_title')}}*</div>
                        @endif
                    <input class="form-control" type="text" name="lecture_title" value="{{$lecture->lecture_title}}">
                    </div>
                    <div class="form-group">
                        <label>Lecture Description</label>
                        @if(session('errors'))
                        <div class="text text-danger">{{session('errors')->first('lecture_description')}}*</div>
                        @endif
                        <textarea cols="30" rows="15" id="myTextArea" class="form-control tinymce" type="text" name="lecture_description"><?php echo preg_replace("'../../'","../../../",($lecture->lecture_description)); ?></textarea>
                    </div>
                    <div class="m-t-20 text-center">
                        <button class="btn btn-primary submit-btn">Save Lecture</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection