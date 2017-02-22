<?php

namespace Wx\User\Repo;

use Wx\User\User;

class UserRepo
{
	protected $user;
	protected $path;

	public function __construct(User $user)
	{
		$this->user = $user;
	}

	public function byPage()
	{
		return $this->user->with('file', 'loans')->paginate(10);
	}

	public function new()
	{
		return $this->user->orderBy('id', 'desc')->take(8)->get();
	}

	public function count()
	{
		return $this->user->all()->count();
	}

	public function passed()
	{
		return $this->user->where('status', 1)->paginate(10);
	}

	public function pending()
	{
		return $this->user->where('status', 0)->paginate(10);
	}

	public function pass($id)
	{
		return $this->user->findOrFail($id)->update(['status'=>1]);
	}

	public function reject($id)
	{
		return $this->user->findOrFail($id)->update(['status'=>0]);
	}
}