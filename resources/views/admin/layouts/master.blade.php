<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">

<head>
    <meta charset="utf-8" />
    <title>@yield('title', config('app.name'))</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
</head>
@include('admin.layouts.partials.css')
<body>
    <!-- Begin page -->
    <div id="layout-wrapper">
        <header id="page-topbar">
            @include('admin.layouts.partials.topbar')
        </header>
        <!-- ========== App Menu ========== -->
        <div class="app-menu navbar-menu">
            @include('admin.layouts.partials.menu')
        </div>
        <!-- Start right Content here -->
        <div class="main-content">
            <div class="page-content">
                @yield('content')
            </div>
            <!-- End Page-content -->
            <footer class="footer">
                @include('admin.layouts.partials.footer')
            </footer>
        </div>
        <!-- end main content-->
    </div>
    <!-- END layout-wrapper -->
    @include('admin.layouts.partials.js')

</body>

</html>
