<?php

namespace App\Http\Controllers\Backend;

use Wx\Loan\Repo\CarRepo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CarController extends Controller
{
	protected $car;

	public function __construct(CarRepo $car)
	{
		$this->car = $car;
	}

	public function index()
	{
		$cars = $this->car->getPage(10);
		return view('backend.car.index', compact('cars'));
	}

	public function pending()
	{
		$cars = $this->car->pending(10);
		return view('backend.car.pending', compact('cars'));
	}

    public function passed()
	{
		$cars = $this->car->passed(10);
		return view('backend.car.passed', compact('cars'));
	}

	public function pass($id)
	{
		return response()->json(['data'=>$this->car->pass($id)]);
	}

	public function reject($id)
	{
		return response()->json(['data'=>$this->car->reject($id)]);
	}
}
