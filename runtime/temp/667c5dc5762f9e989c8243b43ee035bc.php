<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:55:"D:\wwwroot\wchhui1\wwwroot/app/index/view/user/rep.html";i:1496904218;}*/ ?>
<link rel="stylesheet" type="text/css" href="__STATIC__/layui/css/layui.css" />
<style>
	
	.layui-form-item span{color:#000;}

</style>

	<div class="box_rig rig" style="position: relative;">
		<div class="acti">
			<form class="layui-form layui-form-pane"  style="padding: 20px;background:#fff;border-radius:10px;" action="" method="post" id="fid" enctype="multipart/form-data">
			  <input type="hidden" name="gb_id" value="<?php echo $obj['id']; ?>" />
			  <div class="layui-form-item">
				<label class="layui-form-label">举报用户</label>
				<div class="layui-input-block">
				  <input type="text" name="user_name" placeholder="举报用户" required lay-verify="required" value="<?php echo $obj['user_name']; ?>" autocomplete="off" class="layui-input" Readonly>
				</div>
			  </div>
			   <div class="layui-form-item layui-form-text">
				<label class="layui-form-label" style="width: 100% !important;">留言内容</label>
				<div class="layui-input-block" style="margin-left: 0px !important;">
				  <textarea name="esc" value="<?php echo $obj['content']; ?>" placeholder="留言内容" class="layui-textarea" Readonly><?php echo $obj['content']; ?></textarea>
				</div>
			  </div>
			  <div class="layui-form-item layui-form-text">
				<label class="layui-form-label" style="width: 100% !important;">举报原因</label>
				<div class="layui-input-block" style="margin-left: 0px !important;">
				  <textarea name="content" placeholder="请输入举报原因" class="layui-textarea" ></textarea>
				</div>
			  </div>
              <div class="layui-form-item" style="text-align: center;">
                <input type="button" value="确认提交" class="layui-btn" key="set-mine" lay-filter="formDemo" lay-submit/>
              </div>
            </form>
			</div>
		</div>
	</div>
<script type="text/javascript" src="__STATIC__/layui/layui.js"></script>
<script type="text/javascript" src="__STATIC__/layui/admin.js"></script>
<script type="text/javascript" src="__STATIC__/layui/jquery.js"></script>
<script>
layui.use('form', function(){
  var form = layui.form();
  //监听提交
  form.on('submit(formDemo)', function(data){

	if(data.field['content']=="")
	  {
			layer.msg("原因不能为空");
	  }else{

			$.ajax({
				url:"/index/user/rep_add.html",
				type:"post",
				dataType:"json",
				data:{'gb_id':data.field['gb_id'],'content':data.field['content']},
				success:function(dd){
					$(".acti").html("<h1 style='font-size:20px;'>"+dd.msg+"</h1>");
					
				}
			})

	  }
	  if(1==2)
		$("#fid").submit();

  });
});
</script>

