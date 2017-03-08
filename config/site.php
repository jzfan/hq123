<?php

return [


	'subscribe'  => 'welcome!',

	'wechatMenu' => [
	        [
	            "type" => "view",
	            "name" => '首页',
	            "url"  => env('APP_URL').'/wechat/index'
	        ],
	        [
	            "type" => "view",
	            "name" => "推荐",
	            "url"  => '#'
	        ]

	    ],

];
