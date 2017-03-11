<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function redirectTo()
    {
        $uri=request()->header('referer');
        if (strpos($uri, 'wechat') !== false) {
            return '/wechat/plist';
        }
        if (\Auth::user()->isAdmin()) {
            return '/dashboard';
        }
        if (\Auth::user()->isEditor()) {
            return '/agents/'.\Auth::user()->id.'/b4';
        }
        return redirect('/');

    }
}
