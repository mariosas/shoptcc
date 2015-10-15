<?php


Route::get('/', 'HomeController@Home');
Route::get('product/{id}', 'ProductsController@show');
Route::get('category/{id}', 'CategoryController@show');
Route::get('category/{idCategory}/{idSubCategory}', 'CategoryController@show1');
Route::post('store-review', 'ReviewsController@storeReviewForProduct');

Route::get('cart', 'CartController@getCart');
Route::get('cart/add-product-cart/{id}', 'CartController@addProductCart');
Route::put('cart/update', 'CartController@update');
Route::delete('cart/destroy', 'CartController@destroy');

// Route that handles submission of review - rating/comment
Route::post('products/{id}', array('before' => 'csrf', function($id) {
        return 'Review submitted for product ' . $id;
    }));
