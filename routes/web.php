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
	Route::get('/users', 'UserController@index');
	Route::get('/users/pending', 'UserController@pending');
	Route::get('/users/passed', 'UserController@passed');
	Route::post('/users/{user_id}/pass', 'UserController@pass');
	Route::post('/users/{user_id}/reject', 'UserController@reject');
});
Route::group(['namespace'=>'Frontend'], function () {
	Route::get('file', 'FileController@index');
});
