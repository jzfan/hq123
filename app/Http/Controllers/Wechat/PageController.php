<?php

namespace App\Http\Controllers\Wechat;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index()
    {
    	return view('wechat.index');
    }

    public function plist()
    {
    	return view('wechat.plist');
    }
}
