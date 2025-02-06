<?php

include "dataconnection.php";
session_start();

// get the session that keeps the Primary key
$sess_id = $_SESSION["sess_id"]; 

// find from the admintbl the record related to this Primary key
$get_cust = mysqli_query($conn, "select * from customer where cust_id = '$sess_id'");

// Retrieve the record
$cust_rec = mysqli_fetch_assoc($get_cust);

?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        '../../../../../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-TAGID');</script>
    <!-- End Google Tag Manager -->
    <title>CARWOW</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <!-- External CSS libraries -->
    <link type="text/css" rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="assets/css/magnific-popup.css">
    <link type="text/css" rel="stylesheet" href="assets/css/jquery.selectBox.css">
    <link type="text/css" rel="stylesheet" href="assets/css/dropzone.css">
    <link type="text/css" rel="stylesheet" href="assets/css/rangeslider.css">
    <link type="text/css" rel="stylesheet" href="assets/css/animate.min.css">
    <link type="text/css" rel="stylesheet" href="assets/css/slick.css">
    <link type="text/css" rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.css">
    <link type="text/css" rel="stylesheet" href="assets/fonts/font-awesome/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="assets/fonts/flaticon/font/flaticon.css">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="assets\img\logos\photo_logo.jpg" type="image/x-icon" >

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPlayfair+Display:400,700%7CRoboto:100,300,400,400i,500,700">

    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="assets/css/skins/default.css">

</head>
<body id="top">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TAGID"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="page_loader"></div>

<!-- main header start -->
<header class="main-header sticky-header" id="main-header-2">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg navbar-light rounded">
                    <a class="navbar-brand logo navbar-brand d-flex mr-auto" href="landing.php">
                        <img src="assets/img/logos/logo.png" alt="logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="fa fa-bars"></span>
                    </button>
                    <div class="navbar-collapse collapse w-100" id="navbar">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item dropdown active">
                                <a class="nav-link dropdown-toggle" href="landing.php" id="navbarDropdownMenuLink">
                                    Home
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="car-list.php" id="">
                                    Vehicle
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown4" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Page
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
                                    <a class="dropdown-item" href="about.php">About</a>
                                    <a class="dropdown-item" href="faq.php">Faq</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="shop-cart.php" id="">
                                            Cart
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="orderlist.php" id="">
                                            Order
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="contact.php" id="navbarDropdown3">
                                    Contact
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <?php echo $cust_rec["cust_name"] ?>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
                                    <a class="dropdown-item" href="profile.php">Profile</a>
                                    <a class="dropdown-item" href="logout.php">Log Out</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- main header end -->

<div class="banner banner-bg" id="particles-banner-wrapper">
    <div id="particles-banner"></div>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item item-bg active">
                <div class="carousel-caption banner-slider-inner d-flex h-100 text-left">
                    <div class="carousel-content container">
                        <div class="text-left max-w">
                            <h3 data-animation="animated fadeInDown delay-05s">We love make things <br/>amazing and simple</h3>
                            <a data-animation="animated fadeInUp delay-10s" href="car-list.php" class="btn btn-lg btn-round btn-theme">Get Started Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- banner end -->

<!-- Selcome section start -->
<div class="welcome-section content-area-7">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-12 wow fadeInLeft delay-04s">
                <div class="text">
                    <h1><span>Why</span> Choose Us?</h1>
                    <p>
                    "At CARWOW, we pride ourselves on offering quality, inspected vehicles at competitive prices. With a diverse selection of cars, transparent pricing, and flexible financing options, we make finding your perfect vehicle easy and stress-free. Our friendly and knowledgeable team is committed to providing exceptional customer service and ensuring your satisfaction every step of the way. Choose us for a hassle-free car-buying experience you can trust."</p>
                    <a href="car-details.html" class="btn btn-lg btn-round btn-theme">View Details</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 offset-lg-1 wow fadeInRight delay-04s">
                <div class="car-slider">
                    <div id="carouselExampleIndicators-managment" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators-managment" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators-managment" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators-managment" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100 img-fluid" src="assets/img/welcome-4.png" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100 img-fluid" src="assets/img/welcome-5.png" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100 img-fluid" src="assets/img/welcome-6.png" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Selcome section end -->

