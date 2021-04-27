@extends('layouts.app')

@section('content')

<div class="col 12">
  <div id="ex1" class="login-box modal" style="padding-top: 150px">
    <div class="login-logo">
      <a href="/"><b>Digi-Realm</b></a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Enter Your Details</p>
  
        <form action="{{ route('login') }}" method="post">
            @csrf
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Full Name" name="fullname">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fa fa-user"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="email" class="form-control" placeholder="Email" name="email">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fa fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="phone" class="form-control" placeholder="Phone Number" name="phone">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fa fa-phone"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Home Address" name="address">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fa fa-home"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
              </div>
            </div>
            <!-- /.col -->
            <div class="col-12">
              <button type="submit" class="btn btn-primary btn-block">Continue</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
</div>
</div>
</header>


{{-- <main class="py-4">
@yield('content')
</main> --}}
<!-- about  -->
<div id="about" class="about">
<div class="container">
<div class="row">
  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
    <div class="about-box">
      <h2>About <strong class="yellow">Our {{$course->course_name}}</strong></h2>
      <p> {{$course->course_description}}</p>
      <a href="#ex1" rel="modal:open">Buy Course</a>
    </div>
  </div>
  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
    <div class="about-box">
      <figure><img src="/public{{$course->course_image}}" alt="#" /></figure>
    </div>
  </div>
</div>

</div>
</div>
<!-- end abouts -->

  


@endsection
