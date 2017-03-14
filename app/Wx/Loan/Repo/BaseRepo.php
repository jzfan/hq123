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
			        'regex:/^1[34578][0-9]{9}$/'
			    ],
			'amount' => 'required|numeric',
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
		return $this->model->ofStatus('failed')->orderBy('id', 'desc')->paginate($n);
	}

	public function passed($n)
	{
		return $this->model->ofStatus('passed')->orderBy('id', 'desc')->paginate($n);
	}

	public function pending($n)
	{
		return $this->model->ofStatus('pending')->orderBy('id', 'desc')->paginate($n);
	}

	public function pass($id)
	{
		$model = $this->model->findOrFail($id);
		$model->loan()->update(['mark'=>request()->mark]);
		return $model->update(['status'=>'passed']);
	}

	public function unpass($id)
	{
		$model = $this->model->findOrFail($id);
		$model->loan()->update(['mark'=>request()->mark]);
		return $model->update(['status'=>'pending']);
	}

	public function reject($id)
	{
		$model = $this->model->findOrFail($id);
		$model->loan()->update(['mark'=>request()->mark]);
		return $model->update(['status'=>'failed']);
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
		return $this->model->whereHas('loan', function ($q) use ($phone) {
			$q->wherePhone($phone);
		})->orderBy('id', 'desc')->first();
	}

	public function upload($files)
	{
		$paths = [];
		foreach ($files['files'] as $file) {
       		$path = $file->store('public/upload/applies');
       		$paths[] = str_replace('public', '/storage', $path);
		}
		return $paths;
	}

	public function save($input)
	{
	    $model = $this->model->create($input);
		$model->loan()->create($input);
		return $model;
	}

}
