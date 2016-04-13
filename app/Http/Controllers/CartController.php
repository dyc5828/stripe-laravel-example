<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller {

	public function index() {
		// cart items mock
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
		$error = false;

		// test if there is stripe token
		if (!$request->input('stripeToken')) {
			return view('error');
		}

		try {
			// set secret key
			\Stripe\Stripe::setApiKey("sk_test_3N2t85bHxsrQlU4EKfSNQZzZ");

			// charge object
			$charge = \Stripe\Charge::create([
				'amount' => $request->input('price') * 100,
				'currency' => 'usd',
				'source' => $request->input('stripeToken'),
			]);
		} catch (Exception $e) {
			// error message
			$error = $e->getMessage();
		}

		// if no error
		if (!$error) {
			return redirect('order')->with('chargeId', $charge->id);
		} else {
			return view('error', [
				'message' => $error,
			]);
		}
	}

	public function review() {
		return view('order');
	}
}