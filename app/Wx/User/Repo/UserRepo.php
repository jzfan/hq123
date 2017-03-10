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

	public function count()
	{
		return $this->user->all()->count();
	}

	public function passed()
	{
		return $this->user->byApplyStatus('passed')->paginate(10);
	}

	public function pending()
	{
		return $this->user->byApplyStatus('pending')->paginate(10);
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