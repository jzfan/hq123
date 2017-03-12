<?php

namespace Wx\User\Repo;

use Wx\User\User;

class AgentRepo
{
	private $user;

	public function __construct(User $user)
	{
		$this->user = $user;
	}

	public function all()
	{
	 	return $this->user->whereRole('editor')->paginate(10);
	}

	public function delete($id)
	{
	    return $this->user->findOrFail($id)->update(['role'=>'member']);
	}

	public function addBy($phone)
	{
	    $user = $this->user->wherePhone($phone)->first();
	    if ($user !== null) {
	    	return $user->update(['role'=>'editor']);
	    }
	    return false;
	}
}