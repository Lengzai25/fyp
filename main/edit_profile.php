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
    <script>
    function display() {
        var name_check = 0,
            email_check = 0,
            password_check = 0,
            confirm_password_check = 0,
            contact_num_check = 0;

        var name, email, password, confirm_password, contact_num;
        var name_pattern, password_pattern, email_pattern, cont_num_pattern;

        // Validation patterns
        name_pattern = /^[a-zA-Z\s]+$/;
        //password_pattern = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
        email_pattern = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/;
        cont_num_pattern = /^01[0-9]{8,9}$/; // Example: 0123456789

        // Retrieve input values
        name = document.register.name.value;
        email = document.register.email.value;
        password = document.register.password.value;
        confirm_password = document.register.confirm_password.value;
        contact_num = document.register.tel.value;

        // Validate name
        if (!name.match(name_pattern)) {
            alert("Error: Invalid name format. Only letters and spaces are allowed.");
            return false;
        } 
        else 
        {
            name_check = 1;
        }

        // Validate email
        if (!email.match(email_pattern)) {
            alert("Error: Invalid email format. Please enter a valid email address.");
            return false;
        } else {
            email_check = 1;
        }

        // Validate contact number
        if (!contact_num.match(cont_num_pattern)) {
            alert("Error: Invalid contact number format. Format must be 01XXXXXXXX (e.g., 0123456789).");
            return false;
        } else {
            contact_num_check = 1;
        }

        if (
            name_check === 1 &&
            email_check === 1 &&
            contact_num_check === 1
        ) 
        {
            return true;
        } 
        else 
        {
            return false;
        }
    }
</script>

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
                                    <?php echo $cust_rec["cust_name"] ?>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
                                    <a class="dropdown-item" href="profile.php">Profile</a>
                                    <a class="dropdown-item" href="logout.php">Log Out</a>
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

<div class="contact-section overview-bgi">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Form content box start -->
                <div class="form-content-box">
                    <div class="details" style="margin-top:120px">
                        <!-- Name -->
                        <h3>Edit Profile</h3>
                        <!-- Form start-->
                        <form name="register" method="post" onsubmit="return display()">
                            <div class="form-group">
                                <input type="text" name="name" id="name" class="input-text" value="<?php echo $cust_rec["cust_name"] ?>"placeholder="Full Name">
                            </div>
                            <div class="form-group">
                                <input type="text" name="email" id="email" class="input-text" value="<?php echo $cust_rec["cust_email"] ?>"placeholder="Email Address">
                            </div>
                            <div class="form-group">
                                <input type="tel" name="tel" id="contact-number" class="input-text" value="<?php echo $cust_rec["cust_tel"] ?>"placeholder="Contact Number">
                            </div>
                            <div class="form-group">
                                <input type="password" name="old_password" id="password" class="input-text" placeholder="Old Password">
                            </div>
                            <div class="form-group">
                                <input type="password" name="new_password" id="confirm-password" class="input-text" placeholder="New Password">
                            </div>
                            <div class="form-group">
                                <input type="password" name="confirm_password" id="confirm-password" class="input-text" placeholder="Confirm Password">
                            </div>
                            <div class="">
                                <input type="submit" value="Save" name="signup" class="btn-md btn-theme btn-block">
                            </div>
                        </form>
                        <!-- Form end-->
                    </div>
                    <!-- Footer -->
                    <div class="footer">
                    <span>
                        Already a member? <a href="login.php">Login here</a>
                    </span>
                    </div>
                </div>
                <!-- Form content box end -->
            </div>
        </div>
    </div>
</div>

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
<script src="assets/js/jquery-2.2.0.min.js"></>
<script src="assets/js/bootstrap.min.js"></script>
<!-- Custom JS Script -->
<script  src="assets/js/app.js"></script>
</body>
</html>

