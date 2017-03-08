<?php

namespace Wx\Loan\Repo;

use Wx\Loan\Fund;

class FundRepo extends BaseRepo
{
	public function model()
	{
		return new Fund;
	}
}
