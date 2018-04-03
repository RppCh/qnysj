<?php
// +----------------------------------------------------------------------
// | ThinkTM  [ DO WHAT YOU THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2016 All Rights Reserved.
// +----------------------------------------------------------------------
// | Author: 云飞狼舞/不知鱼
// +----------------------------------------------------------------------


namespace app\super_admin\controller;
use think\Controller;
use think\Request;

class Login extends Controller
{
	/**
     * 后台管理员登录
     */
    public function index($username = null, $password = null){
        if(Request::instance()->isPost()){
			//$adm=db('admin')->where('name',$username)->where('status',1)->find();
            if($username="admin"){ //登录成功
				if($password == 'qianming2017'){
					
					$auth = array(
						'id'              => 1,
						'name'        => $username,
						'nickname'       =>"超级管理员",
						'last_time' => time(),
					);
					session('admin_auth', $auth);
					session('admin_auth_sign', data_auth_sign($auth));
					$this->success('登录成功！', 'index/index');
				}else{
					$this->error('密码错误！');
				}
            	
            } else { //登录失败
                $this->error('此账号不存在或被冻结！');
            }
			
        } else {
            if(is_login()){
                $this->redirect('index/index');
            }else{
                return $this->fetch();
            }
        }
	}

	//修改密码
	public function update()
	{
		if(Request()->isPost())
		{
			$data=input('post.');
			//'name'=>$data['aname'],'nickname'=>$data['nickname'],
			$tt=['tel'=>$data['tel'],'up_time'=>time()];
			if($data['pwd']!="")
			{
				$tt['pwd']=md5($data['pwd']);
			}

			$e=db('admin')->where('id',$data['aid'])->update($tt);
			if($e>0)
			{
				$this->success('修改成功','index/index');
			}else{
				$this->error('修改失败');
			}
		}

		$obj=db('admin')->where('id',input('id'))->find();
		$this->assign('aobj',$obj);

		return view();
	}
	
	/* 退出登录 */
    public function logout(){
        if(is_login()){
            session(null);// 销毁session
            $this->redirect('Login/index');
        } else {
            $this->redirect('Login/index');
        }
    }

}
