<?php

namespace App\Http\Controllers\Wechat;

use Wx\File\Repo\FileRepo;
use Illuminate\Http\Request;
use Wx\Loan\Repo\ApplyRepo;
use App\Http\Controllers\Controller;

class ApplyController extends Controller
{
	protected $apply;

	public function __construct(ApplyRepo $apply, FileRepo $file)
	{
		$this->apply = $apply;
	}

    public function showForm()
    {
    	return view('wechat.apply');
    }

    public function submit(Request $request)
    {
    	if ($request->hasFile('file')) {
    		$this->file->upload($request->file('file'));
    		$this->file->save(['user_id'=>\Auth::user()->id]);
    	}
    	$input = $request->input();
    	$this->apply->save($input);
    	return response()->json(['data'=>'ok', 'code'=>201]);
    }
}
