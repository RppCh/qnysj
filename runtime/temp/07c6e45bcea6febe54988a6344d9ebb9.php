<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:57:"D:\wwwroot\qnysj1\wwwroot/app/index/view/login/index.html";i:1498017642;}*/ ?>
<!DOCTYPE html>
<html>
<head>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>登录-青年文化艺术</title>
		<style>
			html,body,h2,p,form,input{margin:0;padding:0;}
			html,body{width:100%;height:100%;background:#4E5465;}
			input{border:0;}
			h2{text-align:center;color: #FFF;}
			.box{width:400px;margin:50px auto 0;overflow:hidden;padding:50px;}
			.m-t{width:300px;overflow:hidden;margin:0 auto;}
			.form-group,.btn{width:100%;height:30px;margin-top:20px;}
			.form-group input{padding-left:4%;width:95%;height:99%;}
			.btn{text-align:center;background:#1AB394;color:#fff;border:0;height:35px;border-radius:5px;}
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
	<div class="box">
        <div>
			<h2>青年文化艺术节</h2>
        </div>

        <form class="m-t" role="form" action="" method="post">
			<div class="form-group">
                <input class="form-control" placeholder="账号" name="username" id="login-name" type="name">
            </div>

            <div class="form-group">
                <input class="form-control" placeholder="密码" name="password" type="password">
            </div>
            <button type="submit" class="btn">登 录</button>
            <p></p>
        </form>
    </div>
</body>
</html>