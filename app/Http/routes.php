<?php

Route::group(['middleware' => ['web']], function () {
    Route::get('/cart', 'CartController@index');
    Route::post('/charge', 'CartController@charge');
    // Route::get('/charge', 'CartController@charge');
    Route::get('/order', 'CartController@review');
});
