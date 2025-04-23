<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'AKAD - Creative Digital Agency')</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.ico') }}">
    
    <!-- Meta Tags -->
    <meta name="author" content="Amine Akhouad">
    <meta name="description" content="AKAD is a creative and modern template for digital agencies">

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flexslider.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animsition.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <script src="https://kit.fontawesome.com/YOUR-FONTAWESOME-KEY.js" crossorigin="anonymous"></script>
</head>
<body class="animsition">
    <!-- HEADER (Navbar) -->
    <header class="main-header">
        <div class="container">
            <div class="logo">
                <a href="/"><img src="{{ asset('assets/img/logo.png') }}" alt="logo"></a>
            </div>
            <div class="menu">
                <nav class="desktop-nav">
                    <ul class="first-level">
                        @php
                            $menuItems = [
                                ['name' => 'Home', 'url' => url('/')],
                                ['name' => 'About', 'url' => url('/about')],
                                ['name' => 'Services', 'url' => url('/services')],
                                ['name' => 'Portfolio', 'url' => url('/portfolio')],
                                ['name' => 'Contact', 'url' => url('/contact')],
                            ];
                            $menuNames = [
                                'Home' => 'Home',
                                'About' => 'Location & Doctor',
                                'Services' => 'Treatment',
                                'Portfolio' => 'Booking',
                                'Contact' => 'Contact Us',
                            ];
                        @endphp
                        @foreach ($menuItems as $item)
                            <li>
                                <a href="{{ $item['url'] }}" class="animsition-link">{{ $menuNames[$item['name']] ?? $item['name'] }}</a>
                            </li>
                        @endforeach
                    </ul>
                </nav>
                <nav class="mobile-nav"></nav>
                <div class="menu-icon">
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                </div>
            </div>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row">
            @if(Auth::check() && Auth::user()->isAdmin()) 
                <div class="col-md-2 sidebar">
                    <h3 class="text-center">Admin Panel</h3>
                    <hr>
                    <a href="{{ route('admin.dashboard') }}">
                        <i class="fa-solid fa-gauge-high"></i> Dashboard
                    </a>
                    <a href="{{ route('doctors.index') }}">
                        <i class="fa-solid fa-user-doctor"></i> Doctors
                    </a>
                    <a href="{{ url('admin/services/data') }}">
                        <i class="fa-solid fa-hand-holding-medical"></i> Services
                    </a>
                    <hr>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger w-100">
                            <i class="fa-solid fa-right-from-bracket"></i> Logout
                        </button>
                    </form>
                </div>
                <div class="col-md-10">
                    @yield('content')
                </div>
            @else
                <div class="col-md-12">
                    @yield('content')
                </div>
            @endif
        </div>
    </div>

    <!-- FOOTER -->
    <footer>
        <div class="container">
            <p>&copy; 2024 AKAD. All rights reserved.</p>
        </div>
    </footer>

    <!-- JavaScript Files -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/animsition.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.flexslider-min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>

    <!-- Initialize Scripts -->
    <script>
        $(document).ready(function () {
            new WOW().init();
            $('.flexslider').flexslider({
                animation: "slide",
                controlNav: false,
                directionNav: true,
            });
            $('.menu-icon').on('click', function () {
                $('.mobile-nav').toggleClass('open');
            });
        });
    </script>
</body>
</html>
