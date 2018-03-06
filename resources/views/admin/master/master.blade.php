<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
	<title>@yield('title')</title>
	<meta charset="utf-8">
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<base href="{{asset('')}}" >
	<!-- VENDOR CSS -->

	<!-- Bootstrap -->
	<link href="public/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="public/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="public/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="public/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="public/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="public/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="public/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="public/build/css/custom.min.css" rel="stylesheet">
</head>

 <body class="nav-md">
    <div class="container body">
        <div class="main_container">
            @include('admin.master.left-sidebar')
            @include('admin.master.top-navbar')
            @yield('Main')
            @include('admin.master.footer')
        </div>
	</div>
	<!-- END WRAPPER -->

	<!-- jQuery -->
	<script src="public/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="public/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="public/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="public/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="public/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="public/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="public/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="public/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="public/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="public/vendors/Flot/jquery.flot.js"></script>
    <script src="public/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="public/vendors/Flot/jquery.flot.time.js"></script>
    <script src="public/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="public/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="public/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="public/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="public/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="public/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="public/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="public/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="public/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="public/vendors/moment/min/moment.min.js"></script>
    <script src="public/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="public/build/js/custom.min.js"></script>
</body>

</html>
