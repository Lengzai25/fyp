<?php

include "dataconnection.php";
session_start();

// get the session that keeps the Primary key
$sess_id = $_SESSION["sess_id"];

if (!isset($_SESSION["sess_id"])) 
{
    echo
    "<script type='text/JavaScript'>
    window.location.href='login.php';
    </script>";
}

// find from the admintbl the record related to this Primary key
$get_cust = mysqli_query($conn, "select * from customer where cust_id = '$sess_id'");

// Retrieve the record
$cust_rec = mysqli_fetch_assoc($get_cust);

?>

<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from storage.googleapis.com/theme-vessel-items/checking-sites-2/wain-html/HTML/main/shop-cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Dec 2024 12:34:34 GMT -->
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
            <h1>Shop Cart</h1>
        </div>
    </div>
    <div class="page-info">
        <div class="container">
            <div class="row">
            </div>
        </div>
    </div>
</div>
<!-- Sub banner end -->

<!-- Shop cart start -->
<div class="shop-cart content-area-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="heading-2">
                    <form method="POST">
                        <h4>Shopping Cart</h4>
                        <p>View your shopping cart here!</p>
                        </div>
                        <table class="shop-table cart mb-20">
                            <thead>
                            <tr>
                                <th class="product-name">Product</th>
                                <th class="product-price">Name</th>
                                <th class="product-price">Price</th>
                                <th class="product-quantity">Qty</th>
                                <th class="product-subtotal">Total</th>
                                <th class="product-remove">&nbsp;</th>
                            </tr>
                            </thead>
                            <tbody>
                            
                                <?php
                                    // find from the admintbl the record related to this Primary key
                                    $get_cart = mysqli_query($conn, "select * from cart where user_id=$sess_id");

                                    $total = 0;
                                    
                                    while ($cart_rec = mysqli_fetch_array($get_cart)) 
                                    {
                                        $carid = $cart_rec['car_id'];

                                        $get_car = mysqli_query($conn, "select * from car where car_id=$carid");
                                        $car_rec = mysqli_fetch_array($get_car);
                                        
                                        $total = $total + $car_rec['car_price'];
                                ?>
                                    <tr>
                                    
                                        <td class="product-thumbnail"><img src="assets/img/<?php echo $car_rec["car_pic"];?>"></td>

                                        <td class="product-name">
                                            <a href="#"><?php echo $car_rec['car_name']; ?></a>
                                        </td>
                                        <td>RM <?php echo $car_rec['car_price']; ?></td>
                                        <td>
                                            <input class="qty" name="quantity" type="number" min="1" value="<?php echo $cart_rec['quantity']; ?>" >
                                        </td>
                                        <td>RM <?php echo $car_rec['car_price'] * $cart_rec["quantity"]; ?></td>
                                        <td class="product-remove">
                                            <a href="shop-cart.php?deleteid=<?php echo $car_rec['car_id']; ?>">
                                                <i class="fa fa-close"></i>
                                            </a>
                                            
                                        </td>
                                        
                                    
                                    </tr>
                                    
                                    <?php 
                                    
                                }
                                    ?>
                                    
                            </tbody>

                        </table>
                        <input class="btn btn-dark btn-block btn-md" name="update" type="submit" value="Update Cart">
                    </form>
            </div>
            
            <div class="col-lg-4">
                <div class="cart-total-box bg-light hdn-mb-30 mb-30">
                
                    <h5>Cart Totals</h5>
                    <hr>
                    <?php
                        // find from the admintbl the record related to this Primary key
                        $get_cart = mysqli_query($conn, "select * from cart where user_id=$sess_id");

                        $subtotal = 0;
                        
                        while ($cart_rec = mysqli_fetch_array($get_cart)) 
                        {
                            $carid = $cart_rec['car_id'];

                            $get_car = mysqli_query($conn, "select * from car where car_id=$carid");
                            $car_rec = mysqli_fetch_array($get_car);
                            
                            $subtotal = $subtotal + $car_rec['car_price'] * $cart_rec['quantity'];
                        }
                    ?>
                    <ul>
                        <li>
                            Subtotal<span class="pull-right">RM <?php echo $subtotal ;?></span>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            Processing Fee 10%<span class="pull-right">RM <?php echo $subtotal * 0.1;?></span>
                        </li>
                    </ul>
                    <hr>
                    <p class="mar-b-50">
                        Grand Total<span class="pull-right">RM <?php echo $subtotal + ($subtotal * 0.1);?></span>
                    </p>
                    <br>
                    <form>
                        <input class="btn btn-color btn-block btn-md" type="submit" value="Proceed to Checkout" formaction="shop-checkout.php">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Shop cart end -->

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
<script src="assets/js/bootstrap.min.js"></script>
<!-- Custom JS Script -->
<script  src="assets/js/app.js"></script>
</body>

<!-- Mirrored from storage.googleapis.com/theme-vessel-items/checking-sites-2/wain-html/HTML/main/shop-cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Dec 2024 12:34:34 GMT -->
</html>

<?php

if (isset($_GET["deleteid"])) 
{
    // delete the selected record
    $delete_id = $_GET["deleteid"];

    mysqli_query($conn, "DELETE FROM cart WHERE car_id = $delete_id");

    echo 
    "<script type='text/javascript'>
        alert('The record has been deleted.'); // user message
        window.location.href = 'shop-cart.php';
    </script>";
}

?>

<?php

if(isset($_POST["update"])) 
{
    $get_cart = mysqli_query($conn, "select * from cart where user_id=$sess_id");
    
    while ($cart_rec = mysqli_fetch_array($get_cart))
    {
        $cartid = $cart_rec["cart_id"];
        $new_quantity = $_POST["quantity"];
        
    }
    $update_user = mysqli_query($conn, "UPDATE cart SET quantity = '$new_quantity' WHERE cart_id = '$cartid'"); 
    if ($update_user) 
    { // Changed variable name to match the updated query
        echo "<script type='text/javascript'>
                alert('Record has been updated successfully.');
                window.location.href='shop-cart.php';
                </script>";
    } 
}

?>