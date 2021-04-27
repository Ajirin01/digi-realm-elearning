@extends('layouts.admin_base')

@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-sm-5 col-5">
                <h4 class="page-title">Tutors</h4>
            </div>
            <div class="col-sm-7 col-7 text-right m-b-30">
                <a href="{{ route('tutors.create')}}" class="btn btn-primary btn-rounded"><i class="fa fa-plus"></i> Add Tutors</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-striped custom-table mb-0 datatable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Tutors Name</th>
                                <th>Tutors Phone</th>
                                <th class="text-right">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tutors as $tutor)
                                <tr>
                                <td>{{$tutor->id}}</td>
                                <td>{{$tutor->tutor_name}}</td>
                                <td style="word-wrap: break-word">{{$tutor->tutor_phone_number}}</td>
                                <td class="text-right">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <div>
                                            <a class="dropdown-item" href="{{ url('admin/tutors/'.$tutor->id.'/edit ')}}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                            </div>
                                            <form id="delete-form" action="{{ route('tutors.destroy', ['tutors' => $tutor->id]) }}" method="POST">
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
                        </tbody>
                    </table>
                </div>
                {{$tutors->links()}}
            </div>
        </div>
    </div>
</div>
<div id="delete_department" class="modal fade delete-modal" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center">
                <img src="assets/img/sent.png" alt="" width="50" height="46">
                <h3>Are you sure want to delete this Tutors?</h3>
                <div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
                    <button type="submit" class="btn btn-danger"
                    onclick="event.preventDefault();
                    document.getElementById('delete-form').submit();">Delete</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection