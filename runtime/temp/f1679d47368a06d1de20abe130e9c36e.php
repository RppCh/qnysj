<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:54:"D:\wwwroot\qnysj1\wwwroot/app/wap/view/index/user.html";i:1505961158;s:55:"D:\wwwroot\qnysj1\wwwroot/app/wap/view/Public/base.html";i:1498016252;}*/ ?>
﻿<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<title>湖南省青年文化艺术节</title>
		<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">

		<link rel="stylesheet" href="__STATIC__/mui/css/mui.css">
		

<link href="__wap__/css/base.css" rel="stylesheet" type="text/css" media="screen" />
<link href="__wap__/css/headfoot.css" rel="stylesheet" type="text/css" media="screen" />
<link href="__wap__/css/style.css" rel="stylesheet" type="text/css" media="screen" />

<style>
	.Cndy a:after{border-width: 0px;}
	.current img{width: 22px !important;height: 22px !important;}
</style>

		<style>
			html,
			body {
				background-color: #efeff4;
			}
			.title{
				margin: 20px 15px 10px;
				color: #6d6d72;
				font-size: 15px;
			}
			.mui-content img{
				width: 100%;
			}
			.mui-off-canvas-left {
				color: #fff;
			}
			#top {
				height: 15%;
				background: #333;
				position: relative;
				border-bottom:1px solid #222;
			}
			#top span {
				position: absolute;
				left: 40%;
				bottom: 0;
				font-size: 14px;
			}
			#nav {
				width: 100%;
				height: 6%;
				padding: 0 5%;
				position: relative;
				background: #333;
			}
			#nav img {
				border-radius: 50%;
				width: 65px;
				height: 65px;
				background: #fff;
				position: absolute;
				left: 5%;
				top: -20px;
			}
			#nav ul {
				width: 60%;
				position: absolute;
				right: 1%;
				top: 10px;
				height: 50px;
				padding: 0;
				margin: 0;
				color: #fff;
			}
			#nav ul li {
				width: 33%;
				height: 40px;
				font-size: 12px;
			}
			#nav ul li span {
				display: block;
				width: 100%;
				height: 30%;
				text-align: center;
			}
			ul,li{list-style: none;}
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
		<!-- 侧滑导航根容器 -->
		<div id="offCanvasWrapper" class="mui-off-canvas-wrap mui-draggable mui-scalable">
		  <!-- 菜单容器 -->
		  <aside id="offCanvasSide" class="mui-off-canvas-left">
			<div id="offCanvasSideScroll" class="mui-scroll-wrapper">
				<div class="mui-scroll" style="height: 100%;">
					<div id="top">
						会员中心
						<span><?php echo session('m_user_auth.user_name'); ?></span>
					</div>
					<div id="nav">
						<img src="<?php if(empty(\think\Session::get('m_user_auth')['user_img']) || ((\think\Session::get('m_user_auth')['user_img'] instanceof \think\Collection || \think\Session::get('m_user_auth')['user_img'] instanceof \think\Paginator ) && \think\Session::get('m_user_auth')['user_img']->isEmpty())): ?>/public/index/user/user_img.png<?php else: ?><?php echo \think\Session::get('m_user_auth')['user_img']; endif; ?>">
						
						<ul>
							<li class="mui-pull-left" style="border-right: 1px solid #ccc;">
								<span><?php echo get_guestbook(\think\Session::get('m_user_auth')['id']); ?></span>
								<span>留言</span>
							<li class="mui-pull-left" style="border-right: 1px solid #ccc;">
								<span><?php echo get_hpoto(\think\Session::get('m_user_auth')['id']); ?></span>
								<span>相册</span>
							</li>
							<li class="mui-pull-left">
								<span><?php echo get_record(\think\Session::get('m_user_auth')['id']); ?></span>
								<span>来访</span>
							</li>
							
						</ul>
					</div>
					<ul class="mui-table-view mui-table-view-chevron mui-table-view-inverted" style="margin-top: 10%";>
						<li class="mui-table-view-cell">
							<a class="mui-navigate-right" href="<?php echo url('index/user',['user_id'=>\think\Session::get('m_user_auth')['id']]); ?>">
								我的主页
							</a>
						</li>
						<li class="mui-table-view-cell">
							<a class="mui-navigate-right" href="<?php echo url('user/record'); ?>">
								用户中心
							</a>
						</li>
						<li class="mui-table-view-cell">
							<a class="mui-navigate-right" href="<?php echo url('user/info'); ?>">
								个人信息
							</a>
						</li>
						<li class="mui-table-view-cell">
							<a class="mui-navigate-right" href="<?php echo url('user/index_player'); ?>">
								报名信息
							</a>
						</li>
						<li class="mui-table-view-cell">
							<a class="mui-navigate-right" href="<?php echo url('user/msg'); ?>">
								通知信息
							</a>
						</li>
						<li class="mui-table-view-cell">
							<a class="mui-navigate-right" href="<?php echo url('user/editpwd'); ?>">
								修改密码
							</a>
						</li>
					</ul>
					<div style="position: absolute;width: 100%;padding: 0 20px;bottom: 30px;">
						<button id="logout" type="button" data-loading-text="退出中"  class="mui-btn mui-btn-block mui-btn-red" style="padding: 5px 0;">退出账号</button>
					</div>
				</div>
			</div>
		  </aside>
		  <!-- 主页面容器 -->
		  <div class="mui-inner-wrap">
			<!-- 主页面标题 -->
			<header class="mui-bar mui-bar-nav">
				
				<a id="user" class="mui-icon mui-icon-contact mui-pull-right" <?php if((!is_login())): ?>style="color:#929292"<?php else: ?>href="#offCanvasSide" style="color:#007aff"<?php endif; ?>></a>
				<h1 class="mui-title">个人主页</h1>
				
				<a style="display:none;" class="mui-action-back mui-icon mui-icon-arrowleft mui-pull-left" style="color:#929292"></a>
			</header>
			<nav class="mui-bar mui-bar-tab">
				<a class="mui-tab-item <?php if(\think\Request::instance()->controller() == 'Index'): ?>mui-active<?php endif; ?>" href="<?php echo url('index/index'); ?>">
					<span class="mui-icon mui-icon-home"></span>
					<span class="mui-tab-label">网站首页</span>
				</a>
				<a class="mui-tab-item <?php if(\think\Request::instance()->controller() == 'News'): ?>mui-active<?php endif; ?>" href="<?php echo url('news/index'); ?>">
					<span class="mui-icon mui-icon-list"></span>
					<span class="mui-tab-label">新闻资讯</span>
				</a>
				<a class="mui-tab-item <?php if(\think\Request::instance()->controller() == 'Player'): ?>mui-active<?php endif; ?>" href="<?php echo url('player/index'); ?>">
					<span class="mui-icon mui-icon-paperclip"></span>
					<span class="mui-tab-label">我要报名</span>
				</a>
				<a class="mui-tab-item <?php if(\think\Request::instance()->controller() == 'School'): ?>mui-active<?php endif; ?>" href="<?php echo url('school/index'); ?>">
					<span class="mui-icon mui-icon-paperplane"></span>
					<span class="mui-tab-label">校区集锦</span>
				</a>
				<a class="mui-tab-item <?php if(\think\Request::instance()->controller() == 'Media'): ?>mui-active<?php endif; ?>" href="<?php echo url('media/index'); ?>">
					<span class="mui-icon mui-icon-chatboxes"></span>
					<span class="mui-tab-label">校园媒体</span>
				</a>
			</nav>
			<div id="offCanvasContentScroll" class="mui-content mui-scroll-wrapper">
			  <div class="mui-scroll">
				<!-- 主界面具体展示内容 -->
				
