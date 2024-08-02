<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>CRUD LARAVEL 10</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('') }}assets/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/modules/fontawesome/css/all.min.css">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('') }}assets/modules/jqvmap/dist/jqvmap.min.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/modules/summernote/summernote-bs4.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/modules/owlcarousel2/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/modules/owlcarousel2/dist/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/modules/datatables/datatables.min.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('') }}assets/css/style.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/css/components.css">
 
</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i
                                    class="fas fa-bars"></i></a></li>

                    </ul>

                </form>
                <ul class="navbar-nav navbar-right">


                    <li class="dropdown"><a href="#" data-toggle="dropdown"
                            class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
                            <div class="d-sm-none d-lg-inline-block">Hi, Thomas Aquino</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-title">Logged in 5 min ago</div>
                            <a href="features-profile.html" class="dropdown-item has-icon">
                                <i class="far fa-user"></i> Profile
                            </a>
                            <a href="features-activities.html" class="dropdown-item has-icon">
                                <i class="fas fa-bolt"></i> Activities
                            </a>
                            <a href="features-settings.html" class="dropdown-item has-icon">
                                <i class="fas fa-cog"></i> Settings
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar sidebar-style-2">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="index.html">CRUD LARAVEL 10</a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="index.html">St</a>
                    </div>
                    <ul class="sidebar-menu">
                        <li><a class="nav-link" href="{{ url('product') }}"><i class="far fa-square"></i>
                                <span>Product</span></a></li>
                    </ul>


                </aside>
            </div>
            @yield('konten')

            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; 2024 <div class="bullet"></div> Ig : <a href="https://www.instagram.com/tom7382_/">Thomas Aquino Aditya</a>
                </div>
                <div class="footer-right">

                </div>
            </footer>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="{{ asset('') }}assets/modules/jquery.min.js"></script>
    <script src="{{ asset('') }}assets/modules/popper.js"></script>
    <script src="{{ asset('') }}assets/modules/tooltip.js"></script>
    <script src="{{ asset('') }}assets/modules/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{ asset('') }}assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="{{ asset('') }}assets/modules/moment.min.js"></script>
    <script src="{{ asset('') }}assets/js/stisla.js"></script>

    <!-- JS Libraies -->
    <script src="{{ asset('') }}assets/modules/jquery.sparkline.min.js"></script>
    <script src="{{ asset('') }}assets/modules/chart.min.js"></script>
    <script src="{{ asset('') }}assets/modules/owlcarousel2/dist/owl.carousel.min.js"></script>
    <script src="{{ asset('') }}assets/modules/summernote/summernote-bs4.js"></script>
    <script src="{{ asset('') }}assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('') }}assets/js/page/index.js"></script>

    <!-- Template JS File -->
    <script src="{{ asset('') }}assets/js/scripts.js"></script>
    <script src="{{ asset('') }}assets/js/custom.js"></script>
      <!-- JS Libraies -->
  <script src="{{ asset('') }}assets/modules/datatables/datatables.min.js"></script>
  <script src="{{ asset('') }}assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <script src="{{ asset('') }}assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>
  <script src="{{ asset('') }}assets/modules/jquery-ui/jquery-ui.min.js"></script>
    <!-- Page Specific JS File -->
    <script src="{{ asset('') }}assets/js/page/modules-datatables.js"></script>

</body>
