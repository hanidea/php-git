<?php
namespace app\admin\common;
use app\admin\model\System;
use think\Controller;
use think\Request;
use think\Session;
class Base extends Controller
{
    // protected function _initialize()
    // {
    //     parent::_initialize(); // TODO: Change the autogenerated stub

    //     //在公共控制器的初始化方法中,创建一个常量用来判断用户是否登录或已登录
    //     define('USER_ID', Session::get('user_id'));

    //     //获取网站配置信息
    //     $config = $this -> getSystem();

    //     //获取当前请求对象
    //     $request = Request::instance();

    //     //查询一下当前网站开关状态
    //     $this -> getStatus($request, $config);


    // }

    // //判断用户是否登录,在后台入口调用
    // protected function isLogin()
    // {
    //     //如果登录常量为NULL,表示没有登录
    //     if (is_null(USER_ID)) {
    //         $this -> error('未登录,无权访问~~', 'login/index');
    //     }
    // }

    // //判断用户是否登录,在登录入口调用
    // protected function alreadyLogin()
    // {
    //     //如果登录常量为NULL,表示没有登录
    //     if (!is_null(USER_ID)) {
    //         $this -> error('已经登录,不要重复登录~~', 'login/index');
    //     }
    // }

    // //获取配置信息
    // public function getSystem()
    // {
    //     return System::get(1);
    // }

    // //判断当前网站前台的开启状态
    // //$request请求对象,$config当前配置信息
    // public function getStatus($request, $config)
    // {
    //     //当前模板是不是admin
    //     if ($request -> module() !== 'admin') {

    //         //根据当前配置表中的is_close值来进行判断,如果为1关闭,0则开启,0是默认,我们什么都不做，就是开启
    //         if ($config -> is_close == 1) {
    //             $this -> error('网站已关闭');
    //             exit();
    //         }

    //     }
    // }


}