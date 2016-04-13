<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller {

	public function index() {
		$items = [
			[
				'picture' => 'https://quick.awesomestufftobuy.com/wp-content/uploads/2016/04/awesomestufftobuy_emoji-balloons-e1460385611976-335x450.jpg
',
				'description' => 'Emoji Ballons',
				'price' => 14.97,
				'quantity' => 1,
			],
			[
				'picture' => 'https://quick.awesomestufftobuy.com/wp-content/uploads/2016/03/awesomestufftobuy_macbook-selfie-stick-450x410.jpg',
				'description' => 'Mac Selfie Stick',
				'price' => 45.95,
				'quantity' => 2,
			],
			[
				'picture' => 'https://quick.awesomestufftobuy.com/wp-content/uploads/2016/02/awesomestufftobuy_physical-social-media-counter-450x373.jpg',
				'description' => 'Social Media Counter',
				'price' => 449.90,
				'quantity' => 1,
			]
		];

		$total = 0;
		foreach ($items as $item) {
			$total += ($item['price']*$item['quantity']);
		}

		return view('cart', [
			'items' => $items,
			'total' => $total,
		]);
	}

	public function charge(Request $request) {
		if (!$request->input('stripeToken')) {
			return view('error');
		}
		$error = null;

		try {
			\Stripe\Stripe::setApiKey("sk_test_3N2t85bHxsrQlU4EKfSNQZzZ");

			$charge = \Stripe\Charge::create([
				'amount' => $request->input('price') * 100,
				'currency' => 'usd',
				'source' => $request->input('stripeToken'),
			]);
		} catch (Exception $e) {
			$error = $e->getMessage();
		}

		if (!$error) {
			return dd($charge);
		}
		return dd($error);
		// return view('error');
	}

	public function review() {
		return view('order');
	}
}