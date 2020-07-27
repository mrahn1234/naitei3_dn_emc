<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Auth */

Auth::routes();

/* Auth */

/* Admin */

Route::group(['prefix'=>'admin-page'],function(){
    Route::get('/', 'AdminHomeController@index');
});

/* Admin */


/* Client*/

Route::get('/', 'ClientHomeController@index')->name('home');

Route::namespace('Client')->group(function() {
    Route::post('/','ClientRegisterController@register')->name('register');
    Route::get('/logout', 'Session@logout')->name('logout');
    Route::post('/login', 'Session@login')->name('login');
});

Route::get('users/{user}/detail',  ['as' => 'users.detail', 'uses' => 'UserController@show']);
Route::patch('users/{user}',  ['as' => 'users.update', 'uses' => 'UserController@update']);

Route::group(['prefix' => 'products'], function(){
    Route::get('/product-accord-category/{category}', 'ProductController@product_accord_category')->name('pro_accord_cate');
    Route::get('/product-accord-price/{parameter}', 'ProductController@product_accord_price')->name('pro_accord_price');
    Route::get('/{product}', 'ProductController@show')->name('product_detail');
});

Route::group(['prefix' => 'order'], function(){
    Route::post('/order-item', 'OrderController@orderItem')->name('order_item');
    Route::post('/order-item/update-quantity', 'OrderController@updateQuantity')->name('update_quantity');
    Route::post('/order-item/delete-item', 'OrderController@deleteItem')->name('delete_item');
    Route::get('/order-item/{order}', 'OrderController@checkout')->name('checkout');
    Route::post('/order-item/update_ship_address', 'OrderController@update_ship_address')->name('update_ship_address');
    Route::get('/order-item/finish-order/{order}', 'OrderController@finish_order')->name('finish_order');
    Route::post('/order-item/accept_order', 'OrderController@accept_order')->name('accept_order');
});



/* Client*/
