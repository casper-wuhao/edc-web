<?php
$id=$_GET["id"];

$db=new mysqli("127.0.0.1","root","123456","edcation");

!mysqli_connect_error() or die("连接失败");

$sql="delete from t_student where id='{$id}'";

$result=$db->query($sql);
if($result)
{
    header("location:studentadmin.php");
}
else
{
    echo"很抱歉，删除失败！！";
}
		

