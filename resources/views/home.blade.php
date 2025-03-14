<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
    <link rel="stylesheet" href="{{ asset('assets/csss/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/csss/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/csss/prettyPhoto.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/csss/price-range.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/csss/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/csss/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/csss/responsive.css') }}">


    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	
   @include('headershop')

	
		<div class="container">
		@yield('content')
		</div>
	@include('footershop')

	
	@include('scriptshop')

  

</body>
</html>