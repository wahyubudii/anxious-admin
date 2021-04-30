<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Anxious | Admin Dashboard</title>

    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/iconfonts/mdi/css/materialdesignicons.css" />
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/shared/style.css" />
    <link rel="stylesheet" href="assets/css/style/style.css" />

    <!-- Layout style -->
    <link rel="shortcut icon" href="assets/images/icons/icon.png" />
</head>

<body class="header-fixed">
    <!-- partial:partials/_header.html -->
    <nav class="t-header">
        <div class="t-header-brand-wrapper">
            <a href="#" style="font-weight: 500; color: black;">
                <img class="logo" src="assets/images/icons/icon.png" style="height: 30px; width: 25px; margin-right: 1rem;" alt=""> Anxious
            </a>

        </div>
        <div class="t-header-content-wrapper">
            <div class="t-header-content">
                <button class="t-header-toggler t-header-mobile-toggler d-block d-lg-none">
            <i class="mdi mdi-menu"></i>
          </button>
                <form action="#" class="t-header-search-box">
                    <div class="input-group">
                        <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Search" autocomplete="off">
                        <button class="btn btn-primary" type="submit"><i class="mdi mdi-arrow-right-thick"></i></button>
                    </div>
                </form>
                <ul class="nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" id="notificationDropdown" data-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-bell-outline mdi-1x"></i>
                        </a>
                        <div class="dropdown-menu navbar-dropdown dropdown-menu-right" aria-labelledby="notificationDropdown">
                            <div class="dropdown-header">
                                <h6 class="dropdown-title">Notifications</h6>
                                <p class="dropdown-title-text">You have 4 unread notification</p>
                            </div>
                            <div class="dropdown-body">
                                <div class="dropdown-list">
                                    <div class="icon-wrapper rounded-circle bg-inverse-primary text-primary">
                                        <i class="mdi mdi-alert"></i>
                                    </div>
                                    <div class="content-wrapper">
                                        <small class="name">Storage Full</small>
                                        <small class="content-text">Server storage almost full</small>
                                    </div>
                                </div>
                                <div class="dropdown-list">
                                    <div class="icon-wrapper rounded-circle bg-inverse-success text-success">
                                        <i class="mdi mdi-cloud-upload"></i>
                                    </div>
                                    <div class="content-wrapper">
                                        <small class="name">Upload Completed</small>
                                        <small class="content-text">3 Files uploded successfully</small>
                                    </div>
                                </div>
                                <div class="dropdown-list">
                                    <div class="icon-wrapper rounded-circle bg-inverse-warning text-warning">
                                        <i class="mdi mdi-security"></i>
                                    </div>
                                    <div class="content-wrapper">
                                        <small class="name">Authentication Required</small>
                                        <small class="content-text">Please verify your password to continue using cloud services</small>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown-footer">
                                <a href="#">View All</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" id="messageDropdown" data-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-message-outline mdi-1x"></i>
                            <span class="notification-indicator notification-indicator-primary notification-indicator-ripple"></span>
                        </a>
                        <div class="dropdown-menu navbar-dropdown dropdown-menu-right" aria-labelledby="messageDropdown">
                            <div class="dropdown-header">
                                <h6 class="dropdown-title">Messages</h6>
                                <p class="dropdown-title-text">You have 4 unread messages</p>
                            </div>
                            <div class="dropdown-body">
                                <div class="dropdown-list">
                                    <div class="image-wrapper">
                                        <img class="profile-img" src="assets/images/profile/male/image_3.png" alt="profile image">
                                        <div class="status-indicator rounded-indicator bg-success"></div>
                                    </div>
                                    <div class="content-wrapper">
                                        <small class="name">Yoga Fahmi</small>
                                        <small class="content-text">New Order, Please check it!</small>
                                    </div>
                                </div>
                                <div class="dropdown-list">
                                    <div class="image-wrapper">
                                        <img class="profile-img" src="assets/images/profile/female/image_2.png" alt="profile image">
                                        <div class="status-indicator rounded-indicator bg-success"></div>
                                    </div>
                                    <div class="content-wrapper">
                                        <small class="name">Azzahra Putri</small>
                                        <small class="content-text">New order, Please check it!</small>
                                    </div>
                                </div>
                                <div class="dropdown-list">
                                    <div class="image-wrapper">
                                        <img class="profile-img" src="assets/images/profile/male/image_1.png" alt="profile image">
                                        <div class="status-indicator rounded-indicator bg-success"></div>
                                    </div>
                                    <div class="content-wrapper">
                                        <small class="name">Salman Alfarisy</small>
                                        <small class="content-text">New order, Please check it!</small>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown-footer">
                                <a href="#">View All</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" id="appsDropdown" data-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-apps mdi-1x"></i>
                        </a>
                        <div class="dropdown-menu navbar-dropdown dropdown-menu-right" aria-labelledby="appsDropdown">
                            <div class="dropdown-header">
                                <h6 class="dropdown-title">Apps</h6>
                                <p class="dropdown-title-text mt-2">Authentication required for 3 apps</p>
                            </div>
                            <div class="dropdown-body border-top pt-0">
                                <a class="dropdown-grid">
                                    <i class="grid-icon mdi mdi-trello mdi-2x"></i>
                                    <span class="grid-tittle">Trello</span>
                                </a>
                            </div>
                            <div class="dropdown-footer">
                                <a href="#">View All</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- partial -->
    <div class="page-body">
        <!-- partial:partials/_sidebar.html -->
        <div class="sidebar">
            <div class="user-profile">
                <div class="display-avatar animated-avatar">
                    <img class="profile-img img-lg rounded-circle" src="assets/images/profile/male/image_2.png" alt="profile image">
                </div>
                <div class="info-wrapper">
                    <p class="user-name">Wahyu Budi Utomo</p>
                    <h6 class="display-status">Developer</h6>
                </div>
            </div>
            <ul class="navigation-menu">
                <li class="nav-category-divider">MAIN</li>
                <li>
                    <a href="#">
                        <span class="link-title">Dashboard</span>
                        <i class="mdi mdi-gauge link-icon"></i>
                    </a>
                </li>
                <li>
                    <a href="https://anxious-web.herokuapp.com" target="_blank">
                        <span class="link-title">Main Web</span>
                        <i class="mdi mdi-flower-tulip-outline link-icon"></i>
                    </a>
                </li>
                <li class="nav-category-divider">BACK</li>
                <li>
                    <a href="https://anxious-login.herokuapp.com/">
                        <span class="link-title">Log out</span>
                        <i class="mdi mdi-asterisk link-icon"></i>
                    </a>
                </li>
            </ul>
        </div>
        <!-- partial -->
        <div class="page-content-wrapper">
            <div class="page-content-wrapper-inner">
                <div class="content-viewport">
                    <div class="row">
                        <div class="col-12 py-5">
                            <h4>Dashboard</h4>
                            <p class="text-gray">Welcome aboard, Wahyu</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 equel-grid">
                            <div class="grid">
                                <div class="grid-body d-flex flex-column h-100">
                                    <div class="wrapper">
                                        <div class="d-flex justify-content-between">
                                            <div class="split-header">
                                                <img class="img-ss mt-1 mb-1 mr-2" src="assets/images/social-icons/instagram.svg" alt="instagram">
                                                <p class="card-title">Followers Growth</p>
                                            </div>
                                            <div class="wrapper">
                                                <button class="btn action-btn btn-xs component-flat pr-0" type="button"><i class="mdi mdi-access-point text-muted mdi-2x"></i></button>
                                                <button class="btn action-btn btn-xs component-flat pr-0" type="button"><i class="mdi mdi-cloud-download-outline text-muted mdi-2x"></i></button>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-end pt-2 mb-4">
                                            <h4>72</h4>
                                            <p class="ml-2 text-muted">New Followers</p>
                                        </div>
                                    </div>
                                    <div class="mt-auto">
                                        <canvas class="curved-mode" id="followers-bar-chart" height="230"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-12 equel-grid">
                            <div class="grid widget-revenue-card">
                                <div class="grid-body d-flex flex-column h-100">
                                    <div class="split-header">
                                        <p class="card-title">Server Cloud Load</p>
                                        <div class="content-wrapper v-centered">
                                            <small class="text-muted">13 minutes ago</small>
                                            <span class="btn action-btn btn-refresh btn-xs component-flat"> <i class="mdi mdi-autorenew text-muted mdi-2x"></i></span>
                                        </div>
                                    </div>
                                    <div class="mt-auto">
                                        <canvas id="cpu-performance" height="80"></canvas>
                                        <h3 class="font-weight-medium mt-4">69.05%</h3>
                                        <p class="text-gray">Storage is getting full</p>
                                        <div class="w-50">
                                            <div class="d-flex justify-content-between text-muted mt-3">
                                                <small>Usage</small> <small>1.36 TB / 2TB</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 equel-grid">
                            <div class="grid">
                                <div class="grid-body py-3">
                                    <p class="card-title ml-n1">Order History</p>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-hover table-sm">
                                        <thead>
                                            <tr class="solid-header">
                                                <th colspan="2" class="pl-4">Recent Customers</th>
                                                <th>Order No</th>
                                                <th>Purchased On</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="pr-0 pl-4">
                                                    <img class="profile-img img-sm" src="assets/images/profile/male/image_3.png" alt="profile image">
                                                </td>
                                                <td class="pl-md-0">
                                                    <small class="text-black font-weight-medium d-block">Yoga Fahmi</small>
                                                    <span class="text-gray"> <span class="status-indicator rounded-indicator small bg-success"></span>Email Verified </span>
                                                </td>
                                                <td>
                                                    <small>9537537436</small>
                                                </td>
                                                <td> April 13, 2021 11:49am </td>
                                            </tr>
                                            <tr>
                                                <td class="pr-0 pl-4">
                                                    <img class="profile-img img-sm" src="assets/images/profile/female/image_2.png" alt="profile image">
                                                </td>
                                                <td class="pl-md-0">
                                                    <small class="text-black font-weight-medium d-block">Azzahra Putri</small>
                                                    <span class="text-gray"> <span class="status-indicator rounded-indicator small bg-success"></span>Email Verified </span>
                                                </td>
                                                <td>
                                                    <small>7533567437</small>
                                                </td>
                                                <td> April 13, 2021 9:41am </td>
                                            </tr>
                                            <tr>
                                                <td class="pr-0 pl-4">
                                                    <img class="profile-img img-sm" src="assets/images/profile/male/image_1.png" alt="profile image">
                                                </td>
                                                <td class="pl-md-0">
                                                    <small class="text-black font-weight-medium d-block">Salman Alfarisy</small>
                                                    <span class="text-gray"> <span class="status-indicator rounded-indicator small bg-success"></span>Email Verified </span>
                                                </td>
                                                <td>
                                                    <small>5673467743</small>
                                                </td>
                                                <td> April 12, 2021 8:34am </td>
                                            </tr>
                                            <tr>
                                                <td class="pr-0 pl-4">
                                                    <img class="profile-img img-sm" src="assets/images/profile/male/image_4.png" alt="profile image">
                                                </td>
                                                <td class="pl-md-0">
                                                    <small class="text-black font-weight-medium d-block">Rafly Anugerah</small>
                                                    <span class="text-gray"><span class="status-indicator rounded-indicator small bg-success"></span>Account Verified </span>
                                                </td>
                                                <td>
                                                    <small>4523537435</small>
                                                </td>
                                                <td> April 12, 2021 04:16am</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <a class="border-top px-3 py-2 d-block text-gray" href="#">
                                    <small class="font-weight-medium"><i class="mdi mdi-chevron-down mr-2"></i>View All Order History</small>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 equel-grid">
                            <div class="grid">
                                <div class="grid-body">
                                    <div class="split-header">
                                        <p class="card-title">Activity Log</p>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-trasnparent action-btn btn-xs component-flat pr-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-dots-vertical"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#">Expand View</a>
                                                <a class="dropdown-item" href="#">Edit</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vertical-timeline-wrapper">
                                        <div class="timeline-vertical dashboard-timeline">
                                            <div class="activity-log">
                                                <p class="log-name">Ananda Ryan</p>
                                                <div class="log-details">New account has been created</div>
                                                <small class="log-time">Just Now</small>
                                            </div>
                                            <div class="activity-log">
                                                <p class="log-name">Teddy Budi</p>
                                                <div class="log-details">Email has been verified
                                                </div>
                                                <small class="log-time">5 seconds ago</small>
                                            </div>
                                            <div class="activity-log">
                                                <p class="log-name">Fany Prawira</p>
                                                <small class="log-time">12 seconds ago</small>
                                                <div class="log-details">Email has been verified
                                                </div>
                                            </div>
                                            <div class="activity-log">
                                                <p class="log-name">Brian Agus</p>
                                                <div class="log-details">New account has been created</div>
                                                <small class="log-time">30 seconds ago</small>
                                            </div>
                                            <div class="activity-log">
                                                <p class="log-name">Izza Nur</p>
                                                <div class="log-details">Profile has been edited</div>
                                                <small class="log-time">49 seconds ago</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="border-top px-3 py-2 d-block text-gray" href="#">
                                    <small class="font-weight-medium"><i class="mdi mdi-chevron-down mr-2"></i> View All </small>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content viewport ends -->
            <!-- partial:partials/_footer.html -->
            <footer class="footer">
                <div class="row">
                    <div class="col-sm-6 text-center text-sm-right order-sm-1">
                        <ul class="text-gray">
                            <li><a href="#">Terms of use</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 text-center text-sm-left mt-3 mt-sm-0">
                        <small class="text-muted d-block">Copyright © 2021 <a href="#">Anxious</a>. All rights reserved</small>
                        <small class="text-gray mt-2">Handcrafted With <i class="mdi mdi-heart text-danger"></i> by Anxious</small>
                    </div>
                </div>
            </footer>
            <!-- partial -->
        </div>
        <!-- page content ends -->
    </div>
    <!--page body ends -->

    <!-- plugins:js -->
    <script src="assets/vendors/js/core.js"></script>

    <!-- Vendor Js For This Page Ends-->
    <script src="assets/vendors/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendors/chartjs/Chart.min.js"></script>

    <!-- build:js -->
    <script src="assets/js/template.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <!-- endbuild -->
</body>

</html>