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
			<a class="mui-pull-left">返回</a>
			<h1 class="mui-title">贷款进度查询</h1>
			<a class="mui-pull-right">退出</a>
		</header>
		<div class="mui-content">
			<div class="mui-content-padded" style="margin: 5px;">
				<form class="mui-input-group" action='/wechat/query' method="POST">
					{{ csrf_field() }}
				    <br>
				    <div class="mui-input-row">
				        <label>类型</label>
				        <input type="text" class="mui-input-clear" placeholder="请输入贷款类型" name='type'>
				    </div>
				    <br>
					<div class="mui-content-padded">
						<button type="submit" class="mui-btn mui-btn-block mui-btn-danger">点击查询</button></a>
					</div>
				</form>

			</div>
		</div>
		<script src="/wx/js/mui.min.js"></script>
		<script src="/wx/js/mui.enterfocus.js"></script>
		<script src="/wx/js/app.js"></script>
		<script>
			
		</script>
	</body>

</html>