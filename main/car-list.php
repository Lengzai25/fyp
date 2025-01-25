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
                            <li class="nav-item dropdown">
                                <a href="car-list.php#search" class="nav-link">
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
                <form method="POST">
                    <div class="row" id="search">
                        <div class="col-6 col-lg-3 col-md-3">
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="brand">
                                    <option value = "">Select Brand</option>
                                    <option value = "Honda">Honda</option>
                                    <option value = "Toyota">Toyota</option>
                                    <option value = "Mercedes">Mercedes</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 col-md-3">
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="year">
                                    <option>Select Year</option>
                                    <option value = "2016">2016</option>
                                    <option value = "2017">2017</option>
                                    <option value = "2018">2018</option>
                                    <option value = "2019">2019</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 col-md-3">
                            <div class="form-group">
                                <input class="search-button btn-md btn-color" type="submit" value="Search" name="search"></input>
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
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-12">
            <?php
                // find from the admintbl the record related to this Primary key
                
                
                // Retrieve the record
                
                    if (isset($_POST["search"]))
                    {

                        // Retrieve and sanitize input data
                        $carbrand = $_POST["brand"];
                        $caryear = $_POST["year"];

                        // Check car
                        $get_car = mysqli_query($conn, "SELECT * FROM car WHERE car_brand = '$carbrand'or car_year = '$caryear'" );
                        //$search_rec = mysqli_fetch_assoc($searchcar);

                        
                    }
                    else
                    {
                        $get_car = mysqli_query($conn, "select * from car");

                    }


                while ($car_rec = mysqli_fetch_array($get_car)) 
                {
                    $show = $car_rec['show'];
                    if ($show == 1)
                    {
                        $carid = $car_rec["car_id"];
                    }
                    else
                    {
                        continue;
                    }
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
                                    <form method="GET" action="car-list.php">
                                        <input type="hidden" name="cid" value="<?php echo $car_rec['car_id']; ?>">
                                        <input type="submit" name="add_cart" class="btn btn-theme" value="Add to Cart">
                                    </form> 
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
<!-- External JS libraries -->
<script src="assets/js/jquery-2.2.0.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<!-- Custom JS Script -->
<script  src="assets/js/app.js"></script>
</body>

<!-- Mirrored from storage.googleapis.com/theme-vessel-items/checking-sites-2/wain-html/HTML/main/car-list-fullwidth.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Dec 2024 12:34:28 GMT -->
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

