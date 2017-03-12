<!DOCTYPE html>
<html class="ui-page-login">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<title>登陆页面</title>
		<link href="/wx/css/mui.min.css" rel="stylesheet" />
		<link href="/wx/css/style.css" rel="stylesheet" />
		<link href="/wx/css/app.css" rel="stylesheet" />
		<style>
			.area {
				margin: 20px auto 0px auto;
			}
			
			.mui-input-group {
				margin-top: 10px;
			}
			
			.mui-input-group:first-child {
				margin-top: 20px;
			}
			
			.mui-input-group label {
				width: 22%;
			}
			
			.mui-input-row label~input,
			.mui-input-row label~select,
			.mui-input-row label~textarea {
				width: 78%;
			}
			
			.mui-checkbox input[type=checkbox],
			.mui-radio input[type=radio] {
				top: 6px;
			}
			
			.mui-content-padded {
				margin-top: 25px;
			}
			
			.mui-btn {
				padding: 10px;
			}
			
			.link-area {
				display: block;
				margin-top: 25px;
				text-align: center;
			}
			
			.spliter {
				color: #bbb;
				padding: 0px 8px;
			}
			
			.oauth-area {
				position: absolute;
				bottom: 20px;
				left: 0px;
				text-align: center;
				width: 100%;
				padding: 0px;
				margin: 0px;
			}
			
			.oauth-area .oauth-btn {
				display: inline-block;
				width: 50px;
				height: 50px;
				background-size: 30px 30px;
				background-position: center center;
				background-repeat: no-repeat;
				margin: 0px 20px;
				/*-webkit-filter: grayscale(100%); */
				border: solid 1px #ddd;
				border-radius: 25px;
			}
			
			.oauth-area .oauth-btn:active {
				border: solid 1px #aaa;
			}
			
			.oauth-area .oauth-btn.disabled {
				background-color: #ddd;
			}
		</style>

	</head>

	<body>
		<header class="mui-bar mui-bar-nav">
			<h1 class="mui-title">用户登录</h1>
		</header>
		<div class="mui-content">
				<div class="mui-msg">
					乾源通用户登陆系统
				</div>
