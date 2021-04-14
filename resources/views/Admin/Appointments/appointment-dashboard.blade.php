@extends('layouts.admin_base')

@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-sm-4 col-3">
                <h4 class="page-title">Appointments</h4>
            </div>
            <div class="col-sm-8 col-9 text-right m-b-20">
                <a href="{{ route('appointments.create') }}" class="btn btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Add Appointment</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-striped custom-table">
                        <thead>
                            <tr>
                                <th>Client Name</th>
                                <th>Client ID</th>
                                <th>Appointment Date</th>
                                <th>Appointment Time</th>
                                <th>Status</th>
                                <th class="text-right">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @for ($i = 0; $i < count($profiles); $i++) --}}
                            {{-- {{$profiles[$i]->first_name}} {{$profiles[$i]->appointments}} --}}
                                @foreach ($profiles as $profile)
                                @foreach ($profile->appointments as $appointment)
                                    <tr>
                                        <td><img width="28" height="28" src="assets/img/user.jpg" class="rounded-circle m-r-5" alt="">{{$profile->first_name}} {{$profile->last_name}}</td>
                                        <td>{{$profile->id}}</td>
                                        <td>{{$appointment->appointment_date}}</td>
                                        <td>{{$appointment->appointment_time}}</td>
                                        @if ($appointment->appointment_status == 'active')
                                        <td><span class="custom-badge status-green">{{$appointment->appointment_status}}</span></td>
                                        @else
                                        <td><span class="custom-badge status-red">{{$appointment->appointment_status}}</span></td>
                                        @endif
                                        <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <div>
                                                    <a class="dropdown-item" href="{{ url('admin/appointments/'.$appointment->id.'/edit') }}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                    </div>
                                                    <form id="delete-form" action="{{ route('appointments.destroy', ['appointment' => $appointment->id]) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <a class="dropdown-item" href="#">
                                                        <i class="fa fa-trash-o m-r-5  text text-danger" >
                                                           <input class="text text-danger" type="submit" value="Delete" style="
                                                           background:transparent;
                                                           border: none;
                                                           cursor: pointer;
                                                           font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                                                           font-weight: 500;
                                                           font-size: .8rem
                                                           ">
                                                       </i>
                                                       </a>
                                                   </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection