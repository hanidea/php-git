<?php
/**
 * 公共模型
 */
class Model
{
    protected $db =null; //数据库连接对象
    public $data =null;//当前数据
    public function __construct()
    {
        $this->init();
    }
    private function init()
    {
        $dbConfig =[
            'user'=>'root',
            'pass'=>'root',
            'dbname'=>'edu',
        ];
        //用自定义连接配置覆盖默认参数
        $this->db = Db::getInstance($dbConfig);
    }
    public function getAll()
    {
        $sql ="SELECT * FROM student";
        return $this->data=$this->db->fetchAll($sql);
    }
    public function get($id)
    {
    $sql ="SELECT * FROM student where id={$id}";
        return $this->data=$this->db->fetch($sql);
    }
}
