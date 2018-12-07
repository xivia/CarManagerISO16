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

Route::post('/createCar', ['uses' => 'carController@create',])->name('post.car');

Route::post('/brandss', 'BrandNameController@index')->middleware(['auth','admin'])->name('post.braname');

Route::get('/create', function () {
	return view('createCar');
});

Route::get('/view_specs/{car}', ['uses' => 'carController@carspec',])->name('showCarSpecs');

Route::get('/editcar/{car}', ['uses' => 'carController@edit',])->name('editCar');

Route::post('/updateCar/{car}', ['uses' => 'carController@update',])->name('update.car');

Route::get('/settings', ['uses' => 'settingController@index',]);

Route::post('/settings_update', ['uses' => 'settingController@update',])->name('settings.update');

Route::get('/brands','BrandNameController@index');


