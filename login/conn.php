<?php
/**
 * 此文件为数据库连接文件
 */

define('HOST','127.0.0.1');
define('USER','root');
define('PASS','123456');
define('DBNM','edcation');  //定义数据库连接常量
$conn=new mysqli(HOST,USER,PASS,DBNM);


?>