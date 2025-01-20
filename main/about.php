<?php

include "dataconnection.php";
session_start();

if (isset($_SESSION["sess_id"]))
{
    $sess_id = $_SESSION["sess_id"]; 

    // find from the admintbl the record related to this Primary key
    $get_cust = mysqli_query($conn, "select * from customer where cust_id = '$sess_id'");

    // Retrieve the record
    $cust_rec = mysqli_fetch_assoc($get_cust);
}
?>


<!DOCTYPE html>
<html lang="zxx">
<!-- Mirrored from storage.googleapis.com/theme-vessel-items/checking-sites-2/wain-html/HTML/main/about-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Dec 2024 12:34:29 GMT -->
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
                    <?php
                        if (isset($_SESSION["sess_id"])) 
                        {
                            ?>
                            <a class="navbar-brand logo navbar-brand d-flex mr-auto" href="landing.php">
                                <img src="assets/img/logos/logo.png" alt="logo">
                            </a>
                            <?php
                        }
                        else
                        {
                            ?>
                            <a class="navbar-brand logo navbar-brand d-flex mr-auto" href="index.php">
                                <img src="assets/img/logos/logo.png" alt="logo">
                            </a>
                            <?php
                        }
                    ?>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="fa fa-bars"></span>
                    </button>
                    <div class="navbar-collapse collapse w-100" id="navbar">
                        <ul class="navbar-nav ml-auto">
                            <?php
                                if (isset($_SESSION["sess_id"])) 
                                {
                                    ?>
                                    <li class="nav-item dropdown active">
                                        <a class="nav-link dropdown-toggle" href="landing.php" id="navbarDropdownMenuLink">
                                            Home
                                        </a>
                                    </li>
                                    <?php
                                }
                                else
                                {
                                    ?>
                                        <li class="nav-item dropdown active">
                                        <a class="nav-link dropdown-toggle" href="index.php" id="navbarDropdownMenuLink">
                                            Home
                                        </a>
                                    </li>
                                    <?php
                                }
                            ?>
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
                                <a class="nav-link dropdown-toggle" href="contact.php" id="navbarDropdown3">
                                    Contact
                                </a>
                            </li>
                            <li class="nav-item dropdown">

                            <?php
                                if (isset($_SESSION["sess_id"])) 
                                {
                                    ?>
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <?php echo $cust_rec["cust_name"]; ?>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
                                        <a class="dropdown-item" href="profile.php">Profile</a>
                                        <a class="dropdown-item" href="logout.php">Log Out</a>
                                    </div>
                                        <?php
                                } 
                                else 
                                {
                                    // If the session does not exist
                                    ?>
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Account
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
                                        <a class="dropdown-item" href="login.php">Login</a>
                                        <a class="dropdown-item" href="register.php">Register</a>
                                    </div>
                                    <?php
                                }
                                ?>
                                
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#full-page-search" class="nav-link">
                                    <i class="fa fa-search"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- main header end -->

<!-- Sub banner start -->
<div class="sub-banner overview-bgi">
    <div class="container">
        <div class="page-name">
            <h1>About Us</h1>
        </div>
    </div>
    <div class="page-info">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="breadcrumb-area">
                        <ul>
                            <li><a href="index.html">Index</a></li>
                            <li><span>/</span>About Us</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="contact-info">
                        <ul>
                            <li><i class="fa fa-phone"></i>+60185754753 / +60197784913</li>
                            <li><a href="contact-1.html" class="btn btn-md btn-theme">Contact us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Sub banner end -->

<!-- About us start -->
<div class="about-us content-area-7">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="car-service-v">
                    <iframe src="https://www.youtube.com/embed/m5_AKjDdqaU"></iframe>
                </div>
            </div>
            <div class="col-lg-6 align-self-center">
                <div class="about-text">
                    <h3>Welcome to CARWOW</h3>
                    <p>CARWOW is Southeast Asia’s largest integrated car e-commerce platform.
                        With presence across Malaysia, Indonesia, Thailand and Singapore,
                        we aim to digitalize the region’s used car industry by reshaping and
                        elevating the car buying and selling experience.

                        CARMART provides end-to-end solutions to consumers and used car dealers,
                        from car inspection to ownership transfer to financing, promising a service that is
                        trusted, convenient and efficient.
                    </p>
					<h3>Why Choose Us</h3>
					<p>You can buy from CARWOW to enjoy a trusted and easy end-to-end car buying experience.

                        Firstly, we inspect all our cars at 175 inspection points to ensure they're roadworthy
                        and free of major accidents, fire, flood damage and mileage tampering. When it comes
                        to the buying process, it is worry-free as we offer end-to-end assistance every step
                        of the way including help with your car booking, paperwork, loan application, and even doorstep delivery.

                        You are welcome to test drive our cars at your convenience as we are open 7 days a week.
                        All the information about our cars is clearly displayed in our inspection report on our website so
                        you can know the exact car condition. You can even view the car through the high resolution
                        360-degree view of the car's interior and exterior.

                        The listed price is the final price, without any hidden fees, so you know exactly how much you
                        are paying for the car. With one of the widest and largest selections of cars in Malaysia in our inventory,
                        there's surely one that fits your needs.

                        Vision
                        To create the most trusted vehicle ownership ecosystem powered by technology and data
                        Mission
                        To provide our customers with peace of mind through the entire lifecycle of their pre-owned vehicle ownership experience
					</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About us end -->

