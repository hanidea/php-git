<?php
require_once('./response.php');
require_once('./db.php');
require_once('./file.php');

$file = new File();
$data = $file->cacheData('index_cron_cache');
if($data) {
	return Response::show(200, '首页数据获取成功', $data);
} else {
	return Response::show(400, '首页数据获取失败', $data);
}
exit;

$page = isset($_GET['page']) ? $_GET['page'] : 1;
$pageSize = isset($_GET['pagesize']) ? $_GET['pagesize'] : 6;
if(!is_numeric($page) || !is_numeric($pageSize)) {
	return Response::show(401, '数据不合法');
}
$offset = ($page - 1) * $pageSize;
$sql = "select * from student where course = 'php' order by id desc limit ". $offset ." , ".$pageSize;
$cache = new File();
$videos=array();
if(!$videos=$cache->cacheData('index_cache'.$page.'-'.$pageSize)){
    //echo 1;exit;
    try {
        $connect = Db::getInstance()->connect();
    } catch(Exception $e) {
        // $e->getMessage();
        return Response::show(403, '数据库链接失败');
    }
    $result = mysqli_query($connect,$sql);

    while($video = mysqli_fetch_assoc($result)) {
        $videos[] = $video;
    }
    if($videos){
        $videos=$cache->cacheData('index_cache'.$page.'-'.$pageSize,$videos,1000);
    }

}
if($videos) {
	return Response::show(200, '首页数据获取成功', $videos);
} else {
	return Response::show(400, '首页数据获取失败', $videos);
}
