<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
	<title>@yield('title')</title>
	<meta charset="utf-8">
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<base href="{{secure_asset('')}}">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="public/css/bootstrap.min.css">
        <link rel="stylesheet" href="public/css/styles.css">
        <link rel="stylesheet" href="public/css/styles-custom.css">
        @yield('css')
        
	<!-- END JAVASCRIPT -->
</head>

<body>
	<!-- WRAPPER -->
	@include('customer.master.header')
	@yield('Main')
	@include('customer.master.footer')
	<!-- END WRAPPER -->
        
        <!-- JAVASCRIPT -->
        <!-- Optional JavaScript -->
        <script defer src="public/js/font-awesome.js"></script>
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="public/js/jquery-3.2.1.slim.min.js"></script>
        <script src="public/js/popper.min.js"></script>
        <script src="public/js/bootstrap.min.js"></script>
        @yield('javascript')
        <!-- END JAVASCRIPT -->
</body>

</html>