<!-- services 3 start -->
<div class="services-3 bg-light">
    <div class="container">
        <div class="main-title">
            <h1><span>Our</span> Services</h1>
            <p>Check out our featured vehicles</p>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="services-info-3">
                            <i class="flaticon-car-2"></i>
                            <h5>Air Conditionninds</h5>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="services-info-3">
                            <i class="flaticon-transport-3"></i>
                            <h5>Oll Changes</h5>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="services-info-3">
                            <i class="flaticon-lock"></i>
                            <h5>Security</h5>
						</div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="services-info-3">
                            <i class="flaticon-people"></i>
                            <h5>Free Support Anytime</h5>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="services-info-3">
                            <i class="flaticon-technology"></i>
                            <h5>Electrical Works</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- services end -->

<!-- agent start -->
<div class="testimonial testimonial-3">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="testimonial-inner">
                    <header class="testimonia-header">
                        <h1><span>Our</span> Team</h1>
                    </header>
                    <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <p class="lead">
                                    “There's nothing I can't find, only what you can't think of”
                                </p>
                                <div class="avatar">
                                    <img src="assets/img/avatar/avatar-2.jpg" alt="avatar-2" class="img-fluid rounded">
                                </div>
                                <div class="author-name">
                                    Jia Heng
                                </div>
                            </div>
                            <div class="carousel-item">
                                <p class="lead">
                                    “Any issues? Just contact me!”
                                </p>
                                <div class="avatar">
                                    <img src="assets/img/avatar/avatar.jpg" alt="avatar" class="img-fluid rounded">
                                </div>
                                <div class="author-name">
                                    Beaven Lee
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- agent end -->

<!-- Counters start -->
<div class="counters overview-bgi">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="media counter-box">
                    <div class="media-left">
                        <i class="flaticon-transport-5"></i>
                    </div>
                    <div class="media-body">
                        <h1 class="counter">500</h1>
                        <p>Vehicles Plus</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="media counter-box">
                    <div class="media-left">
                        <i class="flaticon-interface"></i>
                    </div>
                    <div class="media-body">
                        <h1 class="counter">500</h1>
                        <p>Dealer Reviews</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="media counter-box">
                    <div class="media-left">
                        <i class="flaticon-cup"></i>
                    </div>
                    <div class="media-body">
                        <h1 class="counter">500</h1>
                        <p>Winning Awards</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="media counter-box">
                    <div class="media-left">
                        <i class="flaticon-profile"></i>
                    </div>
                    <div class="media-body">
                        <h1 class="counter">500</h1>
                        <p>Happy Clients</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Counters end -->

<!-- Testimonial 3 start -->
<div class="testimonial testimonial-3">
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
                                <p class="lead">
                                    “Thank god all the process going so smooth and very fast recommended to buy new car from carmart”
                                </p>
                                <div class="avatar">
                                    <img src="assets/img/avatar/avatar-2.jpg" alt="avatar-2" class="img-fluid rounded">
                                </div>
                                <ul class="rating">
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star-half-full"></i>
                                    </li>
                                </ul>
                                <div class="author-name">
                                    Li Sheng
                                </div>
                            </div>
                            <div class="carousel-item">
                                <p class="lead">
                                    “Put more option, model of car and more voucher for buyer”
                                </p>
                                <div class="avatar">
                                    <img src="assets/img/avatar/avatar.jpg" alt="avatar" class="img-fluid rounded">
                                </div>
                                <ul class="rating">
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star-half-full"></i>
                                    </li>
                                </ul>
                                <div class="author-name">
                                    Ivan Tan
                                </div>
                            </div>
                            <div class="carousel-item">
                                <p class="lead">
                                    "The ordering process was so simple, and the product arrived quickly! The quality is excellent, and it looks even better than the photos. I’ll definitely be shopping here again!"
                                </p>
                                <div class="avatar">
                                    <img src="assets/img/avatar/avatar-3.jpg" alt="avatar-3" class="img-fluid rounded">
                                </div>
                                <ul class="rating">
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star-half-full"></i>
                                    </li>
                                </ul>
                                <div class="author-name">
                                    Gao Lao
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial 3 end -->

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
                        <a class="pr-3" href="car-details.html">
                            <img src="assets/img/sub-car/sub-car.jpg" alt="car">
                        </a>
                        <div class="media-body align-self-center">
                            <h5>
                                <a href="car-details.html">2016 Audi S5 Coupe</a>
                            </h5>
                            <p>November 27, 2024</p>
                            <p> <strong>RM 245,000</strong></p>
                        </div>
                    </div>
                    <div class="media mb-4">
                        <a class="pr-3" href="car-details.html">
                            <img src="assets/img/sub-car/sub-car-2.jpg" alt="car">
                        </a>
                        <div class="media-body align-self-center">
                            <h5>
                                <a href="car-details.html">2016 Audi R8</a>
                            </h5>
                            <p>December 2, 2024</p>
                            <p> <strong>RM 545,000</strong></p>
                        </div>
                    </div>
                    <div class="media">
                        <a class="pr-3" href="car-details.html">
                            <img src="assets/img/sub-car/sub-car-3.jpg" alt="car">
                        </a>
                        <div class="media-body align-self-center">
                            <h5>
                                <a href="car-details.html">Read Audi A7 TDI</a>
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
<script src="assets/js/ie-emulation-modes-warning.js"></script>
<!-- Custom JS Script -->
<script  src="assets/js/app.js"></script>
</body>

<!-- Mirrored from storage.googleapis.com/theme-vessel-items/checking-sites-2/wain-html/HTML/main/about-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Dec 2024 12:34:29 GMT -->
</html>