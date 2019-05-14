<?php 
/**
 * 操作mysql数据库
 * 
 */
$dbHost = '127.0.0.1';
$dbName = 'eacoophp';
$dbUser = 'root';
$dbPwd = 'root';
$id = $_GET['id'];
$dbport='8889';

// 建立连接
$mysqli = new mysqli($dbHost,$dbUser,$dbPwd,$dbName,$dbport);
if ($mysqli->connect_error){
    die('connect mysql error errno is' . $mysqli->connect_errno . ' error is ' . $mysqli->connect_error);
}

// 设置编码集
$mysqli->set_charset('utf8');

//写sql
$sql = 'select * from eacoo_attachment where id = ?';

$stmt = $mysqli->prepare($sql);

$stmt->bind_param("i",$id);

//执行sql
$stmt->execute();

// 处理
$re = $stmt->get_result();
$data = $re->fetch_all(MYSQLI_ASSOC);

//var_dump($data);
$tc = json_encode($data);
echo $tc;
// 关闭
$re->close();
$mysqli->close(); 

?>

