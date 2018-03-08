<?php
$memcache = new Memcache;           //创建一个memcache对象
if(!$memcache->connect('127.0.0.1', 11211)){ //连接Memcached服务器
echo "Connection to server error<br>";
}; 
$memcache->set('key', 'test');        //设置一个变量到内存中，名称是key 值是test
$get_value = $memcache->get('key');   //从内存中取出key的值
echo $get_value;

