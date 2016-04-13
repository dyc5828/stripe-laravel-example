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

	}

	public function review() {
		return view('order');
	}
}