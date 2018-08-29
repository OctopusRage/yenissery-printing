<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="{{asset('css/font-face.css') }}" rel="stylesheet" media="all">
    <link href="{{asset ('vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/font-awesome-5/css/fontawesome-all.min.css') }}" rel="stylesheet" media="all">
    <link href="{{asset ('vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{asset ('vendor/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{asset ('vendor/animsition/animsition.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet" media="all">
    <link href="{{asset ('vendor/wow/animate.css') }}" rel="stylesheet" media="all">
    <link href="{{asset ('vendor/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet" media="all">
    <link href="{{asset ('vendor/slick/slick.css" rel="stylesheet') }}" media="all">
    <link href="{{asset ('vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
    <link href="{{asset ('vendor/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset ('css/theme.css') }}" rel="stylesheet" media="all">

</head>
{{--{{asset ('images/icon/logo.png') }}--}}
<body class="animsition">
<div class="page-wrapper">
    <!-- HEADER MOBILE-->
    <header class="header-mobile d-block d-lg-none">
        <div class="header-mobile__bar">
            <div class="container-fluid">
                <div class="header-mobile-inner">
                    <a class="logo" href="index.html">
                        <img src="{{asset ('images/icon/logo.png') }}" alt="CoolAdmin" />
                    </a>
                    <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                    </button>
                </div>
            </div>
        </div>
        <nav class="navbar-mobile">
            <div class="container-fluid">
                <ul class="navbar-mobile__list list-unstyled">
                    <li class="has-sub">
                        <a class="js-arrow" href="#">
                            <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="chart.html">
                            <i class="fas fa-chart-bar"></i>Charts</a>
                    </li>
                    <li>
                        <a href="table.html">
                            <i class="fas fa-table"></i>Tables</a>
                    </li>
                    <li>
                        <a href="form.html">
                            <i class="far fa-check-square"></i>Forms</a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fas fa-calendar-alt"></i>Calendar</a>
                    </li>
                    <li>
                        <a href="map.html">
                            <i class="fas fa-map-marker-alt"></i>Maps</a>
                    </li>


                </ul>
            </div>
        </nav>
    </header>
    <!-- END HEADER MOBILE-->

    <!-- MENU SIDEBAR-->
    <aside class="menu-sidebar d-none d-lg-block">
        <div class="logo">
            <a href="#">
                <img src="{{asset ('images/icon/logo.png') }}" alt="Cool Admin" />
            </a>
        </div>
        <div class="menu-sidebar__content js-scrollbar1">

            <nav class="navbar-sidebar">
                <ul class="list-unstyled navbar__list">
                    <li class="active has-sub">
                        <a class="js-arrow" href="#">
                            <i class="fas fa-tachometer-alt"></i>Dashboard</a>

                    </li>
                    <li>
                        <a href="{{route('karyawan.index')}}">
                            <i class="fas fa-user"></i>Data Karyawan</a>
                    </li>
                    <li>
                        <a href="{{route('product.index')}}">
                            <i class="fas fa-table"></i>Data Produk</a>
                    </li>
                    <li>
                        <a href="{{route('order.index')}}">
                            <i class="far fa-credit-card"></i>Data Order</a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fas fa-comment"></i>Data Testimoni</a>
                    </li>



                </ul>
            </nav>
        </div>
    </aside>
    <!-- END MENU SIDEBAR-->

    <!-- PAGE CONTAINER-->
    <div class="page-container">
        <!-- HEADER DESKTOP-->
        @include('layouts.header')
        <!-- HEADER DESKTOP-->

        <!-- MAIN CONTENT-->
        @yield('content')

        <!-- END MAIN CONTENT-->
        <!-- END PAGE CONTAINER-->
    </div>

</div>

<!-- Jquery JS-->
<script src="{{asset ('vendor/jquery-3.2.1.min.js') }}"></script>
<!-- Bootstrap JS-->
<script src="{{asset ('vendor/bootstrap-4.1/popper.min.js') }}"></script>
<script src="{{asset ('vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>
<!-- Vendor JS       -->
<script src="{{asset ('vendor/slick/slick.min.js') }}">
</script>
<script src="{{asset ('vendor/wow/wow.min.js') }}"></script>
<script src="{{asset ('vendor/animsition/animsition.min.js') }}"></script>
<script src="{{asset ('vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }}">
</script>
<script src="{{asset ('vendor/counter-up/jquery.waypoints.min.js') }}"></script>
<script src="{{asset ('vendor/counter-up/jquery.counterup.min.js') }}">
</script>
<script src="{{asset ('vendor/circle-progress/circle-progress.min.js') }}"></script>
<script src="{{asset ('vendor/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
<script src="{{asset ('vendor/chartjs/Chart.bundle.min.js') }}"></script>
<script src="{{asset ('vendor/select2/select2.min.js') }}">
</script>

<!-- Main JS-->
<script src="{{asset ('js/main.js') }}  "></script>
<script src="{{asset ('js/sweetalert.min.js') }}  "></script>
@yield('script')
</body>

</html>
<!-- end document-->
