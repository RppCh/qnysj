<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:64:"D:\wwwroot\qnysj1\wwwroot/app/index/view/school/school_info.html";i:1500737054;s:57:"D:\wwwroot\qnysj1\wwwroot/app/index/view/public/Base.html";i:1520394624;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $obj['name']; ?>-<?php echo \think\Session::get('gjz.title'); ?></title>

<meta name="keywords" content="<?php echo $obj['keywords']; ?>" />
<meta name="description" content="<?php echo $obj['description']; ?>" />

<link type="text/css" rel="stylesheet" href="__index__/css/css.css">
<link type="text/css" rel="stylesheet" href="__index__/css/banner.css">
<script type="text/javascript" src="__index__/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="__index__/js/banner.js"></script> 

<link rel="stylesheet" type="text/css" href="__index__/css/jquery.jslides.css" media="screen" />
<script type="text/javascript" src="__index__/js/jquery.jslides.js"></script>
<style>
.class_statistics_tabContent li{cursor:pointer;}
</style>
<link rel="stylesheet" type="text/css" href="__STATIC__/layui/css/layui.css" />




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

<div class="top_row">
	<div class="top">
    	<div class="top_logo"><img src="__index__/images/logo.jpg" /></div>

        <div class="top_login">
		<?php if(\think\Session::get('user_auth.id')!=null): ?>
		<a href="/index/usercontrol/index.html">个人中心</a> | <a href="/index/login/logout.html">退出</a></a>
		<?php else: ?>
		<a href="/index/login/reg.html">登陆</a> / <a href="/index/login/login.html">注册</a>
		<?php endif; ?>
		</div>
        <div class="top_menu">
        	<ul>
            	<li><a href="/index/index/index.html">网站首页</a></li>
                <li><a href="/index/news/index.html">新闻资讯</a></li>
                <li><a href="/index/live/index.html">赛事直播</a></li>
                <li><a href="/index/school/index.html">校区集锦</a></li>
                <li><a href="/index/media/index.html">校园媒体</a></li>
            </ul>
        </div>        
    </div>
</div>

<div class="float_ewm" style="width:200px;height:250px;" id="img_ewm">

	<img src="__index__/images/float_ewm.png" style="width:200px;height:250px;" />
	<a href="javascript:void(0);" onclick="img_end();" style="position: absolute;width: 15px;text-align: center;top: 0px;right: -15px;">X</a>

</div>
<a name="go_top"></a>
<div class="main_visual">
    <div class="flicking_con">
         <a href="#">&nbsp;</a>
         <a href="#">&nbsp;</a>
		 <a href="#">&nbsp;</a>
    </div>
  <div class="main_image">
    <ul>
      <li style="background: url(__index__/images/b_01.jpg) no-repeat center;"><a href="#">&nbsp;</a></li>
      <li style="background: url(__index__/images/b_01.jpg) no-repeat center;"><a href="#">&nbsp;</a></li>  
	  <li style="background: url(__index__/images/b_01.jpg) no-repeat center;"><a href="#">&nbsp;</a></li>
        </ul>
        <a href="javascript:;" style=" max-width:60px; " id="btn_prev"></a> 
        <a href="javascript:;" style=" max-width:60px;" id="btn_next"></a> 
    </div>
</div>
<script type="text/javascript">
        $(document).ready(function(){
          $(".main_visual").hover(function(){
            $("#btn_prev,#btn_next").fadeIn()
          },function(){
            $("#btn_prev,#btn_next").fadeOut()
          });
          
          $dragBln = false;
          
          $(".main_image").touchSlider({
            flexible : true,
            speed : 500,
            btn_prev : $("#btn_prev"),
            btn_next : $("#btn_next"),
            paging : $(".flicking_con a"),
            counter : function (e){
              $(".flicking_con a").removeClass("on").eq(e.current-1).addClass("on");
            }
          });
          
          $(".main_image").bind("mousedown", function() {
            $dragBln = false;
          });
          
          $(".main_image").bind("dragstart", function() {
            $dragBln = true;
          });
          
          $(".main_image a").click(function(){
            if($dragBln) {
              return false;
            }
          });
          
          timer = setInterval(function(){
            $("#btn_next").click();
          }, 5000);
          
          $(".main_visual").hover(function(){
            clearInterval(timer);
          },function(){
            timer = setInterval(function(){
              $("#btn_next").click();
            },5000);
          });
          
          $(".main_image").bind("touchstart",function(){
            clearInterval(timer);
          }).bind("touchend", function(){
            timer = setInterval(function(){
              $("#btn_next").click();
            }, 5000);
          });
          
        });

		function img_end(){
			$("#img_ewm").css("display","none");
		
		}
