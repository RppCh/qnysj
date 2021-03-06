<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:65:"D:\wwwroot\wchhui1\wwwroot/app/guany_admin/view/region/index.html";i:1491626694;s:64:"D:\wwwroot\wchhui1\wwwroot/app/guany_admin/view/public/base.html";i:1494998636;}*/ ?>
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
			  <!--<dd><a href="<?php echo url('juris/index'); ?>"><i class="layui-icon">&#xe602;</i>权限列表</a></dd>-->
			</dl>
		  </li>
	
		  <li class="layui-nav-item">
			<a href="javascript:;"><i class="layui-icon">&#xe63c;</i> 报名管理</a>
			<dl class="layui-nav-child">
			  <dd><a href="<?php echo url('player/index'); ?>"><i class="layui-icon">&#xe602;</i>报名列表</a></dd>
			
			</dl>
		  </li>
		  <li class="layui-nav-item">
			<a href="javascript:;"><i class="layui-icon">&#xe62e;</i> 学校管理</a>
			<dl class="layui-nav-child">
			  <dd><a href="<?php echo url('school/index'); ?>"><i class="layui-icon">&#xe602;</i>学校列表</a></dd>
			</dl>
		  </li>

		  <li class="layui-nav-item">
			<a href="javascript:;"><i class="layui-icon">&#xe609;</i> 分类管理</a>
			<dl class="layui-nav-child">
			  <dd><a href="<?php echo url('region/index'); ?>"><i class="layui-icon">&#xe602;</i>地区信息列表</a></dd>
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
    <li class="layui-this">地区列表</li>
    <li onclick="javascript:window.location.href='<?php echo url('region/insert'); ?>'">添加地区</li>
  </ul>
</div> 
<blockquote class="layui-elem-quote layui-quote-nm">
<label class="layui-form-label">搜索：</label>
<form action="<?php echo url('',['page'=>1]); ?>" class="layui-form" method="post" >
<input type="hidden" name="page" value="1"> 
<input type="text" name="title" id="stxt" style="width:360px;float:left;" placeholder="地区名称" class="layui-input">
<input type="submit" lay-submit class="layui-btn" value="搜索" style="margin-left: 15px;" lay-filter="formDemo" ></button>
</form>
</blockquote>
<table class="layui-table" lay-even>
  <thead>
    <tr>
      <th>ID</th>
      <th>地区名称</th>
      <th>地区级别</th>
	  <th>地区状态</th>
	  <th>编辑时间</th>
      <th>操作</th>
    </tr> 
  </thead>
  <tbody>
	<?php if(is_array($alist) || $alist instanceof \think\Collection || $alist instanceof \think\Paginator): $i = 0; $__LIST__ = $alist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
    <tr>
      <th><?php echo $i; ?></th>
      <td><?php if($vo['pid'] != ''): ?>|----<?php endif; ?><?php echo $vo['name']; ?></td>
      <td><?php if($vo['pid'] == ''): ?>市级地区<?php else: ?>区级地区<?php endif; ?></td>
	  <td><?php if(($vo['status'] == 1)): ?><a>启用</a><?php else: ?><a>冻结</a><?php endif; ?></td>
	  <td><?php echo date("y-m-d h:s",$vo['up_time']); ?></td>
      <td >
		<dl class="layui-btn-group">
		  <a href="<?php echo url('region/update',['id'=>$vo['id']]); ?>" class="layui-btn">编辑</a>
		  <a onclick="del(<?php echo $vo['id']; ?>)" class="layui-btn">删除</a>
		  </dl>
	  </td>
    </tr>

    <?php endforeach; endif; else: echo "" ;endif; ?>
  </tbody>
</table>
<?php echo $alist->render(); ?>

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
layui.use(['form'], function(){
	var form=layui.form();

	form.on('submit(formDemo)', function(data){
	  if(data.field['title']=="")
	  {
		 layer.msg('搜索条件不能为空');
		 return false;
	  }
	});

});

	function del(id)
	{
			layer.confirm('删除之后不可恢复，是否继续执行？', {
			  btn: ['继续', '取消'],
			  icon: 2,
			  btn1:function(index, layero){
					$.ajax({
					url:"<?php echo url('region/deletes'); ?>",
					type:"post",
					dataType:"json",
					data:{aid:id},
					success:function(dd){
						layer.msg(dd.msg, function(){
							parent.location.reload();
						});
					}

				});
			 }
			});

	}
</script>

</body>
</html>