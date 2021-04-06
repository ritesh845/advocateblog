<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from demo.themefisher.com/biztrox/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Mar 2021 09:04:06 GMT -->
<head>
  <meta charset="utf-8">
  <title>@yield('title','Advocate Mail')</title>


  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <!-- Bootstrap -->
  <link rel="stylesheet" href="{{asset('template/plugins/bootstrap/bootstrap.min.css')}}">
  <!-- magnific popup -->
  <link rel="stylesheet" href="{{asset('template/plugins/magnific-popup/magnific-popup.css')}}">
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="{{asset('template/plugins/slick/slick.css')}}">
  <link rel="stylesheet" href="{{asset('template/plugins/slick/slick-theme.css')}}">
  <!-- themify icon -->
  <link rel="stylesheet" href="{{asset('template/plugins/themify-icons/themify-icons.css')}}">
  <!-- animate -->
  <link rel="stylesheet" href="{{asset('template/plugins/animate/animate.css')}}">
  <!-- Aos -->
  <link rel="stylesheet" href="{{asset('template/plugins/aos/aos.css')}}">
  <!-- swiper -->
  <link rel="stylesheet" href="{{asset('template/plugins/swiper/swiper.min.css')}}">
  <!-- Stylesheets -->
  <link href="{{asset('template/css/template.css')}}" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  

</head>

<body>
  

<!-- preloader start -->
<div class="preloader">
    <img src="{{asset('template/img/preloader.gif')}}" alt="preloader">
</div>
<!-- preloader end -->

<!-- navigation -->
<header>
    <!-- top header -->
    <div class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-inline text-lg-right text-center">
                        <li class="list-inline-item">
                            <a href="">Email Login</a>
                        </li>
                       @guest
                            @if (Route::has('login'))
                                <li class="list-inline-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            
                            @if (Route::has('register'))
                                <li class="list-inline-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif

                        @endguest
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- nav bar -->
    <div class="navigation">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand " href="{{url('/')}}">
                   
                    <img src="{{asset('template/img/'.session('site_logo'))}}" alt="logo">
                    
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">

                        @foreach(session('catgs') as $catg)
                            <li class="nav-item">
                                <a class="nav-link" href="{{$catg->catg_url !=null ? url($catg->catg_url) : '#'}}">{{$catg->catg_name}}</a>
                            </li>
                        @endforeach

                        @guest
                           
                        @else
                            <li class="nav-item dropdown active">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    {{Auth::user()->name}}
                                </a>
                                <div class="dropdown-menu" >
                                    <a class="dropdown-item" href="{{route('dashboard')}}">Dashboard</a>
                                     <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                    
                                </div>
                            </li>

                        @endguest
{{-- 
                        <li class="nav-item dropdown active">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                Home
                            </a>
                            <div class="dropdown-menu" >
                                <a class="dropdown-item" href="index-2.html">Home Page 1</a>
                                <a class="dropdown-item" href="homepage-2.html">Home Page 2</a>
                                <a class="dropdown-item" href="homepage-3.html">Home Page 3</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                About Us
                            </a>
                            <div class="dropdown-menu" >
                                <a class="dropdown-item" href="about.html">About page</a>
                                <a class="dropdown-item" href="about-2.html">About page-2</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                Service
                            </a>
                            <div class="dropdown-menu" >
                                <a class="dropdown-item" href="service.html">Service page</a>
                                <a class="dropdown-item" href="service-2.html">Service page-2</a>
                                <a class="dropdown-item" href="service-single.html">Service Single</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                Pages
                            </a>
                            <div class="dropdown-menu" >
                                <a class="dropdown-item" href="team.html">Team Page</a>
                                <a class="dropdown-item" href="pricing.html">Pricing Page</a>
                                <a class="dropdown-item" href="project.html">project Page</a>
                                <a class="dropdown-item" href="faqs.html">FAQs Page</a>
                                <a class="dropdown-item" href="project-single.html">Project Single</a>
                                <a class="dropdown-item" href="team-single.html">Team Single</a>
                                <a class="dropdown-item" href="404.html">404 Page</a>
                                <a class="dropdown-item" href="signup.html">Sign Up Page</a>
                                <a class="dropdown-item" href="login.html">Login Page</a>
                                <a class="dropdown-item" href="comming-soon.html">Comming Soon Page</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                Blog
                            </a>
                            <div class="dropdown-menu" >
                                <a class="dropdown-item" href="blog.html">Blog Page</a>
                                <a class="dropdown-item" href="blog-sidebar.html">Blog with Sidebar</a>
                                <a class="dropdown-item" href="blog-single.html">Blog Single</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                Elements
                            </a>
                            <div class="dropdown-menu" >
                                <a class="dropdown-item" href="components/buttons.html">Buttons</a>
                                <a class="dropdown-item" href="components/icons.html">Icons</a>
                                <a class="dropdown-item" href="components/typography.html">Typography</a>
                                <a class="dropdown-item" href="components/accordions.html">Accordions</a>
                                <a class="dropdown-item" href="components/blog-contents.html">Blog Contents</a>
                                <a class="dropdown-item" href="components/service-contents.html">Service Contents</a>
                                <a class="dropdown-item" href="components/team-contents.html">Team Contents</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact</a>
                        </li> --}}
                        
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>