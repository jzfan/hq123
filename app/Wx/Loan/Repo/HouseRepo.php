<?php

namespace Wx\Loan\Repo;

use Wx\Loan\House;

class HouseRepo extends BaseRepo
{
	public function model()
	{
		return new House;
	}

	public function rule()
	{
		$this->rule['bought_at'] = 'required|date';
		$this->rule['paid_by'] = 'required|max:20';
		$this->rule['assess'] = 'required|numeric';
		return $this->rule;
	}
}
