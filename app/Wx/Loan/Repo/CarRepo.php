<?php

namespace Wx\Loan\Repo;

use Wx\Loan\Car;

class CarRepo extends BaseRepo
{
	public function model()
	{
		return new Car;
	}
}
