<?php

namespace app\admin\controller;

use app\admin\common\Base;
use think\Request;
use app\admin\model\Admin as AdminModel;
use think\Session;
class Admin extends Base
{
    //显示管理员首页
    public function index()
    {
        //1.读取admin管理员表的信息
        $admin = AdminModel::get(['username' =>'admin']);
        //2.将当前管理员的信息赋值给模版
        $this->view->assign('admin',$admin);
        //3.渲染模版
        return $this->view->fetch('admin_list');
    }

    /**
     * 保存新建的资源
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    public function save(Request $request)
    {
        //
    }

    /**
     * 显示指定的资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function read($id)
    {
        //
    }

    //渲染编辑模版
    public function edit(Request $request)
    {
         //1.读取admin管理员表的信息
         $admin = AdminModel::get($request->param('id'));
         //2.将当前管理员的信息赋值给模版
         $this->view->assign('admin',$admin);
        //3.渲染模版
        return $this->view->fetch('admin_edit');
    }

    /**
     * 保存更新的资源
     *
     * @param  \think\Request  $request
     * @param  int  $id
     * @return \think\Response
     */
    public function update(Request $request)
    {
        // if($request -> isAjax(true)){
        //     //获取提交的数据，自动过滤一下空值
        //     $data=array_filter($request->param());
        //     //设置更新条件
        //     //$map = ['is_update'=>$data['is_update']];
        //     //更新用户表
        //     $res=AdminModel::update($data,$map);
        //     //更新成功得提示信息
        //     $status=1;
        //     $message='更新成功';
        //     //更新失败
        //     if(is_null($res))
        //     {
        //         $status=0;
        //         $message='更新失败';
        //     }
        // }
        
        // return['status'=>$status,'message'=>$message];
        if ($request -> isAjax(true)){

            //获取提交的数据,自动过滤一下空值
            $data = array_filter($request->param());

            //设置更新条件
            $map = ['is_update' => 1];

            //更新用户表
            $res = AdminModel::update($data, $map);

            //更新成功的提示信息
            $status = 1;
            $message = '更新成功';

            //如果更新失败
            if (is_null($res)) {
                $status = 0;
                $message = '更新失败';
            }
        }
        return ['status'=>$status, 'message'=>$message];
    }

    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete($id)
    {
        //
    }
}
