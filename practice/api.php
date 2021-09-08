<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
//会提供相应接口给你的，具体调用方法就相当于讲求某个链接
//如： http://localhost/operate.php?act=get_user_list&type=json
<?php
//GET方式的直接使用
$file_contents = file_get_content('http://localhost/operate.php?act=get_user_list&type=json');

//POST方式得用下面的(需要开启PHP curl支持)。
$url = 'http://localhost/operate.php?act=get_user_list&type=json';
$ch = curl_init ();
curl_setopt ( $ch, CURLOPT_URL, $url );
curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, 1 );
curl_setopt ( $ch, CURLOPT_CONNECTTIMEOUT, 10 );
curl_setopt ( $ch, CURLOPT_POST, 1 ); //启用POST提交
$file_contents = curl_exec ( $ch );
curl_close ( $ch );
?>
</body>
</html>