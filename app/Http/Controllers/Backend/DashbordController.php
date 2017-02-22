<?php

namespace App\Http\Controllers\Backend;

use Wx\User\Repo\UserRepo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashbordController extends Controller
{
	protected $user;

	public function __construct(UserRepo $user)
	{
		$this->user = $user;
	}

    public function index()
    {
    	$users = $this->user->new();
    	$users_count = $this->user->count(); 
    	return view('backend.dashbord', compact('users', 'users_count'));
    }
}