<!-- Latest offest start -->
<div class="latest-offest content-area-22">
    <div class="container">
        <div class="main-title">
            <h1><span>Latest</span> Offest</h1>
            <p>Check out our latest offest</p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-pad wow fadeInRight delay-04s">
                    <div class="overview aa overview-box">
                        <img src="assets/img/latest-car/latest-car-3.jpg" alt="latest-car" class="big-img">
                        <div class="mask">
                            <h2>Malaysia</h2>
                            <p>30 Car</p>
                            <a href="car-list.php" class="btn btn-border">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Latest offest end -->

<!-- Agent start -->
<div class="agent content-area-2 bg-grea">
    <div class="container">
        <div class="main-title">
            <h1><span>Our</span> Agent</h1>
            <p>Meet our small team that make those great products.</p>
        </div>

        <div class="slick-slider-area">
            <div class="row slick-carousel" data-slick='{"slidesToShow": 2, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>
                <div class="slick-slide-item">
                    <div class="row agent-5">
                        <div class="col-xl-5 col-lg-5 col-md-12 col-pad ">
                            <div class="photo">
                                <img src="assets/img/avatar/jiaheng.jpeg" alt="agent-list-2" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7 col-md-12 col-pad align-self-center">
                            <div class="detail">
                                <h5>Creative Director</h5>
                                <h4>
                                    <p>Jia Heng</p>
                                </h4>

                                <div class="contact">
                                    <ul>
                                        <li>
                                            <span>Address:</span><a href=""> Melaka, Malaysia</a>
                                        </li>
                                        <li>
                                            <span>Email:</span><a href="mailto:info@themevessel.com"> carwow@gmail.com</a>
                                        </li>
                                        <li>
                                            <span>Mobile:</span><a href="tel:+554XX-634-7071"> +60185754753</a>
                                        </li>
                                    </ul>
                                </div>

                                <ul class="social-list clearfix">
                                    <li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" class="google-bg"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#" class="linkedin-bg"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="row agent-5">
                        <div class="col-xl-5 col-lg-5 col-md-12 col-pad ">
                            <div class="photo">
                                <img src="assets/img/avatar/beaven.jpeg" alt="agent-list-10" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7 col-md-12 col-pad align-self-center">
                            <div class="detail">
                                <h5>Office Manager</h5>
                                <h4>
                                    <p>Beaven</p>
                                </h4>

                                <div class="contact">
                                    <ul>
                                        <li>
                                            <span>Address:</span><a href="#"> Melaka, Malaysia</a>
                                        </li>
                                        <li>
                                            <span>Email:</span><a href="mailto:info@themevessel.com"> carwow@gmail.com</a>
                                        </li>
                                        <li>
                                            <span>Mobile:</span><a href="tel:+554XX-634-7071"> +60197784913</a>
                                        </li>
                                    </ul>
                                </div>

                                <ul class="social-list clearfix">
                                    <li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" class="google-bg"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#" class="linkedin-bg"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Agent end -->

<!-- Testimonial start -->
<div class="testimonial overview-bgi wow fadeInUp delay-04s" style="background-image: url(assets/img/banner-2.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="testimonial-inner">
                    <header class="testimonia-header">
                        <h1><span>Our</span> Testimonial</h1>
                    </header>
                    <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="avatar">
                                    <img src="assets/img/avatar/avatar.jpg" alt="avatar" class="img-fluid rounded-circle">
                                </div>
                                <p class="lead">
                                I was nervous about buying a secondhand car, but the team made the process so easy! They answered all my questions and helped me find the perfect car for my budget. I've been driving it for six months now, and it's been amazing!
                                </p>
                                <div class="author-name">
                                    Dua lam Pa
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="avatar">
                                    <img src="assets/img/avatar/avatar-2.jpg" alt="avatar-2" class="img-fluid rounded-circle">
                                </div>
                                <p class="lead">
                                I’ve bought two cars from this company, and both were in excellent condition and fairly priced. They even offered a free vehicle history report, which gave me peace of mind. I wouldn’t go anywhere else!
                                </p>
                                <div class="author-name">
                                    Go Se Qi
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="avatar">
                                    <img src="assets/img/avatar/avatar-3.jpg" alt="avatar-3" class="img-fluid rounded-circle">
                                </div>
                                <p class="lead">
                                Buying my car here was a fantastic experience. They were so professional and friendly, and they even helped me arrange financing. I’ll definitely be back when it’s time for an upgrade!
                                </p>
                                <div class="author-name">
                                    Black Samurai
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial end -->

