<?php

namespace Wx\User\Repo;

use Wx\User\User;

class ApiAuthRepo
{

	public function getUserWithToken()
	{
		$user = \Auth::user();
		if (is_null($user->api_token)) {
			$user->api_token = str_random(60);
			$user->save();
		}
		return $user;
	}

	public function register($phone, $password)
	{
	    return User::create([
	        'phone' => $phone,
	        'password' => bcrypt($password),
	        'api_token' => str_random(60)
	    ]);
	}
}