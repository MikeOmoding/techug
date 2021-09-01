<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="theme-color" content="#51be78"/>

    <title>T.E.C.H - @yield('page-title')</title>
    {{--    <title>@yield('page-title')</title>--}}

    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500&display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}">

    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('plugins/slider/css/owl.carousel.min.css') }}">

    <link rel="stylesheet" href="{{ asset('plugins/slider/css/owl.theme.default.css') }}">


    <link href="{{ asset('css/style.min.css') }}" rel="stylesheet">

    <link href="{{ asset('css/doctor.css') }}" rel="stylesheet">

    <!-- Styles -->

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/omo_styles.min.css') }}" rel="stylesheet">


</head>

<body>

<header class="container-fluid ">
    <div class="header-top">
        <div class="container">
            <div class="row col-det">
                <div class="col-lg-6 d-none d-lg-block">
                    <ul class="ulleft">
                        <li><i class="far fa-envelope header-icons"></i>

                            <span class="header-section"> info.ug@techfortheworld.org</span>
                            <span>|</span></li>
                        <li>
                            <i class="fas fa-phone-volume header-icons"></i>
                            <span class="header-section">+256 (700) 928-767</span>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 folouws">

                    <ul class="ulright">
                        <li><span class="header-section">Follow Us </span>:</li>
                        <li>
                            <i class="fab fa-facebook-square header-icons"></i>
                        </li>

                    </ul>
                </div>
                <div class="col-lg-3 d-none d-md-block col-md-6 btn-bhed">
                    <a href="{{ route('volunteer') }}" class="btn btn-sm btn-success">Join Us</a>
                    <a href="{{ route('donate') }}" class="btn btn-sm btn-warning">Donate</a>
                </div>
            </div>
        </div>
    </div>
    <div id="menu-jk" class="header-bottom">
        <div class="container" style="padding: 0;overflow: hidden">
            <div class="row nav-row ">
                <div class="col-lg-3 col-md-12 logo d-flex justify-content-between align-items-center">
                    <a href="{{ route('home') }}">
                        <img class="ml-lg-3 pb-2 the-logo px-2" src="{{ asset('images/logo.png') }}" alt="">
                    </a>
                    <a  data-toggle="collapse" data-target="#menu" href="#menu"><i
                            class="fas d-block d-lg-none small-menu fa-bars fa-2x mr-3" style="color: #8eb940"></i></a>
                </div>
                <div id="menu"
                     class="col-lg-9 col-md-12 d-none  d-lg-flex flex-column flex-lg-row nav-col justify-content-center">
                    <ul class="navbar d-flex flex-column flex-lg-row">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ '/home' }}">Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ '/about' }}">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ '/gallery' }}">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ '/contact' }}">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{'/volunteer' }}">Volunteer</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>

@yield('content')

@include('layouts.footer')