<!-- Footer start -->
<footer class="footer">
    <div class="container footer-inner">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="footer-item">
                    <h4>Contact Us</h4>
                    <div class="f-border"></div>
                    <ul class="contact-info">
                        <li>
                            Address: Melaka, Malaysia
                        </li>
                        <li>
                            Email: carwow@gmail.com
                        </li>
                        <li>
                            Phone: +60185754753
                        </li>
                    </ul>

                    <ul class="social-list clearfix">
                        <li><a href="#" class="facebook-bgh"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="twitter-bgh"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="google-bgh"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="rss-bgh"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#" class="linkedin-bgh"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
			
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="recent-posts footer-item">
                    <h4>Recent Posts</h4>
                    <div class="f-border"></div>
                    <div class="media mb-4">
                    <a class="pr-3" href="car-list.php">
                            <img src="assets/img/sub-car/sub-car.jpg" alt="car">
                        </a>
                        <div class="media-body align-self-center">
                            <h5>
                                <a href="car-list.php">2016 Audi S5 Coupe</a>
                            </h5>
                            <p>November 27, 2024</p>
                            <p> <strong>RM 245,000</strong></p>
                        </div>
                    </div>
                    <div class="media mb-4">
                        <a class="pr-3" href="car-list.php">
                            <img src="assets/img/sub-car/sub-car-2.jpg" alt="car">
                        </a>
                        <div class="media-body align-self-center">
                            <h5>
                                <a href="car-list.php">2016 Audi R8</a>
                            </h5>
                            <p>December 2, 2024</p>
                            <p> <strong>RM 545,000</strong></p>
                        </div>
                    </div>
                    <div class="media">
                        <a class="pr-3" href="car-list.php">
                            <img src="assets/img/sub-car/sub-car-3.jpg" alt="car">
                        </a>
                        <div class="media-body align-self-center">
                            <h5>
                                <a href="car-list.php">Read Audi A7 TDI</a>
                            </h5>
                            <p>December 27, 2024</p>
                            <p> <strong>RM 345,000</strong></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12">
                <p class="copy">&copy;  2024 <a href="http://themevessel.com/" target="_blank">CARWOW</a>. All right reserved</p>
            </div>
        </div>
    </div>
</footer>
<!-- Footer end -->

<!-- Full Page Search -->
<div id="full-page-search">
    <button type="button" class="close">×</button>
    <form action="#">
        <input type="search" value="" placeholder="type keyword(s) here" />
        <button type="button" class="btn btn-sm btn-color">Search</button>
    </form>
</div>

<!-- Off-canvas sidebar -->
<div class="off-canvas-sidebar">
    <div class="off-canvas-sidebar-wrapper">
        <div class="off-canvas-header">
            <a class="close-offcanvas" href="#"><span class="fa fa-times"></span></a>
        </div>
        <div class="off-canvas-content">
            <aside class="canvas-widget">
                <div class="logo text-center">
                    <img src="assets/img/logos/logo.png" alt="logo">
                </div>
            </aside>
            <aside class="canvas-widget">
                <ul class="menu">
                    <li class="menu-item menu-item-has-children"><a href="index.html">Home</a></li>
                    <li class="menu-item"><a href="car-grid-leftside.html">Car List</a></li>
                    <li class="menu-item"><a href="car-details.html">Car Detail</a></li>
                    <li class="menu-item"><a href="blog-single-sidebar-right.html">Blog</a></li>
                    <li class="menu-item"><a href="about-1.html">About  US</a></li>
                    <li class="menu-item"><a href="contact-1.html">Contact US</a></li>
                </ul>
            </aside>
            <aside class="canvas-widget">
                <ul class="social-icons">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-vk"></i></a></li>
                </ul>
            </aside>
        </div>
    </div>
</div>

<!-- External JS libraries -->
<script src="assets/js/jquery-2.2.0.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.selectBox.js"></script>
<script src="assets/js/rangeslider.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/jquery.filterizr.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/backstretch.js"></script>
<script src="assets/js/jquery.countdown.js"></script>
<script src="assets/js/jquery.scrollUp.js"></script>
<script src="assets/js/particles.min.js"></script>
<script src="assets/js/typed.min.js"></script>
<script src="assets/js/dropzone.js"></script>
<script src="assets/js/jquery.mb.YTPlayer.js"></script>
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0N5pbJN10Y1oYFRd0MJ_v2g8W2QT74JE"></script>
<script src="assets/js/ie-emulation-modes-warning.js"></script>
<!-- Custom JS Script -->
<script  src="assets/js/app.js"></script>
</body>

<!-- Mirrored from storage.googleapis.com/theme-vessel-items/checking-sites-2/wain-html/HTML/main/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Dec 2024 12:34:26 GMT -->
</html>