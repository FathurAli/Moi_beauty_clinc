@extends('layouts.app')
@section('title', 'Home')
@section('content')
<!-- HEADER -->
<!DOCTYPE html>
<html>
<head>
	<title>MOI - Moi Beauty Clinic</title>
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
	 <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
	 <style>
		 /* Basic styling for the slider */
		 .swiper-container {
			 width: 100%;
			 height: 75vh;
			 /* Fullscreen height */
			 position: relative;
			 overflow: hidden;
		 }

		 .background-slide {
			 width: 100%;
			 height: 100%;
			 background-size: cover;
			 background-position: center;
			 display: flex;
			 align-items: center;
			 justify-content: center;
			 position: relative;
		 }

		 .page-title {
			 color: #777;
			 text-align: center;
			 position: relative;
			 z-index: 10;
			 padding: 10px 20px;
			 border-radius: 8px;
		 }

		 .big-title {
			 font-size: 3rem;
			 margin-bottom: 10px;
		 }

		 .small-title {
			 font-size: 1.2rem;
		 }

		 /* Responsive Design */
		 @media (max-width: 768px) {
			 .big-title {
				 font-size: 2rem;
			 }

			 .small-title {
				 font-size: 1rem;
			 }
		 }
	 </style>
 </head>

<body class="animsition">
	<!-- HERO SECTION  -->
	<div>
		<div class="swiper-container background-swiper">
			<div class="swiper-wrapper">
				<!-- Slide 1 -->
				<div class="swiper-slide">
					<div class="background-slide" style="background-image: url('public/img/site-hero2.jpg');">
						<div class="page-title">
							<div class="big-title montserrat-text uppercase">Gambar Porduct</div>
						</div>
					</div>
				</div>
				<!-- Slide 2 -->
				<div class="swiper-slide">
					<div class="background-slide" style="background-image: url('public/img/site-hero2.jpg');">
						<div class="page-title">
							<div class="big-title montserrat-text uppercase">Gambar Clinic</div>
						</div>
					</div>
				</div>
				<!-- Slide 3 -->
				<div class="swiper-slide">
					<div class="background-slide" style="background-image: url('public/img/site-hero2.jpg');">
						<div class="page-title">
							<div class="big-title montserrat-text uppercase">Gambar Treatment</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Pagination and Navigation -->
			<div class="swiper-pagination"></div>
		</div>
	</div>

	<!--BEST OFFER-->
<section class="offer">
    <div class="container">
        <div class="row">
            <div class="section-title text-center">
                <span>Best Offer</span>
            </div>
        </div>

        <!-- Card Wrapper -->
        <div class="row d-flex justify-content-center">
            <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp">
                <div class="moi_style text-center">
                    <img src="assets/img/team.jpg" alt="team image" class="img-fluid">		
                    <div class="moi_style_hover">
                        <div class="card_info">
                            <div class="card_name">Toner</div>
                            <div class="card_detail">Moi Beuty</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay=".1s">
                <div class="moi_style text-center">
                    <img src="assets/img/team.jpg" alt="team image" class="img-fluid">	
                    <div class="moi_style_hover">
                        <div class="card_info">
                            <div class="card_name">Moisturizer</div>
                            <div class="card_detail">Moi Beuty</div>
                        </div>
                    </div>
                </div>				
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay=".2s">
                <div class="moi_style text-center">
                    <img src="assets/img/team.jpg" alt="team image" class="img-fluid">	
                    <div class="moi_style_hover">
                        <div class="card_info">
                            <div class="card_name">Night Cream</div>
                            <div class="card_detail">Moi Beuty</div>
                        </div>
                    </div>
                </div>				
            </div>

			<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay=".1s">
                <div class="moi_style text-center">
                    <img src="assets/img/team.jpg" alt="team image" class="img-fluid">	
                    <div class="moi_style_hover">
                        <div class="card_info">
                            <div class="card_name">Day Cream</div>
                            <div class="card_detail">Moi Beuty</div>
                        </div>
                    </div>
                </div>				
            </div>
        </div>
    </div>
</section>



	<!-- TESTIMONI -->
<section class="testimoni">
    <div class="container">
        <div class="row">
            <div class="section-title text-center">
                <span>Testimoni</span>
            </div>
        </div>

        <!-- Card Wrapper -->
        <div class="row d-flex justify-content-center">
            <!-- Card 1 -->
            <div class="col-md-3 col-sm-6 col-12 mb-4">
                <div class="testimoni-card">
                    <img src="assets/img/team.jpg" alt="Testimoni 1" class="img-fluid rounded">
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-3 col-sm-6 col-12 mb-4">
                <div class="testimoni-card">
                    <img src="assets/img/team.jpg" alt="Testimoni 2" class="img-fluid rounded">
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-3 col-sm-6 col-12 mb-4">
                <div class="testimoni-card">
                    <img src="assets/img/team.jpg" alt="Testimoni 3" class="img-fluid rounded">
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col-md-3 col-sm-6 col-12 mb-4">
                <div class="testimoni-card">
                    <img src="assets/img/team.jpg" alt="Testimoni 4" class="img-fluid rounded">
                </div>
            </div>
        </div>
    </div>
</section>


			
	<!-- SCRIPTS -->
	 <script type="text/javascript" src="assets/js/jquery-2.1.4.min.js"></script>
        <script type="text/javascript" src="assets/js/smoothScroll.js"></script>
        <script type="text/javascript" src="assets/js/jquery.flexslider.js"></script>
        <script type="text/javascript" src="assets/js/jquery.animsition.min.js"></script>
        <script type="text/javascript" src="assets/js/wow.min.js"></script>
        <script type="text/javascript" src="assets/js/main.js"></script>
        <script type="text/javascript">
            $(window).load(function() {
                new WOW().init();
                $(".testimonials").flexslider({
                    directionNav: false,
                    controlNav: false,
                    smoothHeight: true,
                });
            });
        </script>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script>
            // Initialize Swiper
            document.addEventListener("DOMContentLoaded", function() {
                const swiper = new Swiper('.swiper-container', {
                    loop: true, // Enables infinite loop
                    autoplay: {
                        delay: 5000, // Auto-slide delay in ms
                        disableOnInteraction: false, // Continue autoplay after interaction
                    },
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    },
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                    },
                });
            });
        </script>
    </body>
</html>

<!-- ADD OTHER SECTIONS HERE -->
@endsection
