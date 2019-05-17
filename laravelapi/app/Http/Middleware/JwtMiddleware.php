<?php
namespace App\Http\Middleware;
use App\Common\Auth\JwtAuth;
use App\Http\Response\ResponseJson;
use Closure;
use App\Exceptions\ApiException;
use App\Common\Err\ApiErrDesc;
class JwtMiddleware
{
    use ResponseJson;
    public function handle($request, Closure $next){
        $token = $request->input('token');
        // var_dump($token);
        // die();
        if($token){
            $jwtAuth = JwtAuth::getInstance();
            $jwtAuth->setToken($token);
            // var_dump($jwtAuth->validate());
            // die();
            if($jwtAuth->validate() && $jwtAuth->verify()){
                echo '登录成功';
                return $next($request);
            }else{
                throw new ApiException(ApiErrDesc::ERR_TOKEN);
                //echo '登录过期';
                //return redirect('/home');
                //return $this->jsonData(ApiErrDesc::ERR_PASSWORD[0],ApiErrDesc::ERR_PASSWORD[1]);
            }
        }else{
            throw new ApiException(ApiErrDesc::ERR_PARAMS);
            // echo '参数错误';
            // return redirect('/404');
            //return $this->jsonData(ApiErrDesc::ERR_PARAMS[0],ApiErrDesc::ERR_PARAMS[1]);
        }
    }
}
?>