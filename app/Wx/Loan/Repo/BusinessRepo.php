<?php

namespace Wx\Loan\Repo;

use Wx\Loan\Business;

class BusinessRepo extends BaseRepo
{
	public function model()
	{
		return new Business;
	}
}
