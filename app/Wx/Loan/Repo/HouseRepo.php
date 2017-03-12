<?php

namespace Wx\Loan\Repo;

use Wx\Loan\House;

class HouseRepo extends BaseRepo
{
	public function model()
	{
		return new House;
	}

	public function save($input)
	{
		$user = \Auth::user();
		$user->update([
				'real_name' => $input['real_name'],
				'city' => $input['city'],
				'phone' => $input['phone']
			]);

		$merged = array_merge($input, ['user_id' => $user->id]);
	    return $this->model->create($merged);
	}

	public function rule()
	{
		$this->rule['bought_at'] = 'required|date';
		$this->rule['paid_by'] = 'required|max:20';
		$this->rule['assess'] = 'required|numeric';
		return $this->rule;
	}
}
