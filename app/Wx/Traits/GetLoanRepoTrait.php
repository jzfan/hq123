<?php

namespace Wx\Traits;

trait GetLoanRepoTrait
{
	protected function getRepo($resource)
	{
		switch ($resource) {
			case 'cars':
				return new \Wx\Loan\Repo\CarRepo;
			case 'houses':
				return new \Wx\Loan\Repo\HouseRepo;	
			case 'funds':
				return new \Wx\Loan\Repo\FundRepo;
			case 'businesses':
				return new \Wx\Loan\Repo\BusinessRepo;		
			default:
				throw new \Exception("url error", 400);
				break;
		}
	}
}