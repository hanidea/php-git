<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;
use Closure;

class VerifyCsrfToken extends Middleware
{
    /**
     * Indicates whether the XSRF-TOKEN cookie should be set on the response.
     *
     * @var bool
     */
    protected $addHttpCookie = true;

    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        //
        // 'laravelapi.com:8888/*', 
    ];
    // public function handle($request, Closure $next)
    // {
    //     // 使用CSRF
    //     // echo 1213;
    //     // var_dump($request, $next($request));
    //     // die();
    //     $aaa = $next($request);
    //     var_dump($aaa);
    //     die();
    //     return parent::addCookieToResponse($request, $next($request));
    //     // 禁用CSRF
    //     //return $next($request);
    // }
}
