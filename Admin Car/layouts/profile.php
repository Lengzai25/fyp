<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8" />
    <title>Profile | Admin Dashboard CARWOW</title>
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
            <h4 class="page-title d-none d-sm-block">Profile</h4>
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
                    <a href="logout.php" class="dropdown-item">
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

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="profile-bg-picture" style="background-image: url(assets/images/bg-profile.jpg); background-position: bottom;"></div>
                            <div class="p-sm-3 p-0 profile-user">
                                <div class="row g-2">
                                    <div class="col-lg-3  d-none d-lg-block">
                                        <div class="profile-user-img p-2 text-start">
                                            <img src="assets/images/users/avatar-1.jpg" alt="" class="img-thumbnail avatar-lg rounded">
                                        </div>
                                        <div class="text-start p-1 pt-2">
                                            <h4 class=" fs-17 ellipsis">Adams A. Franklin</h4>
                                            <p class="font-13"> User Experience Specialist</p>
                                            <p class="text-muted mb-0"><small>Malacca, Malaysia</small></p>

                                            <div class="d-flex pt-3 align-items-center justify-content-center flex-xl-nowrap flex-lg-wrap justify-content-md-start">
                                                <button type="button" class="btn btn-soft-danger me-sm-2 mt-1">
                                                    <i class="mdi mdi-cog align-text-bottom me-1 fs-16 lh-1"></i>
                                                    Edit Profile
                                                </button>
                                                <button class="btn btn-soft-info mt-1" href="#"> <i class="mdi mdi-check-all fs-18 me-1 lh-1"></i>Following</button>
                                            </div>


                                        </div>
                                        <div class="pt-3 ps-2">
                                            <p class="text-muted mb-2 font-13"><strong>UserName :</strong> <span class="ms-2">Adams A. Franklin</span></p>

                                            <p class="text-muted mb-2 font-13"><strong>Email :</strong> <span class="ms-2">user@email.domain</span></p>

                                            <p class="text-muted mb-1 font-13"><strong>Location :</strong> <span class="ms-2">Malaysia</span></p>
                                        </div>

                                        <div class="text-start mt-4">
                                            <h4 class="">Fllow On:</h4>
                                            <div class="d-flex gap-2 mt-3">
                                                <a href="javascript: void(0);" class="btn px-2 py-1 btn-soft-primary"><i class="mdi mdi-facebook"></i></a>
                                                <a href="javascript: void(0);" class="btn px-2 py-1 btn-soft-danger"><i class="mdi mdi-google-plus"></i></a>
                                                <a href="javascript: void(0);" class="btn px-2 py-1 btn-soft-info"><i class="mdi mdi-twitter"></i></a>
                                                <a href="javascript: void(0);" class="btn px-2 py-1 btn-soft-dark"><i class="mdi mdi-github"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-9 bg-light-subtle">
                                        <div class="profile-content">
                                            <div class="nav nav-pills nav-justified gap-0 p-3 text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                                </li>
                                                <li class="nav-item mt-2"><a class="nav-link fs-5 p-2 active" data-bs-toggle="tab" data-bs-target="#aboutme" type="button" role="tab" aria-controls="home" aria-selected="true" href="#aboutme">About</a>
                                                </li>
                                                <li class="nav-item mt-2"><a class="nav-link fs-5 p-2" data-bs-toggle="tab" data-bs-target="#edit-profile" type="button" role="tab" aria-controls="home" aria-selected="true" href="#edit-profile">Settings</a></li>
                                                <li class="nav-item mt-2"><a class="nav-link fs-5 p-2" data-bs-toggle="tab" data-bs-target="#projects" type="button" role="tab" aria-controls="home" aria-selected="true" href="#projects">Projects</a></li>

                                            </div>

                                            <div class="tab-content m-0 p-2 p-sm-4 " id="v-pills-tabContent">

                                                <div class="tab-pane active" id="aboutme" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                                                    <div class="profile-desk">
                                                        <h5 class="text-uppercase fs-17 text-dark">Johnathan Deo</h5>
                                                        <div class="designation mb-3">PRODUCT DESIGNER (UX / UI / Visual
                                                            Interaction)</div>
                                                        <p class="text-muted fs-16">
                                                            I have 10 years of experience designing for the web, and
                                                            specialize
                                                            in the areas of user interface design, interaction design,
                                                            visual
                                                            design and prototyping. I’ve worked with notable startups
                                                            including
                                                            Pearl Street Software.
                                                        </p>

                                                        <h5 class="mt-4 fs-17 text-dark">Contact Information</h5>
                                                        <table class="table table-condensed table-bordered mb-0 border-top table-striped">
                                                            <tbody>
                                                                <tr>
                                                                    <th scope="row">Url</th>
                                                                    <td>
                                                                        <a href="#" class="ng-binding">
                                                                            www.example.com
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Email</th>
                                                                    <td>
                                                                        <a href="#" class="ng-binding">
                                                                            jonathandeo@example.com
                                                                        </a>
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <th scope="row">Phone</th>
                                                                    <td class="ng-binding">(123)-456-7890</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Skype</th>
                                                                    <td>
                                                                        <a href="#" class="ng-binding">
                                                                            jonathandeo123
                                                                        </a>
                                                                    </td>
                                                                </tr>

                                                            </tbody>
                                                        </table>
                                                    </div> <!-- end profile-desk -->
                                                </div> <!-- about-me -->
                                                <div id="edit-profile" class="tab-pane">
                                                    <div class="user-profile-content">
                                                        <form>
                                                            <div class="row row-cols-sm-2 row-cols-1">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="Username">Username</label>
                                                                    <input type="text" value="john" id="Username" class="form-control">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="Email">Email</label>
                                                                    <input type="email" value="first.last@example.com" id="Email" class="form-control">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="Password">Password</label>
                                                                    <input type="password" placeholder="6 - 15 Characters" id="Password" class="form-control">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="RePassword">Re-Password</label>
                                                                    <input type="password" placeholder="6 - 15 Characters" id="RePassword" class="form-control">
                                                                </div>
                                                                <div class="col-sm-12 mb-3">
                                                                    <label class="form-label" for="AboutMe">About Me</label>
                                                                    <textarea style="height: 125px;" id="AboutMe" class="form-control">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</textarea>
                                                                </div>
                                                            </div>
                                                            <button class="btn btn-primary" type="submit"><i class="mdi mdi-content-save-outline me-1 fs-16 lh-1"></i> Save</button>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div id="projects" class="tab-pane">
                                                    <div class="row m-t-10">
                                                        <div class="col-md-12">
                                                            <div class="table-responsive ">
                                                                <table class="table table-bordered mb-0 table-striped table-hover">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>#</th>
                                                                            <th>Project Name</th>
                                                                            <th>Start Date</th>
                                                                            <th>Due Date</th>
                                                                            <th>Status</th>
                                                                            <th>Assign</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody class="table-group-divider">
                                                                        <tr>
                                                                            <td>1</td>
                                                                            <td>Techmin Admin</td>
                                                                            <td>01/01/2015</td>
                                                                            <td>07/05/2015</td>
                                                                            <td><span class="badge bg-info">Work
                                                                                    in Progress</span></td>
                                                                            <td>Techzaa</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>2</td>
                                                                            <td>Techmin Frontend</td>
                                                                            <td>01/01/2015</td>
                                                                            <td>07/05/2015</td>
                                                                            <td><span class="badge bg-success">Pending</span>
                                                                            </td>
                                                                            <td>Techzaa</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>3</td>
                                                                            <td>Techmin Admin</td>
                                                                            <td>01/01/2015</td>
                                                                            <td>07/05/2015</td>
                                                                            <td><span class="badge bg-pink">Done</span>
                                                                            </td>
                                                                            <td>Techzaa</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>4</td>
                                                                            <td>Techmin Frontend</td>
                                                                            <td>01/01/2015</td>
                                                                            <td>07/05/2015</td>
                                                                            <td><span class="badge bg-purple">Work
                                                                                    in Progress</span></td>
                                                                            <td>Techzaa</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>5</td>
                                                                            <td>Techmin Admin</td>
                                                                            <td>01/01/2015</td>
                                                                            <td>07/05/2015</td>
                                                                            <td><span class="badge bg-warning">Coming
                                                                                    soon</span></td>
                                                                            <td>Techzaa</td>
                                                                        </tr>

                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- profile -->

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- --row end  -->

                    

                 


                </div>
                <!-- container -->

            </div>
            <!-- content -->

            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 text-center">
                            <script>document.write(new Date().getFullYear())</script> © Techmin - Theme by <b>Techzaa</b>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->

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
                <div class="col-6">
                    <a href="#" role="button" class="btn btn-primary w-100">Buy Now</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor js -->
    <script src="assets/js/vendor.min.js"></script>









    <script src="assets/vendor/lucide/umd/lucide.min.js"></script>

    <!-- Chart.js -->
    <script src="assets/vendor/chart.js/chart.min.js"></script>

    <!-- Profile Demo App js -->
    <script src="assets/js/pages/profile.init.js"></script>

    <!-- App js -->
    <script src="assets/js/app.min.js"></script>

</body>


<!-- Mirrored from techzaa.in/techmin/layouts/pages-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Dec 2024 04:33:38 GMT -->
</html>