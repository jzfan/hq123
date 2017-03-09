<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Wx\Traits\GetLoanRepoTrait;
use App\Http\Controllers\Controller;

class LoanController extends Controller
{
	use GetLoanRepoTrait;
	
	protected $repo;

	public function __construct(Request $request)
	{
		$this->resource = $request->segment(1);
		$this->repo = $this->getRepo($this->resource);
	}

	public function failed()
	{
		$models = $this->repo->failed(6);
		return view("backend.{$this->resource}.failed", compact('models'));
	}

	public function pending()
	{
		$models = $this->repo->pending(6);
		return view("backend.{$this->resource}.pending", compact('models'));
	}

    public function passed()
	{
		$models = $this->repo->passed(6);
		return view("backend.{$this->resource}.passed", compact('models'));
	}

    public function unpass($resource, $id)
	{
		return response()->json(['data'=>$this->repo->unpass($id)]);
	}

	public function pass($resource, $id)
	{
		return response()->json(['data'=>$this->repo->pass($id)]);
	}

	public function reject($resource, $id)
	{
		return response()->json(['data'=>$this->repo->reject($id)]);
	}
}
