<?php

include "dataconnection.php";

// get the session that keeps the Primary key
$sess_id = $_SESSION["sess_id"]; 

// find from the admintbl the record related to this Primary key
$get_admin = mysqli_query($conn, "select * from admin where admin_id=$sess_id");

// Retrieve the record
$admin_rec = mysqli_fetch_assoc($get_admin);

?>

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8" />
    <title>Addcar | Admin Dashboard CARWOW</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully responsive admin theme which can be used to build CRM, CMS,ERP etc." name="description" />
    <meta content="Techzaa" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Theme Config Js -->
    <script src="assets/js/config.js"></script>

    <!-- App css -->
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />

    <script type="text/javascript">

        // confirm delete function
        function confirm_delete()
        {
        answer = confirm("Do you want to delete this record?");
        return answer;
        }

    </script>

</head>

<body>
    <!-- Begin page -->
    <div class="wrapper">

        <!-- ========== Topbar Start ========== -->
<div class="navbar-custom">
    <div class="topbar container-fluid">
        <div class="d-flex align-items-center gap-1">

            <!-- Topbar Brand Logo -->
            <div class="logo-topbar">
                <!-- Logo light -->
                <a href="index.php" class="logo-light">
                    <span class="logo-lg">
                        <img src="assets/images/logo.png" alt="logo">
                    </span>
                    <span class="logo-sm">
                        <img src="assets/images/logo-sm.png" alt="small logo">
                    </span>
                </a>

                <!-- Logo Dark -->
                <a href="index.php" class="logo-dark">
                    <span class="logo-lg">
                        <img src="assets/images/logo-dark.png" alt="dark logo">
                    </span>
                    <span class="logo-sm">
                        <img src="assets/images/logo-sm.png" alt="small logo">
                    </span>
                </a>
            </div>

            <!-- Sidebar Menu Toggle Button -->
            <button class="button-toggle-menu">
                <i class="mdi mdi-menu"></i>
            </button>

            <!-- Page Title -->
            <h4 class="page-title d-none d-sm-block">Add Car Form</h4>
        </div>

        <ul class="topbar-menu d-flex align-items-center gap-3">
            <li class="dropdown d-lg-none">
                <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <i class="mdi mdi-magnify fs-2"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">
                    <form class="p-3">
                        <input type="search" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                    </form>
                </div>
            </li>

            <li class="dropdown">
                <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <img src="assets/images/flags/us.jpg" alt="user-image" class="me-0 me-sm-1" height="12">
                    <span class="align-middle d-none d-lg-inline-block">English</span>
                    <span class="mdi mdi-chevron-down fs-22 d-none d-sm-inline-block align-middle"></span>

                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated">

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">
                        <img src="assets/images/flags/germany.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">German</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">
                        <img src="assets/images/flags/italy.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Italian</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">
                        <img src="assets/images/flags/spain.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Spanish</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">
                        <img src="assets/images/flags/russia.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Russian</span>
                    </a>

                </div>
            </li>

            <li class="dropdown notification-list">
                <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <i class="ri-mail-line fs-22"></i>

                    <span class="noti-icon-badge badge text-bg-purple">4</span>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg py-0">
                    <div class="p-2 border-top-0 border-start-0 border-end-0 border-dashed border">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="m-0 fs-16 fw-semibold"> Messages</h6>
                            </div>
                            <div class="col-auto">
                                <a href="javascript: void(0);" class="text-dark text-decoration-underline">
                                    <small>Clear All</small>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div style="max-height: 300px;" data-simplebar>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item p-0 notify-item read-noti card m-0 shadow-none">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="notify-icon">
                                            <img src="assets/images/users/avatar-1.jpg" class="img-fluid rounded-circle" alt="" />
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 text-truncate ms-2">
                                        <h5 class="noti-item-title fw-semibold fs-14">Cristina Pride <small class="fw-normal text-muted float-end ms-1">1 day ago</small></h5>
                                        <small class="noti-item-subtitle text-muted">Hi, How are you? What about our
                                            next meeting</small>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item p-0 notify-item read-noti card m-0 shadow-none">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="notify-icon">
                                            <img src="assets/images/users/avatar-2.jpg" class="img-fluid rounded-circle" alt="" />
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 text-truncate ms-2">
                                        <h5 class="noti-item-title fw-semibold fs-14">Sam Garret <small class="fw-normal text-muted float-end ms-1">2 day ago</small></h5>
                                        <small class="noti-item-subtitle text-muted">Yeah everything is fine</small>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item p-0 notify-item read-noti card m-0 shadow-none">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="notify-icon">
                                            <img src="assets/images/users/avatar-3.jpg" class="img-fluid rounded-circle" alt="" />
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 text-truncate ms-2">
                                        <h5 class="noti-item-title fw-semibold fs-14">Karen Robinson <small class="fw-normal text-muted float-end ms-1">2 day ago</small></h5>
                                        <small class="noti-item-subtitle text-muted">Wow that's great</small>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item p-0 notify-item read-noti card m-0 shadow-none">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="notify-icon">
                                            <img src="assets/images/users/avatar-4.jpg" class="img-fluid rounded-circle" alt="" />
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 text-truncate ms-2">
                                        <h5 class="noti-item-title fw-semibold fs-14">Sherry Marshall <small class="fw-normal text-muted float-end ms-1">3 day ago</small></h5>
                                        <small class="noti-item-subtitle text-muted">Hi, How are you? What about our
                                            next meeting</small>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item p-0 notify-item read-noti card m-0 shadow-none">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="notify-icon">
                                            <img src="assets/images/users/avatar-5.jpg" class="img-fluid rounded-circle" alt="" />
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 text-truncate ms-2">
                                        <h5 class="noti-item-title fw-semibold fs-14">Shawn Millard <small class="fw-normal text-muted float-end ms-1">4 day ago</small></h5>
                                        <small class="noti-item-subtitle text-muted">Yeah everything is fine</small>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- All-->
                    <a href="javascript:void(0);" class="dropdown-item text-center text-primary text-decoration-underline fw-bold notify-item border-top border-light py-2">
                        View All
                    </a>

                </div>
            </li>

            <li class="dropdown notification-list">
                <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <i class="ri-notification-3-line fs-22"></i>
                    <span class="noti-icon-badge badge text-bg-pink">3</span>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg py-0">
                    <div class="p-2 border-top-0 border-start-0 border-end-0 border-dashed border">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="m-0 fs-16 fw-semibold"> Notification</h6>
                            </div>
                            <div class="col-auto">
                                <a href="javascript: void(0);" class="text-dark text-decoration-underline">
                                    <small>Clear All</small>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div style="max-height: 300px;" data-simplebar>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon bg-primary-subtle">
                                <i class="mdi mdi-account text-primary"></i>
                            </div>
                            <p class="notify-details">Caleb Flakelar commented on Admin
                                <small class="noti-time">1 min ago</small>
                            </p>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon bg-warning-subtle">
                                <i class="mdi mdi-account-plus text-warning"></i>
                            </div>
                            <p class="notify-details">New user registered.
                                <small class="noti-time">5 hours ago</small>
                            </p>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon bg-danger-subtle">
                                <i class="mdi mdi-heart text-danger"></i>
                            </div>
                            <p class="notify-details">Carlos Crouch liked
                                <small class="noti-time">3 days ago</small>
                            </p>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon bg-pink-subtle">
                                <span class="mdi mdi-account-box text-pink"></span>
                            </div>
                            <p class="notify-details">Caleb Flakelar commented on Admi
                                <small class="noti-time">4 days ago</small>
                            </p>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon bg-purple-subtle">
                                <i class="mdi mdi-account-plus text-purple"></i>
                            </div>
                            <p class="notify-details">New user registered.
                                <small class="noti-time">7 days ago</small>
                            </p>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon bg-success-subtle text-success">
                            </div>
                            <p class="notify-details">Carlos Crouch liked <b>Admin</b>.
                                <small class="noti-time">Carlos Crouch liked</small>
                            </p>
                        </a>
                    </div>

                    <!-- All-->
                    <a href="javascript:void(0);" class="dropdown-item text-center text-primary text-decoration-underline fw-bold notify-item border-top border-light py-2">
                        View All
                    </a>

                </div>
            </li>

            <li class="d-none d-sm-inline-block">
                <a class="nav-link" data-bs-toggle="offcanvas" href="#theme-settings-offcanvas">
                    <span class="ri-settings-3-line fs-22"></span>
                </a>
            </li>

            <li class="d-none d-sm-inline-block">
                <div class="nav-link" id="light-dark-mode">
                    <i class="ri-moon-line fs-22"></i>
                </div>
            </li>

            <li class="dropdown">
                <a class="nav-link dropdown-toggle arrow-none nav-user" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <span class="account-user-avatar">
                        <img src="assets/images/users/avatar-1.jpg" alt="user-image" width="32" class="rounded-circle">
                    </span>
                    <span class="d-lg-block d-none">
                        <h5 class="my-0 fw-normal">Adams<i class="ri-arrow-down-s-line fs-22 d-none d-sm-inline-block align-middle"></i></h5>
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated profile-dropdown">
                    <!-- item-->
                    <div class=" dropdown-header noti-title">
                        <h6 class="text-overflow m-0">Welcome !</h6>
                    </div>

                    <!-- item-->
                    <a href="profile.php" class="dropdown-item">
                        <i class="ri-account-pin-circle-line fs-16 align-middle me-1 "></i>
                        <span>My Account</span>
                    </a>

                    <!-- item-->
                    <a href="auth-logout.html" class="dropdown-item">
                        <i class="ri-logout-circle-r-line align-middle me-1"></i>
                        <span>Logout</span>
                    </a>
                </div>
            </li>
        </ul>
    </div>
