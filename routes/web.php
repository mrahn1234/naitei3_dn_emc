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
});

/* Client*/
