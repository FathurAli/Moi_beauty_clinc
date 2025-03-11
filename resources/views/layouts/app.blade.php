<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Moi Beauty Clinic')</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/Moi.png') }}">
    
    <!-- Meta Tags -->
    <meta name="author" content="Moi Beauty Clinic">
    <meta name="description" content="Moi Beauty Clinic">

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flexslider.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animsition.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body class="animsition">
    <!-- HEADER (Navbar) -->
    <header class="main-header">
        <div class="container">
            <div class="logo">
                <a href="/"><img src="{{ asset('assets/img/logo.png') }}" alt="logo"></a>
            </div>
            <div class="menu">
                <!-- Desktop Navbar -->
                <nav class="desktop-nav">
                    <ul class="first-level">
                        @foreach ($menuItems as $item)
                            <li>
                                <a href="{{ $item['url'] }}" class="animsition-link">{{ $item['name'] }}</a>
                                @if (!empty($item['children']))
                                    <ul class="second-level">
                                        @foreach ($item['children'] as $child)
                                            <li>
                                                <a href="{{ $child['url'] }}" class="animsition-link">{{ $child['name'] }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                </nav>
                <!-- Mobile Navbar -->
                <nav class="mobile-nav"></nav>
                <div class="menu-icon">
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                </div>
            </div>
        </div>
    </header>

    <!-- Page Content -->
    @yield('content')

    <!-- FOOTER -->
    <footer>
        <div class="container">
            <p>&copy; Moi Beauty Clinic.</p>
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
            // Initialize WOW.js for animations
            new WOW().init();

            // Initialize FlexSlider
            $('.flexslider').flexslider({
                animation: "slide",
                controlNav: false,
                directionNav: true,
            });

            // Mobile menu toggle
            $('.menu-icon').on('click', function () {
                $('.mobile-nav').toggleClass('open');
            });
        });
    </script>
</body>
</html>
