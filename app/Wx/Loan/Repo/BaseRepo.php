<?php

namespace Wx\Loan\Repo;

abstract class BaseRepo
{
	protected $model;

	abstract function model();
	
	abstract public function save($input);


	public function __construct()
	{
		$this->model = $this->model();
	}

	public function counts()
	{
		return [
			'today' => $this->todayCount(),
			'pending' => $this->pendingCount(),
			'passed' => $this->passedCount(),
			'rejected' => $this->rejectedCount()
		];
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

	public function todayCount()
	{
		return $this->model->where('created_at', '>', \Carbon\Carbon::today())->count();
	}

	public function pendingCount()
	{
		return $this->model->ofStatus('pending')->count();
	}

	public function passedCount()
	{
		return $this->model->ofStatus('passed')->count();
	}

	public function rejectedCount()
	{
		return $this->model->ofStatus('failed')->count();
	}

}
