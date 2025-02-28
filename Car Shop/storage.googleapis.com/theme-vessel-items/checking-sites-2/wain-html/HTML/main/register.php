<?php

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
                    <!-- Logo-->
                    <a href="index.html">
                        <img src="assets/img/logos/logo.png" class="cm-logo" alt="logo">
                    </a>
                    <!-- details -->
                    <div class="details">
                        <!-- Name -->
                        <h3>Create an account</h3>
                        <!-- Form start-->
                        <form name="addfrm" method="post">
                            <div class="form-group">
                                <input type="text" name="name" class="input-text" placeholder="Full Name" required>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="input-text" placeholder="Email Address" required>
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="input-text" placeholder="Password" required>
                            </div>
                            <div class="form-group">
                                <input type="password" name="confirm_password" class="input-text" placeholder="Confirm Password" required>
                            </div>
                            <div class="form-group mb-0">
                                <input type="submit" name="signup" value="Sign Up" class="btn-md btn-theme btn-block"></input>
                            </div>
                        </form>
                        <!-- Form end-->
                    </div>
                    <!-- Footer -->
                    <div class="footer">
                    <span>
                        Already a member? <a href="login.html">Login here</a>
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
</html>

<?php

if (isset($_POST["signup"]))
{
    $username = $_POST["name"];
	$useremail = $_POST["email"];
	$userpass = $_POST["password"];
    $confirmpass = $_POST["confirm_password"];

    // Check if email already exists
    $check_duplicate_email = mysqli_query($conn, "SELECT * FROM customer WHERE cust_email = '$useremail'");
    if (mysqli_num_rows($check_duplicate_email) > 0) 
    {
        echo "<script type='text/javascript'>
                alert('This Email already exists.');
                window.location.href='signup.php';
                </script>";
    } 
    else 
    {
        // Insert new user into the database
        $hashedPassword = password_hash($userpass, PASSWORD_BCRYPT); // Use hashed password for security
        $insert_user = mysqli_query($conn, "INSERT INTO customer (cust_name, cust_email, cust_password) VALUES ('$username', '$useremail', '$hashedPassword')");

        if ($insert_user) 
        {
            echo "<script type='text/javascript'>
                    alert('Record has been saved successfully.');
                    window.location.href='index-3.html';
                    </script>";
        } 
        else 
        {
            echo "<script type='text/javascript'>
                    alert('Error saving record. Please try again.');
                    window.location.href='signup.php';
                    </script>";
        }
    }
}

?>