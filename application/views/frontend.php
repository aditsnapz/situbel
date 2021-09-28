<!doctype html>
<html class="no-js" lang="">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Situbel</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>assets/frontend/img/favicon.png">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/frontend/css/normalize.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/frontend/css/main.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/frontend/css/bootstrap.min.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/frontend/css/animate.min.css">
    <!-- Font-awesome CSS-->
    <link rel="stylesheet" href="<?= base_url() ?>assets/frontend/css/font-awesome.min.css">
    <!-- Owl Caousel CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/frontend/vendor/OwlCarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/frontend/vendor/OwlCarousel/owl.theme.default.min.css">
    <!-- Main Menu CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/frontend/css/meanmenu.min.css">
    <!-- nivo slider CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/frontend/vendor/slider/css/nivo-slider.css" type="text/css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/frontend/vendor/slider/css/preview.css" type="text/css" media="screen" />
    <!-- Datetime Picker Style CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/frontend/css/jquery.datetimepicker.css">
    <!-- Magic popup CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/frontend/css/magnific-popup.css">
    <!-- Switch Style CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/frontend/css/hover-min.css">
    <!-- ReImageGrid CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/frontend/css/reImageGrid.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/frontend/style.css">
    <!-- Modernizr Js -->
    <script src="<?= base_url() ?>assets/frontend/js/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Add your site or application content here -->
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <!-- Main Body Area Start Here -->
    <div id="wrapper">
        <!-- Header Area Start Here -->
        <header>
            <div id="header3" class="header3-area">
                <div class="header-top-area">
                    <div class="container">
                        <div class="top-bar-border">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="header-top-left">
                                        <ul>
                                            <li><i class="fa fa-phone" aria-hidden="true"></i><a href="Tel:+1234567890"> + 123 456 78910 </a></li>
                                            <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="#">info@academics.com</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="header-top-right">
                                        <ul>
                                            <li>
                                                <a class="login-btn-area" href="#" id="login-button"><i class="fa fa-lock" aria-hidden="true"></i> Login</a>
                                                <div class="login-form" id="login-form" style="display: none;">
                                                    <div class="title-default-left-bold">Login</div>
                                                    <form action="<?php echo base_url('Login/do_login'); ?>" method="POST">
                                                        <label>Username or email address *</label>
                                                        <input type="text" name="username" class="form-control" required placeholder="username" />
                                                        <label>Password *</label>
                                                        <input type="password" name="password" class="form-control" required placeholder="Password" />
                                                        <label class="check">Lost your password?</label>
                                                        <span><input type="checkbox" name="remember"/>Remember Me</span>
                                                        <button class="default-big-btn" type="submit" value="Login">Login</button>
                                                        <button class="default-big-btn" type="submit" value="">Cancel</button>
                                                    </form>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="apply-btn-area">
                                                    <a href="<?= base_url('pendaftaran/Registrasi') ?>" class="apply-now-btn">Registration</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-menu-area" id="sticker">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-sm-3">
                                <div class="logo-area">
                                    <a href="index.html"><img class="img-responsive" src="<?= base_url() ?>assets/frontend/img/situbel.png" alt="logo"></a>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-9">
                                <nav id="desktop-nav">
                                    <ul>
                                        <li class="active"><a href="#">Home</a>
                                            <ul>
                                                <li><a href="index.html">Home 1</a></li>
                                                <li><a href="index2.html">Home 2</a></li>
                                                <li class="active"><a href="index3.html">Home 3</a></li>
                                                <li><a href="index4.html">Home 4</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Pages</a>
                                            <ul class="mega-menu-area">
                                                <li>
                                                    <a href="about1.html">About 1</a>
                                                    <a href="about2.html">About 2</a>
                                                    <a href="about3.html">About 3</a>
                                                    <a href="about4.html">About 4</a>
                                                </li>
                                                <li>
                                                    <a href="lecturers1.html">lecturers 1</a>
                                                    <a href="lecturers2.html">lecturers 2</a>
                                                    <a href="single-lecturers.html">lecturers Details</a>
                                                    <a href="pricing1.html">Pricing Plan 1</a>
                                                </li>
                                                <li>
                                                    <a href="pricing2.html">Pricing Plan 2</a>
                                                    <a href="shop1.html">Shop 1</a>
                                                    <a href="shop2.html">Shop 2</a>
                                                    <a href="single-shop.html">Shop Details</a>
                                                </li>
                                                <li>
                                                    <a href="account.html">Account</a>
                                                    <a href="registration.html">Registration</a>
                                                    <a href="faq.html">Faq</a>
                                                    <a href="404.html">404 Error</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Courses</a>
                                            <ul>
                                                <li><a href="courses1.html">Courses 1</a></li>
                                                <li><a href="courses2.html">Courses 2</a></li>
                                                <li><a href="courses3.html">Courses 3</a></li>
                                                <li><a href="single-courses1.html">Course Details 1</a></li>
                                                <li><a href="single-courses2.html">Course Details 2</a></li>
                                                <li><a href="single-courses3.html">Course Details 3</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Research</a>
                                            <ul>
                                                <li><a href="research1.html">Research 1</a></li>
                                                <li><a href="research2.html">Research 2</a></li>
                                                <li><a href="research3.html">Research 3</a></li>
                                                <li><a href="single-research.html">Research Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">News</a>
                                            <ul>
                                                <li class="has-child-menu"><a href="#">News</a>
                                                    <ul class="thired-level">
                                                        <li><a href="news1.html">News 1</a></li>
                                                        <li><a href="news2.html">News 2</a></li>
                                                        <li><a href="single-news.html">News Details</a></li>
                                                    </ul>
                                                </li>
                                                <li class="has-child-menu"><a href="#">Event</a>
                                                    <ul class="thired-level">
                                                        <li><a href="event.html">Event</a></li>
                                                        <li><a href="single-event.html">Event Details</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Gallery</a>
                                            <ul>
                                                <li><a href="gallery1.html">Gallery 1</a></li>
                                                <li><a href="gallery2.html">Gallery 2</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Contact</a>
                                            <ul>
                                                <li><a href="contact1.html">Contact 1</a></li>
                                                <li><a href="contact2.html">Contact 2</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="col-lg-1 col-md-1 hidden-sm">
                                <div class="header-search">
                                    <form>
                                        <input type="text" class="search-form" placeholder="Search...." required="">
                                        <a href="#" class="search-button" id="search-button"><i class="fa fa-search" aria-hidden="true"></i></a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu Area Start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul>
                                        <li><a href="#">Home</a>
                                            <ul>
                                                <li><a href="index.html">Home 1</a></li>
                                                <li><a href="index2.html">Home 2</a></li>
                                                <li><a href="index3.html">Home 3</a></li>
                                                <li><a href="index4.html">Home 4</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Pages</a>
                                            <ul>
                                                <li><a href="about1.html">About 1</a></li>
                                                <li><a href="about2.html">About 2</a></li>
                                                <li><a href="about3.html">About 3</a></li>
                                                <li><a href="about4.html">About 4</a></li>
                                                <li><a href="lecturers1.html">lecturers 1</a></li>
                                                <li><a href="lecturers2.html">lecturers 2</a></li>
                                                <li><a href="single-lecturers.html">lecturers Details</a></li>
                                                <li><a href="pricing1.html">Pricing Plan 1</a></li>
                                                <li><a href="pricing2.html">Pricing Plan 2</a></li>
                                                <li><a href="shop1.html">Shop 1</a></li>
                                                <li><a href="shop2.html">Shop 2</a></li>
                                                <li><a href="single-shop.html">Shop Details</a></li>
                                                <li><a href="account.html">Account</a></li>
                                                <li><a href="registration.html">Registration</a></li>
                                                <li><a href="faq.html">Faq</a></li>
                                                <li><a href="404.html">404 Error</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Courses</a>
                                            <ul>
                                                <li><a href="courses1.html">Courses 1</a></li>
                                                <li><a href="courses2.html">Courses 2</a></li>
                                                <li><a href="courses3.html">Courses 3</a></li>
                                                <li><a href="single-courses1.html">Course Details 1</a></li>
                                                <li><a href="single-courses2.html">Course Details 2</a></li>
                                                <li><a href="single-courses3.html">Course Details 3</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Research</a>
                                            <ul>
                                                <li><a href="research1.html">Research 1</a></li>
                                                <li><a href="research2.html">Research 2</a></li>
                                                <li><a href="research3.html">Research 3</a></li>
                                                <li><a href="single-research.html">Research Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">News</a>
                                            <ul>
                                                <li class="has-child-menu"><a href="#">News</a>
                                                    <ul class="thired-level">
                                                        <li><a href="news1.html">News 1</a></li>
                                                        <li><a href="news2.html">News 2</a></li>
                                                        <li><a href="single-news.html">News Details</a></li>
                                                    </ul>
                                                </li>
                                                <li class="has-child-menu"><a href="#">Event</a>
                                                    <ul class="thired-level">
                                                        <li><a href="event.html">Event</a></li>
                                                        <li><a href="single-event.html">Event Details</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Gallery</a>
                                            <ul>
                                                <li><a href="gallery1.html">Gallery 1</a></li>
                                                <li><a href="gallery2.html">Gallery 2</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Contact</a>
                                            <ul>
                                                <li><a href="contact1.html">Contact 1</a></li>
                                                <li><a href="contact2.html">Contact 2</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu Area End -->
        </header>
        <!-- Header Area End Here -->
        <!-- Slider 1 Area Start Here -->
        <div class="slider1-area slider3-area overlay-default">
            <div class="bend niceties preview-1">
                <div id="ensign-nivoslider-3" class="slides">
                    <img src="<?= base_url() ?>assets/frontend/img/slider/3-1.jpg" alt="slider" title="#slider-direction-1" />
                    <img src="<?= base_url() ?>assets/frontend/img/slider/3-2.jpg" alt="slider" title="#slider-direction-2" />
                    <img src="<?= base_url() ?>assets/frontend/img/slider/3-3.jpg" alt="slider" title="#slider-direction-3" />
                </div>
                <div id="slider-direction-1" class="t-cn slider-direction">
                    <div class="slider-content s-tb slide-1">
                        <div class="title-container s-tb-c">
                            <div class="title1">Situbel (Sistem Tugas Belajar)</div>
                            <p>Emply dummy text of the printing and typesetting industry orem Ipsum has been the industry's standard
                                <br>dummy text ever sinceprinting and typesetting industry. </p>
                            <div class="slider-btn-area">
                                <a href="#" class="default-big-btn">Start a Course</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="slider-direction-2" class="t-cn slider-direction">
                    <div class="slider-content s-tb slide-2">
                        <div class="title-container s-tb-c">
                            <div class="title1">Best Education For HTML Template</div>
                            <p>Emply dummy text of the printing and typesetting industry orem Ipsum has been the industry's standard
                                <br>dummy text ever sinceprinting and typesetting industry. </p>
                            <div class="slider-btn-area">
                                <a href="#" class="default-big-btn">Start a Course</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="slider-direction-3" class="t-cn slider-direction">
                    <div class="slider-content s-tb slide-3">
                        <div class="title-container s-tb-c">
                            <div class="title1">Best Education Into PHP</div>
                            <p>Emply dummy text of the printing and typesetting industry orem Ipsum has been the industry's standard
                                <br>dummy text ever sinceprinting and typesetting industry. </p>
                            <div class="slider-btn-area">
                                <a href="#" class="default-big-btn">Start a Course</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slider 1 Area End Here -->
        <!-- Service 2 Area Start Here -->
        <div class="service2-area">
            <div class="search-area">
                <div class="container">
                    <div class="row search-inner">
                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                            <div class="search-title">
                                <span><i class="fa fa-search" aria-hidden="true"></i> Search Course</span>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-6 col-sm-6 col-xs-12">
                            <div class="search-input">
                                <form>
                                    <input type="text" class="search-form" placeholder="Course Keywords . . ." required="">
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                            <div class="search-submit">
                                <a href="#" class="join-now-btn">Search</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-duration="2s" data-wow-delay=".1s">
                        <div class="service-box3">
                            <div class="service-box-icon">
                                <a href="#"><i class="fa fa-video-camera" aria-hidden="true"></i></a>
                            </div>
                            <h3><a href="#">Over 20,640 Free Tutorial</a></h3>
                            <p>Eimply dummy text of the printing inavailable industry.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-duration="2s" data-wow-delay=".3s">
                        <div class="service-box3">
                            <div class="service-box-icon">
                                <a href="#"><i class="fa fa-user" aria-hidden="true"></i></a>
                            </div>
                            <h3><a href="#">Skilled 10,640 Lecturer</a></h3>
                            <p>Eimply dummy text of the printing inavailable industry.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-duration="2s" data-wow-delay=".5s">
                        <div class="service-box3">
                            <div class="service-box-icon">
                                <a href="#"><i class="fa fa-graduation-cap" aria-hidden="true"></i></a>
                            </div>
                            <h3><a href="#">Over 1000 Scholarship</a></h3>
                            <p>Eimply dummy text of the printing inavailable industry.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-duration="2s" data-wow-delay=".7s">
                        <div class="service-box3">
                            <div class="service-box-icon">
                                <a href="#"><i class="fa fa-book" aria-hidden="true"></i></a>
                            </div>
                            <h3><a href="#">Over 5,640 Book Store</a></h3>
                            <p>Eimply dummy text of the printing inavailable industry.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service 2 Area End Here -->
        <!-- Featured Area Start Here -->
        <div class="courses2-area bg-common-style" style="background-image: url('<?= base_url() ?>assets/frontend/img/featured/back2.jpg');">
            <div class="container">
                <h2 class="title-default-left">Featured Courses</h2>
            </div>
            <div class="container courses-list-wrapper">
                <div class="row courses-wrapper courses-list">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 courses-item">
                        <div class="courses-box2">
                            <div class="single-item-wrapper">
                                <div class="courses-img-wrapper hvr-bounce-to-right">
                                    <img class="img-responsive" src="<?= base_url() ?>assets/frontend/img/course/5.jpg" alt="courses">
                                    <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                </div>
                                <div class="courses-content-wrapper">
                                    <h3 class="item-title"><a href="#">Evining MBA</a></h3>
                                    <p class="item-content">Rimply dummy texthe prinetting indus known printer galley scrambled.</p>
                                    <ul class="courses-info">
                                        <li>1 Year
                                            <br><span> Course</span></li>
                                        <li>70
                                            <br><span> Classes</span></li>
                                        <li>7 pm - 10 pm
                                            <br><span> Time</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 courses-item">
                        <div class="courses-box2">
                            <div class="single-item-wrapper">
                                <div class="courses-img-wrapper hvr-bounce-to-right">
                                    <img class="img-responsive" src="<?= base_url() ?>assets/frontend/img/course/6.jpg" alt="courses">
                                    <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                </div>
                                <div class="courses-content-wrapper">
                                    <h3 class="item-title"><a href="#">Basic Philosopphy</a></h3>
                                    <p class="item-content">Rimply dummy texthe prinetting indus known printer galley scrambled.</p>
                                    <ul class="courses-info">
                                        <li>1 Year
                                            <br><span> Course</span></li>
                                        <li>20
                                            <br><span> Classes</span></li>
                                        <li>8 pm - 9 pm
                                            <br><span> Time</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 courses-item">
                        <div class="courses-box2">
                            <div class="single-item-wrapper">
                                <div class="courses-img-wrapper hvr-bounce-to-right">
                                    <img class="img-responsive" src="<?= base_url() ?>assets/frontend/img/course/7.jpg" alt="courses">
                                    <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                </div>
                                <div class="courses-content-wrapper">
                                    <h3 class="item-title"><a href="#">Advance GMAT</a></h3>
                                    <p class="item-content">Rimply dummy texthe prinetting indus known printer galley scrambled.</p>
                                    <ul class="courses-info">
                                        <li>3 Months
                                            <br><span> Course</span></li>
                                        <li>50
                                            <br><span> Classes</span></li>
                                        <li>10 pm - 11 pm
                                            <br><span> Time</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 courses-item">
                        <div class="courses-box2">
                            <div class="single-item-wrapper">
                                <div class="courses-img-wrapper hvr-bounce-to-right">
                                    <img class="img-responsive" src="<?= base_url() ?>assets/frontend/img/course/8.jpg" alt="courses">
                                    <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                </div>
                                <div class="courses-content-wrapper">
                                    <h3 class="item-title"><a href="#">IELTS</a></h3>
                                    <p class="item-content">Rimply dummy texthe prinetting indus known printer galley scrambled.</p>
                                    <ul class="courses-info">
                                        <li>2 Months
                                            <br><span> Course</span></li>
                                        <li>15
                                            <br><span> Classes</span></li>
                                        <li>5 pm - 7 pm
                                            <br><span> Time</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 courses-item hidden">
                        <div class="courses-box2">
                            <div class="single-item-wrapper">
                                <div class="courses-img-wrapper hvr-bounce-to-right">
                                    <img class="img-responsive" src="<?= base_url() ?>assets/frontend/img/course/9.jpg" alt="courses">
                                    <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                </div>
                                <div class="courses-content-wrapper">
                                    <h3 class="item-title"><a href="#">Evining MBA</a></h3>
                                    <p class="item-content">Rimply dummy texthe prinetting indus known printer galley scrambled.</p>
                                    <ul class="courses-info">
                                        <li>1 Year
                                            <br><span> Course</span></li>
                                        <li>70
                                            <br><span> Classes</span></li>
                                        <li>7 pm - 10 pm
                                            <br><span> Time</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 courses-item hidden">
                        <div class="courses-box2">
                            <div class="single-item-wrapper">
                                <div class="courses-img-wrapper hvr-bounce-to-right">
                                    <img class="img-responsive" src="<?= base_url() ?>assets/frontend/img/course/10.jpg" alt="courses">
                                    <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                </div>
                                <div class="courses-content-wrapper">
                                    <h3 class="item-title"><a href="#">Basic Philosopphy</a></h3>
                                    <p class="item-content">Rimply dummy texthe prinetting indus known printer galley scrambled.</p>
                                    <ul class="courses-info">
                                        <li>1 Year
                                            <br><span> Course</span></li>
                                        <li>20
                                            <br><span> Classes</span></li>
                                        <li>8 pm - 9 pm
                                            <br><span> Time</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 courses-item hidden">
                        <div class="courses-box2">
                            <div class="single-item-wrapper">
                                <div class="courses-img-wrapper hvr-bounce-to-right">
                                    <img class="img-responsive" src="<?= base_url() ?>assets/frontend/img/course/11.jpg" alt="courses">
                                    <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                </div>
                                <div class="courses-content-wrapper">
                                    <h3 class="item-title"><a href="#">Advance GMAT</a></h3>
                                    <p class="item-content">Rimply dummy texthe prinetting indus known printer galley scrambled.</p>
                                    <ul class="courses-info">
                                        <li>3 Months
                                            <br><span> Course</span></li>
                                        <li>50
                                            <br><span> Classes</span></li>
                                        <li>10 pm - 11 pm
                                            <br><span> Time</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 courses-item hidden">
                        <div class="courses-box2">
                            <div class="single-item-wrapper">
                                <div class="courses-img-wrapper hvr-bounce-to-right">
                                    <img class="img-responsive" src="<?= base_url() ?>assets/frontend/img/course/12.jpg" alt="courses">
                                    <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                </div>
                                <div class="courses-content-wrapper">
                                    <h3 class="item-title"><a href="#">IELTS</a></h3>
                                    <p class="item-content">Rimply dummy texthe prinetting indus known printer galley scrambled.</p>
                                    <ul class="courses-info">
                                        <li>2 Months
                                            <br><span> Course</span></li>
                                        <li>15
                                            <br><span> Classes</span></li>
                                        <li>5 pm - 7 pm
                                            <br><span> Time</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 courses-item hidden">
                        <div class="courses-box2">
                            <div class="single-item-wrapper">
                                <div class="courses-img-wrapper hvr-bounce-to-right">
                                    <img class="img-responsive" src="<?= base_url() ?>assets/frontend/img/course/13.jpg" alt="courses">
                                    <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                </div>
                                <div class="courses-content-wrapper">
                                    <h3 class="item-title"><a href="#">Evining MBA</a></h3>
                                    <p class="item-content">Rimply dummy texthe prinetting indus known printer galley scrambled.</p>
                                    <ul class="courses-info">
                                        <li>1 Year
                                            <br><span> Course</span></li>
                                        <li>70
                                            <br><span> Classes</span></li>
                                        <li>7 pm - 10 pm
                                            <br><span> Time</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 courses-item hidden">
                        <div class="courses-box2">
                            <div class="single-item-wrapper">
                                <div class="courses-img-wrapper hvr-bounce-to-right">
                                    <img class="img-responsive" src="<?= base_url() ?>assets/frontend/img/course/14.jpg" alt="courses">
                                    <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                </div>
                                <div class="courses-content-wrapper">
                                    <h3 class="item-title"><a href="#">Basic Philosopphy</a></h3>
                                    <p class="item-content">Rimply dummy texthe prinetting indus known printer galley scrambled.</p>
                                    <ul class="courses-info">
                                        <li>1 Year
                                            <br><span> Course</span></li>
                                        <li>20
                                            <br><span> Classes</span></li>
                                        <li>8 pm - 9 pm
                                            <br><span> Time</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="view-all-btn-area loadmore">
                    <a href="#" class="view-all-accent-btn">View All Corses</a>
                </div>
            </div>
        </div>
        <!-- Featured Area End Here -->
        <!-- Counter Area Start Here -->
        <div class="counter-area bg-primary-deep" style="background-image: url('<?= base_url() ?>assets/frontend/img/banner/4.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 counter1-box wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".20s">
                        <h2 class="about-counter title-bar-counter" data-num="80">80</h2>
                        <p>PROFESSIONAL TEACHER</p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 counter1-box wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".40s">
                        <h2 class="about-counter title-bar-counter" data-num="20">20</h2>
                        <p>NEWS COURSES EVERY YEARS</p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 counter1-box wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".60s">
                        <h2 class="about-counter title-bar-counter" data-num="56">56</h2>
                        <p>NEWS COURSES EVERY YEARS</p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 counter1-box wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".80s">
                        <h2 class="about-counter title-bar-counter" data-num="77">77</h2>
                        <p>REGISTERED STUDENTS</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Counter Area End Here -->
        <!-- Lecturers Area Start Here -->
        <div class="lecturers-area">
            <div class="container">
                <h2 class="title-default-left">Our Skilled Lecturers</h2>
            </div>
            <div class="container">
                <div class="rc-carousel" data-loop="true" data-items="4" data-margin="30" data-autoplay="true" data-autoplay-timeout="10000" data-smart-speed="2000" data-dots="false" data-nav="true" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="true" data-r-x-small-dots="false" data-r-x-medium="2" data-r-x-medium-nav="true" data-r-x-medium-dots="false" data-r-small="3" data-r-small-nav="true" data-r-small-dots="false" data-r-medium="4" data-r-medium-nav="true" data-r-medium-dots="false" data-r-large="4" data-r-large-nav="true" data-r-large-dots="false">
                    <div class="single-item">
                        <div class="lecturers1-item-wrapper">
                            <div class="lecturers-img-wrapper">
                                <a href="#"><img class="img-responsive" src="<?= base_url() ?>assets/frontend/img/team/1.jpg" alt="team"></a>
                            </div>
                            <div class="lecturers-content-wrapper">
                                <h3 class="item-title"><a href="#">Rosy Janner</a></h3>
                                <span class="item-designation">Senior Finance Lecturer</span>
                                <ul class="lecturers-social">
                                    <li><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="single-item">
                        <div class="lecturers1-item-wrapper">
                            <div class="lecturers-img-wrapper">
                                <a href="#"><img class="img-responsive" src="<?= base_url() ?>assets/frontend/img/team/2.jpg" alt="team"></a>
                            </div>
                            <div class="lecturers-content-wrapper">
                                <h3 class="item-title"><a href="#">Mike Hussy</a></h3>
                                <span class="item-designation">Senior Finance Lecturer</span>
                                <ul class="lecturers-social">
                                    <li><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="single-item">
                        <div class="lecturers1-item-wrapper">
                            <div class="lecturers-img-wrapper">
                                <a href="#"><img class="img-responsive" src="<?= base_url() ?>assets/frontend/img/team/3.jpg" alt="team"></a>
                            </div>
                            <div class="lecturers-content-wrapper">
                                <h3 class="item-title"><a href="#">Daziy Millar</a></h3>
                                <span class="item-designation">Senior Finance Lecturer</span>
                                <ul class="lecturers-social">
                                    <li><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="single-item">
                        <div class="lecturers1-item-wrapper">
                            <div class="lecturers-img-wrapper">
                                <a href="#"><img class="img-responsive" src="<?= base_url() ?>assets/frontend/img/team/4.jpg" alt="team"></a>
                            </div>
                            <div class="lecturers-content-wrapper">
                                <h3 class="item-title"><a href="#">Kazi Fahim</a></h3>
                                <span class="item-designation">Senior Finance Lecturer</span>
                                <ul class="lecturers-social">
                                    <li><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="single-item">
                        <div class="lecturers1-item-wrapper">
                            <div class="lecturers-img-wrapper">
                                <a href="#"><img class="img-responsive" src="<?= base_url() ?>assets/frontend/img/team/1.jpg" alt="team"></a>
                            </div>
                            <div class="lecturers-content-wrapper">
                                <h3 class="item-title"><a href="#">Rosy Janner</a></h3>
                                <span class="item-designation">Senior Finance Lecturer</span>
                                <ul class="lecturers-social">
                                    <li><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="single-item">
                        <div class="lecturers1-item-wrapper">
                            <div class="lecturers-img-wrapper">
                                <a href="#"><img class="img-responsive" src="<?= base_url() ?>assets/frontend/img/team/2.jpg" alt="team"></a>
                            </div>
                            <div class="lecturers-content-wrapper">
                                <h3 class="item-title"><a href="#">Mike Hussy</a></h3>
                                <span class="item-designation">Senior Finance Lecturer</span>
                                <ul class="lecturers-social">
                                    <li><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Lecturers Area End Here -->
        <!-- News and Event Area Start Here -->
        <div class="news-event-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 news-inner-area">
                        <h2 class="title-default-left">Latest News</h2>
                        <ul class="news-wrapper news-wrapper-responsive wow fadeInLeft" data-wow-duration="2s" data-wow-delay=".2s">
                            <li>
                                <div class="news-img-holder">
                                    <a href="#"><img src="<?= base_url() ?>assets/frontend/img/news/1.jpg" class="img-responsive" alt="news"></a>
                                </div>
                                <div class="news-content-holder">
                                    <h3><a href="single-news.html">Summer Course Start From 1st June</a></h3>
                                    <div class="post-date">June 15, 2017</div>
                                    <p>Pellentese turpis dignissim amet area ducation process facilitating Knowledge.</p>
                                </div>
                            </li>
                            <li>
                                <div class="news-img-holder">
                                    <a href="#"><img src="<?= base_url() ?>assets/frontend/img/news/2.jpg" class="img-responsive" alt="news"></a>
                                </div>
                                <div class="news-content-holder">
                                    <h3><a href="single-news.html">Guest Interview will Occur Soon</a></h3>
                                    <div class="post-date">June 15, 2017</div>
                                    <p>Pellentese turpis dignissim amet area ducation process facilitating Knowledge.</p>
                                </div>
                            </li>
                            <li>
                                <div class="news-img-holder">
                                    <a href="#"><img src="<?= base_url() ?>assets/frontend/img/news/3.jpg" class="img-responsive" alt="news"></a>
                                </div>
                                <div class="news-content-holder">
                                    <h3><a href="single-news.html">Easy English Learning Way</a></h3>
                                    <div class="post-date">June 15, 2017</div>
                                    <p>Pellentese turpis dignissim amet area ducation process facilitating Knowledge.</p>
                                </div>
                            </li>
                        </ul>
                        <div class="news-btn-holder">
                            <a href="#" class="view-all-accent-btn">View All</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 event-inner-area">
                        <h2 class="title-default-left">Campus Video Tour</h2>
                        <div class="video-area2 overlay-video bg-common-style wow fadeInRight" data-wow-duration="2s" data-wow-delay=".2s" style="background-image: url('<?= base_url() ?>assets/frontend/img/banner/2.jpg');">
                            <div class="video-content">
                                <a class="play-btn popup-youtube" href="http://www.youtube.com/watch?v=1iIZeIy7TqM"><i class="fa fa-play" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- News and Event Area End Here -->
        <!-- Countdown Area Start Here -->
        <div class="countdown-area bg-primary-deep-fixed" style="background-image: url('<?= base_url() ?>assets/frontend/img/banner/3.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
                        <div class="countdown-content">
                            <h1>Green Life Event</h1>
                            <div class="countdown-date"> On This 01 Jan, 2017</div>
                            <a href="#" class="ghost-btn">Join With Us</a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
                        <div class="countdown-content">
                            <div id="countdown"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Countdown Area End Here -->
        <!-- Publications Area Start Here -->
        <div class="publications-area">
            <div class="container">
                <h2 class="title-default-left">Our Publications</h2>
            </div>
            <div class="container">
                <div class="rc-carousel" data-loop="true" data-items="4" data-margin="30" data-autoplay="true" data-autoplay-timeout="10000" data-smart-speed="2000" data-dots="false" data-nav="true" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="true" data-r-x-small-dots="false" data-r-x-medium="2" data-r-x-medium-nav="true" data-r-x-medium-dots="false" data-r-small="3" data-r-small-nav="true" data-r-small-dots="false" data-r-medium="4" data-r-medium-nav="true" data-r-medium-dots="false" data-r-large="4" data-r-large-nav="true" data-r-large-dots="false">
                    <div class="single-item">
                        <div class="single-item-wrapper">
                            <div class="publications-img-wrapper">
                                <a href="#"><img class="img-responsive" src="<?= base_url() ?>assets/frontend/img/product/1.jpg" alt="product"></a>
                            </div>
                            <div class="publications-content-wrapper">
                                <h3 class="item-title"><a href="#">Robert - Philosophy</a></h3>
                                <span class="item-price">$350</span>
                            </div>
                            <div class="buy-now-btn-area">
                                <a href="#" class="ghost-btn">Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="single-item">
                        <div class="single-item-wrapper">
                            <div class="publications-img-wrapper">
                                <a href="#"><img class="img-responsive" src="<?= base_url() ?>assets/frontend/img/product/2.jpg" alt="product"></a>
                            </div>
                            <div class="publications-content-wrapper">
                                <h3 class="item-title"><a href="#">GMAT</a></h3>
                                <span class="item-price">$250</span>
                            </div>
                            <div class="buy-now-btn-area">
                                <a href="#" class="ghost-btn">Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="single-item">
                        <div class="single-item-wrapper">
                            <div class="publications-img-wrapper">
                                <a href="#"><img class="img-responsive" src="<?= base_url() ?>assets/frontend/img/product/3.jpg" alt="product"></a>
                            </div>
                            <div class="publications-content-wrapper">
                                <h3 class="item-title"><a href="#">Money Book - Finance</a></h3>
                                <span class="item-price">$430</span>
                            </div>
                            <div class="buy-now-btn-area">
                                <a href="#" class="ghost-btn">Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="single-item">
                        <div class="single-item-wrapper">
                            <div class="publications-img-wrapper">
                                <a href="#"><img class="img-responsive" src="<?= base_url() ?>assets/frontend/img/product/4.jpg" alt="product"></a>
                            </div>
                            <div class="publications-content-wrapper">
                                <h3 class="item-title"><a href="#">Service Marketing</a></h3>
                                <span class="item-price">$190</span>
                            </div>
                            <div class="buy-now-btn-area">
                                <a href="#" class="ghost-btn">Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="single-item">
                        <div class="single-item-wrapper">
                            <div class="publications-img-wrapper">
                                <a href="#"><img class="img-responsive" src="<?= base_url() ?>assets/frontend/img/product/1.jpg" alt="product"></a>
                            </div>
                            <div class="publications-content-wrapper">
                                <h3 class="item-title"><a href="#">Money Book - Finance</a></h3>
                                <span class="item-price">$430</span>
                            </div>
                            <div class="buy-now-btn-area">
                                <a href="#" class="ghost-btn">Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="single-item">
                        <div class="single-item-wrapper">
                            <div class="publications-img-wrapper">
                                <a href="#"><img class="img-responsive" src="<?= base_url() ?>assets/frontend/img/product/3.jpg" alt="product"></a>
                            </div>
                            <div class="publications-content-wrapper">
                                <h3 class="item-title"><a href="#">Service Marketing</a></h3>
                                <span class="item-price">$190</span>
                            </div>
                            <div class="buy-now-btn-area">
                                <a href="#" class="ghost-btn">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Publications Area End Here -->
        <!-- Students Join 3 Area Start Here -->
        <div class="students-join3-area">
            <div class="container">
                <div class="students-join3-wrapper">
                    <div class="students-join3-left">
                        <div id="ri-grid" class="author-banner-bg ri-grid header text-center">
                            <ul class="ri-grid-list">
                                <li>
                                    <a href="#"><img src="<?= base_url() ?>assets/frontend/img/students/student1.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?= base_url() ?>assets/frontend/img/students/student2.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?= base_url() ?>assets/frontend/img/students/student3.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?= base_url() ?>assets/frontend/img/students/student4.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?= base_url() ?>assets/frontend/img/students/student5.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?= base_url() ?>assets/frontend/img/students/student6.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?= base_url() ?>assets/frontend/img/students/student7.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?= base_url() ?>assets/frontend/img/students/student8.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?= base_url() ?>assets/frontend/img/students/student1.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?= base_url() ?>assets/frontend/img/students/student2.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?= base_url() ?>assets/frontend/img/students/student3.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?= base_url() ?>assets/frontend/img/students/student4.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?= base_url() ?>assets/frontend/img/students/student5.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?= base_url() ?>assets/frontend/img/students/student6.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?= base_url() ?>assets/frontend/img/students/student7.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?= base_url() ?>assets/frontend/img/students/student8.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?= base_url() ?>assets/frontend/img/students/student1.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?= base_url() ?>assets/frontend/img/students/student2.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?= base_url() ?>assets/frontend/img/students/student3.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?= base_url() ?>assets/frontend/img/students/student4.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?= base_url() ?>assets/frontend/img/students/student5.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?= base_url() ?>assets/frontend/img/students/student6.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?= base_url() ?>assets/frontend/img/students/student7.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?= base_url() ?>assets/frontend/img/students/student8.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?= base_url() ?>assets/frontend/img/students/student1.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?= base_url() ?>assets/frontend/img/students/student2.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?= base_url() ?>assets/frontend/img/students/student3.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?= base_url() ?>assets/frontend/img/students/student4.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?= base_url() ?>assets/frontend/img/students/student5.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?= base_url() ?>assets/frontend/img/students/student6.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?= base_url() ?>assets/frontend/img/students/student7.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?= base_url() ?>assets/frontend/img/students/student8.jpg" alt=""></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="students-join3-right">
                        <div>
                            <h2>Join<span> 29,12,093</span> Students.</h2>
                            <a href="#" class="join-now-btn">Join Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Students Join 3 Area End Here -->
        <!-- Brand Area Start Here -->
        <div class="brand-area">
            <div class="container">
                <div class="rc-carousel" data-loop="true" data-items="4" data-margin="30" data-autoplay="true" data-autoplay-timeout="5000" data-smart-speed="2000" data-dots="false" data-nav="false" data-nav-speed="false" data-r-x-small="2" data-r-x-small-nav="false" data-r-x-small-dots="false" data-r-x-medium="3" data-r-x-medium-nav="false" data-r-x-medium-dots="false" data-r-small="4" data-r-small-nav="false" data-r-small-dots="false" data-r-medium="4" data-r-medium-nav="false" data-r-medium-dots="false" data-r-large="4" data-r-large-nav="false" data-r-large-dots="false">
                    <div class="brand-area-box">
                        <a href="#"><img src="<?= base_url() ?>assets/frontend/img/brand/1.jpg" alt="brand"></a>
                    </div>
                    <div class="brand-area-box">
                        <a href="#"><img src="<?= base_url() ?>assets/frontend/img/brand/2.jpg" alt="brand"></a>
                    </div>
                    <div class="brand-area-box">
                        <a href="#"><img src="<?= base_url() ?>assets/frontend/img/brand/3.jpg" alt="brand"></a>
                    </div>
                    <div class="brand-area-box">
                        <a href="#"><img src="<?= base_url() ?>assets/frontend/img/brand/4.jpg" alt="brand"></a>
                    </div>
                    <div class="brand-area-box">
                        <a href="#"><img src="<?= base_url() ?>assets/frontend/img/brand/1.jpg" alt="brand"></a>
                    </div>
                    <div class="brand-area-box">
                        <a href="#"><img src="<?= base_url() ?>assets/frontend/img/brand/2.jpg" alt="brand"></a>
                    </div>
                    <div class="brand-area-box">
                        <a href="#"><img src="<?= base_url() ?>assets/frontend/img/brand/3.jpg" alt="brand"></a>
                    </div>
                    <div class="brand-area-box">
                        <a href="#"><img src="<?= base_url() ?>assets/frontend/img/brand/4.jpg" alt="brand"></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Brand Area End Here -->
        <!-- Footer Area Start Here -->
        <footer>
            <div class="footer-area-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-box">
                                <a href="index.html"><img class="img-responsive" src="<?= base_url() ?>assets/frontend/img/situbel.png" alt="logo"></a>
                                <div class="footer-about">
                                    <p>Praesent vel rutrum purus. Nam vel dui eu sus duis dignissim dignissim. Suspenetey disse at ros tecongueconsequat.Fusce sit amet rna feugiat.</p>
                                </div>
                                <ul class="footer-social">
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-box">
                                <h3>Featured Links</h3>
                                <ul class="featured-links">
                                    <li>
                                        <ul>
                                            <li><a href="#">Graduation</a></li>
                                            <li><a href="#">Admissions</a></li>
                                            <li><a href="https://www.theidioms.com">Idioms</a></li>
                                            <li><a href="#">FAQs</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul>
                                            <li><a href="#">Courses</a></li>
                                            <li><a href="#">About Us</a></li>
                                            <li><a href="#">Book store</a></li>
                                            <li><a href="#">Alumni</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-box">
                                <h3>Information</h3>
                                <ul class="corporate-address">
                                    <li><i class="fa fa-phone" aria-hidden="true"></i><a href="Phone:(01)800433633"> (01) 800 433 633 </a></li>
                                    <li><i class="fa fa-envelope-o" aria-hidden="true"></i>info@bostonea.com</li>
                                </ul>
                                <div class="newsletter-area">
                                    <h3>Newsletter</h3>
                                    <div class="input-group stylish-input-group">
                                        <input type="text" placeholder="Enter your e-mail here" class="form-control">
                                        <span class="input-group-addon">
                                                <button type="submit">
                                                    <i class="fa fa-paper-plane" aria-hidden="true"></i>
                                                </button>  
                                            </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-box">
                                <h3>Flickr Photos</h3>
                                <ul class="flickr-photos">
                                    <li>
                                        <a href="#"><img class="img-responsive" src="<?= base_url() ?>assets/frontend/img/footer/1.jpg" alt="flickr"></a>
                                    </li>
                                    <li>
                                        <a href="#"><img class="img-responsive" src="<?= base_url() ?>assets/frontend/img/footer/2.jpg" alt="flickr"></a>
                                    </li>
                                    <li>
                                        <a href="#"><img class="img-responsive" src="<?= base_url() ?>assets/frontend/img/footer/3.jpg" alt="flickr"></a>
                                    </li>
                                    <li>
                                        <a href="#"><img class="img-responsive" src="<?= base_url() ?>assets/frontend/img/footer/4.jpg" alt="flickr"></a>
                                    </li>
                                    <li>
                                        <a href="#"><img class="img-responsive" src="<?= base_url() ?>assets/frontend/img/footer/5.jpg" alt="flickr"></a>
                                    </li>
                                    <li>
                                        <a href="#"><img class="img-responsive" src="<?= base_url() ?>assets/frontend/img/footer/6.jpg" alt="flickr"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-area-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                            <p>&copy; 2020 Academics All Rights Reserved.</p>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <ul class="payment-method">
                                <li>
                                    <a href="#"><img alt="payment-method" src="<?= base_url() ?>assets/frontend/img/payment-method1.jpg"></a>
                                </li>
                                <li>
                                    <a href="#"><img alt="payment-method" src="<?= base_url() ?>assets/frontend/img/payment-method2.jpg"></a>
                                </li>
                                <li>
                                    <a href="https://theidioms.com"><img alt="Idioms" src="<?= base_url() ?>assets/frontend/img/payment-method3.jpg"></a>
                                </li>
                                <li>
                                    <a href="#"><img alt="payment-method" src="<?= base_url() ?>assets/frontend/img/payment-method4.jpg"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Area End Here -->
    </div>
    <!-- Main Body Area End Here -->
    <!-- jquery-->
    <script src="<?= base_url() ?>assets/frontend/js/jquery-2.2.4.min.js" type="text/javascript"></script>
    <!-- Plugins js -->
    <script src="<?= base_url() ?>assets/frontend/js/plugins.js" type="text/javascript"></script>
    <!-- Bootstrap js -->
    <script src="<?= base_url() ?>assets/frontend/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- WOW JS -->
    <script src="<?= base_url() ?>assets/frontend/js/wow.min.js"></script>
    <!-- Nivo slider js -->
    <script src="<?= base_url() ?>assets/frontend/vendor/slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>assets/frontend/vendor/slider/home.js" type="text/javascript"></script>
    <!-- Owl Cauosel JS -->
    <script src="<?= base_url() ?>assets/frontend/vendor/OwlCarousel/owl.carousel.min.js" type="text/javascript"></script>
    <!-- Meanmenu Js -->
    <script src="<?= base_url() ?>assets/frontend/js/jquery.meanmenu.min.js" type="text/javascript"></script>
    <!-- Srollup js -->
    <script src="<?= base_url() ?>assets/frontend/js/jquery.scrollUp.min.js" type="text/javascript"></script>
    <!-- jquery.counterup js -->
    <script src="<?= base_url() ?>assets/frontend/js/jquery.counterup.min.js"></script>
    <script src="<?= base_url() ?>assets/frontend/js/waypoints.min.js"></script>
    <!-- Countdown js -->
    <script src="<?= base_url() ?>assets/frontend/js/jquery.countdown.min.js" type="text/javascript"></script>
    <!-- Isotope js -->
    <script src="<?= base_url() ?>assets/frontend/js/isotope.pkgd.min.js" type="text/javascript"></script>
    <!-- Magic Popup js -->
    <script src="<?= base_url() ?>assets/frontend/js/jquery.magnific-popup.min.js" type="text/javascript"></script>
    <!-- Gridrotator js -->
    <script src="<?= base_url() ?>assets/frontend/js/jquery.gridrotator.js" type="text/javascript"></script>
    <!-- Custom Js -->
    <script src="<?= base_url() ?>assets/frontend/js/main.js" type="text/javascript"></script>
</body>

</html>
