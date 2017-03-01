<?php

namespace App\Http\Controllers\Api\V1;

use Wx\Loan\Repo\CarRepo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApplyController extends Controller
{
	protected $car;

	public function __construct(CarRepo $car)
	{
		$this->car = $car;
	}

	/**
	 * @api {get} /api/status 取状态
	 * @apiVersion 1.0.0
	 * @apiName  get
	 * @apiGroup Apply
	 */
    public function status()
    {
    	$user = \Auth::guard('api')->user();
    	return response()->json(['data'=>$user->cars(), 'code'=>200]);
    }

	/**
	 * @api {post} /api/cars 提交汽车表单
	 * @apiVersion 1.0.0
	 * @apiName  postCar
	 * @apiGroup Apply
	 */
    public function byCar(Request $request)
    {
    	$input = $request->input();
    	return $this->car->apply($input);
    }
}
