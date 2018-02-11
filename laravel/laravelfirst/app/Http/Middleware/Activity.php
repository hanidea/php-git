<?php
namespace App\Http\Middleware;
use Closure;
class Activity
{
    public function handle($request,Closure $next)
    {
        //前置
        // if(time()<strtotime('2018-02-10'))
        // {
        //     return redirect('activity1');
        // }
        // return $next($request);
        //后置
        $response = $next($request);
        echo($response);
        echo '我是后置操作';
        return $response;
       

    }
}