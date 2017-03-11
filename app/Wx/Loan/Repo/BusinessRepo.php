<?php

namespace Wx\Loan\Repo;

use Wx\Loan\Business;

class BusinessRepo extends BaseRepo
{
	public function model()
	{
		return new Business;
	}

	public function save($input)
	{
		$user = \Auth::user();
		$user->real_name = $input['real_name'];
		$user->save();

		$merged = array_merge($input, ['user_id' => $user->id]);
	    $this->model->create($merged);
	    return redirect('/wechat/plist');
	}

	public function rule()
	{
		$this->rule['company'] = 'required|max:200';
		$this->rule['house'] = 'required|max:200';
		$this->rule['registered_at'] = 'required';
		$this->rule['share'] = 'required|numeric|between:1,100';
		$this->rule['annual_turnover'] = 'required|numeric';
		return $this->rule;
	}
}
