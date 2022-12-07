<!DOCTYPE html>
<html lang="en">


<!-- Select2 -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />

<head>
    <meta charset="utf-8">
    @stack('title')
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Blood Donation - Activism & Campaign HTML5 Template">
    <meta name="author" content="xenioushk">
    <link rel="shortcut icon" href="images/favicon.png" />


    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/animate.css" rel="stylesheet" type="text/css">
    <link href="css/owl.carousel.css" rel="stylesheet" type="text/css">
    <link href="css/venobox.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/styles.css" />

    <style>
        .mt-20 {
            margin-top: 20px;
        }

        .mt-30 {
            margin-top: 30px;
        }

        ul,
        li {
            list-style-type: none;
            font-size: 14px;
        }

        .select2-container--default .select2-selection--single .select2-selection__rendered {
            color: #444;
            line-height: 26px;
            font-size: 15px;
        }

        .select2-container .select2-search--inline .select2-search__field {
            margin-top: 0px;
        }

        .select2-container .select2-selection--multiple {
            display: flex;
        }

        #slider_1 .item img {
            height: 500px;
        }

        .container-search {
            background-color: #e6e6e6;
            padding: 30px;
        }

        .search_btn {
            width: 100%;
            padding: 5px 12px;
        }
    </style>

<body>

    <div id="preloader">
        <span class="margin-bottom"><img src="images/loader.gif" alt="" /></span>
    </div>

    <!--  HEADER -->
    <header class="main-header clearfix" data-sticky_header="true">

        <div class="top-bar clearfix">

            <div class="container">

                <div class="row">

                    <div class="col-md-8 col-sm-12">

                        <p>Welcome to blood donation center.</p>

                    </div>

                    <div class="col-md-4col-sm-12">
                        <div class="top-bar-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-youtube"></i></a>
                        </div>
                    </div>

                </div>

            </div>
            <!--  end .container -->

        </div>
        <!--  end .top-bar  -->

        <section class="header-wrapper navgiation-wrapper">

            <div class="navbar navbar-default">
                <div class="container">

                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="logo" href="{{ url('/')}}"><img alt="" src="images/logo.png"></a>
                    </div>

                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">

                            <li><a href="{{ url('/')}}" title="Home">Home</a></li>

                            <li><a href="{{ url('/about') }}" title="About Us">About Us</a></li>



                            <li>
                                <a href="{{ url('/events')}}" title="Campaign">Campaign</a>
                                <!-- <ul class="drop-down">
                                    <li><a href="{{ url('/events')}}">All Campaigns</a></li>
                                    <li><a href="{{ url('/event_single')}}">Single Campaign</a></li>
                                </ul> -->
                            </li>

                            <li class="drop"><a href="#">Pages</a>
                                <ul class="drop-down">

                                    <li><a href="{{ url('/faq')}}" title="FAQ">FAQ</a></li>
                                    <li><a href="{{ url('/gallery')}}" title="Gallery">Gallery</a></li>

                                    <!-- <li class="drop"><a href="{{ url('/gallery_1')}}">Gallery</a>
                                        <ul class="drop-down level3">
                                            <li><a href="{{ url('/gallery_1')}}">Layout 01</a></li>
                                            <li><a href="{{ url('/gallery_2')}}">Layout 02</a></li>

                                        </ul>
                                    </li> -->
                                    <li><a href="{{ url('/404_error') }}" title="404 Page">404 Page</a></li>
                                    <!-- <li class="drop"><a href="#">Level 3</a>
                                        <ul class="drop-down level3">
                                            <li><a href="#">Level 3.1</a></li>
                                            <li><a href="#">Level 3.2</a></li>
                                            <li><a href="#">Level 3.3</a></li>
                                        </ul>
                                    </li> -->
                                </ul>
                            </li>

                            <li>
                                <a href="{{ url('/blog') }}" title="Blog">Blog</a>
                                <!-- <ul class="drop-down">
                                    <li><a href="{{ url('/blog') }}">All Posts</a></li>
                                    <li><a href="{{ url('/single') }}">Single Page</a></li>
                                </ul> -->
                            </li>

                            <li class="drop">
                                @if(session('donor_id'))
                                <a href="{{ url('/donor-logout') }}">Logout</a>
                                @elseif(session('user_id'))
                                <a href="{{ url('/user-logout') }}">Logout</a>

                                @else
                                <a href="{{ url('/') }}">Login</a>
                                @endif

                                <ul class="drop-down">
                                    @if(session('donor_id'))
                                    <li><a href="{{ url('/donor-dashboard') }}">{{ session('donor_name')}}</a></li>
                                    @elseif(session('user_id'))
                                    <li><a href="{{ url('/user-dashboard')}}">{{ session('user_name') }}</a></li>
                                    <!-- <li><a href="{{ url('/donor-register')}}">Register</a></li> -->
                                    @else
                                    <li><a href="{{ url('/donor-login')}}">Donor</a></li>
                                    <li><a href="{{ url('/user-login')}}">User</a></li>
                                    <!-- <li><a href="{{ url('/donor-register')}}">Register</a></li> -->
                                    @endif

                                </ul>
                            </li>
                            <li><a href="{{ url('/contact') }}" title="Contact">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </section>

    </header>
    <!-- end main-header  -->