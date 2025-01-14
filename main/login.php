<?php

session_start();
include "dataconnection.php";

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

</head>
<body id="top">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TAGID"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="page_loader"></div>

<!-- Contact section start -->
<div class="contact-section overview-bgi">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Form content box start -->
                <div class="form-content-box">
                    <!-- Logo -->
                    <a href="index.php">
                        <img src="assets/img/logos/logo.png" class="cm-logo" alt="logo">
                    </a>
                    <!-- details -->
                    <div class="details">
                        <!-- Name -->
                        <h3>Sign into your account</h3>
                        <!-- Form start -->
                        <form method="post">
                            <div class="form-group">
                                <input type="email" name="customer_email" class="input-text" placeholder="Email Address" required/>
                            </div>
                            <div class="form-group">
                                <input type="password" name="customer_password" class="input-text" placeholder="Password" required/>
                            </div>
                            
                            <div class="form-group mb-0">
                                <input type="submit" name="loginbtn" value="Login" class="btn-md btn-theme btn-block" required/>
                            </div>
                        </form>
                        <!-- Form end -->
                    </div>
                    <!-- Footer -->
                    <div class="footer">
                    <span>
                        Don't have an account? <a href="register.php">Register here</a>
                    </span>
                    </div>
                </div>
                <!-- Form content box end -->
            </div>
        </div>
    </div>
</div>
<!-- Contact section end -->

<!-- External JS libraries -->
<script src="assets/js/jquery-2.2.0.min.js"></>
<script src="assets/js/bootstrap.min.js"></script>
<!-- Custom JS Script -->
<script  src="assets/js/app.js"></script>


</body>


</html>

<?php
    if (isset($_POST["loginbtn"])) 
    {
        $customerEmail = $_POST["customer_email"];
        $customerPassword = $_POST["customer_password"];
        $check_duplicate_emailpass = mysqli_query($conn, "select * from customer where cust_email = '$customerEmail' and cust_password = '$customerPassword'");
    
        if (mysqli_num_rows($check_duplicate_emailpass) == 1 )
        {
            // if got 1 record, create a session to keep the Primary Key and direct to customer_dashboard.php
            $customer_rec = mysqli_fetch_assoc($check_duplicate_emailpass);
            $_SESSION["sess_id"] = $customer_rec["cust_id"]; 
            
            echo
            "<script type='text/JavaScript'>
            window.location.href='landing.php';
            </script>";
        }
        else // if no matches found, show message "The email address or password is invalid."
        {
        echo 
            "<script type='text/JavaScript'>
            alert('Invalid email or password');
            </script>";
        }
    }
?>