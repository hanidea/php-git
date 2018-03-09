<?php
$redis = new \Redis();
$redis->connect("127.0.0.1",6379);

//string
$redis->delete("string1");
$redis->set("string1","val1");
$val = $redis->get("string1");
var_dump($val);

$redis->set("string2",4);
$redis->incr("string2",2);
$val = $redis->get("string2");
var_dump($val);

//list
$redis->delete("list1");
$redis->lPush("list1","A");
$redis->lPush("list1","B");
$redis->lPush("list1","C");
$val = $redis->rPop("list1");
var_dump($val);

//set
$redis->delete("set1");
$redis->sAdd("set1","A");
$redis->sAdd("set1","B");
$redis->sAdd("set1","C");
$redis->sAdd("set1","C");
$val = $redis->sCard("set1");
var_dump($val);
$val = $redis->sMembers("set1");
var_dump($val);

//hash
$redis->delete("drive1");
$redis->hSet("drive1","name","mingming");
$redis->hSet("drive1","age",25);
$redis->hSet("drive1","gender",1);
$val=$redis->hGet("drive1","name");
var_dump($val);
$val=$redis->hmGet("drive1",array("name","age"));
var_dump($val);

//sort zset
$redis->delete("zset1");
$redis->zAdd("zset1",100,"xiaoming");
$redis->zAdd("zset1",90,"xiaohong");
$redis->zAdd("zset1",93,"xiaowang");
$val = $redis->zRange("zset1",0,-1);
var_dump($val);
$val = $redis->zRevRange("zset1",0,-1);
var_dump($val);

