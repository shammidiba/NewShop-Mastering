<?php

Route::get('/', [
    'uses' => 'NewShopController@index',
    'as' => '/'
]);

Route::get('/category-product1' , [
    'uses' => 'NewShopController@categoryProductWomen',
    'as' => 'category-product1'
]);

Route::get('/category-product2' , [
    'uses' => 'NewShopController@categoryProductMen',
    'as' => 'category-product2'
]);

Route::get('/short-codes' , [
    'uses' => 'NewShopController@shortCodes',
    'as' => 'short-codes'
]);

Route::get('/mail', [
    'uses' => 'NewShopController@Mail',
    'as' => 'mail'
]);

Route::get('/checkout', [
    'uses' => 'NewShopController@Checkout',
    'as' => 'checkout'
]);

Route::get('/login', [
    'uses' => 'NewShopController@Login',
    'as' => 'login'
]);

Route::get('/registration', [
    'uses' => 'NewShopController@Registration',
    'as' => 'registration'
]);

Route::get('/single-content', [
    'uses' => 'NewShopController@singleContent',
    'as' => 'single-content'
]);