<?php

namespace App\Http\Controllers;
use App\Common\Auth\JwtAuth;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Http\Response\ResponseJson;
use Illuminate\Http\Request;

class JwtLoginController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    use ResponseJson;
    public function login(Request $request){
        $userName = $request->input('user_name');
        $password = $request->input('pass_word');
        // 去数据库或者缓存中验证用户
        $jwtAuth = JwtAuth::getInstance();
        $token = $jwtAuth->setUid(1)->encode()->getToken();

        return $this->jsonSuccessData([
            'token' => $token
        ]);
    }
}
