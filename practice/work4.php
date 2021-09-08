<html>
<head>
<meta charset="utf8">
</head>
<body>
<table border="1" align="center" width="450" height="101" cellpadding="1" cellspacing="1" >
<tr><td height="25" align="center" colspan="2">判断指定的年份是否为闰年</td></tr>
<tr>
<td width="200" height="30" >请输入一个四位数的年份：</td>
<td >
<form action="" method="post">
<input type="text" name="year">
<input type="submit" name="submit" value="计算">
</td>
</tr>
<tr>
<td colspan="2" align="center">
<?php 
if(isset($_POST['submit'])){
if($_POST['year']=="") echo "请输入年份后再提交!";
else{
$year=$_POST['year'];
$result=($year%4==0&&$year%100!=0)||($year%400==0)?$year."是闰年":$year."不是闰年";
echo $result;
}
}
?>
</td>
</tr>
</table>
</body>
</html>