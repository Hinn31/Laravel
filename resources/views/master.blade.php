<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Laravel </title>
	<base href="{{asset('')}}"></base>
	<link href='http://fonts.googleapis.com/css?family=Dosis:300,400' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/vendors/colorbox/example3/colorbox.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/rs-plugin/css/settings.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/rs-plugin/css/responsive.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/huong-style.css') }}">
	</head>
<body>
	
	@include('header')
	<div class="rev-slider">
     	@yield('content')
		<!--slider-->
	</div>
	@include('footer')


	@include('script')

</body>
</html>
