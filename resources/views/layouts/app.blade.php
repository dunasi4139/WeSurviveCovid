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
    <div class="header-top-bar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <ul class="top-bar-info list-inline-item pl-0 mb-0">
                        <li class="list-inline-item"><a href="mailto:support@gmail.com"><i class="icofont-support-faq mr-2"></i>support@WeSurviveCovid.com</a></li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <div class="text-lg-right top-right-bar mt-2 mt-lg-0">
                        <a href="tel:+23-345-67890" >
                            <span>Butuh Bantuan : </span>
                            <span class="h4">823-4565-13456</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navigation" id="navbar">
        <div class="container">
            <a class="navbar-brand" href="{{ route('homepage') }}">
                <img src="{{ asset('images/team/logo-pp.png') }}" alt="" class="img-fluid">
            </a>

            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain" aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icofont-navigation-menu"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarmain">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('homepage') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Postingan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Artikel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Saran</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Vaksinasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                         {{ __('Logout') }}
                     </a>
                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>




<div>
    @yield('content')
</div>


<!--
Essential Scripts
=====================================-->


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
