<?php
namespace App\Http\Controllers;
use App\Common\Auth\JwtAuth;
use Illuminate\Routing\Controller as BaseController;
use App\Http\Response\ResponseJson;

class UserBaseController extends BaseController
{
    use ResponseJson;
    public $uid;
    // public function __construct()
    // {
    //     parent::__construct();
    //     $this->uid = JwtAuth::getInstance()->getUid();
    //     var_dump(JwtAuth::getInstance());
    // }

    public function uidGet()
    {
        $this->uid = JwtAuth::getInstance()->getUid();
        return $this->uid;
    }
}

?>