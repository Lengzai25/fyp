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
            <h1>Car List</h1>
        </div>
    </div>
</div>
<!-- Sub banner end -->

<div class="search-area" id="search-area-1">
    <div class="container">
        <div class="search-area-inner">
            <div class="search-contents ">
                <form action="https://storage.googleapis.com/theme-vessel-items/checking-sites-2/wain-html/HTML/main/index.html" method="GET">
                    <div class="row">
                        <div class="col-6 col-lg-3 col-md-3">
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="brand">
                                    <option>Select Brand</option>
                                    <option>Honda</option>
                                    <option>Toyota</option>
                                    <option>Mercedes</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 col-md-3">
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="Year">
                                    <option>Select Year</option>
                                    <option>2016</option>
                                    <option>2017</option>
                                    <option>2018</option>
                                    <option>2019</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 col-md-3">
                            <div class="form-group">
                                <div class="range-slider">
                                    <div data-min="0" data-max="150000" data-unit="MYR" data-min-name="min_price" data-max-name="max_price" class="range-slider-ui ui-slider" aria-disabled="false"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 col-md-3">
                            <div class="form-group">
                                <button class="search-button btn-md btn-color" type="submit">Search</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Car list fullwidth start -->
<div class="car-list-fullwidth content-area-2">
    <div class="container">
        <div class="option-bar d-none d-xl-block d-lg-block d-md-block d-sm-block">
            <div class="row clearfix">
                <div class="col-xl-4 col-lg-5 col-md-5 col-sm-5">
                    <h4 class="heading">30 Result Found</h4>
                </div>
                <div class="col-xl-8 col-lg-7 col-md-7 col-sm-7">
                    <div class="sorting-options clearfix">
                        <a href="car-list-fullwidth.php" class="change-view-btn active-view-btn"><i class="fa fa-th-list"></i></a>
                    </div>
                    <div class="search-area">
                        <select class="selectpicker search-fields" name="location">
                            <option>High to Low</option>
                            <option>Low to High</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-12">
            <?php
                // find from the admintbl the record related to this Primary key
                $get_car = mysqli_query($conn, "select * from car");

                // Retrieve the record
                
                while ($car_rec = mysqli_fetch_array($get_car)) {
                    $carid = $car_rec["car_id"];
                ?>
                    <div class="car-box-5 p-box">
                        <div class="row">
                            <div class="col-lg-4 col-md-12 col-pad">
                            <?php
                                echo '<a href="car-details.php?carid=' . $carid . '" class="car-img">
                                        <img src="assets/img/' . $car_rec["car_pic"] . '" alt="' . $car_rec["car_name"] . '">
                                      </a>';
                            ?>
                            </div>
                            <div class="col-lg-8 col-md-12">
                                <div class="detail">
                                    <h3 class="title">
                                        <a href="car-details.php?carid=<?php echo $carid; ?>"> 
                                            <?php echo $car_rec["car_name"]; ?> 
                                        </a>
                                    </h3>
                                    <div class="listing-price">
                                        <span class="new">RM <?php echo $car_rec["car_price"]; ?></span>
                                    </div>
                                    <p><?php echo $car_rec["car_des"]; ?></p>
                                </div>
                                <a href="shop-cart.php" class="btn btn-theme">Add to Cart</a>
                            </div>
                        </div>    
                    </div>
                <?php
                }
                ?>
                
                <div class="pagination-box">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="car-list-leftside.html"><span aria-hidden="true">«</span></a></li>
                            <li class="page-item"><a class="page-link" href="car-list-rightside.html">1</a></li>
                            <li class="page-item"><a class="page-link" href="car-list-leftside.html">2</a></li>
                            <li class="page-item"><a class="page-link  active" href="car-list-fullwidth.html">3</a></li>
                            <li class="page-item"><a class="page-link" href="#"><span aria-hidden="true">»</span></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Car list fullwidth end -->

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

<!-- Mirrored from storage.googleapis.com/theme-vessel-items/checking-sites-2/wain-html/HTML/main/car-list-fullwidth.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Dec 2024 12:34:28 GMT -->
</html>