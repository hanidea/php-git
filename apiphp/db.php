<?php

class Db {
	static private $_instance;
	static private $_connectSource;
	private $_dbConfig = array(
		'host' => '127.0.0.1',
		'user' => 'root',
		'password' => 'root',
        'database' => 'edu',
        'port'=>'8889',
	);

	private function __construct() {
	}

	static public function getInstance() {
		if(!(self::$_instance instanceof self)) {
			self::$_instance = new self();
		}
		return self::$_instance;
    }
    public function connect(){
        if(!self::$_connectSource){
        self::$_connectSource=mysqli_connect($this->_dbConfig['host'],$this->_dbConfig['user'],$this->_dbConfig['password'],$this->_dbConfig['database'],$this->_dbConfig['port']);
        if(!self::$_connectSource){
            //die('mysql connect error'.mysqli_error());
            throw new Exception('mysql connect error' . mysqli_error());
        }
        mysqli_select_db(self::$_connectSource,$this->_dbConfig['database']);
        mysqli_query(self::$_connectSource,$query);
    }
        return self::$_connectSource;
    }
}
/*$connect = Db::getInstance()->connect();
$sql = "select * from student";
$result = mysqli_query($connect,$sql);
echo mysqli_num_rows($result);
//var_dump($connect);*/