<?php
//让crontab 定时执行的脚本程序 */5****/Applications/MAMP/bin/php/php7.1.8/bin/php /Users/James/learngit/php-git/apiphp/cron.php
//获取student中的数据

require_once('./db.php');
require_once('./file.php');

$sql = "select * from student where course = 'php' order by id desc";
try {
    $connect = Db::getInstance()->connect();
} catch(Exception $e) {
    // $e->getMessage();
    file_put_contents('./logs/'.date('y-m-d').'.txt',$e->getMessage());
    return;
}
$result = mysqli_query($connect,$sql);
$videos = array();
while($video = mysqli_fetch_assoc($result)) {
    $videos[] = $video;
}
$file = new File();
if($videos){
    $file->cacheData('index_cron_cache',$videos);
}else{
    file_put_contents('./logs/'.date('y-m-d').'.txt',"没有相关数据");
    return;
}
