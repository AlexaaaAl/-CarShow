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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', 'HomeController@welcome');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/category', 'HomeController@showcat');
Route::get('/dealer', 'CarController@dealers');
Route::get('/contact', 'HomeController@contact');
Route::get('/category/{cat}/{car_id}', 'CarController@show');
Route::get('/order/{car_id}', 'CarController@orders');
Route::get('/category/{category}', 'CarController@showcategcar');