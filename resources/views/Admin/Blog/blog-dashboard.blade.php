@extends('layouts.admin_base')

@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-sm-8 col-4">
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
                <h4 class="page-title">Posts</h4>
            </div>
            <div class="col-sm-4 col-8 text-right m-b-30">
                <a class="btn btn-primary btn-rounded float-right" href="{{ route('blog.create') }}"><i class="fa fa-plus"></i> Add Post</a>
            </div>
        </div>
        <div class="row">
            @foreach ($posts as $post)
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="blog grid-blog">
                    <div class="blog-image" style="height: 300px">
                    <a href="{{ url('admin/blog/'.$post->id.'/edit') }}"><img class="img-fluid" src="{{asset('storage/public/uploads/'.$post->blog_image) }}" alt=""></a>
                    </div>
                    <div class="blog-content">
                        <h3 class="blog-title"><a href="{{ url('admin/blog/'.$post->id.'/edit') }}">{{$post->blog_title}}</a></h3>
                        <p style="word-break: break-word"><?php echo substr($post->blog_description,0,50) ?>...</p>
                        {{-- <a href="{{ url('admin/blog/1/edit') }}" class="read-more"><i class="fa fa-long-arrow-right"></i> Read More</a> --}}
                        <div class="blog-info clearfix">
                            <div class="post-left">
                                <div>
                                    <a class="dropdown-item" href="{{ url('admin/blog/'.$post->id.'/edit') }}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                </div>
                                
                                <br>
                                <form id="delete-form" action="{{ route('blog.destroy', ['blog' => $post->id]) }}" method="POST">
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
        <div>{{ $posts->links() }}</div>
    </div>
</div>

@endsection