<?php


namespace app\api\controller\v2;

use think\Exception;

class Banner
{
    /**
     * 获取指定id的banner信息
     * @url /banner/:id
     * @http GET
     * @id banner id
     */
    public function getBanner($id){
        return 'v2 api';
    }
}