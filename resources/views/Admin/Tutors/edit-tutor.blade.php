@extends('layouts.admin_base')

@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h4 class="page-title">Edit Tutor</h4>
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
            <form action="{{ url('admin/tutors/'.$tutor->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Tutor Title</label>
                    @if(session('errors'))
                    <div class="text text-danger">{{session('errors')->first('tutor_name')}}*</div>
                    @endif
                <input class="form-control" type="text" name="tutor_name" value="{{$tutor->tutor_name}}">
                </div>
                <div class="form-group">
                    <label>Tutor Image</label>
                    @if(session('errors'))
                    <div class="text text-danger">{{session('errors')->first('tutor_image')}}*</div>
                    @endif
                    <input class="form-control" type="file" name="tutor_image">
                </div>
                <div class="form-group">
                    <label>Tutor Duration</label>
                    @if(session('errors'))
                    <div class="text text-danger">{{session('errors')->first('tutor_duration')}}*</div>
                    @endif
                    {{-- <input class="form-control" type="text" name="tutor_duration"> --}}
                    <select class="form-control" name="tutor_duration" id="">
                        <option value="{{$tutor->tutor_duration}}"> {{$tutor->tutor_duration}}</option>
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
                    <div class="text text-danger">{{session('errors')->first('tutor_description')}}*</div>
                    @endif
                    <textarea cols="30" rows="4" class="form-control" name="tutor_description">{{$tutor->tutor_description}}</textarea>
                </div>
                <div class="m-t-20 text-center">
                    <button class="btn btn-primary submit-btn">Save</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection