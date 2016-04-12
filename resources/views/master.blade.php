<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>@yield('title') | AwesomeShop</title>
<!--CSS-->
<!--bootstrap css-->
<link
	rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
	integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7"
	crossorigin="anonymous"
>
<link rel="stylesheet" type="text/css" href="{{ asset('css/core.css') }}">
<!--page specific css-->
@yield('css')
</head>
<body>
<!--HEADER-->
@include('header')
<!--CONTENT-->
<div class="container">
	@yield('content')
</div>
<!--FOOTER-->
@include('footer')
<!--JS-->
<!--jQuery-->
<script
	src="//code.jquery.com/jquery-2.2.3.js"
	integrity="sha256-laXWtGydpwqJ8JA+X9x2miwmaiKhn8tVmOVEigRNtP4="
	crossorigin="anonymous"
></script>
<!--bootstrap js-->
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
	integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
	crossorigin="anonymous"
></script>
<!--page specific js-->
@yield('js')
</body>
</html>