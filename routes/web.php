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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/product', 'AdminController@product')->name('product');
Route::post('/product/submit', 'AdminController@productsub')->name('product.submit');

Route::get('/product/edit/{product_id}', 'AdminController@product_edit')->name('product.edit');
Route::get('/product/delete/{product_id}', 'AdminController@product_delete')->name('product.delete');

Route::post('/product/edit/submit', 'AdminController@product_update')->name('product.edit.submit');
