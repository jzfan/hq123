<!DOCTYPE html>
<html class="ui-page-login">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<title>公积金贷款申请</title>
		<link href="/wx/css/mui.min.css" rel="stylesheet" />
		<link href="/wx/css/app.css" rel="stylesheet" />
		<style>
			
		</style>
	</head>

	<body>
		<header class="mui-bar mui-bar-nav">
			<a class="mui-pull-left">返回</a>
			<h1 class="mui-title">公积金贷款申请表</h1>
			@include('wechat.patials.logout')
		</header>
		<div class="mui-content">
		@includeWhen(count($errors) > 0, 'wechat.patials.errors')
<form action="/wechat/funds/apply" method="POST">
	{{ csrf_field() }}
			<div class="mui-content-padded" style="margin: 5px;">
				<div class="mui-msg">
					为保证贷款成功,请准确填写以下信息
				</div>
				<div class="mui-card">
					<div class="mui-card-content">
					<div class="mui-card-content-inner">
					<h5 style="clear: left;">贷款金额：<span id="block-range-val">50</span><span>万</span></h5>

					<div class="mui-input-row mui-input-range">
				        <input type="range" id="block-range" value="1" min="0" max="50" data-input-slider="4" name="loan"><span class="mui-tooltip mui-hidden" style="left: 328px;">50</span>
				    </div>

				  <div class="mui-input-row mui-input-range field-contain">
		            <div style="float:left">
		                <h5 style="clear: left; display:inline-block">贷款期限：
		                <input type="text" id="field-range-input" value="36" style="border:none">期</h5>
		            </div>
		            <div>
		                <input type="range" id="field-range" value="60" min="0" max="36" data-input-slider="2" name="duration"><span class="mui-tooltip mui-hidden">36</span>
		            </div>
		        </div>
		        </div>
				</div>
			    </div>

				<br>

				<div class="mui-input-group">
					<div class="mui-input-row">
						<label>真实姓名</label>
						<input type="text" class="mui-input-clear mui-input" placeholder="请输入真实姓名" name='real_name'>
					</div>

					<div class="mui-input-row">
						<label>手机号码</label>
						<input type="number" class="mui-input-clear mui-input" placeholder="请输入手机号码" name='phone' value='{{ \Auth::user()->phone }}'>
					</div>

					<div class="mui-input-row">
						<label>当前城市</label>
						<input type="text" class="mui-input-clear" placeholder="" data-input-clear="5" name='city'><span class="mui-icon mui-icon-clear mui-hidden"></span>
					</div>

					<div class="mui-input-row">
						<label>工作单位</label>
						<input type="text" placeholder="请输入工作单位" name='company'>
					</div>

					<div class="mui-input-row">
						<label>工作地点</label>
						<input type="text" placeholder="请输入工作地点" name='location'>
					</div>

					<div class="mui-input-row">
						<label>入职时间</label>
						<input type="date" placeholder="请选择" name='worked_at'>
					</div>

					<div class="mui-input-row">
						<label>社保情况</label>
						<input type="text" placeholder="请选择" id="social" name='insurance'>
					</div>

					<div class="mui-input-row">
						<label>公积金</label>
						<input type="text" placeholder="请选择" id="funds" name='fund'>
					</div>

				</div>


				<div class="mui-content-padded">
					<button id="login" type="submit" class="mui-btn mui-btn-block mui-btn-danger">立即申请</button></a>
				</div>
			</div>
			</form>
		</div>



		<!-- 公积金 -->
		<div class="mui-backdrop mask3" style="display:none">
			<ul class="mui-table-view mui-table-view-radio list-radio">
				<div class="com-title">公积金</div>
				<li class="mui-table-view-cell"><a class="mui-navigate-right">一年以上</a></li>
				<li class="mui-table-view-cell"><a class="mui-navigate-right">一年以下</a></li>
			</ul>
		</div>

		<!-- 社保缴纳 -->
		<div class="mui-backdrop mask4" style="display:none">
			<ul class="mui-table-view mui-table-view-radio list-radio">
				<div class="com-title">社保缴纳</div>
				<li class="mui-table-view-cell"><a class="mui-navigate-right">一年以上</a></li>
				<li class="mui-table-view-cell"><a class="mui-navigate-right">一年以下</a></li>
			</ul>
		</div>


		<!--BEGIN toast-->
	    <div id="toast" style="display: none;">
	        <div class="weui-mask_transparent"></div>
	        <div class="weui-toast">
	            <i class="weui-icon-success-no-circle weui-icon_toast"></i>
	            <p class="weui-toast__content" style="color:#fff;font-size:18px;">申请成功!</p>
	        </div>
	    </div>
	    <!--end toast-->

		<script src="/wx/js/mui.min.js"></script>
		<script src="/wx/js/jquery.min.js"></script>
		<script src="/wx/js/mui.enterfocus.js"></script>
		<script src="/wx/js/app.js"></script>
		<script>
		// toast
		    $(function(){
		        var $toast = $('#toast');
		        $('#login').click( function(){
		            if ($toast.css('display') != 'none') return;

		            $toast.fadeIn(100);
		            setTimeout(function () {
		                $toast.fadeOut(100);
		            }, 2000);
		        });
		    });

		// 模态框
	    function ltrim(s){
    		return s.replace(/(^\s*)/g, "");
		};//去左边空格
		$("#social").click(function() {
			$('.mask4').fadeIn('fast');
		})
		$('.mask4 li').click(function(){
			$('.mask4').fadeOut('fast');
			$('#social').val(ltrim($(this).find('a').text()));
		});

		$("#funds").click(function() {
			$('.mask3').fadeIn('fast');
		})
		$('.mask3 li').click(function(){
			$('.mask3').fadeOut('fast');
			$('#funds').val(ltrim($(this).find('a').text()));
		});

		mui.init({
				swipeBack:true //启用右滑关闭功能
			});
	    //监听input事件，获取range的value值，也可以直接element.value获取该range的值
	    var rangeList = document.querySelectorAll('input[type="range"]');
	    for(var i=0,len=rangeList.length;i<len;i++){
	        rangeList[i].addEventListener('input',function(){
	            if(this.id.indexOf('field')>=0){
	                document.getElementById(this.id+'-input').value = this.value;
	            }else{
	                document.getElementById(this.id+'-val').innerHTML = this.value;
	            }
	            
	
	        });
	    }
	
	    document.getElementById('field-range-input').addEventListener('input',function(){
	        document.getElementById('field-range').value = this.value;
	    });

	    $(function(){
	    	$('#login').click(function(){
	    		$.ajax({
					type: "POST",
					url:ajaxCallUrl,
					data:$('#yourformid').serialize(),// 你的formid
					async: false,
				    error: function(request) {
				        alert("Connection error");
				    },
					success: function(data) {
						$("#commonLayout_appcreshi").parent().html(data);
					}
				});
	    	})
	    })
		</script>
	</body>

</html>