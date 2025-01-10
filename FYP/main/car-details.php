<?php

include "dataconnection.php";

?>

<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from storage.googleapis.com/theme-vessel-items/checking-sites-2/wain-html/HTML/main/car-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Dec 2024 12:34:28 GMT -->
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        '../../../../../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-TAGID');</script>
    <!-- End Google Tag Manager -->
    <title>WAIN - Car Dealer HTML Template</title>
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
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" >

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
                    <a class="navbar-brand logo navbar-brand d-flex mr-auto" href="index.php">
                        <img src="assets/img/logos/logo.png" alt="logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="fa fa-bars"></span>
                    </button>
                    <div class="navbar-collapse collapse w-100" id="navbar">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item dropdown active">
                                <a class="nav-link dropdown-toggle" href="register.php" id="navbarDropdownMenuLink">
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
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown4" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Shop
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
                                    <a class="dropdown-item" href="shop-cart.php">Shop Cart</a>
                                    <a class="dropdown-item" href="shop-checkout.php">Shop Checkout</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="contact.php" id="navbarDropdown3">
                                    Contact
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Account
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
                                    <a class="dropdown-item" href="login.php">Login</a>
                                    <a class="dropdown-item" href="register.php">Register</a>
                                </div>
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
            <h1>Car Detail</h1>
        </div>
    </div>
    <div class="page-info">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="breadcrumb-area">
                        <ul>
                            <li><a href="index.php">Index</a></li>
                            <li><span>/</span>Car Detail</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="contact-info">
                        <ul>
                            <li><i class="fa fa-phone"></i> +60185754753 / +60197784913</li>
                            <li><a href="contact.php" class="btn btn-md btn-theme">Contact us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Sub banner end -->

