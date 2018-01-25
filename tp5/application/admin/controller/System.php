<?php
namespace app\admin\controller;
use app\admin\common\Base;
class System extends Base
{
    public function index()
    {
        $this -> isLogin();
        return $this->view->fetch('sys_set');
    }
}
