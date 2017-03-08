<?php

namespace App\Http\Controllers\Wechat;

use App\Http\Controllers\Controller;

class WechatController extends Controller
{
	protected $wechat;

	public function __construct()
	{
		$this->wechat = app('wechat');
	}

    public function serve()
    {

        // $this->freshMenu();

        // $this->reply::dispatch($this->wechat);
        
        return $this->wechat->server->serve();
    }

    protected function freshMenu()
    {
    	$file_path = base_path() . '/config/site.php';
    	if (file_exists($file_path) && ( filemtime($file_path) + 300 > time() )){
    		$this->wechat->menu->add(config('site.wechatMenu'));
    	}
    }

}
