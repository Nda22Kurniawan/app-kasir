<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title> {{ $title }} </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/theme/images/favicon.png">
    <!-- Pignose Calender -->
    <link rel="stylesheet" href="/assets/theme/plugins/pg-calendar/css/pignose.calendar.min.css">
    <!-- Chartist -->
    <link rel="stylesheet" href="/assets/theme/plugins/chartist/css/chartist.min.css">
    <link rel="stylesheet" href="/assets/theme/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">
    <!-- Datatable -->
    <link rel="stylesheet" href="/assets/theme/plugins/tables/css/datatable/dataTables.bootstrap4.min.css">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="/assets/theme/css/style.css">
</head>

<body>

    <!--*******************
        Preloader start
    ********************-->

    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>

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
                <a href="index.html">
                    <b class="logo-abbr"><img src="/assets/theme/images/logo.png" alt=""> </b>
                    <span class="logo-compact"><img src="/assets/theme/images/logo-compact.png" alt=""></span>
                    <span class="brand-title">
                        <img src="/assets/theme/images/logo-text.png" alt="">
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
                    <ul class="clearfix">
                        <li class="icons dropdown">
                            <div class="user-img c-pointer position-relative" data-toggle="dropdown">
                                <span class="activity active"></span>
                                <img src="/assets/theme/images/user/1.png" height="40" width="40" alt="">
                            </div>
                            <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="/profil"><i class="icon-user"></i>
                                                <span>Profile</span></a>
                                        </li>
                                        <li><a href="/logout"><i class="icon-key"></i>
                                                <span>Logout</span></a></li>
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
                    <li>
                        <a href="/dashboard" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-grid menu-icon"></i><span class="nav-text">Master</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="/user">Data User</a></li>
                            <li><a href="/jenis-barang">Jenis Barang</a></li>
                            <li><a href="/barang">Data Barang</a></li>
                            <li><a href="/diskon">Setting Diskon</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="/transaksi" aria-expanded="false">
                            <i class="icon-note menu-icon"></i><span class="nav-text">Transaksi</span>
                        </a>
                    </li>
                    <li>
                        <a href="/report" aria-expanded="false">
                            <i class="icon-graph menu-icon"></i><span class="nav-text">Report</span>
                        </a>
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

        @yield('content');

        <!--**********************************
                    Content body end
        ***********************************-->

        <!--**********************************
                       Footer start
        ***********************************-->

        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; Designed & Developed by <a href="https://themeforest.net/user/quixlab">Quixlab</a> 2018</p>
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
    
    <script src="/assets/theme/plugins/common/common.min.js"></script>
    <script src="/assets/theme/js/custom.min.js"></script>
    <script src="/assets/theme/js/settings.js"></script>
    <script src="/assets/theme/js/gleek.js"></script>
    <script src="/assets/theme/js/styleSwitcher.js"></script>
    <!-- Chartjs -->
    <script src="/assets/theme/plugins/chart.js/Chart.bundle.min.js"></script>
    <!-- Circle progress -->
    <script src="/assets/theme/plugins/circle-progress/circle-progress.min.js"></script>
    <!-- Datamap -->
    <script src="/assets/theme/plugins/d3v3/index.js"></script>
    <script src="/assets/theme/plugins/topojson/topojson.min.js"></script>
    <script src="/assets/theme/plugins/datamaps/datamaps.world.min.js"></script>
    <!-- Morrisjs -->
    <script src="/assets/theme/plugins/raphael/raphael.min.js"></script>
    <script src="/assets/theme/plugins/morris/morris.min.js"></script>
    <!-- Pignose Calender -->
    <script src="/assets/theme/plugins/moment/moment.min.js"></script>
    <script src="/assets/theme/plugins/pg-calendar/js/pignose.calendar.min.js"></script>
    <!-- ChartistJS -->
    <script src="/assets/theme/plugins/chartist/js/chartist.min.js"></script>
    <script src="/assets/theme/plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"></script>
    <script src="/assets/theme/js/dashboard/dashboard-1.js"></script>
    <!-- Datatable -->
    <script src="/assets/theme/plugins/tables/js/jquery.dataTables.min.js"></script>
    <script src="/assets/theme/plugins/tables/js/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="/assets/theme/plugins/tables/js/datatable-init/datatable-basic.min.js"></script>
</body>

</html>