<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software">

    <title>WeSurviveCovid @yield('title')</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/team/logo-favicon.png') }}" />

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
    <div class="contents">
        <header>
            <nav class="navbar navbar-expand-lg navigation" id="navbar">
                <div class="container">
                    <a class="navbar-brand" href="{{ route('homepage') }}">
                        <img src="{{ asset('images/team/logo_fix.png') }}" alt="" class="img" style="height: 8vh">
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
                                <a style="cursor: pointer" href="{{ route('homepage') }}" class="nav-link">{{ trans('global.nav.home') }}</a>
                            </li>

                            @can('isMasyarakat')
                            <li class="nav-item dropdown">
                                <a style="cursor: pointer" class="nav-link">{{ trans('global.nav.post') }}</a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="{{ route('post.index') }}">Lihat</a></li>
                                    <li><a class="dropdown-item" href="{{ route('post.create') }}">Buat Postingan Baru</a></li>
                                </ul>
                            </li>
                            @endcan

                            @can('isDokter')
                            <li class="nav-item active">
                                <a style="cursor: pointer" href="{{ route('post.index') }}" class="nav-link">{{ trans('global.nav.post') }}</a>
                            </li>
                            @endcan

                            @can('isAdmin')
                            <li class="nav-item active">
                                <a style="cursor: pointer" href="{{ route('post.index') }}" class="nav-link">{{ trans('global.nav.post') }}</a>
                            </li>
                            @endcan

                            @can('isDokter')
                            <li class="nav-item dropdown">
                                <a style="cursor: pointer" class="nav-link">{{ trans('global.nav.article') }}</a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="{{ route('article.index') }}">Lihat</a></li>
                                    <li><a class="dropdown-item" href="{{ route('article.create') }}">Buat Artikel Baru</a></li>
                                </ul>
                            </li>
                            @endcan

                            @can('isMasyarakat')
                            <li class="nav-item active">
                                <a style="cursor: pointer" href="{{ route('article.index') }}" class="nav-link">{{ trans('global.nav.article') }}</a>
                            </li>
                            @endcan

                            @can('isAdmin')
                            <li class="nav-item active">
                                <a style="cursor: pointer" href="{{ route('article.index') }}" class="nav-link">{{ trans('global.nav.article') }}</a>
                            </li>
                            @endcan

                            <li class="nav-item">
                                <a style="cursor: pointer" href="{{ route('suggestion.index') }}" class="nav-link">{{ trans('global.nav.suggestion') }}</a>
                            </li>
                            <li class="nav-item">
                                <a style="cursor: pointer" href="{{ route('vaccine.index') }}" class="nav-link">{{ trans('global.nav.vaccine') }}</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a style="cursor: pointer" class="nav-link">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                    </svg>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="{{ route('profile.index') }}">Profile</a></li>
                                    @can('isAdmin')
                                    <li><a class="dropdown-item" href="{{ route('admin.index') }}">Admin</a></li>
                                    @endcan
                                    <li>
                                        <a style="cursor: pointer" class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                                            {{ trans('global.nav.logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </li>

                                </ul>
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
    </div>

    <footer class="footer section gray-bg p-0">
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