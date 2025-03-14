@extends('layouts.app')
@section('title', 'Booking')
@section('content')

<!DOCTYPE html>
<html>
<head>
	<title>Booking</title>
	<!-- META TAGS -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
	<meta name="author" content="Amine Akhouad">
	<meta name="description" content="AKAD is a creative and modern template for digital agencies">

	<!-- STYLES -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/ionicons.min.css">
	<link rel="stylesheet" href="assets/css/animsition.min.css">
	<link rel="stylesheet" href="assets/css/animate.css">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="animsition">
	<!-- HERO SECTION  -->
	<div class="site-hero_2">
		<div class="page-title">
			<div class="big-title montserrat-text uppercase">our services</div>
			<div class="small-title montserrat-text uppercase">home / services</div>
		</div>
	</div>

	<!-- WHAT WE DO -->
	<section>
		<div class="container">
			<div class="row">
				<div class="section-title">
					<span>what we do</span>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6 wow fadeInUp">
					<p style="margin-bottom:30px">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur.
					</p>
					<div class="col-md-6">
						<div class="row">
							<ul class="list">
								<li>Stunning on all screens</li>
								<li>Easy to customize</li>
								<li>Make a difference</li>
								<li>Imagine and create</li>
								<li>Unlimited possibilities</li>
							</ul>
						</div>
					</div>
					<div class="col-md-6">
						<div class="row">
							<ul class="list">
								<li>Remarkable style</li>
								<li>Captivating presentations</li>
								<li>Make a difference</li>
								<li>Make a difference</li>
								<li>Imagine and create</li>
							</ul>
						</div>
					</div>
				</div>

				<div class="col-md-6 wow fadeInUp" data-wow-delay=".1s">
					<img src="assets/img/img1.jpg" alt="img" style="width:100%">
				</div>
			</div><!-- end row -->
		</div><!-- end container -->
	</section>


	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp">
					<div class="benefits_1_single">
						<i class="icon ion-ios-pulse"></i>
						<div class="title montserrat-text uppercase">keep pulse going</div>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt.
						</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay=".1s">
					<div class="benefits_1_single">
						<i class="icon ion-ios-infinite-outline"></i>
						<div class="title montserrat-text uppercase">unlimited options</div>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt.
						</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay=".2s">
					<div class="benefits_1_single">
						<i class="icon ion-ios-lightbulb-outline"></i>
						<div class="title montserrat-text uppercase">great ideas</div>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt.
						</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay=".3s">
					<div class="benefits_1_single">
						<i class="icon ion-ios-settings"></i>
						<div class="title montserrat-text uppercase">awesome support</div>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="pricing_plans">
		<div class="container">
			<div class="row">
				<div class="section-title">
					<span>pricing plans</span>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp">
					<div class="pricing_plan">
						<div class="plan_title montserrat-text uppercase">basic</div>
						<div class="plan_price montserrat-text uppercase">$35.99 monthly</div>
						<ul class="list">
							<li>Lorem ipsum dolor sit amet</li>
							<li>Consectetuer adipiscing elit</li>
							<li>Sed diam nonummy</li>
							<li>Nibh euismod tincidunt</li>
							<li>Ut laoreet dolore</li>
							<li>Magna aliquam erat volutpat</li>
						</ul>
						<a href="" class="btn green"><span>get started</span></a>
					</div>
				</div>

				<div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay=".1s">
					<div class="pricing_plan">
						<div class="plan_title montserrat-text uppercase">advanced</div>
						<div class="plan_price montserrat-text uppercase">$55.99 monthly</div>
						<ul class="list">
							<li>Lorem ipsum dolor sit amet</li>
							<li>Consectetuer adipiscing elit</li>
							<li>Sed diam nonummy</li>
							<li>Nibh euismod tincidunt</li>
							<li>Ut laoreet dolore</li>
							<li>Magna aliquam erat volutpat</li>
						</ul>
						<a href="" class="btn green"><span>get started</span></a>
					</div>
				</div>

				<div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay=".2s">
					<div class="pricing_plan">
						<div class="plan_title montserrat-text uppercase">smart</div>
						<div class="plan_price montserrat-text uppercase">$75.99 monthly</div>
						<ul class="list">
							<li>Lorem ipsum dolor sit amet</li>
							<li>Consectetuer adipiscing elit</li>
							<li>Sed diam nonummy</li>
							<li>Nibh euismod tincidunt</li>
							<li>Ut laoreet dolore</li>
							<li>Magna aliquam erat volutpat</li>
						</ul>
						<a href="" class="btn green"><span>get started</span></a>
					</div>
				</div>
			</div>
		</div>
	</section>


	<!-- newsletter -->
	<section class="green-section wow fadeInUp" style="padding:50px 0">
		<div class="container">
			<div class="col-md-6 col-sm-12">
				<div class="row">
					<span class="white-text montserrat-text uppercase" style="font-size:30px;display:block;">
						you think we're cool? let's work together
					</span>
					<a href="#" class="btn white" style="margin-top:30px"><span>get in touch</span></a>
				</div>
			</div>

			<div class="col-md-6 col-sm-12">
				<div class="row">
					<div class="white-section" style="padding:20px">
						<span class="montserrat-text uppercase" style="font-size:24px">stay informed with our newsletter</span>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua.
						</p>
						<form action="#" method="post">
							<div class="input_1">
								<input type="text" name="email">
								<span>your email</span>
							</div>
							<button type="submit" class="btn green" style="margin-top:20px"><span>send</span></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>


	<!-- FOOTER -->
	<footer class="main-footer wow fadeInUp">
		<div class="container">
			<div class="col-md-8 col-sm-12">
				<div class="row">
					<nav class="footer-nav">
						<ul>
							<li><a href="/" class="animsition-link link">Home</a></li>
							<li><a href="/about" class="animsition-link link">about us</a></li>
							<li><a href="/services" class="animsition-link link">services</a></li>
							<li><a href="/portfolio-1" class="animsition-link link">portfolio</a></li>
							<li><a href="/blog-1" class="animsition-link link">blog</a></li>
							<li><a href="/contact" class="animsition-link link">contact us</a></li>
						</ul>
					</nav>
				</div>
			</div>

			<div class="col-md-4 col-sm-12" style="text-align:right">
				<div class="row">
					<div class="uppercase gray-text">
						{{-- created by akhouad &copy;2016. all rights reserved. --}}
					</div>
					<ul class="social-icons" style="margin-top:30px;float:right">
						<li><a href="#"><i class="icon ion-social-facebook"></i></a></li>
						<li><a href="#"><i class="icon ion-social-twitter"></i></a></li>
						<li><a href="#"><i class="icon ion-social-youtube"></i></a></li>
						<li><a href="#"><i class="icon ion-social-linkedin"></i></a></li>
						<li><a href="#"><i class="icon ion-social-pinterest"></i></a></li>
						<li><a href="#"><i class="icon ion-social-instagram"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>

	<!-- SCRIPTS -->
	<script type="text/javascript" src="assets/js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="assets/js/smoothScroll.js"></script>
	<script type="text/javascript" src="assets/js/jquery.animsition.min.js"></script>
	<script type="text/javascript" src="assets/js/wow.min.js"></script>
	<script type="text/javascript" src="assets/js/main.js"></script>
	<script type="text/javascript">
	$(window).load(function(){
		new WOW().init();
	});
	</script>
</body>
</html>
@endsection