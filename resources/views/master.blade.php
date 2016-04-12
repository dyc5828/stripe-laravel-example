<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>@yield('title') | AwesomeShop</title>

<!--CSS-->
<!--bootstrap css-->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<!--page specific css-->
@yield('css')

<!--JS-->
<!--jQuery-->
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<!--bootstrap js REQUIRE jq-->
<script defer src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<!--page specific js-->
@yield('js')

</head>
<body>
<!--HEADER-->
@include('header')
<!--CONTENT-->
@yield('content')
</body>
</html>