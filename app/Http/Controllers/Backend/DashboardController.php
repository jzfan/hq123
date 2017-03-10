<?php

namespace App\Http\Controllers\Backend;

use Wx\Loan\Repo\CarRepo;
use Wx\Loan\Repo\FundRepo;
use Wx\Loan\Repo\HouseRepo;
use Illuminate\Http\Request;
use Wx\Loan\Repo\BusinessRepo;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    protected $car;
    protected $fund;
    protected $house;
    protected $business;

    public function __construct(CarRepo $car, FundRepo $fund, HouseRepo $house, BusinessRepo $business)
    {
        $this->car = $car;
        $this->fund = $fund;
        $this->house = $house;
        $this->business = $business;
    }


    public function index()
    {
        $cars_counts = $this->car->counts();
        $funds_counts = $this->fund->counts();
        $houses_counts = $this->house->counts();
        $business_counts = $this->business->counts();
        $collect = collect([$cars_counts, $funds_counts, $houses_counts, $business_counts]);
        $counts = [
            'today' => $collect->sum('today'),
            'passed' => $collect->sum('passed'),
            'pending' => $collect->sum('pending'),
            'rejected' => $collect->sum('rejected'),
        ];
        // dd($counts);
    	return view('backend.dashbord', compact('counts'));
    }
}
