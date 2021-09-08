<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
echo '服务器信息提示';
echo '<br>';
echo '当前PHP版本号:',PHP_VERSION;
echo '<br>';
echo '操作系统的类型:',PHP_OS;
echo '<br>';
//调整时区
date_default_timezone_set('Asia/Shanghai');
echo '当前服务器时间:',
//获取当前服务器时间
$time= date('Y-m-d H:i:s',time());
?>
</body>
</html>