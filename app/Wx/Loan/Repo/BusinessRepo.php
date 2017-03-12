<?php

namespace Wx\Loan\Repo;

use Wx\Loan\Business;

class BusinessRepo extends BaseRepo
{
	public function model()
	{
		return new Business;
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
