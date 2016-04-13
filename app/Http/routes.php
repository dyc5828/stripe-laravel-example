<?php

Route::group(['middleware' => ['web']], function () {
	// cart
    Route::get('/cart', 'CartController@index');
    // charge
    Route::post('/charge', 'CartController@charge');
    // order review
    Route::get('/order', 'CartController@review');
});