<?php
if (isset($_POST["signup"])) {

    // Retrieve and sanitize input data
    $username = $_POST["name"];
    $useremail = $_POST["email"];
    $usertel = $_POST["tel"];
    $useroldpass = $_POST["old_password"];
    $usernewpass = $_POST["new_password"];
    $confirmpass = $_POST["confirm_password"];
    
    if ($useroldpass != "") 
    {
        $check_pass = mysqli_query($conn, "SELECT * FROM customer WHERE cust_password = '$useroldpass' and cust_id = '$sess_id';");
        if (mysqli_num_rows($check_pass) == 1 )
        {
            if ($usernewpass != "" && $confirmpass !="") 
            {
                if ($usernewpass != $confirmpass)
                {
                    echo "<script type='text/javascript'>
                    alert('New Password must same with Confirm Password='edit_profile.php';
                    </script>";
                }

                else
                {
                    // Insert new user into the database
                    // find from the admintbl the record related to this Primary key
                    $get_cust = mysqli_query($conn, "select * from customer where cust_id = '$sess_id'");
                    // Retrieve the record
                    $check_duplicate_email = mysqli_query($conn, "SELECT * FROM customer WHERE cust_email = '$useremail'");
                    if (mysqli_num_rows($check_duplicate_email) > 0) 
                    {
                        if ($cust_rec["cust_email"] == $useremail) 
                        { // Fixed the assignment operator to comparison operator
                            $update_user = mysqli_query($conn, "UPDATE customer SET 
                                                                cust_name = '$username', 
                                                                cust_email = '$useremail', 
                                                                cust_tel = '$usertel', 
                                                                cust_password = '$confirmpass' 
                                                                WHERE cust_id = '$sess_id'");
                        
                            if ($update_user) 
                            { // Changed variable name to match the updated query
                                echo "<script type='text/javascript'>
                                        alert('Record has been updated successfully.');
                                        window.location.href='profile.php';
                                    </script>";
                            }
                        }
                    }
                }
            }
            
            else
            {
                echo "<script type='text/javascript'>
                                alert('New Password and Confirm Password cannot be empty.');
                                window.location.href='edit_profile.php';
                              </script>";
            }
        }
        else
        {
            echo "<script type='text/javascript'>
                                alert('Wrong Password.');
                                window.location.href='edit_profile.php';
                              </script>";
        }
    }
    else
    {
       // find from the admintbl the record related to this Primary key
        $get_cust = mysqli_query($conn, "select * from customer where cust_id = '$sess_id'");
        // Retrieve the record
        $cust_rec = mysqli_fetch_assoc($get_cust);
        $confirmpass = $cust_rec["cust_password"];
        $check_duplicate_email = mysqli_query($conn, "SELECT * FROM customer WHERE cust_email = '$useremail'");
        if (mysqli_num_rows($check_duplicate_email) > 0) 
        {
            if ($cust_rec["cust_email"] == $useremail) { // Fixed the assignment operator to comparison operator
                $update_user = mysqli_query($conn, "UPDATE customer SET 
                                                    cust_name = '$username', 
                                                    cust_email = '$useremail', 
                                                    cust_tel = '$usertel', 
                                                    cust_password = '$confirmpass' 
                                                    WHERE cust_id = '$sess_id'");
            
                if ($update_user) 
                { // Changed variable name to match the updated query
                    echo "<script type='text/javascript'>
                            alert('Record has been updated successfully.');
                            window.location.href='profile.php';
                          </script>";
                } 
            }
            
            else
            {
                echo "<script type='text/javascript'>
                    alert('This Email already exists.');
                    window.location.href='edit_profile.php';
                </script>";
            }
        } 
        else 
        {
            $update_user = mysqli_query($conn, "UPDATE customer SET 
                                                    cust_name = '$username', 
                                                    cust_email = '$useremail', 
                                                    cust_tel = '$usertel', 
                                                    cust_password = '$confirmpass' 
                                                    WHERE cust_id = '$sess_id'");

            if ($update_user) 
            { // Changed variable name to match the updated query
                echo "<script type='text/javascript'>
                        alert('Record has been updated successfully.');
                        window.location.href='profile.php';
                        </script>";
            } 
            else 
            {
                echo "<script type='text/javascript'>
                        alert('Failed to update record. Please try again.');
                        window.location.href='edit_profile.php';
                        </script>";
            }
        }
    }
}
    // Check if email already exists
    
?>