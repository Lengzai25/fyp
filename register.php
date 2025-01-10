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

        // Validate password
        if (!password.match(password_pattern)) {
            alert("Error: Invalid password format. Password must be at least 8 characters long, contain at least one uppercase letter, one lowercase letter, and one number.");
            return false;
        } else {
            password_check = 1;
        }

        // Validate confirm password
        if (confirm_password !== password) 
        {
            alert("Error: Passwords do not match. Please confirm your password correctly.");
            return false;
        } 
        else 
        {
            confirm_password_check = 1;
        }

        // Final check
        if (
            name_check === 1 &&
            email_check === 1 &&
            password_check === 1 &&
            confirm_password_check === 1 &&
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
                        <form name="register" method="post" onsubmit="return display()">
                            <div class="form-group">
                                <input type="text" name="name" id="name" class="input-text" placeholder="Full Name">
                            </div>
                            <div class="form-group">
                                <input type="text" name="email" id="email" class="input-text" placeholder="Email Address">
                            </div>
                            <div class="form-group">
                                <input type="tel" name="tel" id="contact-number" class="input-text" placeholder="Contact Number">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" id="password" class="input-text" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <input type="password" name="confirm_password" id="confirm-password" class="input-text" placeholder="Confirm Password">
                            </div>
                            <div class="">
                                <input type="submit" value="Sign Up" name="signup" class="btn-md btn-theme btn-block">
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
<!-- Contact section end -->


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
    $userpass = $_POST["password"];
    $confirmpass = $_POST["confirm_password"];

    // Check if email already exists
    $check_duplicate_email = mysqli_query($conn, "SELECT * FROM customer WHERE cust_email = '$useremail'");
    if (mysqli_num_rows($check_duplicate_email) > 0) 
    {
        echo "<script type='text/javascript'>
                alert('This Email already exists.');
                window.location.href='register.php';
              </script>";
    } 
    else 
    {
        // Insert new user into the database
        $insert_user = mysqli_query($conn, "INSERT INTO customer (cust_name, cust_email, cust_tel, cust_password) VALUES ('$username', '$useremail', '$usertel', '$confirmpass')");

        if ($insert_user) {
            echo "<script type='text/javascript'>
                    alert('Record has been saved successfully.');
                    window.location.href='index.php';
                  </script>";
        } else {
            echo "<script type='text/javascript'>
                    alert('Error saving record. Please try again.');
                    window.location.href='register.php';
                  </script>";
        }
    }

    mysqli_close($conn);
}
?>
