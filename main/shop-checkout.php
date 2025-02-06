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

<!-- Mirrored from storage.googleapis.com/theme-vessel-items/checking-sites-2/wain-html/HTML/main/shop-checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Dec 2024 12:34:34 GMT -->
<head>

<script>
    function display() 
    {
        // Validation flags
        var name_check = 0,
            cardnum_check = 0,
            date_check = 0,
            cvv_check = 0;

        // Retrieve input values
        var name = document.checkout.card_name.value;
        var cardnum = document.checkout.card_num.value;
        var date = document.checkout.card_date.value;
        var cvv = document.checkout.card_cvv.value;

        // Validation patterns
        var name_pattern = /^[a-zA-Z\s]+$/; // Only letters and spaces
        var cardnum_pattern = /^\d{16}$/; // Matches 16 digits
        var cvv_pattern = /^\d{3}$/; // Matches 3 digits

        // Validate name
        if (!name.match(name_pattern)) 
        {
            alert("Error: Invalid name format. Only letters and spaces are allowed.");
            return false;
        } 
        else 
        {
            name_check = 1;
        }

        // Validate card number
        if (!cardnum.match(cardnum_pattern)) 
        {
            alert("Error: Invalid card number format. Please enter a valid 16-digit card number.");
            return false;
        } 
        else 
        {
            cardnum_check = 1;
        }

        // Validate expiration date
        if (date === "") 
        {
            alert("Error: Expiration date cannot be empty!");
            return false;
        } 
        else 
        {
            var currentDate = new Date();
            var inputDate = new Date(date + "-01"); // Add "-01" to create a valid date object
            if (inputDate < currentDate) 
            {
                alert("Error: The card has expired!");
                return false;
            }
            date_check = 1;
        }

        // Validate CVV
        if (!cvv.match(cvv_pattern)) 
        {
            alert("Error: Invalid security code. CVV must be 3 digits.");
            return false;
        } 
        else 
        {
            cvv_check = 1;
        }

        // Final check
        if (name_check === 1 && cardnum_check === 1 && date_check === 1 && cvv_check === 1) 
        {
            return true;

        } 
        else 
        {
            return false;
        }
    }
</script>


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
            <h1>Shop Checkout</h1>
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

<!-- Shop checkout start -->
<div class="shop-checkout content-area-7">
    <div class="container">
        <div class="from-checkout">
            <div class="row mb-30">
                <div class="col-lg-6">
                    <div class="heading-2">
                        <h4>Personal Info</h4>
                    </div>
                    <form name="checkout" method="POST" onsubmit="return display()">
                        <div class="row">
                            <div class="col-xl-6 col-lg-12 col-md-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="cust_name" placeholder="Name" value="<?php echo $cust_rec['cust_name']?>" required>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-12 col-md-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="cust_email" placeholder="Email" value="<?php echo $cust_rec['cust_email']?>" required>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-12 col-md-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="cust_tel" placeholder="Phone" value="<?php echo $cust_rec['cust_tel']?>" required>
                                </div>
                            </div>
                        </div>
                        <div class="heading-2">
                            <h4>Payment</h4>
                        </div>
                            <p>Please select your Payment Method:</p>
                                <input type="radio" id="card" name="card" value="CARD">
                                <label for="card">CARD</label><br>
                                <input type="radio" id="cash" name="cash" value="CASH">
                                <label for="cash">CASH</label><br>
                                <input type="radio" id="loan" name="card" value="LOAN">
                                <label for="cash">Loan Payment</label><br>
                        <div>
                            <input class="btn btn-color btn-block btn-md" name='checkout' type="submit" value="Proceed To Checkout">
                        </div>
                    </form>
                </div>
                <div class="col-lg-6">
                <div class="cart-total-box bg-light">
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

                        <ul>
                            <li>
                                <b><?php echo $car_rec['car_name']; ?></b><span class="pull-right">RM <?php echo $car_rec['car_price']; ?></span>
                            </li>
                            <li>
                                Quantity : <?php echo $cart_rec['quantity']; ?><span class="pull-right"></span>
                            </li>
                            <li>
                                &nbsp; <span class="pull-right">RM <?php echo $car_rec['car_price'] * $cart_rec["quantity"]; ?></span>
                            </li>
                        </ul>
                            <hr>
                        <?php
                        }
                        ?>
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
                            <a class="btn btn-dark btn-block btn-md" type="submit" href="shop-cart.php">Edit Cart</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Shop checkout end -->

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

<!-- External JS libraries -->
<script src="assets/js/jquery-2.2.0.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<!-- Custom JS Script -->
<script  src="assets/js/app.js"></script>
</body>
</html>

<?php
if (isset($_POST["checkout"])) 
{
    $username = $_POST["cust_name"];
    $useremail = $_POST["cust_email"];
    $usertel = $_POST["cust_tel"];
    $userid = $sess_id;

    $get_cart = mysqli_query($conn, "select * from cart where user_id=$sess_id");
    while ($cart_rec = mysqli_fetch_array($get_cart)) 
    {
        $cartid = $cart_rec['cart_id'];
        $carid = $cart_rec['car_id'];
        $qty = $cart_rec['quantity'];
        $get_car = mysqli_query($conn, "select * from car where car_id=$carid");
        $car_rec = mysqli_fetch_array($get_car);

        $carname = $car_rec['car_name'];
        $price = $car_rec['car_price'];
        $stat = "in progress";

        $insert_user = mysqli_query($conn, "INSERT INTO checkout (user_name, user_email, user_tel, car_name, car_price, user_id, quantity, stat)
        VALUES ('$username', '$useremail', '$usertel', '$carname', '$price', '$userid', '$qty','$stat')");
        
        $show = $car_rec['show'] - 1;
        mysqli_query($conn, "UPDATE car SET `show` = '$show' WHERE car_id = '$carid'");

        mysqli_query($conn, "DELETE FROM cart WHERE cart_id = $cartid");
        
    }
    echo "<script type='text/javascript'>
                alert('Record has been saved successfully.');
                window.location.href='landing.php';
                </script>";
}

?>