@extends('layouts.app')

@section('content')
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
      <h2>About <strong class="yellow">Our Programs</strong></h2>
      <p> orem ipsum dolor sit amet, consectetur adipisicing elit. Quas voluptatem maiores eaque similique non distinctio voluptates perspiciatis omnis, repellendus ipsa aperiam, laudantium voluptatum nulla?.
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, assumenda, vo
      luptatum. Libero eligendi molestias iure error animi totam laudantium, aspernatur similique id eos at consectetur illo culpa,  </p>
      <a href="Javascript:void(0)">Buy Course</a>
    </div>
  </div>
  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
    <div class="about-box">
      <figure><img src="{{asset('site/images/about.jpg')}}" alt="#" /></figure>
    </div>
  </div>
</div>

</div>
</div>
<!-- end abouts -->



<!-- our -->
<div id="important" class="important">
<div class="container">
<div class="row">
  <div class="col-md-12">
    <div class="titlepage">
      <h2>Some <strong class="yellow">important facts</strong></h2>
      <span>luptatum. Libero eligendi molestias iure error animi totam laudantium, aspernatur similique id eos a
      t consectetur illo culpa,</span>
    </div>
  </div>
</div>
</div>
<div class="important_bg">
<div class="container">
  <div class="row">

    <div class="col col-xs-12">
      <div class="important_box">
        <h3>200+</h3>
        <span>Teachers</span>
      </div>
    </div>
    <div class="col col-xs-12">
      <div class="important_box">
        <h3>20+</h3>
        <span>Colleges</span>
      </div>
    </div>
    <div class="col col-xs-12">
      <div class="important_box">
        <h3>50+</h3>
        <span>Courses</span>
      </div>
    </div>
    <div class="col col-xs-12">
      <div class="important_box">
        <h3>200+</h3>
        <span>Members</span>
      </div>
    </div>
    <div class="col col-xs-12">
      <div class="important_box">
        <h3>10+</h3>
        <span>countries</span>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>

<!-- end our -->
<!-- Courses -->
<div id="courses" class="Courses">
<div class="container-fluid padding_left3">
<div class="row">
  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
    <div class="box_bg">
      <div class="box_bg_img">
        <div class="row">
          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
            <div class="box_my">
              <figure><a href="{{url('courses/course/1/detail')}}"><img src="{{asset('site/images/my1.jpg')}}"></a></figure>
              <div class="overlay">
                <h3>Data Structures</h3>
                <p>It is a long established fact that a reader will be distracted by the readable content o</p>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
            <div class="box_my">
              <figure><a href="{{url('courses/course/1/detail')}}"><img src="{{asset('site/images/my2.jpg')}}"></a></figure>
              <div class="overlay">
                <h3>Cinematography</h3>
                <p>It is a long established fact that a reader will be distracted by the readable content o</p>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
            <div class="box_my">
              <figure><a href="{{url('courses/course/1/detail')}}"><img src="{{asset('site/images/my3.jpg')}}"></a></figure>
              <div class="overlay">
                <h3>Skills</h3>
                <p>It is a long established fact that a reader will be distracted by the readable content o</p>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
            <div class="box_my">
              <figure><a href="{{url('courses/course/1/detail')}}"><img src="{{asset('site/images/my4.jpg')}}"></a></figure>
              <div class="overlay">
                <h3>Teaching Science</h3>
                <p>It is a long established fact that a reader will be distracted by the readable content o</p>
              </div>
            </div>
          </div>



        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 border_right">
    <div class="box_text">
      <div class="titlepage">
        <h2>My <strong class="yellow"> Courses</strong></h2>
      </div>
      <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
      <a href="Javascript:void(0)">Buy Course</a>
    </div>
  </div> 
</div>
</div>
</div>
<!-- end Courses -->

@endsection
