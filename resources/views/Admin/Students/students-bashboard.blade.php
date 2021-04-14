@extends('layouts.admin_base')

@section('content')
<div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-4 col-3">
                        <h4 class="page-title">Students</h4>
                    </div>
                    <div class="col-sm-8 col-9 text-right m-b-20">
                        <a href="{{ route('students.create') }}" class="btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Add Student</a>
                    </div>
                </div>
				<div class="row doctor-grid">
                    @if ($students)
                        @foreach ($students as $student)
                        <div class="col-md-4 col-sm-4  col-lg-3">
                        <div class="student-widget">
                            <div class="doctor-img center-align-items">
                                <a class="avatar" href="{{ url('admin/students/'.$student->id) }}"><img alt=""  src="{{asset($student->profile->profile_photo) }}" ></a>
                            </div>
                            <div class="dropdown profile-action">
                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <div>
                                    <a class="dropdown-item" href="{{ url('admin/students/'.$student->id.'/edit ') }}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                    {{-- <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_doctor"><i class="fa fa-trash-o m-r-5"></i> delete</a> --}}
                                    </div>
                                    <form id="delete-form" action="{{ route('students.destroy', ['student' => $student->id]) }}" method="POST">
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
                            <h4 class="doctor-name text-ellipsis"><a href="{{ url('admin/students/'.$student->id) }}">{{$student->profile->first_name}} {{$student->profile->last_name}}</a></h4>
                            <div class="user-country">
                                <i class="fa fa-map-marker"></i> {{$student->profile->home_address}}
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif
                    
                    
                </div>
				<div class="row">
                    <div class="col-sm-12">
                        <div class="see-all">
                            @if ($students)
                                {{$students->links()}}
                            @endif
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection