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
    return view('frontend.welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['namespace'=>'Backend'], function () {
	Route::get('/dashbord', 'DashbordController@index');
	Route::get('/files', 'FileController@index');
});
Route::group(['namespace'=>'Frontend'], function () {
	Route::get('file', 'FileController@index');
});
