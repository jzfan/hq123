<?php

namespace Wx\Loan\Repo;

use Wx\Loan\Fund;

class FundRepo extends BaseRepo
{
	public function model()
	{
		return new Fund;
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
