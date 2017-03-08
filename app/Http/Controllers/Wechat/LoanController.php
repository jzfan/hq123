<?php

namespace App\Http\Controllers\Wechat;

use Illuminate\Http\Request;
use Wx\Traits\GetLoanRepoTrait;
use App\Http\Controllers\Controller;

class LoanController extends Controller
{
	use GetLoanRepoTrait;

    public function queryStatusForm()
    {
    	return view('wechat.query-status');
    }

    public function queryStatus(Request $request)
    {
    	$this->validate($request, [
    			'type' => 'required|in:cars,funds,houses,business'
    		]);
    	$result = $this->getRepo($request->type)->queryStatus();
    	return response()->json(['data'=>$result, 'code'=>200]);
    }

    public function applyForm($resource)
    {
        return view("wechat.apply.{$resource}");
    }

    public function apply(Request $request, $resource)
    {
        $this->validate($request, [
                'loan' => 'required|numeric'
            ]);
        $result = $this->getRepo($resource)->save($request->input());
    }
}
