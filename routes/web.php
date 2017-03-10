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
    return redirect('/wechat/index');
});

Route::get('/admin', function () {
    return view('frontend.welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['namespace'=>'Frontend'], function () {
	Route::get('file', 'FileController@index');
});

Route::group(['namespace'=>'Backend', 'middleware'=> ['auth', 'admin']], function () {
	Route::get('/dashboard', 'DashboardController@index');

	Route::get('/{resource}/failed', 'LoanController@failed');
	Route::get('/{resource}/pending', 'LoanController@pending');
	Route::get('/{resource}/passed', 'LoanController@passed');
	Route::post('/{resource}/{id}/pass', 'LoanController@pass');
	Route::post('/{resource}/{id}/unpass', 'LoanController@unpass');
	Route::post('/{resource}/{id}/reject', 'LoanController@reject');
});

Route::group(['namespace'=>'Backend', 'middleware'=> ['auth', 'editor']], function () {
	Route::get('/agents/{id}/b4', 'AgentController@b4');
	Route::get('/agents/{id}/ing', 'AgentController@ing');
	Route::get('/agents/{id}/after', 'AgentController@after');
	Route::post('/agents/{id}/b4', 'AgentController@submit');
});

Route::group(['namespace'=>'Wechat', 'prefix'=>'wechat', 'middleware'=>'wechat.oauth'], function () {
	Route::any('/', 'WechatController@serve');
	Route::get('/login', 'AuthController@loginForm');
	Route::get('/register', 'AuthController@registerForm');
	Route::post('/register', 'AuthController@register');
	Route::get('/index', 'PageController@index');
	Route::get('/plist', 'PageController@plist');

	Route::group(['middleware'=>'auth'], function () {
		Route::get('/query-status', 'LoanController@queryStatusForm');
		Route::post('/query-status', 'LoanController@queryStatus');
		
		Route::get('/{resource}/apply', 'LoanController@applyForm');
		Route::post('/{resource}/apply', 'LoanController@apply');
	});
});


