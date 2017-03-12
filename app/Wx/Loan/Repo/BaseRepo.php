<?php

namespace Wx\Loan\Repo;

use Wx\File\File;

abstract class BaseRepo
{
	protected $rule;
	protected $model;

	abstract function model();
	abstract public function rule();

	public function __construct()
	{
		$this->model = $this->model();
		$this->rule = [
			'phone'=> [
			        'required',
			        'regex:/^1[34578][0-9]{9}$/',
			        'unique:users'
			    ],
			'loan' => 'required|numeric',
			'duration' => 'required|integer',
			'mark' => 'max:255'
		];
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
		return $this->model->create($input);
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

	public function query($phone)
	{
		return $this->model->OfPhoneUser($phone)->orderBy('id', 'desc')->first();
	}

	public function upload($files)
	{
		$paths = [];
		foreach ($files as $file) {
       		$path = $file->store('public/upload/applies');
       		$paths[] = str_replace('public', '/storage', $path);
		}
		return $paths;
	}

	public function save($input)
	{
	    return $this->model->create($input);
	}

}
