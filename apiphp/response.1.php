<?php
// $arr = array(
//     'id'=> 1,
//     'name'=>'james'
// );
// $data ="输出json data";
// //$newData=iconv('UTF-8','GBK',$data);
// //echo $newData;
// echo json_encode($data);
class Response{
    /**
     * 按json方式输出通信数据
     * @param integer $code 状态码
     * @param string $message 提示信息
     * @param array $data 数据
     * return string
     */
    public static function json($code,$message='',$data = array()){
        if(!is_numeric($code)){
            return '';
        }
        $result = array(
            'code'=>$code,
            'message'=>$message,
            'data'=>$data
        );
        echo json_encode($result,JSON_UNESCAPED_UNICODE);
        exit;
    }

    public static function xml(){
       //header("Content-Type:text/xml");
       $xml="<?xml version='1.0' encoding='UTF-8'?>\n";
       $xml.="<root>\n";
       $xml.="<code>200</code>\n";
       $xml.="<message>数据返回成功</message>\n";
       $xml.="<data>\n";
       $xml.="<id>1</id>\n";
       $xml.="<name>James</name>\n";
       $xml.="</data>\n";
       $xml.="</root>";

       echo $xml;

    }
}
