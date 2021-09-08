<?php
header("content-type:text/html;charset:utf-8");//头信息
//1.通过$_FILES文件上传变量接收上传文件信息
$fileInfo = $_FILES['myFile'];
$filename = $fileInfo['name'];
$type = $fileInfo['type'];
$tmp_name = $fileInfo['tmp_name'];
$size = $fileInfo['size'];
$error = $fileInfo['error'];
//2.判断错误号，只有为0或者是UPLOAD_ERR_OK,没有错误发生，上传成功
if($error === UPLOAD_ERR_OK){
    //上传成功将服务器上的临时文件移动到指定目录下(两种方式)
    //move_uploaded_file($tmp_name,$destination):将服务器上的临时文件移动到指定目录下。成功返回true,否则返回false
    //copy($src,$dst):将文件拷贝到指定目录，拷贝成功返回true,否则返回false
    if(move_uploaded_file($tmp_name,"uploads/".$filename)){
        echo "文件".$filename."上传成功";
    }else{
        echo "文件".$filename."上传失败";
    }
}else{
    //匹配错误信息
    switch($error){
        case 1:
            echo '上传文件超过了php配置文件中upload_max_filesize选项的值';
            break;
        case 2:
            echo '超过了表单MAX_FILE_SIZE限制的大小';
            break;
        case 3:
            echo '文件部分被上传';
            break;
        case 4:
            echo '没有选择上传文件';
            break;
        case 6:
            echo '没有找到临时目录';
            break;
        case 7:
        case 8:
            echo '系统错误';
            break;
    }
}