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
$dsn = 'mysql:host=127.0.0.1;port=8889;dbname=eacoophp';

try {
    //建立链接
    $pdo = new PDO($dsn,$dbUser,$dbPwd);
    
    //sql注入
    // //写sql
    // $sql = 'select * from eacoo_attachment where id =' .$id;
    // //执行sql
    // $stmt = $pdo->query($sql);
    // //处理
    // $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // var_dump($data);
    // //关闭
    // $stmt->closeCursor();
    /**
     * 占位符预处理
     */
    // $sql = 'select * from eacoo_attachment where id = ?';
    // $stmt = $pdo->prepare($sql);
    // $stmt->execute([$id]);
    // $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // var_dump($data);
    /**
     * 命名占位符预处理
     */
    // $sql = 'select * from eacoo_attachment where id = :id';
    // $stmt = $pdo->prepare($sql);
    // $stmt->bindValue(':id',$id);
    // $stmt->execute();
    // $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // var_dump($data);
    $stmt = $pdo->prepare('update eacoo_attachment set name = ? where id = ?');
    $name = '测试title2019';
    $id = 6;
    $stmt->bindParam(1,$name);
    $stmt->bindParam(2,$id);
    $stmt->execute();
    var_dump($stmt->rowCount());

} catch (PDOException $e){
    var_dump($e->getMessage());

}
?>