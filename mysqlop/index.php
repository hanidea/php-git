<?php
require_once 'DB.php';
ini_set("display_errors","On");
error_reporting(E_ALL);
class App
{
    private $db;
    public function __construct()
    {
        $this->db = new DB([
        'dsn' => 'mysql:host=127.0.0.1;port=8889;dbname=eacoophp',
        'user' => 'root',
        'password' => 'root',
        'charset' => 'utf8',
        ]);
    }
    /**
     * 入口方法
     */
    public function run()
    {
        try{
            $pageSize = $_GET['page_size'] ?? 10;
            $pageIndex = $_GET['page_index'];
            $data = $this->pagination(intval($pageSize),intval($pageIndex));
            $count = intval($this->getCount());
            $totalPage = ceil($count/$pageSize);
            $info = [
                'count' => $count,
                'total_page' => $totalPage,
                'data' => $data,
            ];
            return $this->returnSuccessData($info);
        } catch(Exception $e){
            return $this->returnData($e->getCode(),$e->getMessage());
        }
    }
    /**
     * 分页查询
     */
    public function pagination($pageSize,$pageIndex){
        $sql = "select id,name from eacoo_attachment where path_type='picture' limit ? offset ?";
        $limit = $pageSize;
        $offset = $pageSize * ($pageIndex - 1);
        // $data = $this->db->query($sql, [$limit,$offset]);
        $data = $this->db->query($sql, [
            [$limit,PDO::PARAM_INT],
            [$offset,PDO::PARAM_INT],
        ]);
        return $data;
    }
    /**
     * 多少页
     */
    public function getCount(){
        $sql = "select count(id) as count from eacoo_attachment where path_type='picture'";
        $data = $this->db->query($sql);
        var_dump($data);
        return $data[0]['count'];
    }
    /**
     * 返回正常接口数据
     */
    public function returnSuccessData($data)
    {
        $content = [
            'code' => 0,
            'message' => 'Success',
            'info' => $data,
        ];

        return json_encode($content);
    }
    /**
     * 返回数据
     */
    public function returnData($code,$message,$data=[]){
        $content = [
            'code' => $code,
            'message' => $message,
            'info' => $data,
        ];
        return json_encode($content);
    }
}

$app = new App();
$re = $app->run();
echo $re;
?>