<?php
namespace App\Common\Err;
class ApiErrDesc{
    /**
     * API通用错误码
     * error_code <1000
     */
    const SUCCESS = [0, 'Success'];
    const UNKNOWN_ERR = [1, '未知错误'];
    const ERR_URL = [2, '访问的接口不存在'];

    const ERR_PARAMS = [100, '参数错误'];

    /**
     * 用户登录相关错误码
     * error_code 1001-1100
     */

    const ERR_PASSWORD = [1001, '密码错误'];
    const ERR_TOKEN = [1002, '登录过期'];
}


?>