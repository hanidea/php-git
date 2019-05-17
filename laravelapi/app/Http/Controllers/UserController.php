<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redis;
use App\Common\Auth\JwtAuth;
use App\User;
use App\Http\Response\ResponseJson;
use App\Exceptions\ApiException;
use App\Common\Err\ApiErrDesc;
use Illuminate\Routing\Controller as BaseController;

class UserController extends UserBaseController{
    use ResponseJson;
    /**
     * 修改用户
     */
    public function info(){
        //  $jwtAuth = JwtAuth::getInstance();
        //  var_dump(JwtAuth::getInstance());
        //  $uid =  $jwtAuth->getUid();
        $uid = $this->uidGet();
        $user = User::where('id',$uid)->first();
        if (!$user){
            throw new ApiException(ApiErrDesc::ERR_USER_NOT_EXIST);
        }
        return $this->jsonSuccessData([
            'name'=>$user->name,
            'email'=>$user->email
        ]);
    }

    public function infoWithCache(){
        //$uid = $this->get();
        $uid = $this->uidGet();
        $cacheUserInfo = Redis::get('id:'.$uid);
        // $user = User::where('id',$uid)->first(); 
        if(!$cacheUserInfo){
            $user = User::where('id',$uid)->first();
            if(!user){
                throw new ApiException(ApiErrDesc::ERR_USER_NOT_EXIST);
            }
            Redis::setex('id:'.$uid,3600,json_encode($user->toArray()));
        }else {
            $user = json_decode($cacheUserInfo);
        }
        return $this->jsonSuccessData([
            'name'=>$user->name,
            'email'=>$user->email
        ]);

    }
}

?>