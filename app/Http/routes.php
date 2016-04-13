<?php

Route::group(['middleware' => ['web']], function () {
	// cart
    Route::get('/cart', 'CartController@index');
    // charge
    
    // order review
    Route::get('/order', 'CartController@review');
});
