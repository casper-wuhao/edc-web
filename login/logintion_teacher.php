<?php
    //声明变量
    $name = isset($_POST['name'])?$_POST['name']:"";
    $password = isset($_POST['password'])?$_POST['password']:"";
   
    //判断用户名和密码是否为空
    if(!empty($name)&&!empty($password)) {
        //建立连接
        $conn = mysqli_connect('127.0.0.1','root','123456','edcation');
        //准备SQL语句
        $sql_select = "SELECT name,password FROM teacher WHERE name = '$name' AND password = '$password'";
        //执行SQL语句
        $ret = mysqli_query($conn,$sql_select);

        $row = mysqli_fetch_array($ret);

        //判断用户名或密码是否正确
    if($name==$row['name']&&$password==$row['password']) {
            //选中“记住我”
            if($remember=="on") {
                //创建cookie
                setcookie("wuhao", $name, time()+7*24*3600);
            }
            //开启session
            session_start();
            //创建session
            $_SESSION['teacher']=$name;
            //写入日志
            $ip = $_SERVER['REMOTE_ADDR'];
            $date = date('Y-m-d H:m:s');

            $info = sprintf("当前访问用户：%s,IP地址：%s,时间：%s \n",$username, $ip, $date);
            $sql_logs = "INSERT INTO Logs(username,ip,date) VALUES('$username','$ip','$date')";

            //日志写入文件，如实现此功能，需要创建文件目录logs
            $f = fopen('./logs/'.date('Ymd').'.log','a+');

            fwrite($f,$info);
            fclose($f);
             header("refresh:0;url=success_teacher.php");
            //关闭数据库
            mysqli_close($conn);
        }else {
            //用户名或密码错误，赋值err为1
            header("Location:login.php?err=1");
        }
        }else {
        //用户名或密码为空，赋值err为2
        header("Location:login.php?err=2");
    }

?>