<!-- Car details page start -->
<div class="car-details-page content-area-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-xs-12 slider">
                <div id="carDetailsSlider" class="carousel car-details-sliders slide mb-60">
                    <!-- main slider carousel items -->
                    <div class="carousel-inner">
                        <div class="active item carousel-item" data-slide-number="0">
                            <img src="assets/img/car-2.jpg" class="img-fluid" alt="car-Slider">
                        </div>
                        <div class="item carousel-item" data-slide-number="1">
                            <img src="assets/img/car-6.jpg" class="img-fluid" alt="car-Slider">
                        </div>
                        <div class="item carousel-item" data-slide-number="2">
                            <img src="assets/img/car-1.jpg" class="img-fluid" alt="car-Slider">
                        </div>
                        <div class="item carousel-item" data-slide-number="4">
                            <img src="assets/img/car-4.jpg" class="img-fluid" alt="car-Slider">
                        </div>
                        <div class="item carousel-item" data-slide-number="5">
                            <img src="assets/img/car-5.jpg" class="img-fluid" alt="car-Slider">
                        </div>
                    </div>
                    <!-- main slider carousel nav controls -->
                    <ul class="carousel-indicators smail-car list-inline nav nav-justified">
                        <li class="list-inline-item active">
                            <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#carDetailsSlider">
                                <img src="assets/img/car-2.jpg" class="img-fluid" alt="sub-car">
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a id="carousel-selector-1" data-slide-to="1" data-target="#carDetailsSlider">
                                <img src="assets/img/car-6.jpg" class="img-fluid" alt="sub-car">
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a id="carousel-selector-2" data-slide-to="2" data-target="#carDetailsSlider">
                                <img src="assets/img/car-1.jpg" class="img-fluid" alt="sub-car">
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a id="carousel-selector-3" data-slide-to="3" data-target="#carDetailsSlider">
                                <img src="assets/img/car-4.jpg" class="img-fluid" alt="sub-car">
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a id="carousel-selector-4" data-slide-to="4" data-target="#carDetailsSlider">
                                <img src="assets/img/car-5.jpg" class="img-fluid" alt="sub-car">
                            </a>
                        </li>
                    </ul>
                    <div class="heading-car">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="pull-left">
                                    <h3>Lexus ct 2018</h3>
                                    <p><i class="fa fa-map-marker"></i> 123 Kathal St. Tampa City,</p>
                                </div>
                                <div class="pull-right">
                                    <h3><span class="text-right">$420,00</span></h3>
                                    <h5>Per Night</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Car meta start -->
                <div class="car-meta mb-60">
                    <ul>
                        <li>
                            <i class="flaticon-road"></i>
                            <p>12000</p>
                        </li>
                        <li>
                            <i class="flaticon-transport-4"></i>
                            <p>Sport Car</p>
                        </li>
                        <li>
                            <i class="flaticon-petrol"></i>
                            <p>Diesel</p>
                        </li>
                        <li>
                            <i class="flaticon-camera"></i>
                            <p>Automatic</p>
                        </li>
                    </ul>
                </div>
                <!-- Specifications start -->
                <div >
                    <h5 class="sidebar-title">Specifications</h5>
                    <ul>
                        <li>
                            <span>Brand</span>Toyota
                        </li>
                        <li>
                            <span>Model</span>Maxima
                        </li>
                        <li>
                            <span>Body Style</span>Convertible
                        </li>
                        <li>
                            <span>Year</span>2018
                        </li>
                        <li>
                            <span>Mileage</span>37,000 mi
                        </li>
                        <li>
                            <span>Color</span>Dark Grey
                        </li>
                        <li>
                            <span>Engine</span>3.4L Mid-Engine V6
                        </li>
                    </ul>
                </div>
                <!-- Tabbing box start -->
                <div class="tabbing tabbing-box mb-60">
                    <ul class="nav nav-tabs" id="carTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active show" id="one-tab" data-toggle="tab" href="#one" role="tab" aria-controls="one" aria-selected="false">Vehicle Overview</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="two-tab" data-toggle="tab" href="#two" role="tab" aria-controls="two" aria-selected="false">Features & Options</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="three-tab" data-toggle="tab" href="#three" role="tab" aria-controls="three" aria-selected="true">Video</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="4-tab" data-toggle="tab" href="#4" role="tab" aria-controls="4" aria-selected="true">Location</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="5-tab" data-toggle="tab" href="#5" role="tab" aria-controls="5" aria-selected="true">Contact</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="carTabContent">
                        <div class="tab-pane fade active show" id="one" role="tabpanel" aria-labelledby="one-tab">
                            <h3 class="heading">Car Description</h3>
                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus tincidunt aliquam. Aliquam gravida massa at sem vulputate interdum et vel eros. Maecenas eros enim, tincidunt vel turpis vel,dapibus tempus nulla. Donec vel nulla dui. Pellentesque sed ante sed ligula hendrerit condimentum.
                            Suspendisse rhoncus fringilla ipsum quis porta. Morbi tincidunt viverra pharetra.</p>
                            <p>Vestibulum vel mauris et odio lobortis laoreet eget eu magna. Proin mauris erat, luctus at nulla ut, lobortis mattis magna. Morbi a arcu lacus. Maecenas tristique velit vitae nisi consectetur, in mattis diam sodales. Mauris sagittis sem mattis justo bibendum, a eleifend dolor facilisis. Mauris
                                nec pharetra tortor, ac aliquam felis. Nunc pretium erat sed quam consectetur fringilla.</p>
                            <p>Aliquam ultricies nunc porta metus interdum mollis. Donec porttitor libero augue, vehicula tincidunt lectus placerat a. Sed tincidunt dolor non sem dictum dignissim. Nulla vulputate orci felis, ac ornare purus ultricies a. Fusce euismod magna orci, sit amet aliquam turpis dignissim ac. In at
                                tortor at ligula pharetra sollicitudin. Sed tincidunt, purus eget laoreet elementum, felis est pharetra ante, tincidunt feugiat libero enim sed risus.</p>
                            <p>Sed at leo sit amet mi bibendum aliquam. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent cursus varius odio, non faucibus dui. Nunc vehicula lectus sed velit suscipit aliquam vitae eu ipsum. adipiscing elit.</p>
                        </div>
                        <div class="tab-pane fade" id="two" role="tabpanel" aria-labelledby="two-tab">
                            <div class="features-opions features-opions-2 mb-60">
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <ul>
                                            <li>
                                                <i class="flaticon-check"></i>
                                                Adaptive Cruise Control
                                            </li>
                                            <li>
                                                <i class="flaticon-check"></i>
                                                Airbags
                                            </li>
                                            <li>
                                                <i class="flaticon-check"></i>
                                                Air Conditioning
                                            </li>
                                            <li>
                                                <i class="flaticon-check"></i>
                                                Alarm System
                                            </li>
                                            <li>
                                                <i class="flaticon-check"></i>
                                                Anti-theft Protection
                                            </li>
                                            <li>
                                                <i class="flaticon-check"></i>
                                                Audio Interface
                                            </li>
                                            <li>
                                                <i class="flaticon-check"></i>
                                                Automatic Climate Control
                                            </li>
                                            <li>
                                                <i class="flaticon-check"></i>
                                                Automatic Headlights
                                            </li>
                                            <li>
                                                <i class="flaticon-check"></i>
                                                Auto Start/Stop
                                            </li>
                                            <li>
                                                <i class="flaticon-check"></i>
                                                Bi-Xenon Headlights
                                            </li>
                                            <li>
                                                <i class="flaticon-check"></i>
                                                Audio Interface
                                            </li>
                                            <li>
                                                <i class="flaticon-check"></i>
                                                Bluetooth Handset
                                            </li>
                                            <li>
                                                <i class="flaticon-check"></i>
                                                BOSE Surround Sound
                                            </li>
                                            <li>
                                                <i class="flaticon-check"></i>
                                                Burmester Surround Sound
                                            </li>
                                            <li>
                                                <i class="flaticon-check"></i>
                                                CD/DVD Autochanger
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <ul>
                                            <li>
                                                <i class="flaticon-check"></i>
                                                CDR Audio
                                            </li>
                                            <li>
                                                <i class="flaticon-check"></i>
                                                Cruise Control
                                            </li>
                                            <li>
                                                <i class="flaticon-check"></i>
                                                Direct Fuel Injection
                                            </li>
                                            <li>
                                                <i class="flaticon-check"></i>
                                                Electric Parking Brake
                                            </li>
                                            <li>
                                                <i class="flaticon-check"></i>
                                                Floor Mats
                                            </li>
                                            <li>
                                                <i class="flaticon-check"></i>
                                                Garage Door Opener
                                            </li>
                                            <li>
                                                <i class="flaticon-check"></i>
                                                Leather Package
                                            </li>
                                            <li>
                                                <i class="flaticon-check"></i>
                                                Locking Rear Differential
                                            </li>
                                            <li>
                                                <i class="flaticon-check"></i>
                                                Luggage Compartments
                                            </li>
                                            <li>
                                                <i class="flaticon-check"></i>
                                                Manual Transmission
                                            </li>
                                            <li>
                                                <i class="flaticon-check"></i>
                                                Navigation Module
                                            </li>
                                            <li>
                                                <i class="flaticon-check"></i>
                                                Online Services
                                            </li>
                                            <li>
                                                <i class="flaticon-check"></i>
                                                ParkAssist
                                            </li>
                                            <li>
                                                <i class="flaticon-check"></i>
                                                Porsche Communication
                                            </li>
                                            <li>
                                                <i class="flaticon-check"></i>
                                                CD/DVD Autochanger
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <ul>
                                            <li>
                                                <i class="flaticon-check"></i>
                                                Power Steering
                                            </li>
                                            <li>
                                                <i class="flaticon-check"></i>
                                                Reversing Camera
                                            </li>
                                            <li>
                                                <i class="flaticon-check"></i>
                                                Roll-over Protection
                                            </li>
                                            <li>
                                                <i class="flaticon-check"></i>
                                                Seat Heating
                                            </li>
                                            <li>
                                                <i class="flaticon-check"></i>
                                                Seat Ventilation
                                            </li>
                                            <li>
                                                <i class="flaticon-check"></i>
                                                Sound Package Plus
                                            </li>
                                            <li>
                                                <i class="flaticon-check"></i>
                                                Sport Chrono Package
                                            </li>
                                            <li>
                                                <i class="flaticon-check"></i>
                                                Steering Wheel Heating
                                            </li>
                                            <li>
                                                <i class="flaticon-check"></i>
                                                Tire Pressure Monitoring
                                            </li>
                                            <li>
                                                <i class="flaticon-check"></i>
                                                Universal Audio Interface
                                            </li>
                                            <li>
                                                <i class="flaticon-check"></i>
                                                Voice Control System
                                            </li>
                                            <li>
                                                <i class="flaticon-check"></i>
                                                Wind Deflector
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade " id="three" role="tabpanel" aria-labelledby="three-tab">
                            <div class="car-video">
                                <h3 class="heading">Car Video</h3>
                                <iframe src="https://www.youtube.com/embed/m5_AKjDdqaU"></iframe>
                            </div>
                        </div>
                        <div class="tab-pane fade " id="4" role="tabpanel" aria-labelledby="4-tab">
                            <div class="section location">
                                <h3 class="heading">Car Location</h3>
                                <div class="map">
                                    <div id="contactMap" class="contact-map"></div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade " id="5" role="tabpanel" aria-labelledby="5-tab">
                            <div class="section location">
                                <h3 class="heading">Contact Us</h3>
                                <div class="contact-1">
                                    <form action="#" method="GET" enctype="multipart/form-data">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="form-group name">
                                                            <input type="text" name="name" class="form-control" placeholder="Name">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="form-group email">
                                                            <input type="email" name="email" class="form-control" placeholder="Email">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="form-group subject">
                                                            <input type="text" name="subject" class="form-control" placeholder="Subject">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="form-group number">
                                                            <input type="text" name="phone" class="form-control" placeholder="Number">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="form-group message">
                                                            <textarea class="form-control" name="message" placeholder="Write message"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="send-btn">
                                                            <button type="submit" class="btn btn-color btn-md btn-message">Send Message</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Features opions start -->
                <div class="features-opions mb-60">
                    <h3 class="heading">Features</h3>
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <ul>
                                <li>
                                    <i class="flaticon-vehicle"></i>
                                    Top Speed: 260
                                </li>
                                <li>
                                    <i class="flaticon-petrol"></i>
                                    Fuel Type: Diesel
                                </li>
                                <li>
                                    <i class="flaticon-road"></i>
                                    Mileage: 40,200 KM
                                </li>
                                <li>
                                    <i class="flaticon-car"></i>
                                    Engine: 2901
                                </li>
                                <li>
                                    <i class="flaticon-car-1"></i>
                                    Gear: 5
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <ul>
                                <li>
                                    <i class="flaticon-transport-4"></i>
                                    Body Style: Sedan
                                </li>
                                <li>
                                    <i class="flaticon-time"></i>
                                    Year:2018
                                </li>
                                <li>
                                    <i class="flaticon-paint"></i>
                                    Interior Color: White
                                </li>
                                <li>
                                    <i class="flaticon-transport-2"></i>
                                    Horse Power: 310
                                </li>
                                <li>
                                    <i class="flaticon-repair"></i>
                                    Doors: 4
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <ul>
                                <li>
                                    <i class="flaticon-location"></i>
                                    Location: Florisa, USA
                                </li>
                                <li>
                                    <i class="flaticon-car-2"></i>
                                    Free Services
                                </li>
                                <li>
                                    <i class="flaticon-paint"></i>
                                    Interior Color: Black
                                </li>
                                <li>
                                    <i class="flaticon-technology"></i>
                                    Electric Range
                                </li>
                                <li>
                                    <i class="flaticon-transport-3"></i>
                                    Oll Changes
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="sidebar mbl">
                    <!-- Specifications start -->
                    <div class="specifications widget d-none d-xl-block d-lg-block">
                        <h5 class="sidebar-title">Specifications</h5>
                        <ul>
                        <li>
                            <span>Brand</span>Toyota
                        </li>
                        <li>
                            <span>Model</span>Maxima
                        </li>
                        <li>
                            <span>Body Style</span>Convertible
                        </li>
                        <li>
                            <span>Year</span>2018
                        </li>
                        <li>
                            <span>Mileage</span>37,000 mi
                        </li>
                        <li>
                            <span>Color</span>Dark Grey
                        </li>
                        <li>
                            <span>Engine</span>3.4L Mid-Engine V6
                        </li>
                    </ul>
                    </div>
                    <!-- Social list start -->
                    <div class="social-list widget clearfix">
                        <h5 class="sidebar-title">Follow Us</h5>
                        <ul>
                            <li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="google-bg"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#" class="rss-bg"><i class="fa fa-rss"></i></a></li>
                            <li><a href="#" class="linkedin-bg"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <!-- Helping center start -->
                    <div class="helping-center widget clearfix">
                        <div class="media">
                            <i class="fa fa-mobile"></i>
                            <div class="media-body  align-self-center">
                                <h5 class="mt-0">Helping Center</h5>
                                <h4><a href="tel:+0477-85x6-552">+XXXX XXXX XXX</a></h4>
                            </div>
                        </div>
                    </div>
                    <!-- Financing calculator  start -->
                    <div class="contact-1 financing-calculator widget">
                        <h5 class="sidebar-title">Mortgage Calculator</h5>
                        <form action="#" method="GET" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="form-label">Car Price</label>
                                <input type="text" class="form-control" placeholder="$36.400">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Interest Rate (%)</label>
                                <input type="text" class="form-control" placeholder="10%">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Period In Months</label>
                                <input type="text" class="form-control" placeholder="10 Months">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Down PaymenT</label>
                                <input type="text" class="form-control" placeholder="$21,300">
                            </div>
                            <br>
                            <div class="form-group mb-0">
                                <button type="submit" class="btn btn-color btn-md btn-message btn-block">Cauculate</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="related-cars">
        <div class="container">
            <h3 class="heading">Related Cars</h3>
            <div class="slick-slider-area">
                <div class="row slick-carousel" data-slick='{"slidesToShow": 3, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>
                    <div class="slick-slide-item">
                        <div class="car-box">
                            <div class="car-thumbnail">
                                <a href="car-details.html" class="car-img">
                                    <div class="listing-badges">
                                        <span class="featured">Featured</span>
                                    </div>
                                    <div id="carouselExampleIndicators4" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-target="#carouselExampleIndicators4" data-slide-to="0" class="active"></li>
                                            <li data-target="#carouselExampleIndicators4" data-slide-to="1"></li>
                                            <li data-target="#carouselExampleIndicators4" data-slide-to="2"></li>
                                        </ol>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img class="d-block w-100" src="assets/img/car-1.jpg" alt="car">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="assets/img/car-1.jpg" alt="car">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="assets/img/car-1.jpg" alt="car">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="detail">
                                <div class="heading clearfix">
                                    <div class="title pull-left">
                                        <a href="car-details.html">Audi A7 TDI</a>
                                    </div>
                                    <div class="price pull-right">
                                        $178,000
                                    </div>
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the</p>
                                <ul class="facilities-list clearfix">
                                    <li class="bordered-right">
                                        <i class="flaticon-transport-4"></i> Sport
                                    </li>
                                    <li class="bordered-right">
                                        <i class="flaticon-road"></i> 17,000
                                    </li>
                                    <li>
                                        <i class="flaticon-petrol"></i> Diesel
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="slick-slide-item">
                        <div class="car-box">
                            <div class="car-thumbnail">
                                <a href="car-details.html" class="car-img">
                                    <img src="assets/img/car-6.jpg" alt="car" class="img-fluid">
                                </a>
                            </div>
                            <div class="detail">
                                <div class="heading clearfix">
                                    <div class="title pull-left">
                                        <a href="car-details.html">2016 Audi R8</a>
                                    </div>
                                    <div class="price pull-right">
                                        $178,000
                                    </div>
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the</p>
                                <ul class="facilities-list clearfix">
                                    <li class="bordered-right">
                                        <i class="flaticon-transport-4"></i> Sport
                                    </li>
                                    <li class="bordered-right">
                                        <i class="flaticon-road"></i> 17,000
                                    </li>
                                    <li>
                                        <i class="flaticon-petrol"></i> Diesel
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="slick-slide-item">
                        <div class="car-box">
                            <div class="car-thumbnail">
                                <a href="car-details.html" class="car-img">
                                    <img src="assets/img/car-4.jpg" alt="car" class="img-fluid">
                                </a>
                            </div>
                            <div class="detail">
                                <div class="heading clearfix">
                                    <div class="title pull-left">
                                        <a href="car-details.html">2016 Audi R8</a>
                                    </div>
                                    <div class="price pull-right">
                                        $178,000
                                    </div>
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the</p>
                                <ul class="facilities-list clearfix">
                                    <li class="bordered-right">
                                        <i class="flaticon-transport-4"></i> Sport
                                    </li>
                                    <li class="bordered-right">
                                        <i class="flaticon-road"></i> 17,000
                                    </li>
                                    <li>
                                        <i class="flaticon-petrol"></i> Diesel
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="slick-slide-item">
                        <div class="car-box">
                            <div class="car-thumbnail">
                                <a href="car-details.html" class="car-img">
                                    <div class="listing-time opening">For Sale</div>
                                    <img src="assets/img/car-5.jpg" alt="car" class="img-fluid">
                                </a>
                                <div class="car-overlay">
                                    <a href="car-details.html" class="overlay-link">
                                        <i class="fa fa-link"></i>
                                    </a>
                                    <a class="overlay-link car-video" title="Test Title">
                                        <i class="fa fa-video-camera"></i>
                                    </a>
                                    <div class="car-magnify-gallery">
                                        <a href="assets/img/car-5.jpg" class="overlay-link">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                        <a href="assets/img/car-1.jpg" class="hidden"></a>
                                        <a href="assets/img/car-3.jpg" class="hidden"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="detail">
                                <div class="heading clearfix">
                                    <div class="title pull-left">
                                        <a href="car-details.html">Audi A1 Sportback</a>
                                    </div>
                                    <div class="price pull-right">
                                        $178,000
                                    </div>
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the</p>
                                <ul class="facilities-list clearfix">
                                    <li class="bordered-right">
                                        <i class="flaticon-transport-4"></i> Sport
                                    </li>
                                    <li class="bordered-right">
                                        <i class="flaticon-road"></i> 17,000
                                    </li>
                                    <li>
                                        <i class="flaticon-petrol"></i> Diesel
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slick-prev slick-arrow-buton">
                    <i class="fa fa-angle-left"></i>
                </div>
                <div class="slick-next slick-arrow-buton">
                    <i class="fa fa-angle-right"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Car details page end -->

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

