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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/produk/{id}', 'ProdukController@index')->name('produk');

Route::get('/purchase', 'PurchaseController@index')->name('purchase');
Route::post('/purchase/beli', 'PurchaseController@store')->name('beli');
Route::get('/purchase/getdata', 'PurchaseController@getdata')->name('getpurchase');

Route::get('auth/{provider}', 'Auth\AuthController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\AuthController@handleProviderCallback');
