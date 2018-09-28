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

//product insert , edit , delete ,read routes

Route::get('/product', 'AdminController@product')->name('product');
Route::post('/product/submit', 'AdminController@productsub')->name('product.submit');
Route::get('/product/edit/{product_id}', 'AdminController@product_edit')->name('product.edit');
Route::get('/product/delete/{product_id}', 'AdminController@product_delete')->name('product.delete');
Route::post('/product/edit/submit', 'AdminController@product_update')->name('product.edit.submit');

//  change password routes

Route::get('/change/password', 'AdminController@change_password')->name('change.password');
Route::post('/change/password/submit', 'AdminController@change_password_done')->name('password.change.done');


Route::get('/test', 'TestmyController@test')->name('test');
