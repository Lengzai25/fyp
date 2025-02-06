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

<!-- Mirrored from storage.googleapis.com/theme-vessel-items/checking-sites-2/wain-html/HTML/main/faq-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Dec 2024 12:34:31 GMT -->
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
            <h1>Faq</h1>
        </div>
    </div>
    <div class="page-info">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                </div>
                <div class="col-md-7">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Sub banner end -->

<!-- faq start -->
<div class="faq content-area-7">
    <div class="container">
        <div class="main-title">
            <h1><span>Frequently </span>Asked Questions</h1>
        </div>

        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div id="faq" class="faq-accordion">
                    <div class="card m-b-0">
                        <div class="card-header">
                            <a class="card-title collapsed" data-toggle="collapse" data-parent="#faq" href="#collapse1">
                                Why buy from CARWOW?
                            </a>
                        </div>
                        <div id="collapse1" class="card-block collapse">
                            <p>You can buy from CARWOW to enjoy a trusted and easy end-to-end car buying experience.</p>
                            <hr>
                            <span class="answer-helpful">Was this answer helpful?  <a href="#" class="yes"><i class="fa fa-thumbs-o-up"></i></a> <a href="#" class="no"><i class="fa fa-thumbs-o-down"></i></a></span>
                        </div>

                        <div class="card-header">
                            <a class="card-title collapsed" data-toggle="collapse" data-parent="#faq" href="#collapse2">
                                Can we book a test drive, and why is it important?
                            </a>
                        </div>
                        <div id="collapse2" class="card-block collapse">
                            <p>A test drive allows you to experience the car firsthand, evaluating its comfort, performance, and features. It's crucial to ensure the vehicle meets your expectations before making a purchase.</p>
                            <hr>
                            <span class="answer-helpful">Was this answer helpful?  <a href="#" class="yes"><i class="fa fa-thumbs-o-up"></i></a> <a href="#" class="no"><i class="fa fa-thumbs-o-down"></i></a></span>
                        </div>

                        <div class="card-header">
                            <a class="card-title collapsed" data-toggle="collapse" data-parent="#faq" href="#collapse3">
                                Should I buy a brand new or used car?
                            </a>
                        </div>
                        <div id="collapse3" class="card-block collapse">
                            <p>It depends on customers budget and needs. New cars usually come with a comprehensive warranty and the latest technology features, while used cars may offer better value for money. The choice depends on your priorities.</p>
                            <hr>
                            <span class="answer-helpful">Was this answer helpful?  <a href="#" class="yes"><i class="fa fa-thumbs-o-up"></i></a> <a href="#" class="no"><i class="fa fa-thumbs-o-down"></i></a></span>
                        </div>

                        <div class="card-header">
                            <a class="card-title collapsed" data-toggle="collapse" data-parent="#faq" href="#collapse4">
                                How do I finance a car purchase?
                            </a>
                        </div>
                        <div id="collapse4" class="card-block collapse">
                            <p>You can finance a car through a bank, credit union, or the dealership. Interest rates, loan terms, and approval criteria may vary, so it's advisable to shop around for the best financing option.</p>
                            <hr>
                            <span class="answer-helpful">Was this answer helpful?  <a href="#" class="yes"><i class="fa fa-thumbs-o-up"></i></a> <a href="#" class="no"><i class="fa fa-thumbs-o-down"></i></a></span>
                        </div>

                        <div class="card-header">
                            <a class="card-title collapsed" data-toggle="collapse" data-parent="#faq" href="#collapse5">
                                What is an extended warranty, and do I need one?
                            </a>
                        </div>
                        <div id="collapse5" class="card-block collapse">
                            <p>An extended warranty is additional coverage for repairs after the manufacturer's warranty expires. Whether you need one depends on your preference for added peace of mind. Consider the vehicle's reliability and your budget when deciding.</p>
                            <hr>
                            <span class="answer-helpful">Was this answer helpful?  <a href="#" class="yes"><i class="fa fa-thumbs-o-up"></i></a> <a href="#" class="no"><i class="fa fa-thumbs-o-down"></i></a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- faq end -->

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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0N5pbJN10Y1oYFRd0MJ_v2g8W2QT74JE"></script>
<script src="assets/js/ie-emulation-modes-warning.js"></script>
<!-- Custom JS Script -->
<script  src="assets/js/app.js"></script>
</body>

<!-- Mirrored from storage.googleapis.com/theme-vessel-items/checking-sites-2/wain-html/HTML/main/faq-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Dec 2024 12:34:31 GMT -->
</html>