<?php

namespace App\Http\Controllers\Backend;

use Wx\Loan\Repo\ApplyRepo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApplyController extends Controller
{
	protected $apply;

	public function __construct(ApplyRepo $apply)
	{
		$this->apply = $apply;
	}

    public function index(Request $request)
    {
    	$applies = $this->apply->pageByProfession($request->pro);
        return view('backend.'.$request->pro.'.index', compact('applies'));
    }

    public function passed(Request $request)
    {
        $pro = $request->pro;
        $applies = $this->apply->passed($pro);
        return view('backend.'.$pro.'.passed', compact('applies'));
    }

    public function pending(Request $request)
    {
        $pro = $request->pro;
        $applies = $this->apply->pending($pro);
    	return view('backend.'.$pro.'.pending', compact('applies'));
    }

    public function pass($id)
    {
    	return response()->json(['data'=>$this->apply->pass($id)]);
    }

    public function reject($id)
    {
    	return response()->json(['data'=>$this->apply->reject($id)]);
    }
}
