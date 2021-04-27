@extends('layouts.admin_base')

@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h4 class="page-title">Add Tutor</h4>
                <h4 class="page-title text-center text-success">
                    @if(session('msg'))
                    {{session('msg')}}
                    @endif
                </h4>
                <h4 class="page-title text-center text-danger">
                    @if(session('error'))
                    {{session('error')->first('tutor_name')}}
                    {{session('error')->first('tutor_phone_number')}}
                    @endif
                </h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
            <form action="{{ route('tutors.store') }}" method="POST">
                @csrf
                    <div class="form-group">
                        <label>Tutor Name</label>
                        @if(session('errors'))
                        <div class="text text-danger">{{session('errors')->first('tutor_name')}}*</div>
                        @endif
                        <input class="form-control" type="text" name="tutor_name">
                    </div>
                    <div class="form-group">
                        <label>Tutor Phone</label>
                        @if(session('errors'))
                        <div class="text text-danger">{{session('errors')->first('tutor_name')}}*</div>
                        @endif
                        <input class="form-control" type="phone" name="tutor_phone_number">
                    </div>
                    <div class="m-t-20 text-center">
                        <button class="btn btn-primary submit-btn">Create Tutor</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection