<?php
   //Connecting to Redis server on localhost 
   $redis = new Redis(); 
   $redis->connect('127.0.0.1', 6379); 
   echo "Connection to server sucessfully<br>"; 
   //$redis->set("myKey", "myValue"); 
   $redis->setex('test',10,'20180308test');
   echo "Stored in redis::<br>" .$redis->get("test"); 
?>
