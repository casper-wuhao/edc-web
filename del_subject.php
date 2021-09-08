<?php
$id=$_GET["id"];

$db=new mysqli("127.0.0.1","root","123456","edcation");

!mysqli_connect_error() or die("连接失败");

$sql="delete from t_subject where id='{$id}'";

$result=$db->query($sql);
if($result)
{
    header("location:subjectadmin.php");
}
else
{
    echo"很抱歉，删除失败！！";
}
/**
 * Created by PhpStorm.
 * User: sakura
 * Date: 2019/7/3
 * Time: 17:11
 */