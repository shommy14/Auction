<?php

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

Route::get('/', 'HomeController@welcome')->name('first-page');

Auth::routes();

Route::get('/home', 'HomeController@index')->middleware('auth')->name('home');

Route::resource('products', 'ProductsController');
Route::get('all','HomeController@AllProducts')->name('all-products');
Route::resource('bids', 'BidsController');
Route::get('products/{product}/bids','BidsController@showBid')->name('product-bids');
Route::get('category/{category}','HomeController@categoryProductsReg')->name('category');

