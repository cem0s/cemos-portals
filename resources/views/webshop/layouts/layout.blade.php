<!DOCTYPE html>
<html ng-app="cemos_portal" ng-cloak>
	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
		<link href="{{ asset('public/webshop/css/style.css') }}" rel="stylesheet">
		{{-- property overview  --}}
		<link href="{{ asset('public/webshop/css/poverviewhover.css') }}" rel="stylesheet">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
		<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>

		{{-- property details --}}
		<link href="{{ asset('public/webshop/css/poverviewhover.css') }}" rel="stylesheet">
		<link href="{{ asset('public/webshop/slick/slick.css') }}" rel="stylesheet">
		<link href="{{ asset('public/webshop/slick/slick-theme.css') }}" rel="stylesheet">
		<link href="{{ asset('public/webshop/css/jquery-ui.css')}}" rel="stylesheet" >
		<link href="{{ asset('public/webshop/css/calendarCemos.css') }}" rel="stylesheet">
		<link href="{{ asset('public/webshop/css/poverviewhover.css') }}" rel="stylesheet">
		<link href="{{ asset('public/webshop/css/dropzone.css') }}" rel="stylesheet">
		<link href="{{ asset('public/webshop/css/fancybox.min.css') }}" rel="stylesheet">
		

		<title>@yield('title')</title>
		<script src="{{ asset('public/webshop/js/jquery-3.1.1.min.js') }}"></script>
		<script src="{{ asset('public/webshop/js/bootstrap.min.js') }}"></script>
		<script src='https://www.google.com/recaptcha/api.js'></script>
		<script src="{{ asset('public/webshop/js/dropzone.min.js')}}"></script>

		<script src="{{asset('public/webshop/js/form-dropzone.js')}}"></script>
		<script src="{{asset('public/webshop/js/floorplanner-dropzone.js')}}"></script>
		<script src="{{asset('public/webshop/js/waypoints.min.js') }}"></script> 
		<script src="{{asset('public/webshop/js/jquery.counterup.min.js') }}"></script>

		<script>
		    jQuery(document).ready(function( $ ) {
		        $('.counter').counterUp({
		            delay: 10,
		            time: 1000
		        });

		    });
		</script>


		
	</head>

	<body>
		@include('webshop..layouts.header')
		@yield('body')
		@include('webshop.layouts.footer')
	</body>

</html>