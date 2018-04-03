<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:60:"D:\wwwroot\wchhui1\wwwroot/app/admin/view/module/update.html";i:1493178136;s:58:"D:\wwwroot\wchhui1\wwwroot/app/admin/view/public/base.html";i:1493092172;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <block name="title"><title>后台管理系统</title></block>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" type="text/css" href="__STATIC__/layui/css/layui.css" />
	<link rel="stylesheet" type="text/css" href="__CSS__/admin.css" />
</head>
<body id="admin">

<div class="layui-layout-admin">
    <div class="layui-header">
        <!-- logo -->
        <a href="<?php echo url('admin/index'); ?>" class="logo layui-left"><img src="" alt="">后台管理系统</a>

        <!-- 个人 -->
        <div href="#!" class="layui-right user">
            <!-- 头像 -->
            <a href="#!" class="user-avatar">
                <img src="__IMG__/7758258.gif" alt="" class="layui-circle">
            </a>
            <!-- 头像下面显示 -->
            <div class="user-nav">
				<div class="user-nav-item">
					 <a href="<?php echo url('login/update',['id'=>\think\Session::get('admin_auth.id')]); ?>">
                        <i class="layui-icon" style="font-size: 12px;">&#xe623;</i>
                        修改密码
                    </a>
				</div>
                <div class="user-nav-item">
                    <a href="<?php echo url('login/logout'); ?>">
                        <i class="layui-icon" style="font-size: 12px;">&#xe623;</i>
                        退出
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="layui-side">
		<ul class="layui-nav layui-nav-tree">
			<li class="layui-nav-item">
			<a href="javascript:;"><i class="layui-icon">&#xe612;</i> 管理员管理</a>
			<dl class="layui-nav-child">
			  <dd><a href="<?php echo url('adm/index'); ?>"><i class="layui-icon">&#xe602;</i>管理员列表</a></dd>
			  <dd><a href="<?php echo url('juris/index'); ?>"><i class="layui-icon">&#xe602;</i>权限列表</a></dd>
			</dl>
		  </li>
		  <li class="layui-nav-item">
			<a href="javascript:;"><i class="layui-icon">&#xe613;</i> 用户管理</a>
			<dl class="layui-nav-child">
			  <dd><a href="<?php echo url('user/index'); ?>"><i class="layui-icon">&#xe602;</i>用户列表</a></dd>
			  <dd style="display:none;"><a href="<?php echo url('article/index'); ?>"><i class="layui-icon">&#xe602;</i>动态列表</a></dd>
			</dl>
		  </li>
		  <li class="layui-nav-item">
			<a href="javascript:;"><i class="layui-icon">&#xe63c;</i> 报名管理</a>
			<dl class="layui-nav-child">
			  <dd><a href="<?php echo url('player/index'); ?>"><i class="layui-icon">&#xe602;</i>报名列表</a></dd>
			  <!--<dd><a href="<?php echo url('works/index'); ?>"><i class="layui-icon">&#xe602;</i>作品列表</a></dd>-->
			</dl>
		  </li>
		  <li class="layui-nav-item">
			<a href="javascript:;"><i class="layui-icon">&#xe62e;</i> 学校管理</a>
			<dl class="layui-nav-child">
			  <dd><a href="<?php echo url('school/index'); ?>"><i class="layui-icon">&#xe602;</i>学校列表</a></dd>
			  <dd><a href="<?php echo url('articles/index'); ?>"><i class="layui-icon">&#xe602;</i>动态列表</a></dd>
			</dl>
		  </li>
		  <li class="layui-nav-item">
			<a href="javascript:;"><i class="layui-icon">&#xe611;</i> 通知管理</a>
			<dl class="layui-nav-child">
			  <dd><a href="<?php echo url('message/index'); ?>"><i class="layui-icon">&#xe602;</i>用户通知列表</a></dd>
			</dl>
		  </li>
		  <li class="layui-nav-item">
			<a href="javascript:;"><i class="layui-icon">&#xe638;</i> 资讯管理</a>
			<dl class="layui-nav-child">
			  <dd><a href="<?php echo url('news/index'); ?>"><i class="layui-icon">&#xe602;</i>资讯列表</a></dd>
			  <dd><a href="<?php echo url('broadcast/index'); ?>"><i class="layui-icon">&#xe602;</i>直播列表</a></dd>
			  <dd><a href="<?php echo url('activity/index'); ?>"><i class="layui-icon">&#xe602;</i>活动列表</a></dd>
			</dl>
		  </li>
		  <li class="layui-nav-item">
			<a href="javascript:;"><i class="layui-icon">&#xe609;</i> 分类管理</a>
			<dl class="layui-nav-child">
			  <dd><a href="<?php echo url('types/index'); ?>"><i class="layui-icon">&#xe602;</i>大赛分类列表</a></dd>
			  <dd><a href="<?php echo url('region/index'); ?>"><i class="layui-icon">&#xe602;</i>地区信息列表</a></dd>
			   <dd><a href="<?php echo url('cate/index'); ?>"><i class="layui-icon">&#xe602;</i>资讯分类列表</a></dd>
			   <dd><a href="<?php echo url('series/index'); ?>"><i class="layui-icon">&#xe602;</i>社团分类列表</a></dd>
			</dl>
		  </li>
		  <li class="layui-nav-item">
			<a href="javascript:;"><i class="layui-icon">&#xe630;</i>社团管理</a>
			<dl class="layui-nav-child">
			  <dd><a href="<?php echo url('module/index'); ?>"><i class="layui-icon">&#xe602;</i>社团列表</a></dd>
			</dl>
		  </li>
		  <li class="layui-nav-item">
			<a href="javascript:;"><i class="layui-icon">&#xe620;</i>系统管理</a>
			<dl class="layui-nav-child">
			<dd><a href="<?php echo url('maintain/index'); ?>"><i class="layui-icon">&#xe602;</i>网站信息</a></dd>
			</dl>
		  </li>
		</ul>
		
    </div>
    <div class="layui-body">
	
<div class="layui-tab layui-tab-brief" lay-filter="docDemoTabBrief">
  <ul class="layui-tab-title">
    <li onclick="javascript:window.location.href='<?php echo url('module/index'); ?>'">社团列表</li>
    <li class="layui-this">修改社团</li>
  </ul>
</div> 
<form class="layui-form" action="" method="post" id="fid" enctype="multipart/form-data">
  <input type="hidden" name="uid" id="uid" value="<?php echo $uobj['id']; ?>"> 
  <div class="layui-form-item" style="width:600px">
    <label class="layui-form-label">社团名称</label>
    <div class="layui-input-block">
      <input type="text" name="aname" lay-filter="aname" required lay-verify="required"  value="<?php echo $uobj['name']; ?>" autocomplete="off" class="layui-input">
    </div>
  </div>
  <div class="layui-form-item" style="width:600px">
    <label class="layui-form-label">图片</label>
    <div class="layui-input-block">
		<input type="file" name="img" onChange="handleFiles(this,'id_img')" style="display:none;">
      <a class="layui-btn" onclick="getfile()" style="background-color: #ffffff;color: #191616;">
		<i class="layui-icon">&#xe608;</i> 选择图片
	  </a>
    </div>
	<div class="layui-input-block" id="id_img">
		<img style="width:200px" src="<?php echo $uobj['img']; ?>"/>
    </div>
  </div>
  <div class="layui-form-item" style="width:800px">
    <label class="layui-form-label">社团分类</label>
    <div class="layui-input-inline" id="tid">
      <select name="tid" required lay-verify="required" lay-filter="pir" style="width:200px;">
		 <option value="" >请选择</option>
		 <?php if(is_array($serlist) || $serlist instanceof \think\Collection || $serlist instanceof \think\Paginator): $i = 0; $__LIST__ = $serlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sj): $mod = ($i % 2 );++$i;?>
			<option value="<?php echo $sj['id']; ?>" <?php if(($uobj['tid'] == $sj['id'])): ?>selected<?php endif; ?>><?php echo $sj['name']; ?></option>
		 <?php endforeach; endif; else: echo "" ;endif; ?>
      </select>
    </div>
  </div>
  <div class="layui-form-item" style="width:800px">
    <label class="layui-form-label">所属地区(学校)</label>
    <div class="layui-input-inline" id="pid">
      <select name="pid" required lay-verify="required" lay-filter="pir" style="width:200px;">
		 <option value="" >请选择</option>
		 <?php if(is_array($plist) || $plist instanceof \think\Collection || $plist instanceof \think\Paginator): $i = 0; $__LIST__ = $plist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pj): $mod = ($i % 2 );++$i;?>
			<option value="<?php echo $pj['id']; ?>" <?php if(($uobj['pid'] == $pj['id'])): ?>selected<?php endif; ?>><?php echo $pj['name']; ?></option>
		 <?php endforeach; endif; else: echo "" ;endif; ?>
      </select>
    </div>
	<div class="layui-input-inline" id="cid" >
      <select name="cid" required lay-verify="required" lay-filter="cit" style="width:200px;">
		 <option value="" >请选择</option>
		 <?php if(is_array($clist) || $clist instanceof \think\Collection || $clist instanceof \think\Paginator): $i = 0; $__LIST__ = $clist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cj): $mod = ($i % 2 );++$i;?>
			<option value="<?php echo $cj['id']; ?>" <?php if(($uobj['cid'] == $cj['id'])): ?>selected<?php endif; ?>><?php echo $cj['name']; ?></option>
		 <?php endforeach; endif; else: echo "" ;endif; ?>
      </select>
    </div>
	<div class="layui-input-inline" id="sid">
      <select name="sid" style="width:200px;">
		 <option value="" >请选择</option>
		 <?php if(is_array($slist) || $slist instanceof \think\Collection || $slist instanceof \think\Paginator): $i = 0; $__LIST__ = $slist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sj): $mod = ($i % 2 );++$i;?>
			<option value="<?php echo $sj['id']; ?>" <?php if(($uobj['sid'] == $sj['id'])): ?>selected<?php endif; ?>><?php echo $sj['name']; ?></option>
		 <?php endforeach; endif; else: echo "" ;endif; ?>
      </select>
    </div>
  </div>
  <div class="layui-form-item" style="width:600px">
    <label class="layui-form-label">社团简介</label>
    <div class="layui-input-block">
      <textarea name="esc" placeholder="请输入简介" value="<?php echo $uobj['esc']; ?>" class="layui-textarea"><?php echo $uobj['esc']; ?></textarea>
    </div>
  </div>
	