<section class="qui-page">
                
    <section class="uUserBox">
	<div class="userBg">
		<img src="__wap__/images/beijing0.jpg"　width="100%">	
	</div>
	<p class="uFace">
		<img src="<?php echo $obj['img']; ?>" width="64" height="64" alt="头像">
	</p>
	<h2 class="user">
		<span class="name"><?php echo $obj['user_name']; ?></span>
		<!--<?php if(count($plist)>0): ?>
		<i></i>
	    <img src="__wap__/images/<?php echo $plist[0]['back_2']; ?>.png" />
		<?php endif; ?>-->
	</h2>
	<?php if(count($plist)>0): ?>
	<div class="dianzan0" v="<?php echo $obj['id']; ?>" id="zan">
		<img src="__wap__/images/dianzan.png"><?php echo $plist[0]['back_3']; ?>
	</div>
	<?php endif; ?>
	<div class="liuyan0" id="btn">
		<img src="__wap__/images/ly2.png">	
	</div>
</section>
<section>
	<ul class="uMyList">
		<li class="fanshop" id="int" style="min-height:50px;margin: -5px 0 10px 0;text-align: center;">
				<?php if($obj['int_number']>=0): ?>
				<img src="/public/wap/images/001.png" style="margin: -5px;" /><?php endif; if($obj['int_number']>=100): ?>
				<img src="/public/wap/images/002.png" style="margin: -5px;" /><?php endif; if($obj['int_number']>=300): ?>
				<img src="/public/wap/images/003.png" style="margin: -5px;" /><?php endif; if($obj['int_number']>=600): ?>
				<img src="/public/wap/images/004.png" style="margin: -5px;" /><?php endif; if($obj['int_number']>=1000): ?>
				<img src="/public/wap/images/005.png" style="margin: -5px;" /><?php endif; ?>
        </li>
		<li class="fanshop" id="ts" style="margin: -10px 0 10px 0;text-align: center;display:none;">
				账户积分:<?php echo $obj['int_number']; ?><br>下一枚勋章所需积分:
				<?php if($obj['int_number']>=1000): ?>
					<?php echo intval(3000)-$obj['int_number']; elseif($obj['int_number']>=600): ?>
					<?php echo intval(1000)-$obj['int_number']; elseif($obj['int_number']>=300): ?>
					<?php echo intval(600)-$obj['int_number']; elseif($obj['int_number']>=100): ?>
					<?php echo intval(300)-$obj['int_number']; elseif($obj['int_number']>=0): ?>
					<?php echo intval(100)-$obj['int_number']; endif; ?>
        </li>

		<li class="myForum">
			<a data-bn-ipg="musercenter-navigate-mybbs" href="<?php if($obj['id'] == \think\Session::get('m_user_auth.id')): ?>/wap/user/info.html<?php else: ?>#<?php endif; ?>">
				<span style="height: 25px;">基本信息&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $obj['user_sex']; ?>&nbsp;&nbsp;<?php echo $obj['user_age']; ?>岁&nbsp;&nbsp;<?php echo $obj['pname']; ?>-<?php echo $obj['cname']; ?></span>
			</a>
		</li>
		<?php if($obj['sid']!=0): ?>
		<li class="myQa no_bor">
			<a data-bn-ipg="musercenter-navigate-myask" href="<?php if($obj['id'] == \think\Session::get('m_user_auth.id')): ?>/wap/user/info.html<?php else: ?>#<?php endif; ?>">
				<span style="height: 25px;">所属学校&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $obj['sname']; ?></span>
			</a>
		</li>
		<?php elseif(count($plist)>0): ?>
			<li class="myQa no_bor">
				<a data-bn-ipg="musercenter-navigate-myask" href="<?php if($obj['id'] == \think\Session::get('m_user_auth.id')): ?>/wap/user/info.html<?php else: ?>#<?php endif; ?>">
					<span style="height: 25px;">所属学校&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $plist[0]['sname']; ?></span>
				</a>
			</li>
		<?php endif; ?>
		<li class="myPlan no_bor" style="display:none;" >
			<a data-bn-ipg="musercenter-navigate-myplan" href="<?php echo $obj['Live']; ?>">
				<span style="height: 25px;">我的直播&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $obj['Live']; ?></span>
			</a>
		</li>
		<?php if(count($plist)>0): ?>
        <li class="myBudget">
        	<a data-bn-ipg="musercenter-navigate-myz" href="<?php if($obj['id'] == \think\Session::get('m_user_auth.id')): ?>/wap/user/index_player.html<?php else: ?>#<?php endif; ?>">
        		<span style="height: 25px;">参赛大类<?php if(is_array($plist) || $plist instanceof \think\Collection || $plist instanceof \think\Paginator): $i = 0; $__LIST__ = $plist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $vo['type_name']; if($vo['maxid']!=0): ?>/<?php echo $vo['maxname']; endif; endforeach; endif; else: echo "" ;endif; ?></span>
        	</a>
        </li>
        <li class="myCoupon">
        	<a data-bn-ipg="musercenter-navigate-myz" href="<?php if($obj['id'] == \think\Session::get('m_user_auth.id')): ?>/wap/user/index_player.html<?php else: ?>#<?php endif; ?>">
        		<span style="height: 25px;">节目名称<?php if(is_array($plist) || $plist instanceof \think\Collection || $plist instanceof \think\Paginator): $i = 0; $__LIST__ = $plist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $vo['wname']; endforeach; endif; else: echo "" ;endif; ?></span>
        	</a>
        </li>
        <?php endif; ?>
        <li class="fanshop" style="min-height:75px;">
        	<a data-bn-ipg="musercenter-navigate-fanshop" style="height: 100%;" href="<?php if($obj['id'] == \think\Session::get('m_user_auth.id')): ?>/wap/index/user_photo_list/user_id/<?php echo $obj['id']; ?>.html<?php else: ?>/wap/index/user_photo_list/user_id/<?php echo $obj['id']; ?>.html<?php endif; ?>">
        		<span style="height: 25px;">个人相册</span>
				<?php if(is_array($list_img) || $list_img instanceof \think\Collection || $list_img instanceof \think\Paginator): $i = 0; $__LIST__ = $list_img;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        		<img style="width:60px;height:45px;" src="<?php echo $vo['img']; ?>"/>
				<?php endforeach; endif; else: echo "" ;endif; ?>
        	</a>
        </li>

		<li style="min-height:75px;max-height:120px;overflow: hidden;">
        	<a data-bn-ipg="musercenter-navigate-fanshop" style="height: 100%;" href="<?php if($obj['id'] == \think\Session::get('m_user_auth.id')): ?>/wap/index/user_art_list/user_id/<?php echo $obj['id']; ?>.html<?php else: ?>/wap/index/user_art_list/user_id/<?php echo $obj['id']; ?>.html<?php endif; ?>">
        		<span style="background-position: 0px -278px;height: 25px;">个人动态</span>
				<?php if(is_array($list_article_json) || $list_article_json instanceof \think\Collection || $list_article_json instanceof \think\Paginator): $i = 0; $__LIST__ = $list_article_json;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        			<img style="width: auto;height:100px;" src="<?php echo $vo['json_img']; ?>"/>
				<?php endforeach; endif; else: echo "" ;endif; ?>
        	</a>
        	
        </li>

        <li class="manage">
        	<a data-bn-ipg="musercenter-navigate-manage" href="<?php if($obj['id'] == \think\Session::get('m_user_auth.id')): ?>/wap/index/user_gb_list/user_id/<?php echo $obj['id']; ?>.html<?php else: ?>/wap/index/user_gb_list/user_id/<?php echo $obj['id']; ?>.html<?php endif; ?>">
        		<img style="width:30%;margin-left:33%;" src="__wap__/images/liuyanban.jpg">
        	</a>
        </li>

        </ul>
