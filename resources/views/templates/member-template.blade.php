<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>CLAP Dashboard</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('/images')}}/clap.png">
    <!-- Pignose Calender -->
    <link href="{{asset('/dashboard-assets')}}/plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="{{asset('/dashboard-assets')}}/plugins/chartist/css/chartist.min.css">
    <link rel="stylesheet" href="{{asset('/dashboard-assets')}}/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">
    <!-- Custom Stylesheet -->
    <link href="{{asset('/dashboard-assets')}}/plugins/tables/css/datatable/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="{{asset('/dashboard-assets')}}/css/style.css" rel="stylesheet">
    <style>
        .dataTables_wrapper .dataTables_filter input {
            border-bottom: 0.5px solid #aaaaaa;
        }
    </style>
</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    {{-- <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div> --}}
    <!--*******************
        Preloader end
    ********************-->

    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <div class="brand-logo">
                <a href="/dashboard">
                    <b class="logo-abbr"><img src="{{asset('/dashboard-assets')}}/images/logo.png" alt="CLAP Logo"> </b>
                    <span class="logo-compact"><img src="{{asset('/dashboard-assets')}}/images/logo-compact.png" alt=""></span>
                    <span class="brand-title">
                        {{-- <img src="{{asset('/images')}}/clap.png" alt="CLAP Logo" style="width:50px;height:auto"> --}}
                        <h3 class="text-white fw-bold">CLAP</h3>
                    </span>
                </a>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">    
            <div class="header-content clearfix">
                
                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>

                <div class="header-right">
                        <li class="icons dropdown">
                            <div class="user-img c-pointer position-relative"   data-toggle="dropdown">
                                <span class="activity active"></span>
                                <img src="{{asset('/dashboard-assets')}}/images/user/1.png" height="40" width="40" alt="">
                            </div>
                            <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="app-profile.html"><i class="icon-user"></i> <span>Profile</span></a>
                                        </li>
                                        
                                        <hr class="my-2">

                                        <li><a href="page-login.html"><i class="icon-key"></i> <span>Logout</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">           
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label">Dashboard</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Membership</a></li>
                        </ul>
                    </li>
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-wallet menu-icon"></i><span class="nav-text">Payments</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="#">Request</a></li>
                            <li><a href="#">History</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            @yield('content')
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
        
        
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; Designed & Developed by <a href="https://themeforest.net/user/quixlab">Crimson</a> 2022</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="{{asset('/dashboard-assets')}}/plugins/common/common.min.js"></script>
    <script src="{{asset('/dashboard-assets')}}/js/custom.min.js"></script>
    <script src="{{asset('/dashboard-assets')}}/js/settings.js"></script>
    <script src="{{asset('/dashboard-assets')}}/js/gleek.js"></script>
    <script src="{{asset('/dashboard-assets')}}/js/styleSwitcher.js"></script>

    <!-- Chartjs -->
    <script src="{{asset('/dashboard-assets')}}/plugins/chart.js/Chart.bundle.min.js"></script>
    <!-- Circle progress -->
    <script src="{{asset('/dashboard-assets')}}/plugins/circle-progress/circle-progress.min.js"></script>
    <!-- Datamap -->
    <script src="{{asset('/dashboard-assets')}}/plugins/d3v3/index.js"></script>
    <script src="{{asset('/dashboard-assets')}}/plugins/topojson/topojson.min.js"></script>
    <script src="{{asset('/dashboard-assets')}}/plugins/datamaps/datamaps.world.min.js"></script>
    <!-- Morrisjs -->
    <script src="{{asset('/dashboard-assets')}}/plugins/raphael/raphael.min.js"></script>
    <script src="{{asset('/dashboard-assets')}}/plugins/morris/morris.min.js"></script>
    <!-- Pignose Calender -->
    <script src="{{asset('/dashboard-assets')}}/plugins/moment/moment.min.js"></script>
    <script src="{{asset('/dashboard-assets')}}/plugins/pg-calendar/js/pignose.calendar.min.js"></script>
    <!-- ChartistJS -->
    <script src="{{asset('/dashboard-assets')}}/plugins/chartist/js/chartist.min.js"></script>
    <script src="{{asset('/dashboard-assets')}}/plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"></script>



    <script src="{{asset('/dashboard-assets')}}/js/dashboard/dashboard-1.js"></script>
    <script src="{{asset('/dashboard-assets')}}/plugins/tables/js/jquery.dataTables.min.js"></script>
    <script src="{{asset('/dashboard-assets')}}/plugins/tables/js/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="{{asset('/dashboard-assets')}}/plugins/tables/js/datatable-init/datatable-basic.min.js"></script>

</body>

</html>