</script>




<div class="class_content">
	<div class="class_contnet_left">
    	<div class="class_nav">
        	<ul>
				<li><a href="<?php echo url('school/school_info',['school_id'=>$obj['id']]); ?>" class="<?php if($tp==1): ?>dangqian<?php endif; ?>">校友风采</a></li>
            	<li><a href="<?php echo url('school/school_info',['school_id'=>$obj['id'],'type'=>1]); ?>" class="<?php if($tp==0): ?>dangqian<?php endif; ?>">参赛选手</a></li>
				<li><a href="<?php echo url('school/school_arts',['school_id'=>$obj['id'],'type'=>1]); ?>" >校区时讯</a></li>
            </ul>
        </div>
       		<div class="class_statistics">
				<div class="class_statistics_title"><img src="__index__/images/statistics_title.jpg" /></div>
				<div class="class_statistics_tab">
					<ul>
						<li class="statistics_tab_01 dangqian">校区</li>
						<li class="statistics_tab_03">热门</li>
						<li class="statistics_tab_02">社区</li>
					</ul>
				</div>
				<div class="class_statistics_tabContent">
					<ul class="statistics_tabContent_01" style="display:block;">
						
						<?php if(is_array($list_school_user) || $list_school_user instanceof \think\Collection || $list_school_user instanceof \think\Paginator): $i = 0; $__LIST__ = $list_school_user;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
							<li onclick="javascript:location.href='/index/school/school_info.html?school_id=<?php echo $vo['sid']; ?>';"><span><?php echo $vo['ct']; ?>人</span><?php echo $vo['sname']; ?></li>
						<?php endforeach; endif; else: echo "" ;endif; ?>
						 <a href="/index/lists/index.html" class="more">查看完整排名 &gt;&gt;</a>
					</ul>
					
					<ul class="statistics_tabContent_03" style="display:none;">
						<?php if(is_array($list_player_back_3) || $list_player_back_3 instanceof \think\Collection || $list_player_back_3 instanceof \think\Paginator): $i = 0; $__LIST__ = $list_player_back_3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
							<li onclick="javascript:location.href='/index/user/index.html?user_id=<?php echo $vo['id']; ?>';"><span><?php echo $vo['back_3']; ?>人</span><?php echo $vo['user_name']; ?></li>
						<?php endforeach; endif; else: echo "" ;endif; ?>
						 <a href="/index/lists/index_player.html" class="more">查看完整排名 &gt;&gt;</a>
					</ul>

					<ul class="statistics_tabContent_02" style="display:none;">
						<?php if(is_array($list_reg_user) || $list_reg_user instanceof \think\Collection || $list_reg_user instanceof \think\Paginator): $i = 0; $__LIST__ = $list_reg_user;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
							<li onclick="javascript:location.href='/index/lists/index_cmm.html';"><span><?php echo $vo['ct']; ?>人</span><?php echo $vo['ssname']; ?></li>
						<?php endforeach; endif; else: echo "" ;endif; ?>
						 <a href="/index/lists/index_cmm.html" class="more">查看完整排名 &gt;&gt;</a>
					</ul>
				</div>
			</div>      
		</div>
    <div class="class_contnet_right">
    	<div style="width:100%; height:auto; overflow:hidden; margin-bottom:10px;"></div>
    	
    	<div class="news_slide">
<!-- 代码 开始 -->
<div id="idNum"></div>
<div id="full-screen-slider04">
	<ul id="slides04">
		<li style="background:url(<?php echo $obj['img']; ?>) no-repeat center top;background-size:cover;"><a href="#" target="_blank">01</a></li>
	</ul>
