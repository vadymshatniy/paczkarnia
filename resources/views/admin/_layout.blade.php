 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>AdminLTE 3 | Dashboard</title>

     <!-- Google Font: Source Sans Pro -->
     <link rel="stylesheet"
         href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
     <!-- Font Awesome -->
     <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
     <!-- Ionicons -->
     <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
     <!-- Tempusdominus Bootstrap 4 -->
     <link rel="stylesheet"
         href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
     <!-- iCheck -->
     <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
     <!-- JQVMap -->
     <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css') }}">
     <!-- Theme style -->
     <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
     <!-- overlayScrollbars -->
     <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
     <!-- Daterange picker -->
     <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
     <!-- summernote -->
     <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}">
 </head>

 <body class="hold-transition sidebar-mini layout-fixed">
     <div class="wrapper">

         <!-- Preloader -->
         <div class="preloader flex-column justify-content-center align-items-center">
             <img class="animation__shake" src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTELogo"
                 height="60" width="60">
         </div>



         <!-- Main Sidebar Container -->
         <aside class="main-sidebar sidebar-dark-primary elevation-4">
             <!-- Brand Logo -->
             <a href="index3.html" class="brand-link">
                 <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
                     class="brand-image img-circle elevation-3" style="opacity: .8">
                 <span class="brand-text font-weight-light">AdminLTE</span>
             </a>

             <!-- Sidebar -->
             <div class="sidebar">
                 <!-- Sidebar user panel (optional) -->
                 <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                     <div class="image">
                         <img src="{{ asset('dist/img/avatar5.png') }}" class="img-circle elevation-2"
                             alt="User Image">
                     </div>
                     <div class="info">
                         <a href="#" class="d-block">Admin</a>
                         <a href="{{ route('logout') }}" class="nav-link" data-tooltip="tooltip" title="Logout"
                             onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                             <i class="fas fa-sign-out-alt"></i>
                         </a>
                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                             @csrf
                         </form>
                     </div>
                 </div>


                 <!-- Sidebar Menu -->
                 <nav class="mt-2">
                     <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                         data-accordion="false">
                         <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                         <li class="nav-item">
                             <a href="pages/widgets.html" class="nav-link">
                                 <i class="nav-icon fas fa-th"></i>
                                 <p>Główna</p>
                             </a>
                         </li>
                         @include('admin._include._menu.delivery')
                         @include('admin._include._menu.category')
                         @include('admin._include._menu.products')
                     </ul>


                 </nav>
                 <!-- /.sidebar-menu -->
             </div>
             <!-- /.sidebar -->
         </aside>

         @yield('content')
         <footer class="main-footer">
             <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
             All rights reserved.
             <div class="float-right d-none d-sm-inline-block">
                 <b>Version</b> 3.2.0
             </div>
         </footer>
     </div>
     <!-- ./wrapper -->

     <!-- jQuery -->
     <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
     <!-- jQuery UI 1.11.4 -->
     <script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
     <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
     <script>
         $.widget.bridge('uibutton', $.ui.button)
     </script>
     <!-- Bootstrap 4 -->
     <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
     <!-- ChartJS -->
     <script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>
     <!-- Sparkline -->
     <script src="{{ asset('plugins/sparklines/sparkline.js') }}"></script>
     <!-- JQVMap -->
     <script src="{{ asset('plugins/jqvmap/jquery.vmap.min.js') }}"></script>
     <script src="{{ asset('plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
     <!-- jQuery Knob Chart -->
     <script src="{{ asset('plugins/jquery-knob/jquery.knob.min.js') }}"></script>
     <!-- daterangepicker -->
     <script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
     <script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
     <!-- Tempusdominus Bootstrap 4 -->
     <script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
     <!-- Summernote -->
     <script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
     <!-- overlayScrollbars -->
     <script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
     <!-- AdminLTE App -->
     <script src="{{ asset('dist/js/adminlte.js') }}"></script>
     {{-- <!-- AdminLTE for demo purposes -->
     <script src="{{ asset('dist/js/demo.js') }}"></script> --}}
     <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
     <script src="{{ asset('dist/js/pages/dashboard.js') }}"></script>
 </body>

 </html>
