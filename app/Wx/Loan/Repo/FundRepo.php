<?php

namespace Wx\Loan\Repo;

use Wx\Loan\Fund;

class FundRepo extends BaseRepo
{
	public function model()
	{
		return new Fund;
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
		$this->rule['company'] = 'required|max:200';
		$this->rule['city'] = 'required|max:20';
		$this->rule['location'] = 'required';
		$this->rule['insurance'] = 'required|max:20';
		$this->rule['fund'] = 'required|max:20';
		$this->rule['worked_at'] = 'required|date';
		return $this->rule;
	}
}
