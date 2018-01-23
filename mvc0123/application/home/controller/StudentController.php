<?php
/**
 * 学生模块管理CURD 增删改查
 */
class StudentController
{
    //获取所有数据
    public function listAllAction()
    {
       //实例化模型，获取数据
       $stu = new StudentModel();
       $data = $stu->getAll();
    //    echo '<pre>';
    //    print_r($data);
       require './application/home/view/student_list.php';//渲染模版
    }
    //获取单条数据
    public function infoAction($id=1)
    {
       $id=isset($_GET['id'])?$_GET['id']:$id;
       //实例化模型，获取数据
       $stu = new StudentModel();
       $data = $stu->get($id);
    //    echo '<pre>';
    //    print_r($data);
       require './application/home/view/student_info.php';//渲染模版
    }

}