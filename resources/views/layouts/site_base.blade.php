<?php
use Carbon\Carbon;
use App\Course as Course;
$Course = new Course;
$course_first = $Course::all()->first();
?>
<!doctype html>
<!--[if IE 9]> <html class="no-js ie9 fixed-layout" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js " lang="en"> <!--<![endif]-->
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
    <!-- Site Meta -->
    <title>IsaacOlabisiEduBlog</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{ asset('site/images/olabisi-logo.png') }}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{ asset('site/images/olabisi-logo.png') }}">

	<!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,400i,700,700i" rel="stylesheet"> 
	
    <!-- Custom & Default Styles -->
	<link rel="stylesheet" href="{{ asset('site/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('site/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('site/css/carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('site/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('site/style.css') }}">
    <link rel="stylesheet" href="{{ asset('site/css/swiper.min.css') }}">
    <style>
        #student-registration-form{
            display: none;
        }
        .swiper-container {
      width: 100%;
      height: 100%;

    }
    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;

      /* Center slide text vertically */
      display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items: center;
    }
    </style>

	<!--[if lt IE 9]>
		<script src="{{ asset('site/js/vendor/html5shiv.min.js') }}"></script>
		<script src="{{ asset('site/js/vendor/respond.min.js') }}"></script>
	<![endif]-->

