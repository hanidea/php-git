<?php
require_once('./response.php');
$data = array(
    'id'=>1,
    'name'=>'James',
    'type'=> array(4,5,6),
    'test'=> array(1,45,67=>array(123,'tsysa')),
);
Response::show(200,'success',$data,'array');