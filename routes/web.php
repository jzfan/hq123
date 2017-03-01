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

Route::group(['namespace'=>'Backend', 'middleware'=> ['auth', 'admin']], function () {
	Route::get('/dashboard', 'DashboardController@index');
	Route::get('/applies', 'ApplyController@index');
	Route::get('/applies/pending', 'ApplyController@pending');
	Route::get('/applies/passed', 'ApplyController@passed');
	Route::post('/applies/{id}/pass', 'ApplyController@pass');
	Route::post('/applies/{id}/reject', 'ApplyController@reject');

	Route::get('/cars', 'CarController@index');
	Route::get('/cars/pending', 'CarController@pending');
	Route::get('/cars/passed', 'CarController@passed');
	Route::post('/cars/{id}/pass', 'CarController@pass');
	Route::post('/cars/{id}/reject', 'CarController@reject');
});

Route::group(['namespace'=>'Frontend'], function () {
	Route::get('file', 'FileController@index');
});

Route::group(['namespace'=>'Wechat', 'prefix'=>'wechat'], function () {
	Route::get('/register', 'AuthController@registerForm');
	Route::get('/', 'PageController@index');
	Route::get('/cars', 'PageController@cars');
	Route::get('/gongjijin', 'PageController@gongjijin');
	Route::get('/business', 'PageController@business');
	Route::get('/fangchan', 'PageController@fangchan');

	Route::group(['middleware'=>'auth'], function () {
		Route::get('/apply', 'ApplyController@showForm');
		Route::post('/apply', 'ApplyController@submit');
	});
});