</head>
<body>  

    <!-- LOADER -->
    <div id="preloader">
        <img class="preloader" src="{{ asset('site/images/loader.gif') }}" alt="">
    </div><!-- end loader -->
    <!-- END LOADER -->

    <div id="wrapper">
        <!-- BEGIN # MODAL LOGIN -->
        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Begin # DIV Form -->
                    <div id="div-forms">
                        <form id="login-form">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span class="flaticon-add" aria-hidden="true"></span>
                            </button>
                            <div class="modal-body">
                                <input class="form-control" type="text" placeholder="What you are looking for?" required>
                            </div>
                        </form><!-- End # Login Form -->
                    </div><!-- End # DIV Form -->
                </div>
            </div>
        </div>
        <!-- END # MODAL LOGIN -->

    <header class="header">
        <div class="topbar clearfix">
            <div class="container">
                <div class="row-fluid">
                    <div class="col-md-6 col-sm-6 text-left">
                        <p>
                            <strong><i class="fa fa-phone"></i></strong> +2347068275123 &nbsp;&nbsp;
                            <strong><i class="fa fa-envelope"></i></strong> <a href="mailto:taiyoo4real@gmail.com">taiyoo4real@gmail.com</a>
                        </p>
                    </div><!-- end left -->
                    <div class="col-md-6 col-sm-6 hidden-xs text-right">
                        <div class="social">             
                            <a class="twitter" href="https://www.twitter.com/Newmantee?s=08" data-tooltip="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a>
                            <a class="instagram" href="https://wwww.instagram.com/taiyoo4real?r=nametag" data-tooltip="tooltip" data-placement="bottom" title="Instagram"><i class="fa fa-instagram"></i></a>
                            <a class="facebook" href="https://wwww.facebook.com/taiyeisaac.olabisi" data-tooltip="tooltip" data-placement="bottom" title="facebook"><i class="fa fa-facebook"></i></a>
                            <a class="youtube" href="https://wwww.youtube.com/user/Newmantee" data-tooltip="tooltip" data-placement="bottom" title="youtube"><i class="fa fa-youtube"></i></a>
                        
                        </div><!-- end social -->
                    </div><!-- end left -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end topbar -->

        <div class="container">
            <nav class="navbar navbar-default yamm">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="logo-normal">
                        <a class="navbar-brand" href="/"><img style="width: 90px; height:50px" src="{{ asset('site/images/olabisi-logo.png') }}" alt=""></a>
                    </div>
                </div>

                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="/">Home</a></li>
                        <li >
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="yamm-content clearfix">
                                        <div class="row-fluid">
                                            <div class="col-md-6 col-sm-6">
                                                <h4>Course Pages</h4>
                                                <ul>
                                                    <!-- <li><a href="#">Courses Name 01</a></li>
                                                    <li><a href="#">Courses Name 02</a></li>
                                                    <li><a href="#">Courses Name 03</a></li>
                                                    <li><a href="#">Courses Name 04</a></li>
                                                    <li><a href="#">Courses Name 05</a></li>
                                                    <li><a href="#">Courses Name 06</a></li>
                                                    <li><a href="#">Courses Name 07</a></li>
                                                    <li><a href="#">Courses Name 08</a></li>
                                                    <li><a href="#">Courses Name 09</a></li> -->
                                                </ul>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <div class="menu-widget text-center">
                                                    <h5><a href="#">Learning Bootstrap Framework</a></h5>
                                                    <small>$22.00</small>
                                                    <a href="#" class="menu-button">View Course</a> -->
                                                </div><!-- end widget -->
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown hassubmenu">
                            <a href="{{route('posts')}}" role="button" aria-expanded="false">Blog</a>

                        </li>
                        <li><a href="{{route('contactUs')}}">Contact</a></li>
                        <li class="dropdown hassubmenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Account <span class="fa fa-angle-down"></span></a>
                            <ul class="dropdown-menu" role="menu">
                            @guest
                            <li><a href="{{route('login')}}">Login</a></li>
                            @endguest

                            @auth
                            @if ($course_first>0)
                                <li><a href="{{ url('courses/course/'.$course_first->id.'/lectures') }}">Class</a></li>
                            @endif
                            
                            {{-- <li><a href="{{ url('courses/course/1/lectures') }}">Class</a></li> --}}
                            @endauth

                            @guest
                            <li><a href="{{ route('register')}}">Register</a></li>
                            @endguest
                            
                            @auth
                            <li><a href="{{ route('password.email') }}">Reset Password</a></li>
                                {{-- <li><a href="#">Logout</a></li> --}}
                            <li><a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();">
                                     {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                     @csrf
                                </form>
                            </li>
                            @endauth
                        </li>
                        
                    </ul>
                    
                </div>
            </nav><!-- end navbar -->
        </div><!-- end container -->
    </header>
        @yield('content')

    <footer class="section footer noover">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="widget clearfix">
                        <div class="newsletter-widget">
                            <h3 class="widget-title">Meet Olabisi Taiye Isaac </h3>
                            <img style="width: 200px; height: 200px; 
                            border-radius: 50%;
                            margin:0;
                            " src="{{ asset('site/images/my-photo.png')}}" alt="" class="img-responsive">
                        </div><!-- end newsletter -->
                    </div><!-- end widget -->
                </div><!-- end col -->

                <div class="col-lg-3 col-md-3">
                    <div class="widget clearfix">
                        <h3 class="widget-title">About me</h3>
                        <p>I'm a young Male Teacher. Committed and passionate in teaching, training and supporting 
                            Teachers and students to achive their life goals and ambitions.</p>
                    </div><!-- end widget -->
                </div><!-- end col -->

                <div class="col-lg-3 col-md-3">
                    <div class="widget clearfix">
                        <h3 class="widget-title">Popular Tags</h3>
                        <div class="tags-widget">   
                            <ul class="list-inline">
                                <li><a href="#">course</a></li>
                                <li><a href="#">news</a></li>
                                <li><a href="#">blog</a></li>
                                <li><a href="#">student</a></li>
                                <li><a href="#">article</a></li>
                                <li><a href="#">posts</a></li>
                                <li><a href="#">consultancy</a></li>
                                <li><a href="#">contact</a></li>
                                <li><a href="#">online</a></li>
                                <li><a href="#">learning</a></li>
                            </ul>
                        </div><!-- end list-widget -->
                    </div><!-- end widget -->
                </div><!-- end col -->

                <div class="col-lg-2 col-md-2">
                    <div class="widget clearfix">
                        <h3 class="widget-title">Support</h3>
                        <div class="list-widget">   
                            <ul>
                                <li><a href="#">Terms of Use</a></li>
                                <li><a href="#">Copyrights</a></li>
                                <li><a href="#">Pricing & Plans</a></li>
                                <li><a href="#">Carrier</a></li>
                                <li><a href="#">Trademark</a></li>
                            </ul>
                        </div><!-- end list-widget -->
                    </div><!-- end widget -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </footer><!-- end footer -->
    <script src="{{ asset('site/js/jquery.min.js') }}"></script>
    <script src="{{ asset('site/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('site/js/carousel.js') }}"></script>
    <script src="{{ asset('site/js/animate.js') }}"></script>
    <script src="{{ asset('site/js/custom.js') }}"></script>
    <!-- VIDEO BG PLUGINS -->
    <script src="{{ asset('site/js/videobg.js') }}"></script>
    <script src="{{ asset('site/js/swiper.min.js') }}"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
          spaceBetween: 30,
          centeredSlides: true,
          autoplay: {
            delay: 2500,
            disableOnInteraction: false,
          },
          pagination: {
            el: '.swiper-pagination',
            clickable: true,
          },
          navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
          },
        });
      </script>

</body>
</html>