<?php
require_once('./file.php');
$data = array(
    'id'=>1,
    'name'=>'James',
    'type'=> array(4,5,6),
    'test'=> array(1,45,67=>array(123,'tsysa')),
);
// $file = new File();
// if($file->cacheData('index_mk_cache',$data)){
//     echo "success";
// }else{
//     echo "error";
// }
/**删除缓存 */
$file = new File();
if($file->cacheData('index_mk_cache',null)){
    echo "success";
}else{
    echo "error";
}
/**取缓存 */
// if($file->cacheData('index_mk_cache')){
//     var_dump($file->cacheData('index_mk_cache'));exit;
//     echo "success";
// }else{
//     echo "error";
// }