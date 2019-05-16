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
                echo '登录过期';
                return redirect('/home');
                //return $this->jsonData(1,'登录过期');
            }
        }else{
            echo '参数错误';
            return redirect('/404');
            //return $this->jsonData(2,'参数错误');
        }
    }
}
?>