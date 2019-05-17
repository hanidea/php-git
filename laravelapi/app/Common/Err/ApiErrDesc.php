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

    const ERR_PARAMS = [100, 'error_param'];

    /**
     * 用户登录相关错误码
     * error_code 1001-1100
     */

    const ERR_PASSWORD = [1001, 'error_password'];
    const ERR_TOKEN = [1002, '登录过期'];
    const ERR_USER_NOT_EXIST = [1003, 'no_user'];
}


?>