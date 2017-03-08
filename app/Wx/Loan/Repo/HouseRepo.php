<?php

namespace Wx\Loan\Repo;

use Wx\Loan\House;

class HouseRepo extends BaseRepo
{
	public function model()
	{
		return new House;
	}
}