<!-- Car Video Modal -->
<div class="modal car-modal fade" id="carModal" tabindex="-1" role="dialog" aria-labelledby="carModal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6 modal-left">
                        <div class="modal-left-content">
                            <div id="modalCarousel" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">
                                        <iframe class="modalIframe" src="https://www.youtube.com/embed/5e0LxrLSzok"  allowfullscreen></iframe>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="assets/img/car-1.jpg" alt="Test ALT">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="assets/img/car-1.jpg" alt="Test ALT">
                                    </div>
                                </div>
                                <a class="control control-prev" href="#modalCarousel" role="button" data-slide="prev">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                                <a class="control control-next" href="#modalCarousel" role="button" data-slide="next">
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                            <div class="description"><h3>Description</h3>
                                <p>
                                    Curabitur odio nibh, luctus non pulvinar a, ultricies ac diam. Donec neque
                                    massa, viverra interdum eros ut, imperdiet pellentesque mauris. Proin sit amet
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 modal-right">
                        <div class="modal-right-content bg-white">
                            <strong class="price">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </strong>
                            <section>
                                <h3>Audi A5</h3>
                                <ul class="bullets">
                                    <li><i class="fa fa-arrow-right"></i> Audio Interface</li>
                                    <li><i class="fa fa-arrow-right"></i> CDR Audio</li>
                                    <li><i class="fa fa-arrow-right"></i> Seat Heating</li>
                                    <li><i class="fa fa-arrow-right"></i> ParkAssist</li>
                                    <li><i class="fa fa-arrow-right"></i> Cruise Control</li>
                                    <li><i class="fa fa-arrow-right"></i> Airbags</li>
                                    <li><i class="fa fa-arrow-right"></i> Air Conditioning</li>
                                    <li><i class="fa fa-arrow-right"></i> Alarm System</li>
                                </ul>
                            </section>
                            <section>
                                <h3>Overview</h3>
                                <dl>
                                    <dt>Model</dt>
                                    <dd>BMW</dd>
                                    <dt>Condition</dt>
                                    <dd>Brand New</dd>
                                    <dt>Year</dt>
                                    <dd>2018</dd>
                                    <dt>Mileage</dt>
                                    <dd>37,000 mi</dd>
                                    <dt>Price</dt>
                                    <dd>$178,000</dd>
                                </dl>
                            </section>
                            <a href="car-details.html" class="btn btn-theme">Show Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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

<!-- Mirrored from storage.googleapis.com/theme-vessel-items/checking-sites-2/wain-html/HTML/main/car-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Dec 2024 12:34:28 GMT -->
</html>