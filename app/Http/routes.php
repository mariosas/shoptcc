<?php

//Loja
Route::get('/', 'HomeController@Home');
Route::get('product/{id}', 'Loja\ProductsController@show');
Route::get('category/{id}', 'Loja\CategoryController@show');
Route::get('category/{idCategory}/{idSubCategory}', 'Loja\CategoryController@show1');
Route::post('store-review', 'Loja\ReviewsController@storeReviewForProduct');

//Carrinho
Route::get('cart', 'Loja\CartController@getCart');
Route::get('cart/add-product-cart/{id}', 'Loja\CartController@addProductCart');
Route::get('cart/update/{id}/{tipo}', 'Loja\CartController@updateQtd');
Route::get('cart/destroy', 'Loja\CartController@destroy');
Route::get('cart/remove/{id}', 'Loja\CartController@remove');
Route::get('checkout', 'Loja\CartController@checkout');


//Admin

Route::get('admin/product', 'Admin\ProductsController@index');
Route::get('admin/product/{id}/edit', 'Admin\ProductsController@edit');








//Api
Route::get('api/home', 'Api\HomeController@Home');
Route::get('api/product/{id}', 'Api\ProductsController@show');
Route::get('api/category/{id}', 'Api\CategoryController@show');
Route::get('api/category/{idCategory}/{idSubCategory}', 'Api\CategoryController@show1');
Route::post('api/store-review', 'Api\ReviewsController@storeReviewForProduct');

Route::get('api/cart', 'Loja\CartController@getCart');
Route::get('api/cart/add-product-cart/{id}', 'Loja\CartController@addProductCart');
Route::get('api/cart/update/{id}/{tipo}', 'Loja\CartController@updateQtd');
Route::get('api/cart/destroy', 'Loja\CartController@destroy');
Route::get('api/cart/remove/{id}', 'Loja\CartController@remove');


Event::listen('illuminate.query', function ($sql) {
	//print_R($sql);
});