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

// get the session that keeps the Primary key

if (isset($_GET["carid"])) 
{
    $car_id = $_GET["carid"];
}

// find from the admintbl the record related to this Primary key
$get_car = mysqli_query($conn, "select * from car where car_id = '$car_id'");

// Retrieve the record
$car_rec = mysqli_fetch_assoc($get_car);

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
            <h1>Car Detail</h1>
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
                            <img src="assets/img/<?php echo $car_rec["car_pic"];?>" style="height:500px; width:800px" class="img-fluid" alt="car-Slider">
                        </div>
                        <div class="item carousel-item" data-slide-number="1">
                            <img src="assets/img/<?php echo $car_rec["car_pic2"];?>" style="height:500px; width:800px" class="img-fluid" alt="car-Slider">
                        </div>
                        <div class="item carousel-item" data-slide-number="2">
                            <img src="assets/img/<?php echo $car_rec["car_pic3"];?>" style="height:500px; width:800px" class="img-fluid" alt="car-Slider">
                        </div>
                        <div class="item carousel-item" data-slide-number="4">
                            <img src="assets/img/<?php echo $car_rec["car_pic4"];?>" style="height:500px; width:800px" class="img-fluid" alt="car-Slider">
                        </div>
                        <div class="item carousel-item" data-slide-number="5">
                            <img src="assets/img/<?php echo $car_rec["car_pic5"];?>" style="height:500px; width:800px" class="img-fluid" alt="car-Slider">
                        </div>
                    </div>
                    <!-- main slider carousel nav controls -->
                    <ul class="carousel-indicators smail-car list-inline nav nav-justified">
                        <li class="list-inline-item active">
                            <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#carDetailsSlider">
                                <img src="assets/img/<?php echo $car_rec["car_pic"];?>" style="height:98px; width:800px"class="img-fluid" alt="sub-car">
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a id="carousel-selector-1" data-slide-to="1" data-target="#carDetailsSlider">
                                <img src="assets/img/<?php echo $car_rec["car_pic2"];?>" style="height:98px; width:800px" class="img-fluid" alt="sub-car">
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a id="carousel-selector-2" data-slide-to="2" data-target="#carDetailsSlider">
                                <img src="assets/img/<?php echo $car_rec["car_pic3"];?>" style="height:98px; width:800px" class="img-fluid" alt="sub-car">
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a id="carousel-selector-3" data-slide-to="3" data-target="#carDetailsSlider">
                                <img src="assets/img/<?php echo $car_rec["car_pic4"];?>" style="height:98px; width:800px" class="img-fluid" alt="sub-car">
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a id="carousel-selector-4" data-slide-to="4" data-target="#carDetailsSlider">
                                <img src="assets/img/<?php echo $car_rec["car_pic5"];?>" style="height:98px; width:800px" class="img-fluid" alt="sub-car">
                            </a>
                        </li>
                    </ul>
                    <div class="heading-car">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="pull-left">
                                    <h3><?php echo $car_rec["car_name"]; ?></h3>
                                </div>
                                <div class="pull-right">
                                    <h3><span class="text-right">RM <?php echo $car_rec["car_price"]; ?></span></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Car meta start -->
                
                <!-- Tabbing box start -->
                <div class="tabbing tabbing-box mb-60">
                    <div class="tab-content" id="carTabContent">
                        <div class="tab-pane fade active show" id="one" role="tabpanel" aria-labelledby="one-tab">
                            <h3 class="heading">Car Description</h3>
                           <p><?php echo $car_rec["car_des"];?></p>
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
                            <span>Brand</span><?php echo $car_rec["car_brand"];?>
                        </li>
                        <li>
                            <span>Model</span><?php echo $car_rec["car_name"];?>
                        </li>
                        <li>
                            <span>Year</span><?php echo $car_rec["car_year"];?>
                        </li>
                        <li>
                            <span>Mileage (km)</span><?php echo $car_rec["car_mil"];?>
                        </li>
                        <li>
                            <span>Color</span><?php echo $car_rec["car_col"];?>
                        </li>
                        <li>
                            <span>Engine</span><?php echo $car_rec["car_eng"];?>
                        </li>
                    </ul>
                </div>
            </div>
            <form method="GET" action="car-list.php">
                <input type="hidden" name="cid" value="<?php echo $car_rec['car_id']; ?>">
                <input type="submit" name="add_cart" class="btn btn-theme" value="Add to Cart">
            </form> 
        </div>
    </div>
 </div>

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
<script src="assets/js/bootstrap.min.js"></script>
<!-- Custom JS Script -->
<script  src="assets/js/app.js"></script>
</body>

<!-- Mirrored from storage.googleapis.com/theme-vessel-items/checking-sites-2/wain-html/HTML/main/car-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Dec 2024 12:34:28 GMT -->
</html>

<?php

if (isset($_GET["add_cart"])) 
{
    if (isset($_GET["cid"])) 
    {
        $car_id = $_GET["cid"];
        $userid = $cust_rec["cust_id"]; 
        $quantity = 1;
        
        $check_cart = mysqli_query($conn, "SELECT * FROM cart WHERE user_id = '$userid' AND car_id = '$car_id'");

        if (mysqli_num_rows($check_cart) > 0) 
        {
            echo "<script>
                    alert('This item is already in the cart.');
                    window.location.href='car-list.php';
                  </script>";
        } else {
            // Insert the new item into the cart
            $insert_cart = mysqli_query($conn, "INSERT INTO cart (user_id, car_id, quantity) VALUES ('$userid', '$car_id', '$quantity')");

            if ($insert_cart) 
            {
                echo "<script>
                        alert('Item has been added successfully.');
                        window.location.href='car-list.php';
                      </script>";
            } 
        }
    }
}

?>