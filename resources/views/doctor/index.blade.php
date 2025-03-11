@extends('layouts.app')
@section('title', 'Location & Doctor')
@section('content')

    <!DOCTYPE html>
    <html>

    <head>
        <title>Doctor</title>
        <!-- META TAGS -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
        <meta name="author" content="Amine Akhouad">
        <meta name="description" content="AKAD is a creative and modern template for digital agencies">

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

        <section>
            <section class="Address">
                <div class="container">
                    <div class="row">
                        <div class="section-title text-center">
                            <span>Bogor</span>
                        </div>
                    </div>

                    <!-- Card Wrapper -->
                    <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay=".1s">
                        <div class="moi_style text-center">
                            <h4 class="card_title">Alamat</h4>
                            <img src="assets/img/team.jpg" alt="team image" class="img-fluid">
                            <div class="moi_style_hover"></div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay=".2s">
                        <div class="moi_style text-center">
                            <h4 class="card_title">Jam Operasional</h4>
                            <img src="assets/img/team.jpg" alt="team image" class="img-fluid">
                            <div class="moi_style_hover"></div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay=".1s">
                        <div class="moi_style text-center">
                            <h4 class="card_title">Hubungi kami</h4>
                            <img src="assets/img/team.jpg" alt="team image" class="img-fluid">
                            <div class="moi_style_hover"></div>
                        </div>
                    </div>
                </div>
            </section>
        </section>


		<section>
			<section class="Doctor">
				<div class="container">
					<div class="row">
						<div class="section-title text-center">
							<span>Doctor</span>
						</div>
					</div>
		
					<!-- Card Wrapper -->
					<div class="col-md-6 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay=".1s">
						<div class="moi_style text-center">
							<h4 class="card_title">Alamat</h4>
							<img src="assets/img/team.jpg" alt="team image" class="img-fluid">
							<div class="moi_style_hover"></div>
						</div>
					</div>
		
					<div class="col-md-6 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay=".2s">
						<div class="moi_style text-center">
							<h4 class="card_title">Jam Operasional</h4>
							<img src="assets/img/team.jpg" alt="team image" class="img-fluid">
							<div class="moi_style_hover"></div>
						</div>
					</div>
				</div>
			</section>
		</section>
        <section>
            <div class="container">
                <div class="row">
                    <div class="section-title">
                        <span>the dream team</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp">
                        <div class="moi_style">
                            <img src="assets/img/team.jpg" alt="team image">
                            <div class="moi_style_hover">
                                <div class="card_info">
                                    <div class="card_name">john doe</div>
                                    <div class="card_detail">CEO / co-founder</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay=".1s">
                        <div class="moi_style">
                            <img src="assets/img/team.jpg" alt="team image">
                            <div class="moi_style_hover">
                                <div class="card_info">
                                    <div class="card_name">jennifer toms</div>
                                    <div class="card_detail">project chied</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay=".2s">
                        <div class="moi_style">
                            <img src="assets/img/team.jpg" alt="team image">
                            <div class="moi_style_hover">
                                <div class="card_info">
                                    <div class="card_name">jack doe</div>
                                    <div class="card_detail">graphic designer</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay=".3s">
                        <div class="moi_style">
                            <img src="assets/img/team.jpg" alt="team image">
                            <div class="moi_style_hover">
                                <div class="card_info">
                                    <div class="card_name">anne turin</div>
                                    <div class="card_detail">art director</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay=".4s">
                        <div class="moi_style">
                            <img src="assets/img/team.jpg" alt="team image">
                            <div class="moi_style_hover">
                                <div class="card_info">
                                    <div class="card_name">nicolas akhouad</div>
                                    <div class="card_detail">CTO</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay=".5s">
                        <div class="moi_style">
                            <img src="assets/img/team.jpg" alt="team image">
                            <div class="moi_style_hover">
                                <div class="card_info">
                                    <div class="card_name">tim cook</div>
                                    <div class="card_detail">front-end developer</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay=".6s">
                        <div class="moi_style">
                            <img src="assets/img/team.jpg" alt="team image">
                            <div class="moi_style_hover">
                                <div class="card_info">
                                    <div class="card_name">alan turin</div>
                                    <div class="card_detail">back-end developer</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay=".7s">
                        <div class="moi_style">
                            <img src="assets/img/team.jpg" alt="team image">
                            <div class="moi_style_hover">
                                <div class="card_info">
                                    <div class="card_name">john whick</div>
                                    <div class="card_detail">web designer</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- light gray section -->
        <div class="container">
            <div class="light-gray-section wow fadeInUp" style="padding:15px 30px;">
                <div class="row">
                    <p class="italic" style="float:left;line-height:50px;margin:0">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                    </p>
                    <a href="" class="btn green" style="float:right"><span>read more</span></a>
                </div>
            </div>
        </div>


        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="testimonials wow fadeInUp">
                            <ul class="slides">
                                <li class="testimonials_single">
                                    <div class="author_pic">
                                        <img src="assets/img/face.jpg" alt="testimonial image">
                                    </div>
                                    <p>
                                        Quisque iaculis lorem vestibulum eros vehicula, non congue elit dictum. Donec
                                        mollis aliquet lorem, eu porttitor sapien semper in. Duis ac erat luctus,
                                        gravida lectus sit amet, consectetur orci. Suspendisse libero mauris.
                                    </p>
                                    <div class="author_name">john doe</div>
                                </li>

                                <li class="testimonials_single">
                                    <div class="author_pic">
                                        <img src="assets/img/face.jpg" alt="testimonial image">
                                    </div>
                                    <p>
                                        It is a long established fact that a reader will be distracted by the readable
                                        content of a page when looking at its layout. The point of using Lorem Ipsum is
                                        that it has a more-or-less normal distribution of letters, as opposed to using
                                        'Content here, content here', making it look like readable English.
                                    </p>
                                    <div class="author_name">john doe</div>
                                </li>

                                <li class="testimonials_single">
                                    <div class="author_pic">
                                        <img src="assets/img/face.jpg" alt="testimonial image">
                                    </div>
                                    <p>
                                        There are many variations of passages of Lorem Ipsum available, but the majority
                                        have suffered alteration in some form, by injected humour, or randomised words
                                        which don't look even slightly believable.
                                    </p>
                                    <div class="author_name">john doe</div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-6 clients">
                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp">
                                <div class="clients_single">
                                    <a href="#">
                                        <img src="assets/img/client.jpg" alt="client logo">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay=".1s">
                                <div class="clients_single">
                                    <a href="#">
                                        <img src="assets/img/client.jpg" alt="client logo">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay=".2s">
                                <div class="clients_single">
                                    <a href="#">
                                        <img src="assets/img/client.jpg" alt="client logo">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay=".3s">
                                <div class="clients_single">
                                    <a href="#">
                                        <img src="assets/img/client.jpg" alt="client logo">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay=".4s">
                                <div class="clients_single">
                                    <a href="#">
                                        <img src="assets/img/client.jpg" alt="client logo">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay=".5s">
                                <div class="clients_single">
                                    <a href="#">
                                        <img src="assets/img/client.jpg" alt="client logo">
                                    </a>
                                </div>
                            </div>
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
                            <span class="montserrat-text uppercase" style="font-size:24px">stay informed with our
                                newsletter</span>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                            <form action="#" method="post">
                                <div class="input_1">
                                    <input type="text" name="email">
                                    <span>your email</span>
                                </div>
                                <button type="submit" class="btn green"
                                    style="margin-top:20px"><span>send</span></button>
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
                                <li><a href="/about" class="animsition-link link">about us</a></li>
                                <li><a href="/" class="animsition-link link">Home</a></li>
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
@endsection
