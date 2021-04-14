@extends('layouts.admin_base')

@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-sm-5 col-5">
                <h4 class="page-title">Adverts</h4>
            </div>
            <div class="col-sm-7 col-7 text-right m-b-30">
                <a href="{{ route('adverts.create')}}" class="btn btn-primary btn-rounded"><i class="fa fa-plus"></i> Add Adverts</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-striped custom-table mb-0 datatable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Advert Title</th>
                                <th>Advert Descriptions</th>
                                <th class="text-right">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($adverts as $advert)
                                <tr>
                                <td>{{$advert->id}}</td>
                                <td>{{$advert->advert_title}}</td>
                                <td>{{$advert->advert_description}}</td>
                                <td class="text-right">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <div>
                                                <a class="dropdown-item" href="{{ url('admin/adverts/'.$advert->id.'/edit ')}}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                            </div>
                                            <div>
                                                    <form id="delete-form" action="{{ route('adverts.destroy', ['advert' => $advert->id]) }}" method="POST">
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
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{$adverts->links()}}
            </div>
        </div>
    </div>
</div>
@endsection