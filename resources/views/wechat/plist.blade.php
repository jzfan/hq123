<!DOCTYPE html>
<html class="ui-page-login">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<title>贷款产品</title>
		<link href="/wx/css/mui.min.css" rel="stylesheet" />
		<link href="/wx/css/app.css" rel="stylesheet" />
		<style>
		</style>
	</head>

	<body>
		<header class="mui-bar mui-bar-nav">
			<a class="mui-pull-left" onclick="window.history.back()">返回</a>
			<h1 class="mui-title">贷款产品</h1>
@include('wechat.patials.logout')

		</header>
		
		<div class="mui-content">
			<div class="mui-content-padded" style="margin: 0px;">
				<div class="mui-msg">
					乾源通贷款产品
				</div>
				
				<ul class="mui-table-view plist">
				 <li class="mui-table-view-cell">
					<div class="plist-l">
						<p class="pname">社保<br>公积金贷</p>
						<img src="/wx/images/5.jpg" alt="">
					</div>
					<div class="plist-r">
						<p><span class="mui-icon">1.</span>适用人群：由单位购买了社保或者公积金</p>
						<p><span class="mui-icon">2.</span>放款速度：最快1天</p>
						<p><span class="mui-icon">3.</span>最高额度:50万</p> 
						<p><span class="mui-icon">4.</span>贷款期限：1-36个月
						</p>
						
						<a href="/wechat/funds/apply">
						<button type="button" class="mui-btn mui-btn-success mui-btn-outlined">
							立即申请
						</button></a>
						
					</div>
				 </li>
				

		         <li class="mui-table-view-cell">
					<div class="plist-l">
						<p class="pname">汽车<br>抵押贷款</p>
						<img src="/wx/images/1.jpg" alt="">
					</div>
					<div class="plist-r">
						<p><span class="mui-icon">1.</span>适用人群：全款购买的汽车或已结清按揭的车辆</p>
						<p><span class="mui-icon">2.</span>放款速度：最快1天</p>
						<p><span class="mui-icon">3.</span>最高额度:100万</p> 
						<p><span class="mui-icon">4.</span>贷款期限：1-36个月
						</p>

						<a href="/wechat/cars/apply">
						<button type="button" class="mui-btn mui-btn-success mui-btn-outlined">
							立即申请
						</button></a>
						
						
					</div>
				 </li>
				 <li class="mui-table-view-cell">
					<div class="plist-l">
						<p class="pname">生意贷</p>
						<img src="/wx/images/4.jpg" alt="">
					</div>
					<div class="plist-r">
						<p><span class="mui-icon">1.</span>适用人群：拥有1年以上的营业执照</p>
						<p><span class="mui-icon">2.</span>放款速度：最快1天</p>
						<p><span class="mui-icon">3.</span>最高额度:100万</p> 
						<p><span class="mui-icon">4.</span>贷款期限：1-36个月
						</p>

						<a href="/wechat/businesses/apply">
						<button type="button" class="mui-btn mui-btn-success mui-btn-outlined">
							立即申请
						</button></a>
						
						
					</div>
				 </li>

		         <li class="mui-table-view-cell">
					<div class="plist-l">
						<p class="pname">房屋<br>抵押贷款</p>
						<img src="/wx/images/3.jpg" alt="">
					</div>
					<div class="plist-r">
						<p><span class="mui-icon">1.</span>适用人群：全款购买的房屋</p>
						<p><span class="mui-icon">2.</span>放款速度：最快3天</p>
						<p><span class="mui-icon">3.</span>最高额度:2000万</p> 
						<p><span class="mui-icon">4.</span>贷款期限：1-36个月
						</p>

						<a href="/wechat/houses/apply">
						<button type="button" class="mui-btn mui-btn-success mui-btn-outlined">
							立即申请
						</button></a>
						
						
					</div>
				 </li>
				 <li class="mui-table-view-cell">
					<div class="plist-l">
						<p class="pname">及时贷</p>
						<img src="/wx/images/2.jpg" alt="">
					</div>
					<div class="plist-r">
						<p><span class="mui-icon">1.</span>适用人群：拥有大陆居民身份证、年满18周岁</p>
						<p><span class="mui-icon">2.</span>放款速度：最快1天</p>
						<p><span class="mui-icon">3.</span>最高额度:3万</p> 
						<p><span class="mui-icon">4.</span>贷款期限：1-3个月
						</p>

						<a href="jsd.html">
						<button type="button" class="mui-btn mui-btn-success mui-btn-outlined">
							立即申请
						</button></a>
						
						
					</div>
				 </li>
				</ul>

			</div>
		</div>
		


		<script src="/wx/js/mui.min.js"></script>
		<script src="http://apps.bdimg.com/libs/jquery/1.6.4/jquery.js"></script>
		<script src="/wx/js/mui.enterfocus.js"></script>
		<script src="/wx/js/app.js"></script>
		<script>

		</script>
	</body>

</html>