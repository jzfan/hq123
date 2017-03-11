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

    public function loginForm()
    {
        return view('wechat.auth.login');
    }
}
