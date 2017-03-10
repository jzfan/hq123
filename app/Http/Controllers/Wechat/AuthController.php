<?php

namespace App\Http\Controllers\Wechat;

use Wx\User\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function registerForm()
    {
    	return view('wechat.auth.register');
    }

    public function register(Request $request)
    {
    	$this->validate($request, [
	    		'phone'=>[
	    				'required',
	    				'regex:/^1[34578][0-9]{9}$/'
	    			],
	    		'password' => 'required|min:6'
    		]);
        $user = session('wechat.oauth_user');
    	User::create([
    			'phone' => $request->phone,
    			'password' => bcrypt($request->password),
    			'openid' => $user->id,
                'city' => 'beijing',
                'api_token' => str_random(60)
    		]);

        return redirect('/wechat/plist');
    }

    public function loginForm()
    {
        return view('wechat.auth.login');
    }
}
