<?php

namespace Wx\Loan\Repo;

use Wx\Loan\Apply;

class ApplyRepo
{
	protected $apply;

	public function __construct(Apply $apply)
	{
		$this->apply = $apply;
	}

	public function save($input)
	{
		return $this->apply->save($input);
	}

	public function pageByProfession($pro)
	{
		return $this->apply->with('files', 'user')->ofProfession($pro)->paginate(10);
	}

	public function new()
	{
		return $this->apply->orderBy('id', 'desc')->take(8)->get();
	}

	public function count()
	{
		return $this->apply->all()->count();
	}

	public function passed($pro)
	{
		return $this->apply->ofProfession($pro)->ofStatus('passed')->paginate(10);
	}

	public function pending($pro)
	{
		return $this->apply->ofProfession($pro)->ofStatus('pending')->paginate(10);
	}

	public function pass($id)
	{
		return $this->apply->findOrFail($id)->update(['status'=>1]);
	}

	public function reject($id)
	{
		return $this->apply->findOrFail($id)->update(['status'=>0]);
	}
}
