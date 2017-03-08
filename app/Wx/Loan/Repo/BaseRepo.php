<?php

namespace Wx\Loan\Repo;

abstract class BaseRepo
{
	protected $model;

	abstract function model();

	public function __construct()
	{
		$this->model = $this->model();
	}

	public function failed($n)
	{
		return $this->model->ofStatus('failed')->paginate($n);
	}

	public function passed($n)
	{
		return $this->model->ofStatus('passed')->paginate($n);
	}

	public function pending($n)
	{
		return $this->model->ofStatus('pending')->paginate($n);
	}

	public function pass($id)
	{
		return $this->model->findOrFail($id)->update(['status'=>'passed']);
	}

	public function unpass($id)
	{
		return $this->model->findOrFail($id)->update(['status'=>'pending']);
	}

	public function reject($id)
	{
		return $this->model->findOrFail($id)->update(['status'=>'failed']);
	}

	public function apply($input)
	{
		$data = array_merge($input, ['user_id' => \Auth::user()->id]);
		return $this->model->create($data);
	}

	public function save($input)
	{
		$merged = array_merge($input, ['user_id', \Auth::user()->id]);
	    $this->model->firstOrCreate($merged);
	}
}
