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

Route::get('/admin', 'AdminController@index')->name('admin')->middleware(['auth','admin']);

Route::get('/admin', 'AdminController@index')->name('admin')->middleware(['auth','admin']);

Route::post('/createCar', ['uses' => 'carController@create',])->name('post.car');

Route::get('/create', function () {
	return view('createCar');
});

Route::get('/brands', function () {
	return view('BrandName');
});


