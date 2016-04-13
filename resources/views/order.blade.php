@extends('master')

@section('title', 'Order')

@section('css')
@stop

@section('js')
@stop

@section('content')

<h1>Your Order</h1>
<p>Thank you for your order!</p>
<p>Order ID: {{ session('chargeId') }}</p>

@stop