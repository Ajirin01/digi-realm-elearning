@extends('layouts.admin_base')

@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-sm-8 col-4">
                <h4 class="page-title">Lectures</h4>
            </div>
            <div class="col-sm-4 col-8 text-right m-b-30">
            <a class="btn btn-primary btn-rounded float-right" href="{{ route('lectures.create') }}"><i class="fa fa-plus"></i> Add Lecture</a>
            </div>
        </div>
        <div class="row">
            @foreach ($lectures as $lecture)
                <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="blog grid-blog">
                    <div class="blog-content">
                        <h3 class="blog-title"><a href="{{ url('admin/lectures/'.$lecture->id.'/edit') }}">{{$lecture->lecture_title}}</a></h3>
                        <div style="word-wrap: word-break"><?php echo substr($lecture->lecture_description, 0,100).'...'; ?></div>
                        {{-- <a href="{{ url('admin/lectures/'.$lecture->id.'/edit') }}" class="read-more"><i class="fa fa-long-arrow-right"></i> Read More</a> --}}
                        <div class="blog-info clearfix">
                            <div class="post-left">
                                <div>
                                <a class="dropdown-item" href="{{ url('admin/lectures/'.$lecture->id.'/edit') }}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                </div>
                                <form id="delete-form" action="{{ route('lectures.destroy', ['lecture' => $lecture->id]) }}" method="POST">
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
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
    {{$lectures->links()}}
</div>
<div id="delete_department" class="modal fade delete-modal" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center">
                <img src="assets/img/sent.png" alt="" width="50" height="46">
                <h3>Are you sure want to delete this Appointment?</h3>
                <div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
                    <button type="submit" class="btn btn-danger"
                    onclick="
                    document.getElementById('delete-form').submit();"
                    >Delete</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection