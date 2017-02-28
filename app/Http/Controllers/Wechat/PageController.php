<?php

namespace App\Http\Controllers\wechat;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index()
    {
    	return view('wechat.index');
    }

    public function cars()
    {
    	return view('wechat.cars');
    }

    public function gongjijin()
    {
    	return view('wechat.gongjijin');
    }

    public function business()
    {
    	return view('wechat.business');
    }

    public function fangchan()
    {
    	return view('wechat.fangchan');
    }
}