@includeWhen(count($errors) > 0, 'wechat.patials.errors')
			<form id='login-form' class="mui-input-group" action='/login' method="POST">
			{{ csrf_field() }}
				<div class="mui-input-row">
					<label>账号</label>
					<input id='account' type="text" class="mui-input-clear mui-input" placeholder="请输入账号" name='phone'>
				</div>
				<div class="mui-input-row">
					<label>密码</label>
					<input id='password' type="password" class="mui-input-clear mui-input" placeholder="请输入密码" name='password'>
				</div>

			<div class="mui-content-padded">
				<button id='login' class="mui-btn mui-btn-block mui-btn-danger" type="submit">登录</button>
			</div>
			</form>
			
			<div class="link-area"><a id='reg' href="/wechat/register">马上注册</a> <span class="spliter">|</span> <a id='forgetPassword'>忘记密码</a>
				</div>
			<div class="mui-content-padded oauth-area">

			</div>
		</div>
		<script src="/wx/js/mui.min.js"></script>
		<script src="/wx/js/mui.enterfocus.js"></script>
		<script src="/wx/js/app.js"></script>
		<script>
			(function($, doc) {
				$.init({
					statusBarBackground: '#f7f7f7'
				});
				$.plusReady(function() {
					plus.screen.lockOrientation("portrait-primary");
					var settings = app.getSettings();
					var state = app.getState();
					var mainPage = $.preload({
						"id": 'main',
						"url": 'main.html'
					});
					var main_loaded_flag = false;
					mainPage.addEventListener("loaded",function () {
						main_loaded_flag = true;
					});
					var toMain = function() {
						//使用定时器的原因：
						//可能执行太快，main页面loaded事件尚未触发就执行自定义事件，此时必然会失败
						var id = setInterval(function () {
							if(main_loaded_flag){
								clearInterval(id);
								$.fire(mainPage, 'show', null);
								mainPage.show("pop-in");
							}
						},20);
					};
					//检查 "登录状态/锁屏状态" 开始
					if (settings.autoLogin && state.token && settings.gestures) {
						$.openWindow({
							url: 'unlock.html',
							id: 'unlock',
							show: {
								aniShow: 'pop-in'
							},
							waiting: {
								autoShow: false
							}
						});
					} else if (settings.autoLogin && state.token) {
						toMain();
					} else {
						app.setState(null);
						//第三方登录
						var authBtns = ['qihoo', 'weixin', 'sinaweibo', 'qq']; //配置业务支持的第三方登录
						var auths = {};
						var oauthArea = doc.querySelector('.oauth-area');
						plus.oauth.getServices(function(services) {
							for (var i in services) {
								var service = services[i];
								auths[service.id] = service;
								if (~authBtns.indexOf(service.id)) {
									var isInstalled = app.isInstalled(service.id);
									var btn = document.createElement('div');
									//如果微信未安装，则为不启用状态
									btn.setAttribute('class', 'oauth-btn' + (!isInstalled && service.id === 'weixin' ? (' disabled') : ''));
									btn.authId = service.id;
									btn.style.backgroundImage = 'url("images/' + service.id + '.png")'
									oauthArea.appendChild(btn);
								}
							}
							$(oauthArea).on('tap', '.oauth-btn', function() {
								if (this.classList.contains('disabled')) {
									plus.nativeUI.toast('您尚未安装微信客户端');
									return;
								}
								var auth = auths[this.authId];
								var waiting = plus.nativeUI.showWaiting();
								auth.login(function() {
									waiting.close();
									plus.nativeUI.toast("登录认证成功");
									auth.getUserInfo(function() {
										plus.nativeUI.toast("获取用户信息成功");
										var name = auth.userInfo.nickname || auth.userInfo.name;
										app.createState(name, function() {
											toMain();
										});
									}, function(e) {
										plus.nativeUI.toast("获取用户信息失败：" + e.message);
									});
								}, function(e) {
									waiting.close();
									plus.nativeUI.toast("登录认证失败：" + e.message);
								});
							});
						}, function(e) {
							oauthArea.style.display = 'none';
							plus.nativeUI.toast("获取登录认证失败：" + e.message);
						});
					}
					// close splash
					setTimeout(function() {
						//关闭 splash
						plus.navigator.closeSplashscreen();
					}, 600);
					//检查 "登录状态/锁屏状态" 结束
					var loginButton = doc.getElementById('login');
					var accountBox = doc.getElementById('account');
					var passwordBox = doc.getElementById('password');
					var autoLoginButton = doc.getElementById("autoLogin");
					var regButton = doc.getElementById('reg');
					var forgetButton = doc.getElementById('forgetPassword');
					loginButton.addEventListener('tap', function(event) {
						var loginInfo = {
							account: accountBox.value,
							password: passwordBox.value
						};
						app.login(loginInfo, function(err) {
							if (err) {
								plus.nativeUI.toast(err);
								return;
							}
							toMain();
						});
					});
					$.enterfocus('#login-form input', function() {
						$.trigger(loginButton, 'tap');
					});
					autoLoginButton.classList[settings.autoLogin ? 'add' : 'remove']('mui-active')
					autoLoginButton.addEventListener('toggle', function(event) {
						setTimeout(function() {
							var isActive = event.detail.isActive;
							settings.autoLogin = isActive;
							app.setSettings(settings);
						}, 50);
					}, false);
					regButton.addEventListener('tap', function(event) {
						$.openWindow({
							url: 'reg.html',
							id: 'reg',
							preload: true,
							show: {
								aniShow: 'pop-in'
							},
							styles: {
								popGesture: 'hide'
							},
							waiting: {
								autoShow: false
							}
						});
					}, false);
					forgetButton.addEventListener('tap', function(event) {
						$.openWindow({
							url: 'forget_password.html',
							id: 'forget_password',
							preload: true,
							show: {
								aniShow: 'pop-in'
							},
							styles: {
								popGesture: 'hide'
							},
							waiting: {
								autoShow: false
							}
						});
					}, false);
					//
					window.addEventListener('resize', function() {
						oauthArea.style.display = document.body.clientHeight > 400 ? 'block' : 'none';
					}, false);
					//
					var backButtonPress = 0;
					$.back = function(event) {
						backButtonPress++;
						if (backButtonPress > 1) {
							plus.runtime.quit();
						} else {
							plus.nativeUI.toast('再按一次退出应用');
						}
						setTimeout(function() {
							backButtonPress = 0;
						}, 1000);
						return false;
					};
				});
			}(mui, document));
		</script>
	</body>

</html>