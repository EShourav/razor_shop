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

Route::get('/','homeController@index');

Route::get('/admin', 'adminController@dashboard');
Route::get('/add_category', 'categoryController@addcategory');
Route::post('/save_category', 'categoryController@savecategory');
Route::get('/all_category', 'categoryController@allcategory');
Route::get('/add_brand', 'brandController@addbrand');
Route::post('/save_brand','brandController@savebrand');
Route::get('/all_brand', 'brandController@allbrand');
Route::get('/add_product', 'productController@addproduct');
Route::post('/save_product','productController@saveproduct');
//Route::get('/all_product', 'brandController@allbrand');
Route::get('/slider', 'SliderController@index');
Route::get('/add_slider', 'SliderController@addsliderpage');
Route::post('/save_slider','SliderController@saveslider');
Route::get('/size', 'SliderController@sizeindex');
Route::get('/add_size', 'SliderController@addsizepage');
Route::post('/save_size','SliderController@savesize');



Route::get('/shop', 'shopController@index');
Route::get('/view_product/{id}', 'shopController@singleproduct');
Route::post('/add_to_cart','cartController@addtocart');
Route::get('/show_cart', 'cartController@showcart');
Route::post('/update_cart', 'cartController@updatecart');


