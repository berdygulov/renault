<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow"/>
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <title>@yield('title') | Панель управления</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('custom/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
          href="{{ asset('custom/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('custom/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('custom/plugins/jqvmap/jqvmap.min.css') }}">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('custom/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('custom/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('custom/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('custom/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('custom/plugins/daterangepicker/daterangepicker.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('custom/plugins/summernote/summernote-bs4.min.css') }}">
    <!-- dalacode styles -->
    <link rel="stylesheet" href="{{ asset('custom/css/dalacode.css') }}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-dark">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Navbar Search -->
            <li class="nav-item d-none">
                <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                    <i class="fas fa-search"></i>
                </a>
                <div class="navbar-search-block">
                    <form class="form-inline">
                        <div class="input-group input-group-sm">
                            <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                   aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-navbar" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="fullscreen" title="Расширить на весь экран" href="#" role="button">
                    <i class="fas fa-expand-arrows-alt"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('frontend.index') }}" role="button" title="Перейти в окно очереди"
                   target="_blank">
                    <i class="fas fa-th-large"></i>
                </a>
            </li>
            <li class="nav-item ml-3">
                <a class="nav-link" href="{{ route('backend.logout') }}" title="Выйти из аккаунта" role="button">
                    <i style="color: #007bff" class="fas fa-sign-out-alt"></i>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="info">
                    <span class="d-block text-white">{{ auth()->user()->short_name }}</span>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item @if(Route::is('backend.applications.*')) menu-open active @endif">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-file-alt"></i>
                            <p>
                                Заявки
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('backend.index') }}"
                                   class="nav-link @if(Route::is('backend.index')) active @endif">
                                    <p>Активные заявки</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('backend.applications.index') }}"
                                   class="nav-link @if(Route::is('backend.applications.index')) active @endif">
                                    <p>Все заявки</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('backend.applications.create') }}"
                                   class="nav-link @if(Route::is('backend.applications.create')) active @endif">
                                    <p>Новая заявка</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item @if(Route::is('backend.masters.*')) menu-open active @endif">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-tools"></i>
                            <p>
                                Мастера
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('backend.masters.index') }}"
                                   class="nav-link @if(Route::is('backend.masters.index')) active @endif">
                                    <p>Все мастера</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('backend.masters.create') }}"
                                   class="nav-link @if(Route::is('backend.masters.create')) active @endif">
                                    <p>Новый мастер</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item @if(Route::is('backend.services.*') || Route::is('backend.service_categories.*')) menu-open active @endif">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-hand-holding-medical"></i>
                            <p>
                                Услуги
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('backend.services.index') }}"
                                   class="nav-link @if(Route::is('backend.services.index')) active @endif">
                                    <p>Все услуги</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('backend.services.create') }}"
                                   class="nav-link @if(Route::is('backend.services.create')) active @endif">
                                    <p>Новая услуга</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('backend.service_categories.index') }}"
                                   class="nav-link @if(Route::is('backend.service_categories.index')) active @endif">
                                    <p>Все категории</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('backend.service_categories.create') }}"
                                   class="nav-link @if(Route::is('backend.service_categories.create')) active @endif">
                                    <p>Новая категория</p>
                                </a>
                            </li>
                        </ul>
                    </li>
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
                    <div class="col-sm-12">
                        <h1 class="m-0">@yield('title')</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Панель управления</a>
                            </li>
                            @yield('breadcrumbs')
                        </ol>
                    </div><!-- /.col -->
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
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <strong>Copyright &copy; {{ now()->format('Y') }} «Ural-Krov-Auto Plus» LLP.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Developed by</b> <a href="https://dalacode.kz">dalacode</a>
        </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


<!-- jQuery -->
<script src="{{ asset('custom/plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('custom/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('custom/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- Moment -->
<script src="{{ asset('custom/plugins/moment/moment.min.js') }}"></script>
<!-- Tempusdominus bootstrap 4 -->
<script src="{{ asset('custom/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('custom/js/adminlte.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('/custom/plugins/summernote/summernote.min.js') }}"></script>
<script src="{{ asset('/custom/plugins/summernote/lang/summernote-ru-RU.min.js') }}"></script>
<!-- Cleave -->
<script src="{{ asset('custom/js/cleave.min.js') }}"></script>
<script src="{{ asset('custom/js/cleave.jquery.js') }}"></script>
<!-- Jquery Input Mask -->
<script src="{{ asset('custom/plugins/inputmask/jquery.inputmask.min.js') }}"></script>
<!-- Select2 -->
<script src="{{ asset('custom/plugins/select2/js/select2.full.js') }}"></script>
<!-- dalacode -->
<script src="{{ asset('custom/js/dalacode.js') }}"></script>

@yield('page-scripts')
</body>
</html>
