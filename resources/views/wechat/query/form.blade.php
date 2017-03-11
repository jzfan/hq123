<!DOCTYPE html>
<html class="ui-page-login">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<title>贷款进度查询</title>
		<link href="/wx/css/mui.min.css" rel="stylesheet" />
		<link href="/wx/css/app.css" rel="stylesheet" />
	</head>

	<body>
		<header class="mui-bar mui-bar-nav">
			<a class="mui-pull-left" onclick="window.history.back()">返回</a>
			<h1 class="mui-title">贷款进度查询</h1>
			<a class="mui-pull-right">退出</a>
		</header>
		<div class="mui-content">
			<div class="mui-content-padded" style="margin: 5px;">
				<form action='/wechat/query' method="POST">
					{{ csrf_field() }}
				    <br>

			<div id="login-form" class="mui-input-group">
				<div class="mui-input-row">
					<label>手机号</label>
					<input id="account" type="text" class="mui-input-clear mui-input" placeholder="请输入手机号" data-input-clear="1" value='{{ \Auth::user()->phone }}'><span class="mui-icon mui-icon-clear mui-hidden"></span>
				</div>
				<div class="mui-input-row">
					<label>贷款类型</label>
					<input id="password" type="text" class="mui-input-clear mui-input"  placeholder="请选择" data-input-clear="2"> <input type="hidden" name="type" id="rel_type"><span class="mui-icon mui-icon-clear mui-hidden"></span>
				</div>
			</div>

				<div class="mui-content-padded">
					<button type="submit" class="mui-btn mui-btn-block mui-btn-danger">点击查询</button>
				</div>
				</form>

			</div>
		</div>

		<div class="mui-backdrop mask4" style="display:none">
			<ul class="mui-table-view mui-table-view-radio list-radio">
				<div class="com-title">付款类型</div>
				<li class="mui-table-view-cell"><a class="mui-navigate-right" data-id="cars">汽车抵押贷款</a></li>
				<li class="mui-table-view-cell"><a class="mui-navigate-right" data-id="houses">房屋抵押贷款</a></li>
				<li class="mui-table-view-cell"><a class="mui-navigate-right" data-id="funds">公积金贷款</a></li>
				<li class="mui-table-view-cell"><a class="mui-navigate-right" data-id="businesses">生意贷</a></li>
				<li class="mui-table-view-cell"><a class="mui-navigate-right" data-id="">及时贷</a></li>
			</ul>
		</div>
		
		<script src="/wx/js/jquery.min.js"></script>
		<script src="/wx/js/mui.min.js"></script>
		<script src="/wx/js/mui.enterfocus.js"></script>
		<script src="/wx/js/app.js"></script>
		<script>
		// 模态框
	    function ltrim(s){
    		return s.replace(/(^\s*)/g, "");
		};//去左边空格
		$("#password").click(function() {
			$('.mask4').fadeIn('fast');
		})
		$('.mask4 li').click(function(){
			$('.mask4').fadeOut('fast');
			$('#rel_type').val($(this).find('a').attr('data-id'));
			$('#password').val(ltrim($(this).find('a').text()));
		});
		</script>
	</body>

</html>