</div>
<!-- ========== Topbar End ========== -->

        <!-- Left Sidebar Start -->
        <div class="leftside-menu">

		    <!-- Logo Light -->
		    <a href="index.php" class="logo logo-light">
		        <span class="logo-lg">
		            <img src="assets/images/logo.png" alt="logo">
		        </span>
		        <span class="logo-sm">
		            <img src="assets/images/logo-sm.png" alt="small logo">
		        </span>
		    </a>

		    <!-- Logo Dark -->
		    <a href="index.php" class="logo logo-dark">
		        <span class="logo-lg">
		            <img src="assets/images/logo-dark.png" alt="dark logo">
		        </span>
		        <span class="logo-sm">
		            <img src="assets/images/logo-sm.png" alt="small logo">
		        </span>
		    </a>

		    <!-- Sidebar -->
		    <div data-simplebar>
                <ul class="side-nav">
                    <li class="side-nav-title">Main</li>

                    <li class="side-nav-item">
                        <a href="index.php" class="side-nav-link">
                            <i class="ri-dashboard-2-line"></i>
                            <span> Dashboard </span>
                            <span class="badge bg-success float-end">9+</span>
                        </a>
                    </li>

                    <li class="side-nav-title">App</li>
                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarPagesinvoice" aria-expanded="false" aria-controls="sidebarPagesinvoice" class="side-nav-link">
                            <i class="ri-article-line"></i>
                            <span>Invoice</span>
                            <span class="menu-arrow"></span>

                        </a>
                        <div class="collapse" id="sidebarPagesinvoice">
                            <ul class="side-nav-second-level">
                                <li class="side-nav-item">
                                    <a class="side-nav-link" href="invoice-report.php">Invoice Report</a>
                                </li>
                                <li class="side-nav-item">
                                    <a class="side-nav-link" href="invoice.php">Invoice</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-title">Pages</li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarPages" aria-expanded="false" aria-controls="sidebarPages" class="side-nav-link">
                            <i class="ri-stack-line"></i>
                            <span> Pages </span>
                            <span class="menu-arrow"></span>

                        </a>
                        <div class="collapse" id="sidebarPages">
                            <ul class="side-nav-second-level">
                                <li class="side-nav-item">
                                    <a class="side-nav-link" href="profile.php">Profile</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarPagesAuth" aria-expanded="false" aria-controls="sidebarPagesAuth" class="side-nav-link">
                            <i class="ri-account-circle-line"></i>
                            <span> Authentication </span>
                            <span class="menu-arrow"></span>

                        </a>
                        <div class="collapse" id="sidebarPagesAuth">
                            <ul class="side-nav-second-level">
                                <li class="side-nav-item">
                                    <a class="side-nav-link" href="login.php">Login</a>
                                </li>
                                <li class="side-nav-item">
                                    <a class="side-nav-link" href="register.php">Register</a>
                                </li>
                                <li class="side-nav-item">
                                    <a class="side-nav-link" href="logout.php">Logout</a>
                                </li>
                                <li class="side-nav-item">
                                    <a class="side-nav-link" href="auth-forgotpw.html">Forgot Password</a>
                                </li>

                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-title">Components</li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarBaseUI" aria-expanded="false" aria-controls="sidebarBaseUI" class="side-nav-link">
                            <i class="ri-briefcase-line"></i>
                            <span> Base UI </span>
                            <span class="menu-arrow"></span>

                        </a>
                        <div class="collapse" id="sidebarBaseUI">
                            <ul class="side-nav-second-level">
                                <li class="side-nav-item">
                                    <a class="side-nav-link" href="ui-navbar.html">Navbar</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarIcons" aria-expanded="false" aria-controls="sidebarIcons" class="side-nav-link">
                            <i class="ri-contrast-drop-2-line"></i>
                            <span> Icons </span>
                            <span class="menu-arrow"></span>

                        </a>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarForms" aria-expanded="false" aria-controls="sidebarForms" class="side-nav-link">
                            <i class="ri-survey-line"></i>
                            <span>Forms </span>
                            <span class="menu-arrow"></span>

                        </a>
                        <div class="collapse" id="sidebarForms">
                            <ul class="side-nav-second-level">
                                <li class="side-nav-item">
                                    <a class="side-nav-link" href="form-wizard.html">Form Wizard</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarTables" aria-expanded="false" aria-controls="sidebarTables" class="side-nav-link">
                            <i class="ri-table-line"></i>
                            <span> Tables </span>
                            <span class="menu-arrow"></span>


                        </a>
                        <div class="collapse" id="sidebarTables">
                            <ul class="side-nav-second-level">
                                <li class="side-nav-item">
                                    <a class="side-nav-link" href="tables-datatable.html">Data Tables</a>
                                </li>
                                <li class="side-nav-item">
                                    <a class="side-nav-link" href="tables-editable.html">Editable Tables</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    

                    
                </ul>
            </div>
		</div>
        <!-- Left Sidebar End -->
        

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class=".card-title">View Car</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <?php
                                                // identify which record to be updated
                                                $cid = $_REQUEST["edit_cid"]; 
                                            
                                                $get_list = mysqli_query($conn, "select * from car where car_id = $cid");
                                                $car_rec= mysqli_fetch_assoc($get_list);
                                            ?>
                                            <form>

                                                <div class="mb-3">
                                                    <label for="example-fileinput" class="form-label">Car Image</label>
                                                    
                                                        <?php 
                                                            echo '<img src="#' . $car_rec['car_pic'] . '";>';
                                                        ?>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="example-fileinput" class="form-label">Car Image 2</label>
                                                    <input type="file" id="example-fileinput" class="form-control">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="example-fileinput" class="form-label">Car Image 3</label>
                                                    <input type="file" id="example-fileinput" class="form-control">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="example-fileinput" class="form-label">Car Image 4</label>
                                                    <input type="file" id="example-fileinput" class="form-control">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="example-fileinput" class="form-label">Car Image 5</label>
                                                    <input type="file" id="example-fileinput" class="form-control">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="example-select" class="form-label">Car Brand</label>
                                                    <select class="form-select" id="example-select">
                                                        <option selected>Select car brand</option>
                                                        <option value="1">Toyota</option>
                                                        <option value="2">Honda</option>
                                                        <option value="3">Mercedes-Benz</option>
                                                    </select>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="simpleinput" class="form-label">Car Model</label>
                                                    <input type="text" id="simpleinput" class="form-control" placeholder="Enter the car model">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="example-number" class="form-label">Car Price</label>
                                                    <input class="form-control" id="example-number" type="number"
                                                        name="number" min="0">
                                                </div>

                                            </form>
                                        </div> <!-- end col -->

                                        <div class="col-lg-6">
                                            <form>

                                                <div class="mb-3">
                                                    <label for="example-textarea" class="form-label">Car Description</label>
                                                    <textarea class="form-control" id="example-textarea"
                                                        rows="5"></textarea>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="example-month" class="form-label">Year</label>
                                                    <input class="form-control" id="example-month" type="month"
                                                        name="month">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="example-number" class="form-label">Mileage</label>
                                                    <input class="form-control" id="example-number" type="number"
                                                        name="number" min="0">
                                                </div>

                                                <h6 class="fs-15 mt-3" >Body Color</h6>
                                                    <div class="col-lg-6">
                                                        <input type="radio" id="customRadio1" name="customRadio"
                                                            class="form-check-input">
                                                        <label class="form-check-label" for="customRadio1">Grey</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input type="radio" id="customRadio2" name="customRadio"
                                                            class="form-check-input">
                                                        <label class="form-check-label" for="customRadio2">White</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input type="radio" id="customRadio2" name="customRadio"
                                                            class="form-check-input">
                                                        <label class="form-check-label" for="customRadio3">Red</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input type="radio" id="customRadio2" name="customRadio"
                                                            class="form-check-input">
                                                        <label class="form-check-label" for="customRadio4">Black</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input type="radio" id="customRadio2" name="customRadio"
                                                            class="form-check-input">
                                                        <label class="form-check-label" for="customRadio5">Dark Blue</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input type="radio" id="customRadio2" name="customRadio"
                                                            class="form-check-input">
                                                        <label class="form-check-label" for="customRadio6">Others</label>
                                                    </div>
                                                    <br>

                                                <div class="mb-3">
                                                    <label for="example-palaceholder"
                                                        class="form-label">Car Engine</label>
                                                    <input type="text" id="example-palaceholder" class="form-control"
                                                        placeholder="Enter the car engine">
                                                </div>

                                                <div class="justify-content-end row" style="text-align: right; margin-top: 80px;">
                                                    <div class="col-9">
                                                        <input type="submit" name="savebtn" value="Save Product" class="btn btn-info"/>
                                                        <input type="button" class="btn btn-info" style="margin-left: 5px;" name="cancelbtn" value="Cancel" onclick="window.location.href='cartable.php';"/>
                                                    </div>
                                                </div>

                                            </form>
                                        </div> <!-- end col -->
                                    </div>
                                    <!-- end row-->
                                </div> <!-- end card-body -->
                            </div> <!-- end card -->
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div> <!-- container -->

            </div> <!-- content -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <!-- Theme Settings -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="theme-settings-offcanvas">
        <div class="d-flex align-items-center bg-primary p-3 offcanvas-header">
            <h5 class="text-white m-0">Theme Settings</h5>
            <button type="button" class="btn-close btn-close-white ms-auto" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <div class="offcanvas-body p-0">
            <div data-simplebar class="h-100">
                <div class="p-3">
                    <h5 class="mb-3 fs-16 fw-semibold">Color Scheme</h5>

                    <div class="row">
                        <div class="col-6">
                            <div class="form-check mb-1">
                                <input class="form-check-input border-secondary" type="radio" name="data-bs-theme" id="layout-color-light" value="light">
                                <label class="form-check-label" for="layout-color-light">Light</label>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-check mb-1">
                                <input class="form-check-input border-secondary" type="radio" name="data-bs-theme" id="layout-color-dark" value="dark">
                                <label class="form-check-label" for="layout-color-dark">Dark</label>
                            </div>
                        </div>
                    </div>

                    <div id="layout-width">
                        <h5 class="my-3 fs-16 fw-semibold">Layout Mode</h5>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-check mb-1">
                                    <input class="form-check-input border-secondary" type="radio" name="data-layout-mode" id="layout-mode-fluid" value="fluid">
                                    <label class="form-check-label" for="layout-mode-fluid">Fluid</label>
                                </div>
                            </div>

                            <div class="col-6">
                                <div id="layout-boxed">
                                    <div class="form-check mb-1">
                                        <input class="form-check-input border-secondary" type="radio" name="data-layout-mode" id="layout-mode-boxed" value="boxed">
                                        <label class="form-check-label" for="layout-mode-boxed">Boxed</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h5 class="my-3 fs-16 fw-semibold">Topbar Color</h5>

                    <div class="row">
                        <div class="col-6">
                            <div class="form-check mb-1">
                                <input class="form-check-input border-secondary" type="radio" name="data-topbar-color" id="topbar-color-light" value="light">
                                <label class="form-check-label" for="topbar-color-light">Light</label>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-check mb-1">
                                <input class="form-check-input border-secondary" type="radio" name="data-topbar-color" id="topbar-color-dark" value="dark">
                                <label class="form-check-label" for="topbar-color-dark">Dark</label>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h5 class="my-3 fs-16 fw-semibold">Menu Color</h5>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-check mb-1">
                                    <input class="form-check-input border-secondary" type="radio" name="data-menu-color" id="leftbar-color-light" value="light">
                                    <label class="form-check-label" for="leftbar-color-light">Light</label>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-check mb-1">
                                    <input class="form-check-input border-secondary" type="radio" name="data-menu-color" id="leftbar-color-dark" value="dark">
                                    <label class="form-check-label" for="leftbar-color-dark">Dark</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="sidebar-size">
                        <h5 class="my-3 fs-16 fw-semibold">Sidebar Size</h5>

                        <div class="row gap-2">
                            <div class="col-12">
                                <div class="form-check mb-1">
                                    <input class="form-check-input border-secondary" type="radio" name="data-sidenav-size" id="leftbar-size-default" value="default">
                                    <label class="form-check-label" for="leftbar-size-default">Default</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-check mb-1">
                                    <input class="form-check-input border-secondary" type="radio" name="data-sidenav-size" id="leftbar-size-compact" value="compact">
                                    <label class="form-check-label" for="leftbar-size-compact">Compact</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-check mb-1">
                                    <input class="form-check-input border-secondary" type="radio" name="data-sidenav-size" id="leftbar-size-small" value="condensed">
                                    <label class="form-check-label" for="leftbar-size-small">Condensed</label>
                                </div>
                            </div>


                            <div class="col-12">
                                <div class="form-check mb-1">
                                    <input class="form-check-input border-secondary" type="radio" name="data-sidenav-size" id="leftbar-size-full" value="full">
                                    <label class="form-check-label" for="leftbar-size-full">Full Layout</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="layout-position">
                        <h5 class="my-3 fs-16 fw-semibold">Layout Position</h5>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="data-layout-position" id="layout-position-fixed" value="fixed">
                                    <label class="form-check-label" for="layout-position-fixed">Fixed</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="data-layout-position" id="layout-position-scrollable" value="scrollable">
                                    <label class="form-check-label" for="layout-position-scrollable">Scrollable</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="offcanvas-footer border-top p-3 text-center">
            <div class="row">
                <div class="col-6">
                    <button type="button" class="btn btn-light w-100" id="reset-layout">Reset</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Vendor js -->
    <script src="assets/js/vendor.min.js"></script>

    <script src="assets/vendor/lucide/umd/lucide.min.js"></script>

    <!-- App js -->
    <script src="assets/js/app.min.js"></script>

