<?php

namespace Wx\Loan\Repo;

use Wx\Loan\Car;

class CarRepo
{
	protected $car;

	public function __construct(Car $car)
	{
		$this->car = $car;
	}

	public function getPage($n)
	{
		return $this->car->paginate(10);
	}

	public function passed($pro)
	{
		return $this->car->ofStatus('passed')->paginate(10);
	}

	public function pending($pro)
	{
		return $this->car->ofStatus('pending')->paginate(10);
	}

	public function pass($id)
	{
		return $this->car->findOrFail($id)->update(['status'=>'passed']);
	}

	public function reject($id)
	{
		return $this->car->findOrFail($id)->update(['status'=>'failed']);
	}
}
