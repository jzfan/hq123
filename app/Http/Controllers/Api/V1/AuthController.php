<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use Wx\User\Repo\ApiAuthRepo;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
	protected $auth;

	public function __construct(ApiAuthRepo $auth)
	{
		$this->auth = $auth;
	}

	/**
	 * @api {post} /api/login 登录
	 * @apiVersion 1.0.0
	 * @apiName  postLogin
	 * @apiGroup Auth
	 * @apiParam {String} phone 手机
	 * @apiParam {String} password 密码
	 */
    public function login(Request $request)
    {
    	$this->validate($request, [
	    		'phone'=>'regex:/^1[34578][0-9]{9}$/',
	    		'password' => 'required|min:6'
    		]);
    	if (\Auth::attempt(['phone' => $request->phone, 'password' => $request->password])) {
    	    // 认证通过...
    	    return $this->auth->getUserWithToken();
    	}
    }

    /**
     * @api {post} /api/register 注册
     * @apiVersion 1.0.0
     * @apiName  postRegister
     * @apiGroup Auth
     * @apiParam {String} phone 手机
     * @apiParam {String} password 密码
     */
    public function register(Request $request)
    {
    	$this->validate($request, [
    			'phone'=> [
    					'regex:/^1[34578][0-9]{9}$/',
    					'unique:users'
    				],
    			'password' => 'required|min:6'
    		]);
    	$user = $this->auth->register($request->phone, $request->password);

    	return response()->json(['data'=>$user, 'code'=>201]);
    }
}