</body>

</html>

<?php

if (isset($_POST["savebtn"]))
{
	// get all date from the form
	$productname = $_POST["product_name"];
	$productdesc = $_POST["product_description"];
	$productprice = $_POST["product_price"];
	$productstocklvl = $_POST["product_stock_level"];
	$productcat = $_POST["product_category"];
	$filename = $_POST["product_image"];
	
	// check for duplicate product name
	$check_duplicate_productname = mysqli_query($conn, "select * from product where product_name = '$productname'");

	$catid_result = mysqli_query($conn, "SELECT category_id FROM category WHERE category_name = '$productcat'");
	while ($catid_row = mysqli_fetch_assoc($catid_result)) 
	{
		$catid = $catid_row['category_id'];
	}
	
	if (mysqli_num_rows($check_duplicate_productname) > 0 )
	{
	echo
	"<script type='text/javascript'>
		alert('This Product Name already exists.');
		history.go(-1);
		window.location.href='addproduct.php';
	</script>";
	}
	else // insert data into the product table
	{	
		if ($filename != "") 
		{
			$path = "../assets/img/".$filename;

			mysqli_query($conn, "insert into product (product_name,product_desc,product_price,product_stock,category_id,product_image) values ('$productname','$productdesc','$productprice','$productstocklvl','$catid','$filename')");
		}
		else
		{
			echo "<script type='text/javascript'>
						alert('Failed to upload image.');
						window.location.href='viewproduct.php';
					</script>";
		}
	}

	echo
		"<script type='text/javascript'>
			alert('Record has been saved sucessfully.');
			window.location.href='viewproduct.php';
		</script>";
	
}


?>