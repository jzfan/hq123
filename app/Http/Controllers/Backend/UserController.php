<?php

namespace App\Http\Controllers\Backend;

use Wx\User\Repo\UserRepo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
	protected $user;

	public function __construct(UserRepo $user)
	{
		$this->user = $user;
	}

    public function index()
    {
    	$users = $this->user->byPage();
    	return view('backend.user.index', compact('users'));
    }

    public function passed()
    {
    	$users = $this->user->passed();
    	return view('backend.user.passed', compact('users'));
    }

    public function pending()
    {
    	$users = $this->user->pending();
    	return view('backend.user.pending', compact('users'));
    }

    public function pass($user_id)
    {
    	return response()->json(['data'=>$this->user->pass($user_id)]);
    }

    public function reject($user_id)
    {
    	return response()->json(['data'=>$this->user->reject($user_id)]);
    }
}
