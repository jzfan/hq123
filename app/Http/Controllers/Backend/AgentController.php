<?php

namespace App\Http\Controllers\Backend;

use Wx\User\Repo\AgentRepo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AgentController extends Controller
{
	private $agent;

	public function __construct(AgentRepo $agent)
	{
		$this->agent = $agent;
	}

    public function index()
    {
        $agents = $this->agent->all();
        return view('backend.agents.index', compact('agents'));
    }

    public function destroy($id)
    {
        if ($this->agent->delete($id) === true) {
        	return redirect()->back()->with('success', '取消成功！');
        }
        return redirect()->back()->withErrors('操作失败！');
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'phone'=> [
                    'required',
                    'regex:/^1[34578][0-9]{9}$/',
                    'exists:users'
                ]
            ]);
        if ($this->agent->addBy($request->phone)) {
            return redirect()->back()->with('success', '添加成功！');
        }
        return redirect()->back()->withErrors('添加失败！');
        
    }
}
