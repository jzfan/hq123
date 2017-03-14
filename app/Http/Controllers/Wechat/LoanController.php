<?php

namespace App\Http\Controllers\Wechat;

use Illuminate\Http\Request;
use Wx\Traits\GetLoanRepoTrait;
use App\Http\Controllers\Controller;

class LoanController extends Controller
{
	use GetLoanRepoTrait;

    public function queryForm()
    {
    	return view('wechat.query.form');
    }

    public function query(Request $request)
    {
    	$this->validate($request, [
    			'type' => 'required',
                'phone'=> [
                        'required',
                        'regex:/^1[34578][0-9]{9}$/'
                    ]
    		]);
    	$result = $this->getRepo($request->type)->query($request->phone);
    	return view('wechat.query.result', compact('result'));
    }

    public function applyForm($resource)
    {
        return view("wechat.apply.{$resource}");
    }

    public function apply(Request $request, $resource)
    {
dd($request->allFiles());
        $repo = $this->getRepo($resource);
        $this->validate($request, $repo->rule());
        $apply = $repo->save($request->except(['_token']));
        
        if (! empty($request->allFiles())) {
            $paths = $repo->upload($request->allFiles());
            foreach ($paths as $path) {
                $apply->files()->create(['path'=>$path]);
            }
        }
        return view("wechat.apply.show", compact('apply'));
    }
}
