<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'Dashboard' }}</title>

    <!-- Styles -->
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">

    <!-- Theme Config Js -->
    <script src="{{asset('assets/js/config.js')}}"></script>

    <!-- Vendor css -->
    <link href="{{asset('assets/css/vendors.min.css')}}" rel="stylesheet" type="text/css">

    <!-- App css -->
    <link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css">

    <!-- Vendor js -->
    <script src="{{asset('assets/js/vendors.min.js')}}"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>

    <!-- Plugins js -->
    <script src="assets/plugins/apexcharts/apexcharts.min.js"></script>

    <!-- Custom table -->
    <script src="assets/js/pages/custom-table.js"></script>

    <!-- Dashboard 3 Page Js-->
    <script src="assets/js/pages/dashboard-3.js"></script>
</head>

<body>

    <div class="wrapper">


        <!-- Sidenav Menu Start -->
        <div class="sidenav-menu">

            <!-- Brand Logo -->
            <a href="index.html" class="logo">
                <span class="logo logo-light">
                    <span class="logo-lg"><img src="assets/images/logo.png" alt="logo"></span>
                    <span class="logo-sm"><img src="assets/images/logo-sm.png" alt="small logo"></span>
                </span>

                <span class="logo logo-dark">
                    <span class="logo-lg"><img src="assets/images/logo-black.png" alt="dark logo"></span>
                    <span class="logo-sm"><img src="assets/images/logo-sm.png" alt="small logo"></span>
                </span>
            </a>

            <!-- Sidebar Hover Menu Toggle Button -->
            <button class="button-on-hover">
                <i class="ti ti-menu-4 fs-22 align-middle"></i>
            </button>

            <!-- Full Sidebar Menu Close Button -->
            <button class="button-close-offcanvas">
                <i class="ti ti-x align-middle"></i>
            </button>

            <div class="scrollbar" data-simplebar>

                <!-- User -->
                <div class="sidenav-user">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <a href="pages-profile.html" class="link-reset">
                                <img src="assets/images/users/user-2.jpg" alt="user-image" class="rounded-circle mb-2 avatar-md">
                                <span class="sidenav-user-name fw-bold">Damian D.</span>
                                <span class="fs-12 fw-semibold" data-lang="user-role">Art Director</span>
                            </a>
                        </div>
                        <div>
                            <a class="dropdown-toggle drop-arrow-none link-reset sidenav-user-set-icon" data-bs-toggle="dropdown" data-bs-offset="0,12" href="#!" aria-haspopup="false" aria-expanded="false">
                                <i class="ti ti-settings fs-24 align-middle ms-1"></i>
                            </a>

                            <div class="dropdown-menu">
                                <!-- Header -->
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome back!</h6>
                                </div>

                                <!-- My Profile -->
                                <a href="pages-profile.html" class="dropdown-item">
                                    <i class="ti ti-user-circle me-2 fs-17 align-middle"></i>
                                    <span class="align-middle">Profile</span>
                                </a>

                                <!-- Notifications -->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <i class="ti ti-bell-ringing me-2 fs-17 align-middle"></i>
                                    <span class="align-middle">Notifications</span>
                                </a>

                                <!-- Settings -->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <i class="ti ti-settings-2 me-2 fs-17 align-middle"></i>
                                    <span class="align-middle">Account Settings</span>
                                </a>

                                <!-- Divider -->
                                <div class="dropdown-divider"></div>

                                <!-- Logout -->
                                <a href="javascript:void(0);" class="dropdown-item text-danger fw-semibold">
                                    <i class="ti ti-logout-2 me-2 fs-17 align-middle"></i>
                                    <span class="align-middle">Log Out</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!--- Sidenav Menu -->
                <ul class="side-nav">
                    <li class="side-nav-title" data-lang="menu-title">Menu</li>

                    <li class="side-nav-item">
                        <a href="{{ route('dashboard') }}" class="side-nav-link">
                            <span class="menu-icon"><i class="ti ti-layout-dashboard"></i></span>
                            <span class="menu-text" data-lang="dashboards">Dashboard</span>
                        </a>
                    </li>

                    <li class="side-nav-item">
                        <a href="{{ route('doctors')}}" class="side-nav-link">
                            <span class="menu-icon"><i class="ti ti-stethoscope"></i></span>
                            <span class="menu-text">Doctors</span>
                        </a>
                    </li>

                    <li class="side-nav-item">
                        <a href="{{route ('user.index')}}" target="_blank" class="side-nav-link">
                            <span class="menu-icon"><i class="ti ti-person"></i></span>
                            <span class="menu-text">User</span>
                        </a>
                    </li>

                    <li class="side-nav-title" data-lang="apps-title">Apps</li>

                    

                </ul>

            </div>
        </div>
        <!-- Sidenav Menu End -->

        <!-- Topbar Start -->
        <header class="app-topbar">
            <div class="container-fluid topbar-menu">
                <div class="d-flex align-items-center gap-2">
                    <!-- Topbar Brand Logo -->
                    <div class="logo-topbar">
                        <!-- Logo light -->
                        <a href="index.html" class="logo-light">
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
                                <img src="assets/images/logo-black.png" alt="dark logo">
                            </span>
                            <span class="logo-sm">
                                <img src="assets/images/logo-sm.png" alt="small logo">
                            </span>
                        </a>
                    </div>

                    <!-- Sidebar Menu Toggle Button -->
                    <button class="sidenav-toggle-button btn btn-primary btn-icon">
                        <i class="ti ti-menu-4 fs-22"></i>
                    </button>

                    <!-- Horizontal Menu Toggle Button -->
                    <button class="topnav-toggle-button px-2" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                        <i class="ti ti-menu-4 fs-22"></i>
                    </button>


                </div> <!-- .d-flex-->

                <div class="d-flex align-items-center gap-2">

                    <!-- Notification Dropdown -->
                    <div class="topbar-item">
                        <div class="dropdown">
                            <button class="topbar-link dropdown-toggle drop-arrow-none" data-bs-toggle="dropdown" data-bs-offset="0,22" type="button" data-bs-auto-close="outside" aria-haspopup="false" aria-expanded="false">
                                <i data-lucide="bell" class="fs-xxl"></i>
                                <span class="badge badge-square text-bg-warning topbar-badge">14</span>
                            </button>

                            <div class="dropdown-menu p-0 dropdown-menu-end dropdown-menu-lg">
                                <div class="px-3 py-2 border-bottom">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-0 fs-md fw-semibold">Notifications</h6>
                                        </div>
                                        <div class="col text-end">
                                            <a href="#!" class="badge text-bg-light badge-label py-1">14 Alerts</a>
                                        </div>
                                    </div>
                                </div>

                                <div style="max-height: 300px;" data-simplebar>
                                    <!-- item 1 -->
                                    <div class="dropdown-item notification-item py-2 text-wrap" id="notification-1">
                                        <span class="d-flex gap-2">
                                            <span class="avatar-md flex-shrink-0">
                                                <span class="avatar-title bg-danger-subtle text-danger rounded fs-22">
                                                    <i data-lucide="server-crash" class="fs-xl fill-danger"></i>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1 text-muted">
                                                <span class="fw-medium text-body">Critical alert: Server crash detected</span>
                                                <br>
                                                <span class="fs-xs">30 minutes ago</span>
                                            </span>
                                            <button type="button" class="flex-shrink-0 text-muted btn btn-link p-0" data-dismissible="#notification-1">
                                                <i class="ti ti-xbox-x-filled fs-xxl"></i>
                                            </button>
                                        </span>
                                    </div>

                                    <!-- item 2 -->
                                    <div class="dropdown-item notification-item py-2 text-wrap" id="notification-2">
                                        <span class="d-flex gap-2">
                                            <span class="avatar-md flex-shrink-0">
                                                <span class="avatar-title bg-warning-subtle text-warning rounded fs-22">
                                                    <i data-lucide="alert-triangle" class="fs-xl fill-warning"></i>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1 text-muted">
                                                <span class="fw-medium text-body">High memory usage on Node A</span>
                                                <br>
                                                <span class="fs-xs">10 minutes ago</span>
                                            </span>
                                            <button type="button" class="flex-shrink-0 text-muted btn btn-link p-0" data-dismissible="#notification-2">
                                                <i class="ti ti-xbox-x-filled fs-xxl"></i>
                                            </button>
                                        </span>
                                    </div>

                                    <!-- item 3 -->
                                    <div class="dropdown-item notification-item py-2 text-wrap" id="notification-3">
                                        <span class="d-flex gap-2">
                                            <span class="avatar-md flex-shrink-0">
                                                <span class="avatar-title bg-success-subtle text-success rounded fs-22">
                                                    <i data-lucide="check-circle" class="fs-xl fill-success"></i>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1 text-muted">
                                                <span class="fw-medium text-body">Backup completed successfully</span>
                                                <br>
                                                <span class="fs-xs">1 hour ago</span>
                                            </span>
                                            <button type="button" class="flex-shrink-0 text-muted btn btn-link p-0" data-dismissible="#notification-3">
                                                <i class="ti ti-xbox-x-filled fs-xxl"></i>
                                            </button>
                                        </span>
                                    </div>

                                    <!-- item 4 -->
                                    <div class="dropdown-item notification-item py-2 text-wrap" id="notification-4">
                                        <span class="d-flex gap-2">
                                            <span class="avatar-md flex-shrink-0">
                                                <span class="avatar-title bg-primary-subtle text-primary rounded fs-22">
                                                    <i data-lucide="user-plus" class="fs-xl fill-primary"></i>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1 text-muted">
                                                <span class="fw-medium text-body">New user registration: Sarah Miles</span>
                                                <br>
                                                <span class="fs-xs">Just now</span>
                                            </span>
                                            <button type="button" class="flex-shrink-0 text-muted btn btn-link p-0" data-dismissible="#notification-4">
                                                <i class="ti ti-xbox-x-filled fs-xxl"></i>
                                            </button>
                                        </span>
                                    </div>

                                    <!-- item 5 -->
                                    <div class="dropdown-item notification-item py-2 text-wrap" id="notification-5">
                                        <span class="d-flex gap-2">
                                            <span class="avatar-md flex-shrink-0">
                                                <span class="avatar-title bg-danger-subtle text-danger rounded fs-22">
                                                    <i data-lucide="bug" class="fs-xl fill-danger"></i>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1 text-muted">
                                                <span class="fw-medium text-body">Bug reported in payment module</span>
                                                <br>
                                                <span class="fs-xs">20 minutes ago</span>
                                            </span>
                                            <button type="button" class="flex-shrink-0 text-muted btn btn-link p-0" data-dismissible="#notification-5">
                                                <i class="ti ti-xbox-x-filled fs-xxl"></i>
                                            </button>
                                        </span>
                                    </div>

                                    <!-- item 6 -->
                                    <div class="dropdown-item notification-item py-2 text-wrap" id="notification-6">
                                        <span class="d-flex gap-2">
                                            <span class="avatar-md flex-shrink-0">
                                                <span class="avatar-title bg-info-subtle text-info rounded fs-22">
                                                    <i data-lucide="message-circle" class="fs-xl fill-info"></i>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1 text-muted">
                                                <span class="fw-medium text-body">New comment on Task #142</span>
                                                <br>
                                                <span class="fs-xs">15 minutes ago</span>
                                            </span>
                                            <button type="button" class="flex-shrink-0 text-muted btn btn-link p-0" data-dismissible="#notification-6">
                                                <i class="ti ti-xbox-x-filled fs-xxl"></i>
                                            </button>
                                        </span>
                                    </div>

                                    <!-- item 7 -->
                                    <div class="dropdown-item notification-item py-2 text-wrap" id="notification-7">
                                        <span class="d-flex gap-2">
                                            <span class="avatar-md flex-shrink-0">
                                                <span class="avatar-title bg-warning-subtle text-warning rounded fs-22">
                                                    <i data-lucide="battery-warning" class="fs-xl fill-warning"></i>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1 text-muted">
                                                <span class="fw-medium text-body">Low battery on Device X</span>
                                                <br>
                                                <span class="fs-xs">45 minutes ago</span>
                                            </span>
                                            <button type="button" class="flex-shrink-0 text-muted btn btn-link p-0" data-dismissible="#notification-7">
                                                <i class="ti ti-xbox-x-filled fs-xxl"></i>
                                            </button>
                                        </span>
                                    </div>

                                    <!-- item 8 -->
                                    <div class="dropdown-item notification-item py-2 text-wrap" id="notification-8">
                                        <span class="d-flex gap-2">
                                            <span class="avatar-md flex-shrink-0">
                                                <span class="avatar-title bg-success-subtle text-success rounded fs-22">
                                                    <i data-lucide="cloud-upload" class="fs-xl fill-success"></i>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1 text-muted">
                                                <span class="fw-medium text-body">File upload completed</span>
                                                <br>
                                                <span class="fs-xs">1 hour ago</span>
                                            </span>
                                            <button type="button" class="flex-shrink-0 text-muted btn btn-link p-0" data-dismissible="#notification-8">
                                                <i class="ti ti-xbox-x-filled fs-xxl"></i>
                                            </button>
                                        </span>
                                    </div>

                                    <!-- item 9 -->
                                    <div class="dropdown-item notification-item py-2 text-wrap" id="notification-9">
                                        <span class="d-flex gap-2">
                                            <span class="avatar-md flex-shrink-0">
                                                <span class="avatar-title bg-primary-subtle text-primary rounded fs-22">
                                                    <i data-lucide="calendar" class="fs-xl fill-primary"></i>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1 text-muted">
                                                <span class="fw-medium text-body">Team meeting scheduled at 3 PM</span>
                                                <br>
                                                <span class="fs-xs">2 hours ago</span>
                                            </span>
                                            <button type="button" class="flex-shrink-0 text-muted btn btn-link p-0" data-dismissible="#notification-9">
                                                <i class="ti ti-xbox-x-filled fs-xxl"></i>
                                            </button>
                                        </span>
                                    </div>

                                    <!-- item 10 -->
                                    <div class="dropdown-item notification-item py-2 text-wrap" id="notification-10">
                                        <span class="d-flex gap-2">
                                            <span class="avatar-md flex-shrink-0">
                                                <span class="avatar-title bg-secondary-subtle text-secondary rounded fs-22">
                                                    <i data-lucide="download" class="fs-xl fill-secondary"></i>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1 text-muted">
                                                <span class="fw-medium text-body">Report ready for download</span>
                                                <br>
                                                <span class="fs-xs">3 hours ago</span>
                                            </span>
                                            <button type="button" class="flex-shrink-0 text-muted btn btn-link p-0" data-dismissible="#notification-10">
                                                <i class="ti ti-xbox-x-filled fs-xxl"></i>
                                            </button>
                                        </span>
                                    </div>

                                    <!-- item 11 -->
                                    <div class="dropdown-item notification-item py-2 text-wrap" id="notification-11">
                                        <span class="d-flex gap-2">
                                            <span class="avatar-md flex-shrink-0">
                                                <span class="avatar-title bg-danger-subtle text-danger rounded fs-22">
                                                    <i data-lucide="lock" class="fs-xl fill-danger"></i>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1 text-muted">
                                                <span class="fw-medium text-body">Multiple failed login attempts</span>
                                                <br>
                                                <span class="fs-xs">5 hours ago</span>
                                            </span>
                                            <button type="button" class="flex-shrink-0 text-muted btn btn-link p-0" data-dismissible="#notification-11">
                                                <i class="ti ti-xbox-x-filled fs-xxl"></i>
                                            </button>
                                        </span>
                                    </div>

                                    <!-- item 12 -->
                                    <div class="dropdown-item notification-item py-2 text-wrap" id="notification-12">
                                        <span class="d-flex gap-2">
                                            <span class="avatar-md flex-shrink-0">
                                                <span class="avatar-title bg-info-subtle text-info rounded fs-22">
                                                    <i data-lucide="bell-ring" class="fs-xl fill-info"></i>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1 text-muted">
                                                <span class="fw-medium text-body">Reminder: Submit your timesheet</span>
                                                <br>
                                                <span class="fs-xs">Today, 9:00 AM</span>
                                            </span>
                                            <button type="button" class="flex-shrink-0 text-muted btn btn-link p-0" data-dismissible="#notification-12">
                                                <i class="ti ti-xbox-x-filled fs-xxl"></i>
                                            </button>
                                        </span>
                                    </div>

                                    <!-- item 13 -->
                                    <div class="dropdown-item notification-item py-2 text-wrap" id="notification-13">
                                        <span class="d-flex gap-2">
                                            <span class="avatar-md flex-shrink-0">
                                                <span class="avatar-title bg-warning-subtle text-warning rounded fs-22">
                                                    <i data-lucide="database-zap" class="fs-xl fill-warning"></i>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1 text-muted">
                                                <span class="fw-medium text-body">Database nearing capacity</span>
                                                <br>
                                                <span class="fs-xs">Yesterday</span>
                                            </span>
                                            <button type="button" class="flex-shrink-0 text-muted btn btn-link p-0" data-dismissible="#notification-13">
                                                <i class="ti ti-xbox-x-filled fs-xxl"></i>
                                            </button>
                                        </span>
                                    </div>

                                    <!-- item 14 -->
                                    <div class="dropdown-item notification-item py-2 text-wrap" id="notification-14">
                                        <span class="d-flex gap-2">
                                            <span class="avatar-md flex-shrink-0">
                                                <span class="avatar-title bg-success-subtle text-success rounded fs-22">
                                                    <i data-lucide="check-square" class="fs-xl fill-success"></i>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1 text-muted">
                                                <span class="fw-medium text-body">System check completed</span>
                                                <br>
                                                <span class="fs-xs">2 days ago</span>
                                            </span>
                                            <button type="button" class="flex-shrink-0 text-muted btn btn-link p-0" data-dismissible="#notification-14">
                                                <i class="ti ti-xbox-x-filled fs-xxl"></i>
                                            </button>
                                        </span>
                                    </div>
                                </div> <!-- end dropdown-->

                                <!-- All-->
                                <a href="javascript:void(0);" class="dropdown-item text-center text-reset text-decoration-underline link-offset-2 fw-bold notify-item border-top border-light py-2">
                                    View All Alerts
                                </a>

                            </div>
                        </div>
                    </div>

                    <!-- Light/Dark Mode Button -->
                    <div class="topbar-item d-none d-sm-flex">
                        <button class="topbar-link" id="light-dark-mode" type="button">
                            <i data-lucide="moon" class="fs-xxl mode-light-moon"></i>
                            <i data-lucide="sun" class="fs-xxl mode-light-sun"></i>
                        </button>
                    </div>

                    <!-- User Dropdown -->
                    <div class="topbar-item nav-user">
                        <div class="dropdown">
                            <a class="topbar-link dropdown-toggle drop-arrow-none px-2" data-bs-toggle="dropdown" data-bs-offset="0,16" href="#!" aria-haspopup="false" aria-expanded="false">
                                <img src="assets/images/users/user-2.jpg" width="32" class="rounded-circle me-lg-2 d-flex" alt="user-image">
                                <div class="d-lg-flex align-items-center gap-1 d-none">
                                    <h5 class="my-0">Damian D.</h5>
                                    <i class="ti ti-chevron-down align-middle"></i>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- Header -->
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome back!</h6>
                                </div>

                                <!-- My Profile -->
                                <a href="pages-profile.html" class="dropdown-item">
                                    <i class="ti ti-user-circle me-2 fs-17 align-middle"></i>
                                    <span class="align-middle">Profile</span>
                                </a>

                                <!-- Notifications -->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <i class="ti ti-bell-ringing me-2 fs-17 align-middle"></i>
                                    <span class="align-middle">Notifications</span>
                                </a>

                                <!-- Settings -->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <i class="ti ti-settings-2 me-2 fs-17 align-middle"></i>
                                    <span class="align-middle">Account Settings</span>
                                </a>

                                <!-- Divider -->
                                <div class="dropdown-divider"></div>

                                <!-- Logout -->
                                <a href="javascript:void(0);" class="dropdown-item text-danger fw-semibold">
                                    <i class="ti ti-logout-2 me-2 fs-17 align-middle"></i>
                                    <span class="align-middle">Log Out</span>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Topbar End -->



        <!-- ============================================================== -->
        <!-- Start Main Content -->
        <!-- ============================================================== -->
        <!-- Main Content Start -->
        <div class="main-content">
            @yield('content')
        </div>






        <!-- ============================================================== -->
        <!-- End of Main Content -->
        <!-- ============================================================== -->

    </div>




    <!-- Scripts -->
    <script src="{{ asset('assets/js/app.min.js') }}"></script>
    <script src="{{ asset('assets/js/config.js') }}"></script>
</body>

</html>