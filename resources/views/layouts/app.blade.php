<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software">

    <title>Novena- Health & Care Medical template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}" />

    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}">
    <!-- Icon Font Css -->
    <link rel="stylesheet" href="{{ asset('plugins/icofont/icofont.min.css') }}">
    <!-- Slick Slider  CSS -->
    <link rel="stylesheet" href="{{ asset('plugins/slick-carousel/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/slick-carousel/slick/slick-theme.css') }}">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body id="top">

    <header>
        <nav class="navbar navbar-expand-lg navigation" id="navbar">
            <div class="container">
                <a class="navbar-brand" href="{{ route('homepage') }}">
                    <img src="{{ asset('images/team/logo-pp.png') }}" alt="" class="img-fluid" style="height: 7vh">
                </a>

                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain" aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icofont-navigation-menu"></span>
                </button>


                <div class="collapse navbar-collapse" id="navbarmain">
                    <ul class="navbar-nav ml-auto">
                        @guest
                        <li class="nav-item active">
                            <a style="cursor: pointer" class="nav-link" href="{{ route('register') }}">{{ trans('global.register') }}</a>
                        </li>
                        <li class="nav-item">
                            <a style="cursor: pointer" href="{{ route('login') }}" class="nav-link">{{ trans('global.login') }}</a>
                        </li>
                        @endguest

                        @auth
                        <li class="nav-item active">
                            <a style="cursor: pointer" href="{{ route('homepage') }}" class="nav-link" href="{{ route('homepage') }}">{{ trans('global.nav.home') }}</a>
                        </li>
                        <li class="nav-item">
                            <a style="cursor: pointer" class="nav-link">{{ trans('global.nav.post') }}</a>
                        </li>
                        <li class="nav-item dropdown">
                                    <a style="cursor: pointer" class="nav-link">{{ trans('global.nav.article') }}</a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="{{ route('article.index') }}">Lihat</a></li>
                                        <li><a class="dropdown-item" href="#">Buat Artikel Baru</a></li>
                                    </ul>
                                </li>
                        <li class="nav-item">
                            <a style="cursor: pointer" href="{{ route('suggestion.index') }}" class="nav-link">{{ trans('global.nav.suggestion') }}</a>
                        </li>
                        <li class="nav-item">
                            <a style="cursor: pointer" href="{{ route('vaccine.index') }}" class="nav-link">{{ trans('global.nav.vaccine') }}</a>
                        </li>
                        <li class="nav-item">
                            <a style="cursor: pointer" class="dropdown-item m-2" href="{{ route('logout') }}" onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                                {{ trans('global.nav.logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>
    </header>




    <div>
        @yield('content')
    </div>

    <footer class="footer section gray-bg pt-0">
        <div class="container">

            <div class="footer-btm py-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-6">
                        <div class="copyright">
                            &copy; Copyright Reserved to <span class="text-color">WeSurviveCovid</span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <a class="backtop js-scroll-trigger" href="#top">
                            <i class="icofont-long-arrow-up"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!--
Essential Scripts
=====================================-->

    <script src="{{ asset('js/autoresize.js') }}"></script>

    <!-- Main jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.js') }}"></script>
    <!-- Bootstrap 4.3.2 -->
    <script src="{{ asset('plugins/bootstrap/js/popper.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('plugins/counterup/jquery.easing.js') }}"></script>
    <!-- Slick Slider -->
    <script src="{{ asset('plugins/slick-carousel/slick/slick.min.js') }}"></script>
    <!-- Counterup -->
    <script src="{{ asset('plugins/counterup/jquery.waypoints.min.js') }}"></script>

    <script src="{{ asset('plugins/shuffle/shuffle.min.js') }}"></script>
    <script src="{{ asset('plugins/counterup/jquery.counterup.min.js') }}"></script>
    <!-- Google Map -->
    <script src="{{ asset('plugins/google-map/map.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script>

    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/contact.js') }}"></script>

</body>

</html>
