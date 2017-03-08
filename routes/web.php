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
	$user = session('wechat.oauth_user');
	dd($user);
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

	Route::get('/{resource}/failed', 'LoanController@failed');
	Route::get('/{resource}/pending', 'LoanController@pending');
	Route::get('/{resource}/passed', 'LoanController@passed');
	Route::post('/{resource}/{id}/pass', 'LoanController@pass');
	Route::post('/{resource}/{id}/unpass', 'LoanController@unpass');
	Route::post('/{resource}/{id}/reject', 'LoanController@reject');
});

Route::group(['namespace'=>'Frontend'], function () {
	Route::get('file', 'FileController@index');
});

Route::group(['namespace'=>'Wechat', 'prefix'=>'wechat', 'middleware'=>'wechat.oauth'], function () {
	Route::any('/', 'WechatController@serve');
	Route::get('/register', 'AuthController@registerForm');
	Route::post('/register', 'AuthController@register');
	Route::get('/', 'PageController@index');

	
	Route::group(['middleware'=>'auth'], function () {
		Route::get('/query-status', 'LoanController@queryStatusForm');
		Route::post('/query-status', 'LoanController@queryStatus');
		
		Route::get('/{resource}/apply', 'LoanController@apply');
		Route::post('/{resource}/apply', 'LoanController@apply');
	});
});