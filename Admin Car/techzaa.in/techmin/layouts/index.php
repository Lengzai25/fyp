<!DOCTYPE html>
<html lang="en">


<head>
	<meta charset="utf-8" />
	<title>Admin CARWOW</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta content="A fully responsive admin theme which can be used to build CRM, CMS,ERP etc." name="description" />
	<meta content="Techzaa" name="author" />

	<!-- App favicon -->
	<link rel="shortcut icon" href="assets/images/favicon.ico">

	<!-- Daterangepicker css -->
	<link rel="stylesheet" href="assets/vendor/daterangepicker/daterangepicker.css">

	<!-- Vector Map css -->
	<link rel="stylesheet" href="assets/vendor/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css">

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
                <a href="index.html" class="logo-dark">
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
            <h4 class="page-title d-none d-sm-block">Dashboards</h4>
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
                    <a href="pages-profile.html" class="dropdown-item">
                        <i class="ri-account-pin-circle-line fs-16 align-middle me-1 "></i>
                        <span>My Account</span>
                    </a>

                    <!-- item-->
                    <a href="pages-profile.html" class="dropdown-item">
                        <i class="ri-settings-4-line fs-16 align-middle me-1"></i>
                        <span>Settings</span>
                    </a>

                    <!-- item-->
                    <a href="pages-faq.html" class="dropdown-item">
                        <i class="ri-customer-service-2-line fs-16 align-middle me-1"></i>
                        <span>Support</span>
                    </a>

                    <!-- item-->
                    <a href="auth-lock-screen.html" class="dropdown-item">                
                        <i class="ri-lock-line fs-16 align-middle me-1"></i>
                        <span>Lock Screen</span>
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
		    <a href="index.html" class="logo logo-light">
		        <span class="logo-lg">
		            <img src="assets/images/logo.png" alt="logo">
		        </span>
		        <span class="logo-sm">
		            <img src="assets/images/logo-sm.png" alt="small logo">
		        </span>
		    </a>

		    <!-- Logo Dark -->
		    <a href="index.html" class="logo logo-dark">
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
		                <a href="index.html" class="side-nav-link">
		                    <i class="ri-dashboard-2-line"></i>
		                    <span> Dashboard </span>
		                    <span class="badge bg-success float-end">9+</span>
		                </a>
		            </li>

		            <li class="side-nav-title">App</li>
            
		            <li class="side-nav-item">
		                <a href="apps-calendar.html" class="side-nav-link">
		                    <i class="ri-calendar-line"></i>
		                    <span> Calendar</span>

		                </a>
		            </li>
           
		            <li class="side-nav-item">
		                <a href="apps-kanban-board.html" class="side-nav-link">
		                    <i class="ri-artboard-line"></i>
		                    <span> Kanban Board</span>
		                </a>
		            </li>

		            <li class="side-nav-item">
		                <a data-bs-toggle="collapse" href="#sidebarPagesinvoice" aria-expanded="false" aria-controls="sidebarPagesinvoice" class="side-nav-link">
		                    <i class="ri-article-line"></i>
		                    <span>Invoice</span>
		                    <span class="menu-arrow"></span>

		                </a>
		                <div class="collapse" id="sidebarPagesinvoice">
		                    <ul class="side-nav-second-level">
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="apps-invoice-report.html">Invoice Report</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="apps-invoice.html">Invoice</a>
		                        </li>
		                    </ul>
		                </div>
		            </li>

		            <li class="side-nav-title">Extra Pages</li>

		            <li class="side-nav-item">
		                <a data-bs-toggle="collapse" href="#sidebarPages" aria-expanded="false" aria-controls="sidebarPages" class="side-nav-link">
		                    <i class="ri-stack-line"></i>
		                    <span> Pages </span>
		                    <span class="menu-arrow"></span>

		                </a>
		                <div class="collapse" id="sidebarPages">
		                    <ul class="side-nav-second-level">
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="pages-starter.html">Starter Page</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="pages-contact-list.html">Contact List</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="pages-profile.html">Profile</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="pages-timeline.html">Timeline</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="pages-faq.html">FAQ</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="pages-pricing.html">Pricing</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="pages-maintenance.html">Maintenance</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="error-404.html">Error 404</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="error-404-alt.html">Error 404-alt</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="error-500.html">Error 500</a>
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
		                            <a class="side-nav-link" href="auth-login.html">Login</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="auth-register.html">Register</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="auth-logout.html">Logout</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="auth-forgotpw.html">Forgot Password</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="auth-lock-screen.html">Lock Screen</a>
		                        </li>

		                    </ul>
		                </div>
		            </li>

		            <li class="side-nav-item">
		                <a data-bs-toggle="collapse" href="#sidebarLayouts" aria-expanded="false" aria-controls="sidebarLayouts" class="side-nav-link">
		                    <i class="ri-layout-line"></i>
		                    <span class="badge bg-warning float-end">New</span>
		                    <span> Layouts </span>
		                </a>
		                <div class="collapse" id="sidebarLayouts">
		                    <ul class="side-nav-second-level">
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="layouts-light-sidebar.html" target="_blank">Light Sidebar</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="layouts-sm-sidebar.html" target="_blank">Small Sidebar</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="layouts-collapsed-sidebar.html" target="_blank">Collapsed Sidebar</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="layouts-unsticky-layout.html" target="_blank">Unsticky Layout</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="layouts-boxed.html" target="_blank">Boxed Layout</a>
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
		                            <a class="side-nav-link" href="ui-accordions.html">Accordions</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="ui-alerts.html">Alerts</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="ui-avatars.html">Avatars</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="ui-buttons.html">Buttons</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="ui-button-group.html">Button group</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="ui-badges.html">Badges</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="ui-breadcrumb.html">Breadcrumb</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="ui-cards.html">Cards</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="ui-carousel.html">Carousel</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="ui-collapse.html">Collapse</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="ui-close-button.html">Close Button</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="ui-dropdowns.html">Dropdowns</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="ui-embed-video.html">Embed Video</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="ui-grid.html">Grid</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="ui-links.html">Links</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="ui-list-group.html">List Group</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="ui-modals.html">Modals</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="ui-navbar.html">Navbar</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="ui-offcanvas.html">Offcanvas</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="ui-placeholders.html">Placeholders</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="ui-pagination.html">Pagination</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="ui-popovers.html">Popovers</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="ui-progress.html">Progress</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="ui-scrollspy.html">Scrollspy</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="ui-spinners.html">Spinners</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="ui-toasts.html">Toasts</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="ui-tabs.html">Tabs</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="ui-tooltips.html">Tooltips</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="ui-typography.html">Typography</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="ui-utilities.html">Utilities</a>
		                        </li>

		                    </ul>
		                </div>
		            </li>

		            <li class="side-nav-item">
		                <a data-bs-toggle="collapse" href="#sidebarExtendedUI" aria-expanded="false" aria-controls="sidebarExtendedUI" class="side-nav-link">
		                    <i class="ri-compass-3-line"></i>
		                    <span> Extended UI </span>
		                    <span class="menu-arrow"></span>

		                </a>
		                <div class="collapse" id="sidebarExtendedUI">
		                    <ul class="side-nav-second-level">
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="extended-portlets.html">Portlets</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="extended-scrollbar.html">Scrollbar</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="extended-range-slider.html">Range Slider</a>
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
		                <div class="collapse" id="sidebarIcons">
		                    <ul class="side-nav-second-level">
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="icons-lucide.html">Lucide Icons</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="icons-remixicons.html">Remix Icons</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="icons-bootstrap.html">Bootstrap Icons</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="icons-mdi.html">Material Design Icons</a>
		                        </li>
		                    </ul>
		                </div>
		            </li>

		            <li class="side-nav-item">
		                <a data-bs-toggle="collapse" href="#sidebarCharts" aria-expanded="false" aria-controls="sidebarCharts" class="side-nav-link">
		                    <i class="ri-pie-chart-2-line"></i>
		                    <span> Charts </span>
		                    <span class="menu-arrow"></span>
		                </a>
		                <div class="collapse" id="sidebarCharts">
		                    <ul class="side-nav-second-level">
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="charts-apex.html">Apex Charts</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="charts-chartjs.html">Chartjs</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="charts-sparklines.html">Sparkline Charts</a>
		                        </li>
		                    </ul>
		                </div>
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
		                            <a class="side-nav-link" href="form-elements.html">Basic Elements</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="form-advanced.html">Form Advanced</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="form-validation.html">Form Validation</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="form-wizard.html">Form Wizard</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="form-fileuploads.html">File Uploads</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="form-editors.html">Form Editors</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="form-image-crop.html">Image Crop</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="form-x-editable.html">X Editable</a>
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
		                            <a class="side-nav-link" href="tables-basic.html">Basic Tables</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="tables-datatable.html">Data Tables</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="tables-editable.html">Editable Tables</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="tables-responsive.html">Responsive Table</a>
		                        </li>
		                    </ul>
		                </div>
		            </li>

		            <li class="side-nav-item">
		                <a data-bs-toggle="collapse" href="#sidebarMaps" aria-expanded="false" aria-controls="sidebarMaps" class="side-nav-link">
		                    <i class="ri-map-pin-line"></i>
		                    <span> Maps </span>
		                    <span class="menu-arrow"></span>

		                </a>
		                <div class="collapse" id="sidebarMaps">
		                    <ul class="side-nav-second-level">
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="maps-google.html">Google Maps</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="maps-vector.html">Vector Maps</a>
		                        </li>
		                    </ul>
		                </div>
		            </li>

		            <li class="side-nav-item">
		                <a data-bs-toggle="collapse" href="#sidebarMultiLevel" aria-expanded="false" aria-controls="sidebarMultiLevel" class="side-nav-link">
		                    <i class="ri-share-line"></i>
		                    <span> Multi Level </span>
		                    <span class="menu-arrow"></span>

		                </a>
		                <div class="collapse" id="sidebarMultiLevel">
		                    <ul class="side-nav-second-level">
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="javascript: void(0);">Level 1.1</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a data-bs-toggle="collapse" href="#sidebarSecondLevel" aria-expanded="false" aria-controls="sidebarSecondLevel">
		                                <span> Level 1.2 </span>
		                                <span class="menu-arrow"></span>
		                            </a>
		                            <div class="collapse" id="sidebarSecondLevel">
		                                <ul class="side-nav-third-level">
		                                    <li class="side-nav-item">
		                                        <a class="side-nav-link" href="javascript: void(0);">Item 1</a>
		                                    </li>
		                                    <li class="side-nav-item">
		                                        <a class="side-nav-link" href="javascript: void(0);">Item 2</a>
		                                    </li>
		                                </ul>
		                            </div>
		                        </li>
		                        <li class="side-nav-item">
		                            <a data-bs-toggle="collapse" href="#sidebarThirdLevel" aria-expanded="false" aria-controls="sidebarThirdLevel">
		                                <span> Level 1.3 </span>
		                                <span class="menu-arrow"></span>
		                            </a>
		                            <div class="collapse" id="sidebarThirdLevel">
		                                <ul class="side-nav-third-level">
		                                    <li class="side-nav-item">
		                                        <a class="side-nav-link" href="javascript: void(0);">Item 1</a>
		                                    </li>
		                                    <li class="side-nav-item">
		                                        <a data-bs-toggle="collapse" href="#sidebarFourthLevel" aria-expanded="false" aria-controls="sidebarFourthLevel">
		                                            <span> Item 2 </span>
		                                            <span class="menu-arrow"></span>
		                                        </a>
		                                        <div class="collapse" id="sidebarFourthLevel">
		                                            <ul class="side-nav-forth-level">
		                                                <li class="side-nav-item">
		                                                    <a class="side-nav-link" href="javascript: void(0);">Item 2.1</a>
		                                                </li>
		                                                <li class="side-nav-item">
		                                                    <a class="side-nav-link" href="javascript: void(0);">Item 2.2</a>
		                                                </li>
		                                            </ul>
		                                        </div>
		                                    </li>
		                                </ul>
		                            </div>
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
						<div class="col-xl-4">
							<div class="card overflow-hidden border-top-0">
								<div class="progress progress-sm rounded-0 bg-light" role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100">
									<div class="progress-bar bg-primary" style="width: 90%"></div>
								</div>
								<div class="card-body">
									<div class="d-flex align-items-center justify-content-between">
										<div class="">
											<p class="text-muted fw-semibold fs-16 mb-1">Daily average orders</p>
											<p class="text-muted mb-4">
												<span class="badge bg-success-subtle text-success">
													<i class="bi bi-graph-up-arrow me-1"></i> 1.33%
												</span>
												vs last month
											</p>
										</div>
										<div class="avatar-sm mb-4">
											<div class="avatar-title bg-primary-subtle text-primary fs-24 rounded">
												<i class="bi bi-receipt"></i>
											</div>
										</div>
									</div>
									<div class="d-flex flex-wrap flex-lg-nowrap justify-content-between align-items-end">
										<h3 class="mb-0 d-flex"><i class="bi bi-currency-dollar"></i>1,226.71k </h3>
										<div class="d-flex align-items-end h-100">
											<div id="daily-orders" data-colors="#007aff"></div>
										</div>
									</div>
								</div><!-- end card-body -->
							</div><!-- end card -->
						</div><!-- end col -->

						<div class="col-xl-4">
							<div class="card overflow-hidden border-top-0">
								<div class="progress progress-sm rounded-0 bg-light" role="progressbar"
									aria-valuenow="88" aria-valuemin="0" aria-valuemax="100">
									<div class="progress-bar bg-dark" style="width: 40%"></div>
								</div>
								<div class="card-body">
									<div class="d-flex align-items-center justify-content-between">
										<div class="">
											<p class="text-muted fw-semibold fs-16 mb-1">Active users</p>
											<p class="text-muted mb-4"><span class="badge bg-danger-subtle text-danger"><i class="bi bi-graph-down-arrow me-1"></i> 5.27%</span> vs last
												month
											</p>
										</div>
										<div class="avatar-sm mb-4">
											<div class="avatar-title bg-dark-subtle text-dark fs-24 rounded">
												<i class="bi bi-people"></i>
											</div>
										</div>
									</div>
									<div class="d-flex flex-wrap flex-lg-nowrap justify-content-between align-items-end">
										<h3 class="mb-0 d-flex"><i class="bi bi-person"></i> 1,226.71k </h3>
										<div class="d-flex align-items-end h-100">
											<div id="new-leads-chart" data-colors="#404040"></div>
										</div>
									</div>
								</div><!-- end card-body -->
							</div><!-- end card -->
						</div><!-- end col -->

						<div class="col-xl-4">
							<div class="card overflow-hidden border-top-0">
								<div class="progress progress-sm rounded-0 bg-light" role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100">
									<div class="progress-bar bg-danger" style="width: 60%"></div>
								</div>
								<div class="card-body">
									<div class="d-flex align-items-center justify-content-between">
										<div class="">
											<p class="text-muted fw-semibold fs-16 mb-1">Booked Revenue</p>
											<p class="text-muted mb-4">
												<span class="badge bg-success-subtle text-success"><i
														class="bi bi-graph-up-arrow me-1"></i> 11.8%</span>
												vs last month
											</p>
										</div>
										<div class="avatar-sm mb-4">
											<div class="avatar-title bg-danger-subtle text-danger fs-24 rounded">
												<i class="bi bi-clipboard-data"></i>
											</div>
										</div>
									</div>
									<div class="d-flex flex-wrap flex-lg-nowrap justify-content-between align-items-end">
										<h3 class="mb-0 d-flex"><i class="bi bi-currency-dollar"></i>12,029.71k </h3>
										<div class="d-flex align-items-end h-100">
											<div id="booked-revenue-chart" data-colors="#bb3939"></div>
										</div>
									</div>
								</div><!-- end card-body -->
							</div><!-- end card -->
						</div><!-- end col -->
					</div><!-- end row -->

					<div class="row">
						<div class="col-lg-4 order-2 order-lg-1">
							<div class="card">
								<div class="card-header d-flex justify-content-between align-items-center">
									<div>
										<h4 class="card-title">Merchant list</h4>
										<p class="text-muted fw-semibold mb-0">Social Merchant list</p>
									</div>
									<a href="javascript:void(0);" class="btn btn-sm btn-light">
										<i class="mdi mdi-plus"></i>
									</a>
								</div><!-- end card-header -->

								<div class="card-body py-0 my-3" data-simplebar style="max-height: 470px;">
									<div class="d-flex align-items-center mb-3">
										<div class="flex-shrink-0">
											<div class="avatar-sm rounded">
												<span
													class="avatar-title bg-transparent border border-light text-danger">
													<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
														fill="currentColor" class="bi bi-dribbble" viewBox="0 0 16 16">
														<path fill-rule="evenodd"
															d="M8 0C3.584 0 0 3.584 0 8s3.584 8 8 8c4.408 0 8-3.584 8-8s-3.592-8-8-8zm5.284 3.688a6.802 6.802 0 0 1 1.545 4.251c-.226-.043-2.482-.503-4.755-.217-.052-.112-.096-.234-.148-.355-.139-.33-.295-.668-.451-.99 2.516-1.023 3.662-2.498 3.81-2.69zM8 1.18c1.735 0 3.323.65 4.53 1.718-.122.174-1.155 1.553-3.584 2.464-1.12-2.056-2.36-3.74-2.551-4A6.95 6.95 0 0 1 8 1.18zm-2.907.642A43.123 43.123 0 0 1 7.627 5.77c-3.193.85-6.013.833-6.317.833a6.865 6.865 0 0 1 3.783-4.78zM1.163 8.01V7.8c.295.01 3.61.053 7.02-.971.199.381.381.772.555 1.162l-.27.078c-3.522 1.137-5.396 4.243-5.553 4.504a6.817 6.817 0 0 1-1.752-4.564zM8 14.837a6.785 6.785 0 0 1-4.19-1.44c.12-.252 1.509-2.924 5.361-4.269.018-.009.026-.009.044-.017a28.246 28.246 0 0 1 1.457 5.18A6.722 6.722 0 0 1 8 14.837zm3.81-1.171c-.07-.417-.435-2.412-1.328-4.868 2.143-.338 4.017.217 4.251.295a6.774 6.774 0 0 1-2.924 4.573z" />
													</svg>
												</span>
											</div>
										</div>
										<div class="flex-grow-1 ms-2">
											<a href="javascript:void(0);" class="h4 my-0 fw-semibold text-reset">Dribbble <i class="mdi mdi-check-decagram text-muted ms-1"></i></a>
										</div>
										<a href="javascript:void(0);" class="fs-16 text-dark text-end"><i
												class="bi bi-arrow-right"></i></a>
									</div><!-- end flex -->

									<div class="d-flex align-items-center mb-3">
										<div class="flex-shrink-0">
											<div class="avatar-sm rounded">
												<span class="avatar-title bg-transparent border border-light text-info">
													<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
														viewBox="0 0 16 16" fill="currentColor" id="twitter">
														<path
															d="M16 3.539a6.839 6.839 0 0 1-1.89.518 3.262 3.262 0 0 0 1.443-1.813 6.555 6.555 0 0 1-2.08.794 3.28 3.28 0 0 0-5.674 2.243c0 .26.022.51.076.748a9.284 9.284 0 0 1-6.761-3.431 3.285 3.285 0 0 0 1.008 4.384A3.24 3.24 0 0 1 .64 6.578v.036a3.295 3.295 0 0 0 2.628 3.223 3.274 3.274 0 0 1-.86.108 2.9 2.9 0 0 1-.621-.056 3.311 3.311 0 0 0 3.065 2.285 6.59 6.59 0 0 1-4.067 1.399c-.269 0-.527-.012-.785-.045A9.234 9.234 0 0 0 5.032 15c6.036 0 9.336-5 9.336-9.334 0-.145-.005-.285-.012-.424A6.544 6.544 0 0 0 16 3.539z">
														</path>
													</svg>
												</span>
											</div>
										</div>
										<div class="flex-grow-1 ms-2">
											<a href="javascript:void(0);"
												class="h4 my-0 fw-semibold text-reset">Dribbble <i
													class="mdi mdi-check-decagram text-muted ms-1"></i></a>
										</div>
										<a href="javascript:void(0);" class="fs-16 text-dark text-end"><i
												class="bi bi-arrow-right"></i></a>
									</div><!-- end flex -->

									<div class="d-flex align-items-center mb-3">
										<div class="flex-shrink-0">
											<div class="avatar-sm rounded">
												<span
													class="avatar-title bg-transparent border border-light text-info h3 my-0">
													<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
														fill="currentColor" class="bi bi-behance" viewBox="0 0 16 16">
														<path
															d="M4.654 3c.461 0 .887.035 1.278.14.39.07.711.216.996.391.286.176.497.426.641.747.14.32.216.711.216 1.137 0 .496-.106.922-.356 1.242-.215.32-.566.606-.997.817.606.176 1.067.496 1.348.922.281.426.461.957.461 1.563 0 .496-.105.922-.285 1.278a2.317 2.317 0 0 1-.782.887c-.32.215-.711.39-1.137.496a5.329 5.329 0 0 1-1.278.176L0 12.803V3h4.654zm-.285 3.978c.39 0 .71-.105.957-.285.246-.18.355-.497.355-.887 0-.216-.035-.426-.105-.567a.981.981 0 0 0-.32-.355 1.84 1.84 0 0 0-.461-.176c-.176-.035-.356-.035-.567-.035H2.17v2.31c0-.005 2.2-.005 2.2-.005zm.105 4.193c.215 0 .426-.035.606-.07.176-.035.356-.106.496-.216s.25-.215.356-.39c.07-.176.14-.391.14-.641 0-.496-.14-.852-.426-1.102-.285-.215-.676-.32-1.137-.32H2.17v2.734h2.305v.005zm6.858-.035c.286.285.711.426 1.278.426.39 0 .746-.106 1.032-.286.285-.215.46-.426.53-.64h1.74c-.286.851-.712 1.457-1.278 1.848-.566.355-1.243.566-2.06.566a4.135 4.135 0 0 1-1.527-.285 2.827 2.827 0 0 1-1.137-.782 2.851 2.851 0 0 1-.712-1.172c-.175-.461-.25-.957-.25-1.528 0-.531.07-1.032.25-1.493.18-.46.426-.852.747-1.207.32-.32.711-.606 1.137-.782a4.018 4.018 0 0 1 1.493-.285c.606 0 1.137.105 1.598.355.46.25.817.532 1.102.958.285.39.496.851.641 1.348.07.496.105.996.07 1.563h-5.15c0 .58.21 1.11.496 1.396zm2.24-3.732c-.25-.25-.642-.391-1.103-.391-.32 0-.566.07-.781.176-.215.105-.356.25-.496.39a.957.957 0 0 0-.25.497c-.036.175-.07.32-.07.46h3.196c-.07-.526-.25-.882-.497-1.132zm-3.127-3.728h3.978v.957h-3.978v-.957z" />
													</svg>
												</span>
											</div>
										</div>
										<div class="flex-grow-1 ms-2">
											<a href="javascript:void(0);" class="h4 my-0 fw-semibold text-reset">Behance
												<i class="mdi mdi-check-decagram text-muted ms-1"></i></a>
										</div>
										<a href="javascript:void(0);" class="fs-16 text-dark text-end"><i
												class="bi bi-arrow-right"></i></a>
									</div><!-- end flex -->

									<div class="d-flex align-items-center mb-3">
										<div class="flex-shrink-0">
											<div class="avatar-sm rounded">
												<span
													class="avatar-title bg-transparent border border-light text-primary h3 my-0">
													<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
														fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
														<path
															d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
													</svg>
												</span>
											</div>
										</div>
										<div class="flex-grow-1 ms-2">
											<a href="javascript:void(0);"
												class="h4 my-0 fw-semibold text-reset">Facebook <i
													class="mdi mdi-check-decagram text-muted ms-1"></i></a>
										</div>
										<a href="javascript:void(0);" class="fs-16 text-dark text-end"><i
												class="bi bi-arrow-right"></i></a>
									</div><!-- end flex -->

									<div class="d-flex align-items-center mb-3">
										<div class="flex-shrink-0">
											<div class="avatar-sm rounded">
												<span
													class="avatar-title bg-transparent border border-light text-danger h3 my-0">
													<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
														fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
														<path
															d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
													</svg>
												</span>
											</div>
										</div>
										<div class="flex-grow-1 ms-2">
											<a href="javascript:void(0);"
												class="h4 my-0 fw-semibold text-reset">Instagram <i
													class="mdi mdi-check-decagram text-muted ms-1"></i></a>
										</div>
										<a href="javascript:void(0);" class="fs-16 text-dark text-end"><i
												class="bi bi-arrow-right"></i></a>
									</div><!-- end flex -->

									<div class="d-flex align-items-center mb-3">
										<div class="flex-shrink-0">
											<div class="avatar-sm rounded">
												<span
													class="avatar-title bg-transparent border border-light text-dark h3 my-0">
													<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
														fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
														<path
															d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
													</svg>
												</span>
											</div>
										</div>
										<div class="flex-grow-1 ms-2">
											<a href="javascript:void(0);" class="h4 my-0 fw-semibold text-reset">Github
												<i class="mdi mdi-check-decagram text-muted ms-1"></i></a>
										</div>
										<a href="javascript:void(0);" class="fs-16 text-dark text-end"><i
												class="bi bi-arrow-right"></i></a>
									</div><!-- end flex -->

									<div class="d-flex align-items-center mb-3">
										<div class="flex-shrink-0">
											<div class="avatar-sm rounded">
												<span
													class="avatar-title bg-transparent border border-light text-success h3 my-0">
													<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
														fill="currentColor" class="bi bi-google" viewBox="0 0 16 16">
														<path
															d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z" />
													</svg>
												</span>
											</div>
										</div>
										<div class="flex-grow-1 ms-2">
											<a href="javascript:void(0);" class="h4 my-0 fw-semibold text-reset">Google
												<i class="mdi mdi-check-decagram text-muted ms-1"></i></a>
										</div>
										<a href="javascript:void(0);" class="fs-16 text-dark text-end"><i
												class="bi bi-arrow-right"></i></a>
									</div>

									<div class="d-flex align-items-center">
										<div class="flex-shrink-0">
											<div class="avatar-sm rounded">
												<span
													class="avatar-title bg-transparent border border-light text-danger h3 my-0">
													<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
														fill="currentColor" class="bi bi-pinterest" viewBox="0 0 16 16">
														<path
															d="M8 0a8 8 0 0 0-2.915 15.452c-.07-.633-.134-1.606.027-2.297.146-.625.938-3.977.938-3.977s-.239-.479-.239-1.187c0-1.113.645-1.943 1.448-1.943.682 0 1.012.512 1.012 1.127 0 .686-.437 1.712-.663 2.663-.188.796.4 1.446 1.185 1.446 1.422 0 2.515-1.5 2.515-3.664 0-1.915-1.377-3.254-3.342-3.254-2.276 0-3.612 1.707-3.612 3.471 0 .688.265 1.425.595 1.826a.24.24 0 0 1 .056.23c-.061.252-.196.796-.222.907-.035.146-.116.177-.268.107-1-.465-1.624-1.926-1.624-3.1 0-2.523 1.834-4.84 5.286-4.84 2.775 0 4.932 1.977 4.932 4.62 0 2.757-1.739 4.976-4.151 4.976-.811 0-1.573-.421-1.834-.919l-.498 1.902c-.181.695-.669 1.566-.995 2.097A8 8 0 1 0 8 0z" />
													</svg>
												</span>
											</div>
										</div>
										<div class="flex-grow-1 ms-2">
											<a href="javascript:void(0);"
												class="h4 my-0 fw-semibold text-reset">Pinterest <i
													class="mdi mdi-check-decagram text-muted ms-1"></i></a>
										</div>
										<a href="javascript:void(0);" class="fs-16 text-dark text-end"><i
												class="bi bi-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-8 order-1 order-lg-2">
							<div class="card">
								<div class="card-header d-flex justify-content-between align-items-center">
									<div class="">
										<h4 class="card-title">Revenue</h4>
										<p class="text-muted fw-semibold mb-0">Your Revenue This Week</p>
									</div><!-- end card-header -->
									<div class="dropdown">
										<a href="#" class="dropdown-toggle arrow-none card-drop"
											data-bs-toggle="dropdown" aria-expanded="false">
											<i class="ri-more-2-fill"></i>
										</a>
										<div class="dropdown-menu dropdown-menu-end">
											<!-- item-->
											<a href="javascript:void(0);" class="dropdown-item">Sales Report</a>
											<!-- item-->
											<a href="javascript:void(0);" class="dropdown-item">Export Report</a>
											<!-- item-->
											<a href="javascript:void(0);" class="dropdown-item">Profit</a>
											<!-- item-->
											<a href="javascript:void(0);" class="dropdown-item">Action</a>
										</div>
									</div>
									<!-- end dropdown -->
								</div>
								<div class="card-body">
									<div class="pt-3 show">
										<div id="revenue-report" data-colors="#007aff, #3f3f46" class="apex-charts" dir="ltr"></div>

										<div class="row text-center">
											<div class="col">
												<p class="text-muted mt-3">Current Week</p>
												<h3 class="mb-0">
													<span>$506.54</span>
												</h3>
											</div>
											<div class="col">
												<p class="text-muted mt-3">Previous Week</p>
												<h3 class=" mb-0">
													<span>$305.25</span>
												</h3>
											</div>
											<div class="col">
												<p class="text-muted mt-3">Conversation</p>
												<h3 class="mb-0">
													<span>3.27%</span>
												</h3>
											</div>
											<div class="col">
												<p class="text-muted mt-3">Customers</p>
												<h3 class=" mb-0">
													<span>3k</span>
												</h3>
											</div>
										</div>
									</div>

								</div> <!-- end card-body-->
							</div> <!-- end card-->
						</div> <!-- end col-->
					</div><!-- end row -->
				</div>
				<!-- end container -->

			</div>
			<!-- content -->
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

	<!-- Apex Charts js -->
	<script src="assets/vendor/apexcharts/apexcharts.min.js"></script>

	<!-- Vector Map js -->
	<script src="assets/vendor/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="assets/vendor/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js"></script>


	<!-- Dashboard App js -->
	<script src="assets/js/pages/dashboard.js"></script>

	<!-- App js -->
	<script src="assets/js/app.min.js"></script>

</body>


<!-- Mirrored from techzaa.in/techmin/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Dec 2024 04:33:18 GMT -->
</html>
<!-- <div class="card border-0 bg-black">
	<div class="card-body pb-0">
		<div class="d-flex justify-content-between">
			<div>
				<p class="text-white fs-14 text-capitalize mb-2 fw-medium">Total revenue</p>
				<h3 class="text-white mb-2 fw-semibold">$24,590.43</h3>
			</div>
			<div
				class="avatar-sm bg-white text-black d-flex align-items-center justify-content-center">
				<i class="bi bi-shop-window fs-24"></i>
			</div>
		</div>
	</div>
	<div id="revenue-spark" class="apex-charts" data-colors="#ffffff"></div>
</div> -->