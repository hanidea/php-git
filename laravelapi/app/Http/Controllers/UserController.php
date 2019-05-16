<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Http\Response\ResponseJson;

class UserController extends BaseController{
    use ResponseJson;
    public function info(){
        return $this->jsonSuccessData([
            'id'=> 1,
            'name' => 'James',
        ]);
    }
}

?>