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


