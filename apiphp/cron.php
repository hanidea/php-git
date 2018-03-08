<?php
$connect = mysqli_connect('127.0.0.1','root','root','edu','8889');
$sql = "INSERT INTO `student` (`id`, `name`, `email`, `course`, `grade`, `create_time`, `update_time`) VALUES (NULL, 'jj', '', '', '88', '1516636012', '1516636012');";
mysqli_query($connect,$sql);