</section>
    
    
<!--footer-->
<footer class="qui-footerBasic">
	  <ul class="liuyan">
		<?php if(is_array($list_gb_json) || $list_gb_json instanceof \think\Collection || $list_gb_json instanceof \think\Paginator): $i = 0; $__LIST__ = $list_gb_json;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
			<li>
			<a href="<?php echo url('index/user',['user_id'=>$vo['user_id']]); ?>">
				<img src="<?php echo $vo['user_img']; ?>"></a>
				<p class="copyright"><?php echo $vo['user_name']; ?>&nbsp;[<?php echo date('Y-m-d',$vo['add_time']); ?>]</p>
				<div class="switchStyle">
				<div class="current"><?php echo $vo['content']; ?></div>
				</div> 
			</li>
		<?php endforeach; endif; else: echo "" ;endif; ?>

	  </ul>
       
</footer>

<!--footer end-->
                            
</section>

<!--统计代码-->
<div class="phpreferer" style="display: none;">http://m.qyer.com/</div>

			  </div>
			</div>  
		  </div>
		</div>
		
		<script src="__STATIC__/mui/js/mui.js"></script>
		<script>
			mui.init();
			//主界面和侧滑菜单界面均支持区域滚动；
			mui('#offCanvasSideScroll').scroll();
			mui('#offCanvasContentScroll').scroll();

			
			
			<?php if((!is_login())): ?>
			//主界面容器
			var offCanvasWrapper = mui('#offCanvasWrapper');
			var offCanvasInner = offCanvasWrapper[0].querySelector('.mui-inner-wrap');
			offCanvasInner.addEventListener('drag', function(event) {
				event.stopPropagation();
			});
			
			document.getElementById("user").addEventListener('tap', function() {
				var btnArray = ['再看看', '去登录'];
				mui.confirm('您还未登录平台，请先登录！', '青年文化艺术节', btnArray, function(e) {
					if (e.index == 1) {
						location.href='/wap/login/index';
					}
				})
			});
			
			<?php endif; ?>
			
			//点击退出按钮
			document.getElementById("logout").addEventListener("click", function(){
				//设置loading
				mui("#logout").button('loading');
				//ajax交互，进行登录
				mui.post('<?php echo url('Login/logout'); ?>',{
					},function(data){
						mui("#logout").button('reset');
						if(data.status == 1) {
							mui.toast(data.message);
							location.href='<?php echo url('Login/index'); ?>';
						}else{
							mui.toast(data.message);
						}
						
					},'json'
				);
			})
			
			mui(".mui-table-view").on('tap','a',function(){
			  var href = this.getAttribute("href");
			  location.href=href;
			})
			
			mui(".mui-bar-tab").on('tap','a',function(){
			  var href = this.getAttribute("href");
			  location.href=href;
			})

			

		</script>
		
