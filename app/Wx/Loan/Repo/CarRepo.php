<?php

namespace Wx\Loan\Repo;

use Wx\Loan\Car;

class CarRepo extends BaseRepo
{
	public function model()
	{
		return new Car;
	}

	public function save($input)
	{
		$user = \Auth::user();
		$user->real_name = $input['real_name'];
		$user->save();

		$merged = array_merge($input, ['user_id' => $user->id]);
	    return $this->model->create($merged);
	}

	public function rule()
	{
		$this->rule['brand'] = 'required|max:200';
		$this->rule['plate_number'] = 'required|max:20';
		$this->rule['bought_at'] = 'required|date';
		$this->rule['paid_by'] = 'required|max:20';
		return $this->rule;
	}
}
