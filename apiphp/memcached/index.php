<?php
//$m = new Memcached();
// $array= array(
//     array('127.0.0.1', 11211)
// );
// $m ->addServers($array);
//m->increment('num',5);
//$m->decrement('num',5);
//$m->flush();
//$m ->delete('mkey');
// $m ->add('mkey','mvalue',600);
// $m ->replace('mkey','mvalue2',600);
// $data = array(
//     'key'=>'value',
//     'key2'=>'value2',
// );
// $m->setMulti($data,0);
//$result = $m->getMulti(array('key','key2'));
// $m->deleteMulti(array('key','key2'));
// echo $m->getResultCode();
// echo $m->getResultMessage();
//var_dump($result);
//echo $m->get('num');
include 'memcached.class.php';
$w = new Mem();
$server= array(
array('127.0.0.1', 11211),
);
$w->addServers($server);
$w->s('test6','test6value',0);
echo $w->s('test6');
echo '<br/>';
$w->s('test6',NULL);
echo $w->s('test6');
echo $w->getError();