<script type="text/javascript" src="__STATIC__/layui/jquery.js"></script>
<script>

mui.plusReady(function () { 
	plus.screen.lockOrientation("portrait-primary"); 
}); 

mui(".mui-scroll").on('tap','a',function(){
			  var href = this.getAttribute("href");
			  location.href=href;
})


document.getElementById("int").addEventListener("tap",function(){
	if($("#ts").css('display')=="none")
		$("#ts").css("display","block");
	else
		$("#ts").css("display","none");
	
});
/*
document.getElementById("int").addEventListener("hold",function(){
	if($("#ts").css('display')=="none");
	
});

document.getElementById("int").addEventListener("release",function(){
	$("#ts").css("display","none");
	
});

*/

document.getElementById("btn").addEventListener('tap', function(){
	 
	location.href='<?php echo url('index/guestbook',['user_id'=>$obj['id']]); ?>';
	 
})

document.getElementById("zan").addEventListener('tap', function(){

	mui.ajax('/wap/index/vote.html',{
				data:{uid:this.getAttribute("v")},
				dataType:'json',//服务器返回json格式数据
				type:'post',//HTTP请求类型
				timeout:10000,//超时时间设置为10秒；
				headers:{'Content-Type':'application/json'},	              
				success:function(data){
					if(data.status == 1){
						mui.toast(data.message);
						parent.location.reload();
					}else{
						mui.toast(data.message);
					}
				},
				error:function(xhr,type,errorThrown){
					//异常处理；
					console.log(type);
				}
			});
})

</script>

	</body>

</html>