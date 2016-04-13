@extends('master')

@section('title', 'Error')

@section('css')
@stop

@section('js')
@stop

@section('content')

<h1>Oops! Your payment didn't go through.</h1>
@if($message)
	<p>$message</p>
@else
	<p>Please try again later. Thank you for patience!</p>
@endif
<hr>
<p>If you keep getting this page, Please contract our customer support: help@awesomeshop.com</p>

@stop