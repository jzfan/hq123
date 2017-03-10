<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Wx\Agent\Repo\ClientRepo;
use App\Http\Controllers\Controller;

class AgentController extends Controller
{
	protected $client;

	public function __construct(ClientRepo $client)
	{
		$this->client = $client;
	}

	public function b4()
	{
		return view('backend.agents.b4')->with('status', 'Profile updated!');;
	}

	public function ing()
	{
		return view('backend.agents.ing');
	}

	public function after()
	{
		return view('backend.agents.after');
	}

	public function submit(Request $request)
	{
		$this->validate($request, [
				'name' => 'required|max:20',
				'phone'=> [
					'required',
					'regex:/^1[34578][0-9]{9}$/'
						],
				'loan' => 'required|numeric',
				'duration' => 'required|numeric'
			]);
dd($request->input());
		$this->client->create($request->input());

		return redirect("/agents/{\Auth::user()->id}/ing")->with('success', '操作成功!');
	}
}
