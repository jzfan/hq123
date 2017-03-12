<!DOCTYPE html>
<html class="ui-page-login">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<title>查询结果</title>
		<link href="/wx/css/mui.min.css" rel="stylesheet" />
		<link href="/wx/css/app.css" rel="stylesheet" />
	</head>

	<body>
		<header class="mui-bar mui-bar-nav">
			<h1 class="mui-title">查询结果</h1>
		</header>
		<div class="mui-content">
		<div class="mui-content-padded" style="margin: 5px;">
				
				<div class="mui-msg">
					尊敬的客户,您贷款状态如下:
				</div>
				<div style="display:none;">{{ dd($result->toArray()) }}</div>
				<ul class="mui-table-view result">
				    <li class="mui-table-view-cell"><span class="mui-icon mui-icon-checkmarkempty"></span>初审状态
				        <span class="mui-badge mui-badge-success">通过</span>
				    </li>
				    <li class="mui-table-view-cell"><span class="mui-icon mui-icon-checkmarkempty"></span>真实性审核
				        <span class="mui-badge mui-badge-success">通过</span>
				    </li>
				    <li class="mui-table-view-cell"><span class="mui-icon flag mui-icon-flag"></span>
				    待审
				        <span class="mui-badge  mui-badge-danger">请等待</span>
				    </li>
				</ul>

				<div class="mui-content-padded">
					<button id="login" type="submit" class="mui-btn mui-btn-block mui-btn-danger">等待放款中...</button>
				</div>
			</div>
		</div>
		<script src="js/mui.min.js"></script>
		<script src="js/mui.enterfocus.js"></script>
		<script src="js/app.js"></script>
		<script>
			
		</script>
	</body>

</html>



