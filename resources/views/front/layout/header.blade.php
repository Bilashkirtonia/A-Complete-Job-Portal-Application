<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <meta name="description" content="@yield('seo_description')" />
        <title>@yield('seo_title')</title>

        <link rel="icon" type="image/png" href="{{ asset('front/uploads/favicon.png')}}" />

        <!-- All CSS -->
        <link rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css')}}" />
        <link rel="stylesheet" href="{{ asset('front/css/bootstrap-datepicker.min.css')}}" />
       
        <link rel="stylesheet" href="{{ asset('front/css/animate.min.css')}}" />
        <link rel="stylesheet" href="{{ asset('front/css/magnific-popup.css')}}" />
        <link rel="stylesheet" href="{{ asset('front/css/owl.carousel.min.css')}}" />
        <link rel="stylesheet" href="{{ asset('front/css/select2.min.css')}}" />
        <link rel="stylesheet" href="{{ asset('front/css/select2-bootstrap.min.css')}}" />
        <link rel="stylesheet" href="{{ asset('front/css/all.css')}}" />
        <link rel="stylesheet" href="{{ asset('front/css/meanmenu.css')}}" />
        <link rel="stylesheet" href="{{ asset('front/css/spacing.css')}}" />
        <link rel="stylesheet" href="{{ asset('front/css/style.css')}}" />

        <!-- All Javascripts -->
        <script src="{{ asset('front/js/jquery-3.6.1.min.js')}}"></script>
        <script src="{{ asset('front/js/bootstrap.min.js')}}"></script>
        <script src="{{ asset('front/js/bootstrap-datepicker.min.js')}}"></script>
        <script src="{{ asset('front/js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{ asset('front/js/owl.carousel.min.js')}}"></script>
        <script src="{{ asset('front/js/wow.min.js')}}"></script>
        <script src="{{ asset('front/js/select2.full.js')}}"></script>
        <script src="{{ asset('front/js/jquery.waypoints.min.js')}}"></script>
        <script src="{{ asset('front/js/moment.min.js')}}"></script>
        <script src="{{ asset('front/js/jquery.meanmenu.js')}}"></script>
        <script src="{{ asset('front/tinymce/tinymce.min.js')}}"></script>

        <link
            href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap"
            rel="stylesheet"
        />
    </head>
    <body>
        <div class="top">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 left-side">
                        <ul>
                            <li class="phone-text">111-222-3333</li>
                            <li class="email-text">contact@arefindev.com</li>
                        </ul>
                    </div>
                    <div class="col-md-6 right-side">
                        <ul class="right">
                            <li class="menu">
                                <a href="{{ route('front_login') }} "><i class="fas fa-sign-in-alt"></i> Login</a>
                            </li>
                            <li class="menu">
                                <a href="{{ route('front_signup') }}"><i class="fas fa-user"></i> Sign Up</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="navbar-area" id="stickymenu">
            <!-- Menu For Mobile Device -->
            <div class="mobile-nav">
                <a href="index.html" class="logo">
                    <img src="{{ asset('front/uploads/logo.p')}}ng" alt="" />
                </a>
            </div>

            <!-- Menu For Desktop Device -->
            <div class="main-nav">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            <img src="{{ asset('front/uploads/logo.p')}}ng" alt="" />
                        </a>
                        <div
                            class="collapse navbar-collapse mean-menu"
                            id="navbarSupportedContent"
                        >
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a href="{{ url('/') }}" class="nav-link"
                                        >Home</a
                                    >
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('jobs') }}" class="nav-link">
                                        Find Jobs</a
                                    >
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('companies') }}" class="nav-link"
                                        >Companies</a
                                    >
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('pricing') }}" class="nav-link"
                                        >Pricing</a
                                    >
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('FAQ') }}" class="nav-link">FAQ</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('blogs') }}" class="nav-link"
                                        >Blog</a
                                    >
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('contact') }}" class="nav-link"
                                        >Contact</a
                                    >
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>