</div>
<!-- 代码 结束 -->
        </div>

        <div class="news_headlines"><?php echo $obj['esc']; ?></div>

        <div class="news_school_list">
        	<ul>
				<?php if(is_array($list_news) || $list_news instanceof \think\Collection || $list_news instanceof \think\Paginator): $i = 0; $__LIST__ = $list_news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
				<li>
					<a href="<?php echo url('school/art_info',['news_id'=>$vo['id'],'school_id'=>$obj['id']]); ?>" target="_blank"><?php echo date('Y-m-d',$vo['add_time']); ?>&nbsp;&nbsp;<?php echo mb_substr($vo['title'],0,20,'utf-8'); ?>
						... 
						[详细]</a></li>
				<?php endforeach; endif; else: echo "" ;endif; ?>
            	
            </ul>
        </div>
        <div class="live_player_more">
        	<div class="player_more_title">
            	<?php echo $list_all->render(); if($tp==0): ?>
					<a href="<?php echo url('school/school_info',['school_id'=>$obj['id'],'type'=>1]); ?>" style="color: #e32024;font-size: 18px;">参赛校友</a>
				<a href="<?php echo url('school/school_info',['school_id'=>$obj['id']]); ?>" style="color: #5a5858;font-size: 18px;padding-left: 10px;">校友风采</a>
				<?php else: ?>
					<a href="<?php echo url('school/school_info',['school_id'=>$obj['id']]); ?>" style="color: #e32024;font-size: 18px;">校友风采</a>
					<a href="<?php echo url('school/school_info',['school_id'=>$obj['id'],'type'=>1]); ?>" style="color: #5a5858;font-size: 18px;padding-left: 10px;">参赛校友</a>
				<?php endif; ?>
				
				<a href="<?php echo url('school/school_arts',['school_id'=>$obj['id'],'type'=>1]); ?>" style="color: #5a5858;font-size: 18px;padding-left: 10px;">校区时讯</a>

            </div>
            <div class="player_more_list">
            	<ul>
					<?php if(is_array($list_all_json) || $list_all_json instanceof \think\Collection || $list_all_json instanceof \think\Paginator): $i = 0; $__LIST__ = $list_all_json;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
						<li>
						<p style="position: absolute;">
                    	<a href="<?php echo url('user/index',['user_id'=>$vo['id']]); ?>">
						<?php if($vo['timg1']==1): ?>
						<img src="/public/wap/images/t0.png" width="40" />
						<?php endif; if($vo['timg2']==1): ?>
						<img src="/public/wap/images/t1.png" width="40" />
						<?php endif; ?>
						</p>
						<img src="<?php echo $vo['img']; ?>" width="164" height="164" /></a>
                        <dt style="width: 50%;">
						<a href="#">
						<?php if($tp==0): ?>支持:<?php else: ?>人气:<?php endif; ?><?php echo $vo['look']; ?>
						</a>
						</dt>
                        <dd style="overflow: hidden;text-overflow: ellipsis;white-space: nowrap;width: 50%;"><?php echo $vo['user_name']; ?></dd>
                        <dl></dl>
						</li>
					<?php endforeach; endif; else: echo "" ;endif; ?>

               	</ul>
            </div>
        </div>
    </div>
</div>




	<div class="bottom_banner">
		<div class="goto_top_row">
			<div class="goto_top"><a href="#go_top"><img src="__index__/images/goto_top.jpg" /></a></div>
		</div>
	</div>

	<div class="bottom_copy">
		<div class="bottom_copy_left" style="width: 890px;">
			主办单位：共青团湖南省委、湖南省教育厅、湖南省文化厅、湖南省青年联合会、湖南省学生联合会 组委会办公地址： 湖南省长沙市天心区湘府西路1号<br /> <br />      
			承办单位：湖南省青少年活动中心、湖南省青年就业创业基金会、湖南省青年企业家协会、《年轻人》杂志社<br /> <br />
			@共青团湖南省委 版权所有 <a href="http://www.miitbeian.gov.cn/">备案号：湘ICP备17011069号-1</a><br /> <br />
			技术支持：长沙乾明文化传播有限公司<br /> <br />
			
			<a href="http://tongji.baidu.com/web/welcome/ico?s=8e85dbf31e589d58cb1b25a97ad602be" target="_block">
				<img src="http://tongji.baidu.com/sc-web/image/icon/45.gif?__v=1497418389885" alt="">
			</a>
			
			<!--Information network dissemination license number: 19255107 Internet news information service license number: 461205036-->
		</div>
		<div class="bottom_copy_right" style="width: 120px;">
		<img style="width: 115px;" src="__index__/images/ewm.jpg" />
		<p style="text-align: center;">官方公众号</p>
		</div>
		<div class="bottom_copy_right" style="width: 120px;">
		<img style="width: 115px;" src="__index__/images/kfewm.png" />
		<p style="text-align: center;">官方客服</p>
		</div>
	</div>



<script>
window.onload=function(){
	if(GetQueryString('page')!=null)
	{
		location.href = "#idNum";
	}
}

function GetQueryString(name)
{
     var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");
     var r = window.location.search.substr(1).match(reg);
     if(r!=null)return  unescape(r[2]); return null;
}
</script>

</body>
</html>
