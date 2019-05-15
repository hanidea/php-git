<?php
/** 
* json response
*/

namespace App\Http\Response;

/** 
* Trait ResponseJson
* http://php.net/manual/zh/language.oop5.traits.php
*/

trait ResponseJson
{
    /**
     * app接口出现异常的返回
    */
    public function jsonData($code,$message,$data=[]){
        return $this->jsonResponse($code,$message,$data);
    }
    /**
     * app请求成功时候的返回
    */
    public function jsonSuccessData($data = [])
    {
        return $this->jsonResponse(0,'Success',$data);
    }
    /**
     * 返回一个json
    */
    private function jsonResponse($code, $message, $data)
    {
        
        $content = [
            'code' => $code,
            'msg'  => $message,
            'data' => $data
        ];
        return json_encode($content);
    }
}
?>