<div class="layui-form-item" style="width:600px">
	<label class="layui-form-label">版主账户</label>
	<div class="layui-input-block">
	  <input type="text" name="user_zhanghu" value="<?php echo $uobj['adm_name']; ?>" placeholder="请输入账户"   required lay-verify="required" autocomplete="off" class="layui-input">
	</div>
  </div>
  <div class="layui-form-item" style="width:600px">
	<label class="layui-form-label">版主姓名</label>
	<div class="layui-input-block">
	  <input type="text" name="user_name" value="<?php echo $uobj['adm_real_name']; ?>" placeholder="请输入名称"   required lay-verify="required" autocomplete="off" class="layui-input">
	</div>
  </div>
  <div class="layui-form-item" style="width:600px">
	<label class="layui-form-label">版主照片</label>
	<div class="layui-input-block">
		<input type="file" name="user_img" onChange="handleFiles(this,'user_img')" style="display:none;">
	  <a class="layui-btn" onclick="getfile1()" style="background-color: #ffffff;color: #191616;">
		<i class="layui-icon">&#xe608;</i> 选择照片
	  </a>
	</div>
	<div class="layui-input-block" id="user_img">
		<img style="width:200px" src="<?php echo $uobj['adm_real_img']; ?>"/>
	</div>
  </div>

  <div class="layui-form-item">
    <label class="layui-form-label">是否推荐</label>
    <div class="layui-input-block">
	  <input type="hidden" name="checks" id="checks" value="0">
       <input type="checkbox" name="check[]" <?php if($uobj['back_1']==1): ?>checked<?php endif; ?>  value="1" lay-filter="check1" title="首页推荐" >
	   <input type="checkbox" name="check[]" <?php if($uobj['back_2']==1): ?>checked<?php endif; ?>  value="2" lay-filter="check1" title="分类推荐" >
    </div>
  </div>
  <div class="layui-form-item">
    <label class="layui-form-label">审核状态</label>
    <div class="layui-input-block">
	  <input type="hidden" name="stch" id="stch" value="1"> 
      <input type="checkbox" lay-text="yes|no" lay-filter="stch" value="1" name="switch" <?php if($uobj['status'] == 1): ?>checked<?php endif; ?> lay-skin="switch">
    </div>
  </div>
  <div class="layui-form-item">
    <div class="layui-input-block">
      <input type="button" class="layui-btn" lay-submit lay-filter="formDemo" value="立即提交" />
      <button type="reset" class="layui-btn layui-btn-primary">重置</button>
    </div>
  </div>
