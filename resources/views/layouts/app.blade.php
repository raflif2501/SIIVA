<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIIVA DINAS PU TATA RUANG Kabupaten Sumenep</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('admin') }}/dist/img/logo.png">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('admin') }}/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="{{ asset('admin') }}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('admin') }}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('admin') }}/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('admin') }}/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('admin') }}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('admin') }}/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('admin') }}/plugins/summernote/summernote-bs4.min.css">
    <link rel="stylesheet" href="{{ asset('admin') }}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('admin') }}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('admin') }}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ asset('admin') }}/dist/img/logo.png" alt="SI TRACKING SP2D"
                height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
            </ul>
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown user user-menu">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                        <img src="{{ asset('admin') }}/dist/img/avatar5.png" class="user-image img-circle elevation-2"
                            alt="User Image">
                        <span class="hidden-xs">{{ Auth::user()->name }}</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <li class="user-header bg-primary">
                            <div class="col-md-12">
                                <div class="card card-widget widget-user">
                                    <div class="widget-user-header bg-primary">
                                        <h3 class="widget-user-username">{{ Auth::user()->name }}</h3>
                                        <h5 class="widget-user-desc" style="text-transform:uppercase">
                                            {{ Auth::user()->getRoleNames()->first() }}</h5>
                                    </div>
                                    <div class="widget-user-image">
                                        <img class="img-circle elevation-2"
                                            src="{{ asset('admin') }}/dist/img/avatar5.png" alt="User Avatar">
                                    </div>
                                    @php
                                        $id = Auth::user()->id;
                                    @endphp
                                </div>
                            </div>
                        </li>
                        <li class="user-footer">
                            <div class="card-footer">
                                <div class="row">
                                    @role('admin')
                                        <div class="col-sm-6">
                                            <div class="description-block">
                                                <a class="btn btn-block btn-warning"
                                                    href="{{ route('users.edit', $id) }}">{{ __('Edit') }}</a>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="description-block">
                                                <a class="btn btn-block btn-danger" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                    class="d-none">
                                                    @csrf
                                                </form>
                                            </div>
                                        </div>
                                    @endrole
                                    @role('sekdis|B-SDA|B-BM|B-PBP|B-AMdP|B-BJK|B-TR')
                                        <div class="col-sm-12">
                                            <div class="description-block">
                                                <a class="btn btn-block btn-danger" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                    class="d-none">
                                                    @csrf
                                                </form>
                                            </div>
                                        </div>
                                    @endrole
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="{{ route('home') }}" class="brand-link">
                <img src="{{ asset('admin') }}/dist/img/logo.png" alt="SI TRACKING SP2D"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">SIIVA DINAS PU TR</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- SidebarSearch Form -->
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="{{ route('home') }}" class="nav-link">
                                <i class="nav-icon fas fa-home"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-header">MENU</li>
                        @role('admin|sekdis|B-SDA|B-BM|B-PBP|B-AMdP|B-BJK|B-TR')
                            <li class="nav-item ">
                                <a href="{{ route('aset.index') }}" class="nav-link">
                                    <i class="nav-icon fas fa-tools"></i>
                                    <p>Data Aset</p>
                                </a>
                            </li>
                        @endrole
                        @role('admin|sekdis|B-SDA|B-BM|B-PBP|B-AMdP|B-BJK|B-TR')
                            <li class="nav-item ">
                                <a href="{{ route('bidang.index') }}" class="nav-link">
                                    <i class="nav-icon fas fa-map-marker-alt"></i>
                                    <p>Data Bidang</p>
                                </a>
                            </li>
                        @endrole
                        @role('admin|sekdis|B-SDA|B-BM|B-PBP|B-AMdP|B-BJK|B-TR')
                            <li class="nav-item ">
                                <a href="{{ route('kategori.index') }}" class="nav-link">
                                    <i class="nav-icon fas fa-list-alt"></i>
                                    <p>Data Kategori</p>
                                </a>
                            </li>
                        @endrole
                        @role('admin|sekdis|B-SDA|B-BM|B-PBP|B-AMdP|B-BJK|B-TR')
                            <li class="nav-item ">
                                <a href="{{ route('karyawan.index') }}" class="nav-link">
                                    <i class="nav-icon fas fa-user-alt"></i>
                                    <p>Data Karyawan</p>
                                </a>
                            </li>
                        @endrole
                        <li class="nav-header">TRANSAKSI</li>
                        @role('admin|sekdis|B-SDA|B-BM|B-PBP|B-AMdP|B-BJK|B-TR')
                            <li class="nav-item ">
                                <a href="{{ route('pemegang.index') }}" class="nav-link">
                                    <i class="nav-icon fas fa-users-cog"></i>
                                    <p>Pemegang Aset</p>
                                </a>
                            </li>
                        @endrole
                        <li class="nav-header">ARSIP</li>
                        @role('admin|sekdis|B-SDA|B-BM|B-PBP|B-AMdP|B-BJK|B-TR')
                            <li class="nav-item ">
                                <a href="/arsip" class="nav-link">
                                    <i class="nav-icon fas fa-file-alt"></i>
                                    <p>Arsip Pemegang Aset</p>
                                </a>
                            </li>
                        @endrole
                        @role('admin|sekdis|B-SDA|B-BM|B-PBP|B-AMdP|B-BJK|B-TR')
                            <li class="nav-item ">
                                <a href="/perubahan" class="nav-link">
                                    <i class="nav-icon fas fa-edit"></i>
                                    <p>Perubahan Pemegang</p>
                                </a>
                            </li>
                        @endrole
                        @role('admin|sekdis|B-SDA|B-BM|B-PBP|B-AMdP|B-BJK|B-TR')
                            <li class="nav-item ">
                                <a href="/mutasikaryawan" class="nav-link">
                                    <i class="nav-icon fas fa-user-edit"></i>
                                    <p>Karyawan Diperbarui</p>
                                </a>
                            </li>
                        @endrole
                        @role('admin|sekdis|B-SDA|B-BM|B-PBP|B-AMdP|B-BJK|B-TR')
                            <li class="nav-item ">
                                <a href="/reportaset" class="nav-link">
                                    <i class="nav-icon fas fa-scroll"></i>
                                    <p>Report Aset</p>
                                </a>
                            </li>
                        @endrole
                        @role('admin|sekdis|B-SDA|B-BM|B-PBP|B-AMdP|B-BJK|B-TR')
                            <li class="nav-item ">
                                <a href="/reportkategori" class="nav-link">
                                    <i class="nav-icon fas fa-table"></i>
                                    <p>Report Kategori</p>
                                </a>
                            </li>
                        @endrole
                        @role('admin')
                            <li class="nav-header">ADMIN</li>
                            <li class="nav-item ">
                                <a href="{{ route('users.index') }}" class="nav-link">
                                    <i class="nav-icon fas fa-users"></i>
                                    <p>Data Admin</p>
                                </a>
                            </li>
                        @endrole
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        {{-- <div class="col-sm-6">
                            <h1 class="m-0">Dashboard</h1>
                        </div><!-- /.col --> --}}
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                @yield('content')
            </section>
            <!-- /.content -->
        </div>
        <br><br><br>
        <!-- /.content-wrapper -->
        <footer class="main-footer fixed-bottom">
            <strong>Dinas Perkejaan Umum dan Tata Ruang Kabupaten Sumenep</strong>
            {{-- <div class="float-right d-none d-sm-inline-block">
                <b>Copyright</b> 2023
            </div> --}}
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('admin') }}/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('admin') }}/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('admin') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="{{ asset('admin') }}/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="{{ asset('admin') }}/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="{{ asset('admin') }}/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="{{ asset('admin') }}/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ asset('admin') }}/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="{{ asset('admin') }}/plugins/moment/moment.min.js"></script>
    <script src="{{ asset('admin') }}/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ asset('admin') }}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="{{ asset('admin') }}/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('admin') }}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('admin') }}/dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    {{-- <script src="dist/js/demo.js"></script> --}}
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('admin') }}/dist/js/pages/dashboard.js"></script>
    <script src="{{ asset('vendor/sweetalert/sweetalert.all.js') }}"></script>
    @include('sweetalert::alert')
    <script src="{{ asset('admin') }}/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ asset('admin') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ asset('admin') }}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{ asset('admin') }}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="{{ asset('admin') }}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{ asset('admin') }}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="{{ asset('admin') }}/plugins/jszip/jszip.min.js"></script>
    <script src="{{ asset('admin') }}/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="{{ asset('admin') }}/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="{{ asset('admin') }}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="{{ asset('admin') }}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="{{ asset('admin') }}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
    <script>
        $(function() {
            var url = window.location;
            // for single sidebar menu
            $('ul.nav-sidebar a').filter(function() {
                return this.href == url;
            }).addClass('active');

            // for sidebar menu and treeview
            $('ul.nav-treeview a').filter(function() {
                    return this.href == url;
                }).parentsUntil(".nav-sidebar > .nav-treeview")
                .css({
                    'display': 'block'
                })
                .addClass('menu-open').prev('a')
                .addClass('active');
        });
    </script>
</body>

</html>
