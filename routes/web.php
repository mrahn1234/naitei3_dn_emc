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

Route::group(['prefix' => 'products'], function(){
    Route::get('/product-accord-category/{category}', 'ProductController@product_accord_category')->name('pro_accord_cate');
    Route::get('/product-accord-price/{parameter}', 'ProductController@product_accord_price')->name('pro_accord_price');
    Route::get('/{product}', 'ProductController@show')->name('product_detail');
});

/* Client*/
Route::get('/', 'ClientHomeController@index')->name('home');

Route::get('users/{user}/detail', 'UserController@show')->name('users.detail');
Route::patch('users/{user}', 'UserController@update')->name('users.update');
Route::get('/changePassword','UserController@showChangePassword');
Route::post('/changePassword', 'UserController@changePassword')->name('changePassword');
