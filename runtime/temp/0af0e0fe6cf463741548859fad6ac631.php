<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:55:"D:\wwwroot\qnysj1\wwwroot/app/wap/view/login/index.html";i:1498017554;}*/ ?>
<!DOCTYPE html>
<html class="ui-page-login">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<title>湖南省青年文化艺术节</title>
		<link rel="stylesheet" href="__STATIC__/mui/css/mui.css">
		<link href="css/style.css" rel="stylesheet" />
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
	<script>
		var _hmt = _hmt || [];
		(function() {
		  var hm = document.createElement("script");
		  hm.src = "https://hm.baidu.com/hm.js?8e85dbf31e589d58cb1b25a97ad602be";
		  var s = document.getElementsByTagName("script")[0]; 
		  s.parentNode.insertBefore(hm, s);
		})();
	</script>
	</head>

	<body>
		<header class="mui-bar mui-bar-nav">
			<h1 class="mui-title">登录</h1>
		</header>
		<div class="mui-content">
			<form id='login-form' class="mui-input-group">
				<div class="mui-input-row">
					<label>账号</label>
					<input id='username' type="text" class="mui-input-clear mui-input" placeholder="请输入账号">
				</div>
				<div class="mui-input-row">
					<label>密码</label>
					<input id='password' type="password" class="mui-input-clear mui-input" placeholder="请输入密码">
				</div>
			</form>
			<div class="mui-content-padded">
				<button id='login' data-loading-text="登录中" class="mui-btn mui-btn-block mui-btn-primary">登录</button>
				<div class="link-area"><a id='reg' href="<?php echo url('Login/reg'); ?>" >注册账号</a> <span class="spliter">|</span> <a id='index' href="<?php echo url('index/index'); ?>">返回官网</a>
				</div>
			</div>
			<div class="mui-content-padded oauth-area">

			</div>
		</div>
		<script src="__STATIC__/mui/js/mui.js"></script>
		<script>
			mui.init();
			//点击登录按钮
			document.getElementById("login").addEventListener("click", function(){
				//判断input是否为空
				check = true;
				mui("#login-form input").each(function() {
					//若当前input为空，则alert提醒 
					if(!this.value || this.value.trim() == "") {
						var label = this.previousElementSibling;
						mui.alert(label.innerText + "不允许为空");
						check = false;
						return false;
					}
				});
				//验证手机号
				var retel = /^(((13[0-9]{1})|(14[0-9]{1})|(15[0-9]{1})|(17[0-9]{1})|(18[0-9]{1}))+\d{8})$/;
				var mobile = document.getElementById("username").value;
				if(!retel.exec(mobile)){
					mui.alert("帐号格式不正确");
					check = false;
				}
				//校验通过，继续执行业务逻辑 
				if(check){
					//设置loading
					mui("#login").button('loading');
					
					//ajax交互，进行登录
					mui.post('<?php echo url('Login/index'); ?>',{
							username:document.getElementById("username").value,
							password:document.getElementById("password").value
						},function(data){
							mui("#login").button('reset');
							if(data.status == 1) {
								mui.toast(data.message);
								location.href='<?php echo url('Index/index'); ?>';
							}else{
								mui.toast(data.message);
							}
							
						},'json'
					);
				}
			});
		</script>
	</body>

</html>