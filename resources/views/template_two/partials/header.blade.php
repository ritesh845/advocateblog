<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preview.colorlib.com/theme/blanca/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Mar 2021 09:06:00 GMT -->
<head>
<title>Hello World</title>

<meta charset="utf-8">

<script src="{{asset('template/js/jquery-3.3.1.min.js')}}"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="{{asset('template/css/temp2_bootstrap.min.css')}}">

<link rel="stylesheet" href="{{asset('template/css/font-awesome.min.css')}}">

<link rel="stylesheet" href="{{asset('template/css/swiper.min.css')}}">

<link rel="stylesheet" href="{{asset('template/css/template_two.css')}}">
</head>
<body>
<div class="outer-container">
<header class="site-header">
	<div class="top-header-bar">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6 flex align-items-center">
					<div class="header-bar-text d-none d-lg-block">
						<p>Hello world, My name is Blanca</p>
					</div>
					<div class="header-bar-email d-none d-lg-block">
						<a href="#"><span class="__cf_email__" data-cfemail="5d1e3233293c3e2930381d38303c3431733e3230">[email&#160;protected]</span></a>
					</div>
				</div>
				<div class="col-12 col-lg-6 flex justify-content-between justify-content-lg-end align-items-center">
					<div class="header-bar-social d-none d-md-block">
						<ul class="flex align-items-center">
							<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
							<li><a href="#"><i class="fa fa-behance"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						</ul>
					</div>
					<div class="header-bar-search d-none d-md-block">
						<form>
							<input type="search" placeholder="Search">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="site-branding flex flex-column align-items-center">
					<h1 class="site-title"><a href="index-2.html" rel="home">{{session('site_name')}}</a></h1>
					<p class="site-description">Personal Blog</p>
				</div>
				<nav class="site-navigation">
					<div class="hamburger-menu d-lg-none">
						<span></span>
						<span></span>
						<span></span>
						<span></span>
					</div>
					<ul class="flex-lg flex-lg-row justify-content-lg-center align-content-lg-center">
						@foreach(session('catgs') as $catg)
                            <li>
                                <a class="" href="{{$catg->catg_url !=null ? url($catg->catg_url) : '#'}}">{{$catg->catg_name}}</a>
                            </li>
                        @endforeach
						
					</ul>
					<div class="header-bar-social d-md-none">
						<ul class="flex justify-content-center align-items-center">
							<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
							<li><a href="#"><i class="fa fa-behance"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						</ul>
					</div>
					<div class="header-bar-search d-md-none">
						<form>
							<input type="search" placeholder="Search">
						</form>
					</div>
				</nav>
			</div>
		</div>
	</div>
</header>
