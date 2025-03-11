@extends('layouts.app')
@section('title', 'Treatment')
@section('content')
<!DOCTYPE html>
<html>
<head>
	<title>Treatment</title>
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
					<div class="background-slide" style="background-image: url('file/about/site-hero2.jpg');">
						<div class="page-title">
							<div class="big-title montserrat-text uppercase">Gambar Treatment</div>
						</div>
					</div>
				</div>
				<!-- Slide 2 -->
				<div class="swiper-slide">
					<div class="background-slide" style="background-image: url('file/about/site-hero2.jpg');">
						<div class="page-title">
							<div class="big-title montserrat-text uppercase">Gambar Promo Treatment</div>
						</div>
					</div>
				</div>
				<!-- Slide 3 -->
				<div class="swiper-slide">
					<div class="background-slide" style="background-image: url('file/about/site-hero2.jpg');">
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

	<!-- PORTFOLIO -->
	<section class="portfolio">
		<div class="container">
			<!-- categories  -->
			<div class="col-md-3">
				<div class="row categories-grid wow fadeInLeft">
					<span class="montserrat-text uppercase">choose category</span>

					<nav class="categories">
						<ul class="portfolio_filter">
							<li><a href="" class="active" data-filter="*">all</a></li>
							<li><a href="" data-filter=".acne">acne</a></li>
							<li><a href="" data-filter=".skinboster">skin boster</a></li>
							{{-- <li><a href="" data-filter=".logo">logo</a></li>
							<li><a href="" data-filter=".graphics">graphics</a></li>
							<li><a href="" data-filter=".ads">advertising</a></li>
							<li><a href="" data-filter=".fashion">fashion</a></li> --}}
						</ul>
					</nav>
				</div>
			</div>

			<!-- all works -->
			<div class="col-md-9">
				<div class="row portfolio_container">
					<!-- single work -->
					<div class="col-md-4 acne">
						<a href="single-project.html" class="portfolio_item wow fadeInUp">
							<img src="assets/img/work-1.jpg" alt="image">
							<div class="portfolio_item_hover">
								<div class="item_info">
									<span>Brave man</span>
									<em>photography</em>
								</div>
							</div>
						</a>
					</div>
					<!-- end single work -->

					<!-- single work -->
					<div class="col-md-4 fashion logo">
						<a href="single-project.html" class="portfolio_item wow fadeInUp" data-wow-delay=".1s">
							<img src="assets/img/work-2.jpg" alt="image">
							<div class="portfolio_item_hover">
								<div class="item_info">
									<span>super man</span>
									<em>photography</em>
								</div>
							</div>
						</a>
					</div>
					<!-- end single work -->

					<!-- single work -->
					<div class="col-md-4 ads graphics">
						<a href="single-project.html" class="portfolio_item wow fadeInUp" data-wow-delay=".2s">
							<img src="assets/img/work-3.jpg" alt="image">
							<div class="portfolio_item_hover">
								<div class="item_info">
									<span>bat man</span>
									<em>photography</em>
								</div>
							</div>
						</a>
					</div>
					<!-- end single work -->

					<!-- single work -->
					<div class="col-md-4  fashion ads">
						<a href="single-project.html" class="portfolio_item wow fadeInUp" data-wow-delay=".3s">
							<img src="assets/img/work-3.jpg" alt="image">
							<div class="portfolio_item_hover">
								<div class="item_info">
									<span>spider man</span>
									<em>photography</em>
								</div>
							</div>
						</a>
					</div>
					<!-- end single work -->

					<!-- single work -->
					<div class="col-md-4 graphics ads">
						<a href="single-project.html" class="portfolio_item wow fadeInUp" data-wow-delay=".4s">
							<img src="assets/img/work-1.jpg" alt="image">
							<div class="portfolio_item_hover">
								<div class="item_info">
									<span>iron man</span>
									<em>photography</em>
								</div>
							</div>
						</a>
					</div>
					<!-- end single work -->

					<!-- single work -->
					<div class="col-md-4 logo skinboster acne">
						<a href="single-project.html" class="portfolio_item wow fadeInUp" data-wow-delay=".5s">
							<img src="assets/img/work-2.jpg" alt="image">
							<div class="portfolio_item_hover">
								<div class="item_info">
									<span>iron man</span>
									<em>photography</em>
								</div>
							</div>
						</a>
					</div>
					<!-- end single work -->

					<!-- single work -->
					<div class="col-md-4 ads graphics">
						<a href="single-project.html" class="portfolio_item wow fadeInUp" data-wow-delay=".6s">
							<img src="assets/img/work-2.jpg" alt="image">
							<div class="portfolio_item_hover">
								<div class="item_info">
									<span>iron man</span>
									<em>photography</em>
								</div>
							</div>
						</a>
					</div>
					<!-- end single work -->

					<!-- single work -->
					<div class="col-md-4 skinboster fashion acne">
						<a href="single-project.html" class="portfolio_item wow fadeInUp" data-wow-delay=".7s">
							<img src="assets/img/work-1.jpg" alt="image">
							<div class="portfolio_item_hover">
								<div class="item_info">
									<span>iron man</span>
									<em>photography</em>
								</div>
							</div>
						</a>
					</div>
					<!-- end single work -->

					<!-- single work -->
					<div class="col-md-4 fashion logo">
						<a href="single-project.html" class="portfolio_item wow fadeInUp" data-wow-delay=".8s">
							<img src="assets/img/work-1.jpg" alt="image">
							<div class="portfolio_item_hover">
								<div class="item_info">
									<span>iron man</span>
									<em>photography</em>
								</div>
							</div>
						</a>
					</div>
					<!-- end single work -->

					<!-- single work -->
					<div class="col-md-4 fashion logo">
						<a href="single-project.html" class="portfolio_item wow fadeInUp" data-wow-delay=".9s">
							<img src="assets/img/work-3.jpg" alt="image">
							<div class="portfolio_item_hover">
								<div class="item_info">
									<span>iron man</span>
									<em>photography</em>
								</div>
							</div>
						</a>
					</div>
					<!-- end single work -->

					<!-- single work -->
					<div class="col-md-4 fashion logo">
						<a href="single-project.html" class="portfolio_item wow fadeInUp" data-wow-delay="1s">
							<img src="assets/img/work-2.jpg" alt="image">
							<div class="portfolio_item_hover">
								<div class="item_info">
									<span>iron man</span>
									<em>photography</em>
								</div>
							</div>
						</a>
					</div>
					<!-- end single work -->

					<!-- single work -->
					<div class="col-md-4 fashion logo">
						<a href="single-project.html" class="portfolio_item wow fadeInUp" data-wow-delay="1.1s">
							<img src="assets/img/work-1.jpg" alt="image">
							<div class="portfolio_item_hover">
								<div class="item_info">
									<span>iron man</span>
									<em>photography</em>
								</div>
							</div>
						</a>
					</div>
					<!-- end single work -->

					<!-- single work -->
					<div class="col-md-4 fashion logo">
						<a href="single-project.html" class="portfolio_item wow fadeInUp" data-wow-delay="1.2s">
							<img src="assets/img/work-3.jpg" alt="image">
							<div class="portfolio_item_hover">
								<div class="item_info">
									<span>iron man</span>
									<em>photography</em>
								</div>
							</div>
						</a>
					</div>
					<!-- end single work -->

					<!-- single work -->
					<div class="col-md-4 fashion logo">
						<a href="single-project.html" class="portfolio_item wow fadeInUp" data-wow-delay="1.3s">
							<img src="assets/img/work-1.jpg" alt="image">
							<div class="portfolio_item_hover">
								<div class="item_info">
									<span>iron man</span>
									<em>photography</em>
								</div>
							</div>
						</a>
					</div>
					<!-- end single work -->
				</div>
				<!-- end row -->
			</div>
			<!-- all works end -->
		</div>
		<!-- end container -->
	</section>
	
	<!-- SCRIPTS -->
	<script type="text/javascript" src="assets/js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="assets/js/isotope.pkgd.min.js"></script>
	<script type="text/javascript" src="assets/js/smoothScroll.js"></script>
	<script type="text/javascript" src="assets/js/jquery.animsition.min.js"></script>
	<script type="text/javascript" src="assets/js/wow.min.js"></script>
	<script type="text/javascript" src="assets/js/main.js"></script>

	<script type="text/javascript" charset="utf-8">
		$(window).load(function() {
			new WOW().init();
			// initialize isotope
			var $container = $('.portfolio_container');
			$container.isotope({
				filter: '*',
			});
		 
			$('.portfolio_filter a').click(function(){
				$('.portfolio_filter .active').removeClass('active');
				$(this).addClass('active');
		 
				var selector = $(this).attr('data-filter');
				$container.isotope({
					filter: selector,
					animationOptions: {
						duration: 500,
						animationEngine : "jquery"
					}
				});
				return false;
			}); 
		});
	</script>
	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
	<script>
	  // Initialize Swiper
	  document.addEventListener("DOMContentLoaded", function () {
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
@endsection