</form>


    </div>
	
    <div class="layui-footer">
        <div class="layui-main">
            当前登录账号：<?php echo \think\Session::get('admin_auth.nickname'); ?> 
        </div>
    </div>

</div>

<script type="text/javascript" src="__STATIC__/layui/layui.js"></script>
<script type="text/javascript" src="__JS__/admin.js"></script>
<script type="text/javascript" src="__JS__/jquery.js"></script>

<script type="text/javascript" src="__JS__/jquery.js"></script>
<script type="text/javascript">
function getfile(){
	return  $("input[name='img']").click();
}
function getfile1(){
	return  $("input[name='user_img']").click();
}
window.URL = window.URL || window.webkitURL;
	function handleFiles(obj,dw) {
		
			fileList = document.getElementById(dw);
			var files = obj.files;
			img = new Image();
			if(window.URL){	
				img.src = window.URL.createObjectURL(files[0]); //创建一个object URL，并不是你的本地路径
				img.className = "lay-img";
				img.style="width:200px";
				img.onload = function(e) {
					window.URL.revokeObjectURL(this.src); //图片加载后，释放object URL
				}
				if(fileList.firstElementChild){
					 fileList.removeChild(fileList.firstElementChild);
				} 
				fileList.appendChild(img);
			}else if(window.FileReader){
				//opera不支持createObjectURL/revokeObjectURL方法。我们用FileReader对象来处理
				var reader = new FileReader();
				reader.readAsDataURL(files[0]);
				reader.onload = function(e){	
						img.src = this.result;
						img.className = "lay-img";
						fileList.appendChild(img);
				}
			}else
			{
				//ie
				obj.select();
				obj.blur();
				var nfile = document.selection.createRange().text;
				document.selection.empty();
				img.src = nfile;
				img.className = "lay-img";
				img.onload=function(){
				  
				}
				fileList.appendChild(img);
			}
		
	}

//Demo
layui.use(['form'], function(){
  var form = layui.form();

  form.on('radio(adi)', function(data){
	if(data.value=='2')
	{
		$("#sid").css('display','none');
	}
	else
	{
		$("#sid").css('display','block');
	}
  });  

  //监听开关
  form.on('switch(stch)', function(data){
	
	if(data.elem.checked)
	{
		$("#stch").prop('value','1');
	}else{
		$("#stch").prop('value','0');
	}

  }); 
  
  //监听下拉
  form.on('select(pir)', function(data){
		$.ajax({
			url:"<?php echo url('module/getregc'); ?>",
			type:"post",
			dataType:"json",
			data:{pid:$(data.elem).val()},
			error:function(){
				layer.msg('数据传输错误');
			},
			success:function(dd){
				$("#cid").children('select').empty();
				var aa="<option value='' selected>请选择</option>";
				$.each(dd.ls,function (key,value) {
				   aa+="<option value='"+value.id+"'>"+value.name+"</option>";
				});
				$("#cid").children('select').append(aa);
				form.render('select');

			}
		});

	}); 

	form.on('select(cit)', function(data){

			$.ajax({
				url:"<?php echo url('module/getshool'); ?>",
				type:"post",
				dataType:"json",
				data:{cid:$(data.elem).val()},
				error:function(){
					layer.msg('数据传输错误');
				},
				success:function(dd){
					$("#sid").children('select').empty();
					var aa="<option value='' selected>请选择</option>";
					$.each(dd.ls,function (key,value) {
					   aa+="<option value='"+value.id+"'>"+value.name+"</option>"; 
					});
					$("#sid").children('select').append(aa);
					 form.render('select');
				}
			});


	});


  //监听提交
  form.on('submit(formDemo)', function(data){
	if(data.field['check[]']==null){
		$("#checks").prop('value','0');
	  }else{
		$("#checks").prop('value','1');
	  }
	  $.ajax({
		url:"<?php echo url('module/cf'); ?>",
		type:"post",
		dataType:"json",
		data:{aname:data.field['aname'],aid:data.field['uid']},
		success:function(dd){
			if(dd.e>0)
			{
				layer.msg("该名称社团已存在");
				return false;
			}
			else
			{
				$("#fid").submit();
			}
		}
	  });

  });
});
</script>

</body>
</html>