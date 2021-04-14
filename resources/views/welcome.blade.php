@extends('layouts.app')

@section('content')
<section class="slider_section">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
        <div class="carousel-item active">

            <div class="container-fluid padding_dd">
            <div class="carousel-caption">
                <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                    <div class="text-bg">
                    <h1>Search your Favorite Course here</h1>
                    <p>TOP NOTCH COURSES FROM TRAINED PROFESSIONALS</p>
                    <a href="#">Read more</a> <a href="#">get a qoute</a>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                    <div class="images_box">
                    <figure><img src="{{asset('site/images/digi-img2.png')}}"></figure>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        <div class="carousel-item">

            <div class="container-fluid padding_dd">
            <div class="carousel-caption">

                <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                    <div class="text-bg">
                    <h1>Search your Favorite Course here</h1>
                    <p>TOP NOTCH COURSES FROM TRAINED PROFESSIONALS</p>
                    <a href="#">Read more</a><a href="#">get a qoute</a>
                    </div>
                </div>

                <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                    <div class="images_box">
                    <figure><img src="{{asset('site/images/student4.png')}}"></figure>
                    </div>
                </div>
                </div>
            </div>
            </div>

        </div>


        <div class="carousel-item">

            <div class="container-fluid padding_dd">
            <div class="carousel-caption ">
                <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                    <div class="text-bg">
                    <h1>Search your Favorite Course here</h1>
                    <p>TOP NOTCH COURSES FROM TRAINED PROFESSIONALS</p>
                    <a href="#">Read more</a> <a href="#">get a qoute</a>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                    <div class="images_box">
                    <figure><img src="{{asset('site/images/student5.png')}}"></figure>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    <div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
        </a>
    </div>

    </section>
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
        <a href="Javascript:void(0)">Read more</a>
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
        <a href="Javascript:void(0)">Read more</a>
    </div>
    </div> 
</div>
</div>
</div>
<!-- end Courses -->

<!-- learn -->


<div id="learn" class="learn">
<div class="container">
<div class="row">
    <div class="col-md-12">
    <div class="titlepage">
        <h2>Learn <strong class="yellow">the Practical way online</strong></h2>
        <span>We are also working to make available vidoe materials to students
            to make learning more effective for them. They will be able to have virtual lectures online. Coming soon!!!</span>
    </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
    <div class="learn_box">
        <figure><img src="{{asset('site/images/img.jpg')}}" alt="img"/></figure>
    </div>
    </div>
</div>
</div>
</div>
<!-- MAKE --> 
<div class="make">
<div class="container">
<div class="row">
    <div class="col-md-12">
    <div class="titlepage">
        <h2>You Can Also <strong class="white_colo" style="font-size: 1.5rem">Request Quotes for the following Services:</strong></h2>
    </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
    <div class="make_text">
        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
        </p>
        <!-- <a href="#contact">Contact</a> -->
        <a href="#contact">Contact Us</a>
    </div>
    </div>
    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
    <div class="make_img">
        <figure><img src="{{asset('site/images/make_img.jpg')}}"></figure>
    </div>
    </div>
</div>
</div>
</div>
<!-- end MAKE --> 
<!-- end learn --> 

@endsection

