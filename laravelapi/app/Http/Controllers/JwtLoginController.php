<?php

namespace App\Http\Controllers;
use App\Common\Auth\JwtAuth;
use App\Common\Err\ApiErrDesc;
use App\Exceptions\ApiException;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Http\Response\ResponseJson;
use App\User;
use Illuminate\Http\Request;

class JwtLoginController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    use ResponseJson;
    public function login(Request $request){
        // $userName = $request->input('user_name');
        // $password = $request->input('pass_word');
        // // 去数据库或者缓存中验证用户
        // $jwtAuth = JwtAuth::getInstance();
        // $token = $jwtAuth->setUid(1)->encode()->getToken();

        // return $this->jsonSuccessData([
        //     'token' => $token
        // ]);
        /**
         * 用户登录
         */
        $email = $request->input('email');
        $password = $request->input('password');
        //去数据库中查询该用户信息
        $re = User::where('email', $email)->first();
        if (!$re){
            throw new ApiException(ApiErrDesc::ERR_USER_NOT_EXIST);
        }
        //password_hash
        $userPasswordHash = $re['password'];
        if (!password_verify($password,$userPasswordHash)){
            throw new ApiException(ApiErrDesc::ERR_PASSWORD);
        }

        $jwtAuth = JwtAuth::getInstance();
        $token = $jwtAuth->setUid($re['id'])->encode()->getToken();

        return $this->jsonSuccessData([
            'token' => $token
        ]);

    }
}
