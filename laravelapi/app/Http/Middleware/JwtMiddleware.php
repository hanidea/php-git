<?php
namespace App\Http\Middleware;

use App\Common\Auth\JwtAuth;
use App\Http\Response\ResponseJson;
use Closure;

class JwtMiddleware
{
    use ResponseJson;
    public function handle($request, Closure $next){
        $token = $request->input('token');
        if($token){
            $jwtAuth = JwtAuth::getInstance();
            $jwtAuth->setToken($token);

            if($jwtAuth->validate() && $jwtAuth->verify()){
                return $next($request);
            }else{
                return $this->jsonData(1,'登录过期');
            }
        }else{
            return $this->jsonData(2,'参数错误');
        }
    }
}
?>