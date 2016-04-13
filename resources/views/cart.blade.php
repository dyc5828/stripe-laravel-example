@extends('master')

@section('title', 'Cart')

@section('css')
<link rel="stylesheet" href="{{ asset('css/cart.css') }}">
@stop

@section('js')
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script type="text/javascript" src="https://checkout.stripe.com/checkout.js"></script>
<script type="text/javascript" src="{{ asset('js/cart.js') }}"></script>
@stop

@section('content')

<h1>Your Cart</h1>
<hr>
<table class="table">
	<thead>
		<tr>
			<th>Item</th>
			<th>Description</th>
			<th>Pice</th>
			<th>Quantity</th>
			<th>Subtotal</th>
		</tr>
	</thead>
	<tbody>
	@foreach($items as $item)
		<tr>
			<td>
				<div
					class="item-pic"
					style="background-image:url({{ $item['picture'] }})"
				></div>
			</td>
			<td>{{ $item['description'] }}</td>
			<td>${{ $item['price'] }}</td>
			<td>{{ $item['quantity'] }}</td>
			<td>$ {{ $item['price'] * $item['quantity']}}</td>
		</tr>
	@endforeach
	</tbody>
</table>
<hr>
<div class="row">
	<div class="col-sm-3 col-sm-offset-8">
		<span class="total">Total:</span>
		<span class="total-amount pull-right">${{ $total }}</span>
	</div>
</div>
<div class="row">
	<div class="col-sm-3 col-sm-offset-8">
		<form action="/charge" method="POST" class="stripe-pay">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<script
				src="https://checkout.stripe.com/checkout.js" class="stripe-button"
				data-key="pk_test_DvrvJBVt79USQAaXLZX94T9l"
				data-image="http://rlv.zcache.com/awesome_smiley_face_awesome_face_classic_round_sticker-rcb4989586f684f27a58f62a1348a557a_v9waf_8byvr_324.jpg"
				data-name="AwesomeShop"
				data-description="Your Awesome Stuff"
				data-locale="auto">
			</script>
		</form>
	</div>
</div>

@stop