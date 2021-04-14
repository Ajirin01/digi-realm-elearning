@extends('layouts.admin_base')

@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h4 class="page-title">Add Appointment</h4>
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
            <form action="{{ route('appointments.store') }} " method="POST">
                @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Client Name</label>
                                @if(session('errors'))
                                <div class="text text-danger">{{session('errors')->first('client_name')}}*</div>
                                @endif
                                <select class="select" name="client_name">
                                    @foreach ($profiles as $profile)
                                        <option value="{{$profile->id}} {{$profile->last_name}}">{{$profile->first_name}} {{$profile->last_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Date</label>
                                @if(session('errors'))
                                <div class="text text-danger">{{session('errors')->first('date')}}*</div>
                                @endif
                                <div class="cal-icon">
                                    <input type="text" class="form-control datetimepicker" name="date">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Time</label>
                                @if(session('errors'))
                                <div class="text text-danger">{{session('errors')->first('time')}}*</div>
                                @endif
                                <div class="time-icon">
                                    <input type="text" class="form-control" id="datetimepicker3" name="time" placeholder="e.g 10:00am-12:00pm">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="display-block">Appointment Status</label>
                        @if(session('errors'))
                        <div class="text text-danger">{{session('errors')->first('status')}}*</div>
                        @endif
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="product_active" value="active" checked>
                            <label class="form-check-label" for="product_active">
                            Active
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="product_inactive" value="inactive">
                            <label class="form-check-label" for="product_inactive">
                            Inactive
                            </label>
                        </div>
                    </div>
                    <div class="m-t-20 text-center">
                        <button class="btn btn-primary submit-btn">Create Appointment</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection