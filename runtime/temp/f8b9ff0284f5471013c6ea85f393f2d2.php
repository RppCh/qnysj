<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:62:"D:\wwwroot\wchhui1\wwwroot/app/wap/view/user/index_player.html";i:1497423012;s:56:"D:\wwwroot\wchhui1\wwwroot/app/wap/view/Public/base.html";i:1495342088;}*/ ?>
﻿<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<title>湖南省青年文化艺术节</title>
		<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">

		<link rel="stylesheet" href="__STATIC__/mui/css/mui.css">
		
<style>
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
				<h1 class="mui-title">报名信息</h1>
				
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
				
	<div class="mui-content">
		<h5 class="mui-content-padded" style="margin: 15px 10px;">左滑可删除</h5>
		<ul id="ajax_record_return"class="mui-table-view">
			<?php if(is_array($lists) || $lists instanceof \think\Collection || $lists instanceof \think\Paginator): $i = 0; $__LIST__ = $lists;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
			<li class="mui-table-view-cell">
				<div class="mui-slider-right mui-disabled">
					<a class="mui-btn mui-btn-red" href="#" v="<?php echo $vo['id']; ?>">删除</a>
				</div>
				<div class="mui-slider-handle" id="px" v="<?php echo $vo['id']; ?>">
					<b>
					<?php if(($vo['status'] == 0)): ?><a>未审核</a>
					  <?php elseif(($vo['back_2'] == 1)): ?><a style="color:#00aa00;">初赛</a>
					  <?php elseif(($vo['back_2'] == 3)): ?><a style="color:#00aa00;">复赛</a>
					  <?php elseif(($vo['back_2'] == 4)): ?><a style="color:#00aa00;">决赛</a>
					  <?php elseif(($vo['back_2'] == 5)): ?><a style="color:#00aa00;">省决赛</a>
					  <?php elseif(($vo['back_2'] == 2)): ?><a style="color:red;">已淘汰</a>
					<?php endif; ?>
					</b>
					<em>
					<?php echo $vo['type_name']; if(($vo['maxid'] != 0)): ?>-<?php echo $vo['maxname']; endif; if(($vo['minid'] != 0)): ?>-<?php echo $vo['minname']; endif; ?>
					</em>
					<p><em><?php echo date('Y-m-d h:s',$vo['add_time']); ?></em></p>
				</div>
			
			</li>
			<?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
		<?php if(!(empty($lists) || (($lists instanceof \think\Collection || $lists instanceof \think\Paginator ) && $lists->isEmpty()))): ?>
		<div id="getmore" style="font-size:12px;text-align: center;color:#888;padding:.25rem .24rem .4rem; clear:both">
			<a>点击加载更多</a>
		</div>         
		<?php endif; ?>
	</div>

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
		
<script type="text/javascript" charset="utf-8">
	mui(".mui-segmented-control").on('tap','a',function(){
	  var href = this.getAttribute("href");
	  location.href=href;
	})
	
	mui.init();
	(function($) {
		$('#ajax_record_return').on('tap', '.mui-btn', function(event) {
			var elem = this;
			var li = elem.parentNode.parentNode;
			var btnArray = ['确认', '取消'];
			mui.confirm('确认删除该条记录？', '通知信息', btnArray, function(e) {
				if (e.index == 0) {
					var id = elem.getAttribute("v");
					mui.ajax('<?php echo url('User/player_del'); ?>',{
						data:{id:id},
						dataType:'json',//服务器返回json格式数据
						type:'post',//HTTP请求类型
						success:function(data){
							if(data.status == 1) {
								mui.toast(data.message);
								li.parentNode.removeChild(li);
							}else{
								mui.toast(data.message);
								return;
							}
						}
					});
				} else {
					setTimeout(function() {
						$.swipeoutClose(li);
					}, 0);
				}
			});
		});
	})(mui);
	
	var  page = 1;
	mui("#getmore").on('tap','a',function(){
	 /*** ajax 提交表单 查询列表结果*/  
	  	
			page += 1;
			mui.ajax('<?php echo url('user/index_player'); ?>',{
				data:{
					is_ajax:1,
					page:page
				},
				//dataType:'json',//服务器返回json格式数据
				type:'get',//HTTP请求类型
				success:function(data){
					if(data == ''){
						document.getElementById("getmore").classList.add('mui-hidden');
					}else{
						var d = document.getElementById("ajax_record_return").innerHTML;
						document.getElementById("ajax_record_return").innerHTML= d+data;
					}	
					
				}
			});
	 });

	 mui(".mui-table-view-cell").on('tap','.mui-slider-handle',function(){
	  //获取id
	  var id = this.getAttribute("v");
	  location.href="/wap/user/player/player_id/"+id+".html";
	})

</script>

	</body>

</html>