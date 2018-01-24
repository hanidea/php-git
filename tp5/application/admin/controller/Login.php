<?php

namespace app\admin\controller;
use app\admin\common\Base;
use think\Request;
use app\admin\model\Admin;
use think\Session;
class Login extends Base
{
    
    //渲染登录界面
    public function index()
    {
        //
        //$this -> alreadyLogin();
        return $this->view->fetch('login');
    }

    //验证用户身份
    public function checkin(Request $request)
    {    
        //设置status
        $status=0;
        //获取表单提交的数据，并保存在变量中
        $data =$request->param();
        $userName =$data['username'];
        $password =md5($data['password']);
        //在admin数据表查询以用户为条件
        $map = ['username'=>$userName];
        $admin = Admin::get($map);
        //将用户名和密码分开验证
        //如果没有查询到该用户
        if(is_null($admin)){
            $message='用户名不正确';
        }elseif($admin->password != $password)
        {
            //设置一下密码不正确的提示信息
            $message='密码不正确';
        }else{
            //如果用户名密码通过验证，表明是合法用户
            //修改下返回信息
            $status =1;
            $message='验证通过，请点击确定进入后台';
            //更新表中登录次数与最后登录时间
            $admin->setInc('login_count');
            $admin->save(['last_time'=>time()]);
            //将用户登录的信息保存到session中，供其他控制器进行登录判断
            Session::set('user_id',$userName);
            Session::set('user_info',$data);
        }
        return['status'=>$status,'message'=>$message];

    }

    //退出登录
    public function save(Request $request)
    {
        //
    }

}
