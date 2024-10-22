<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('public/backend/images/logo-fav.png') }}">
    <title>{{ env('APP_NAME') }} @yield('title')</title>
    <!-- chartist CSS -->
    <!-- <link href="{{ asset('public/public/node_modules/morrisjs/morris.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('public/dist/css/pages/ecommerce.css') }}" rel="stylesheet">
    <!-- DataTables CSS -->
    <link href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="{{ asset('public/node_modules/datatables.net-bs4/css/responsive.dataTables.min.css') }}" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/datetime/1.1.2/css/dataTables.dateTime.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('public/dist/css/style.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/node_modules/switchery/dist/switchery.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/node_modules/select2/dist/css/select2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/node_modules/multiselect/css/multi-select.css') }}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    <script src="{{ asset('public/node_modules/jquery/dist/jquery.min.js') }}"></script>
    <!-- This loaded for DataTables -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/datetime/1.1.2/js/dataTables.dateTime.min.js" type="text/javascript"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('public/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ asset('public/dist/js/perfect-scrollbar.jquery.min.js') }}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('public/dist/js/waves.js') }}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('public/dist/js/sidebarmenu.js') }}"></script>
    <!--stickey kit -->
    <script src="{{ asset('public/node_modules/sticky-kit-master/dist/sticky-kit.min.js') }}"></script>
    <script src="{{ asset('public/node_modules/sparkline/jquery.sparkline.min.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('public/dist/js/custom.min.js') }}"></script>
    <script src="{{ asset('public/node_modules/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('public/node_modules//bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!--morris JavaScript -->
    <!-- <script src="{{ asset('public/node_modules/raphael/raphael-min.js') }}"></script>
    <script src="{{ asset('public/node_modules/morrisjs/morris.min.js') }}"></script> -->
    <!--Custom JavaScript -->
    <!-- <script src="{{ asset('public/dist/js/ecom-dashboard.js') }}"></script> -->
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.js"></script>
    <script src="{{ asset('public/node_modules/dropify/dist/js/dropify.min.js') }}"></script>
    <script src="{{ asset('public/node_modules/switchery/dist/switchery.min.js') }}"></script>
</head>

<body class="skin-default fixed-layout">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">{{ env('APP_NAME') }} Loading...</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss --> 
        <!-- ============================================================== -->
        @include('backend.layouts.admin.subadmin.topbar')
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        @include('backend.layouts.admin.subadmin.left_sidebar')
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                @yield('breadcrumb')
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Info box Content -->
                <!-- ============================================================== -->
                @yield('content')
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer">
            © 2022 {{ env('APP_NAME') }} by 
            <a href="javascript:void(0)">EmphaticTechnologies</a>
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->

</body>

</html>