<?php
include 'memcached.class.php';
//add
$mem = Mem2();
$mem -> s('lists',NULL);
//all
$mem = Mem2();
    $data = $mem->s('lists');
    if($data){
        return $data;
    }else{
        //sql
        $mem->s('lists',$data,3600);
        return $data;
 }
function Mem2()
{
    $mem = new Mem();
    $server = array(
        array('127.0.0.1', 11211),
    );
    $mem->addServers($server);
    return $mem;
}