<?php
    //声明变量
    print_r($_FILES);
    $id = isset($_POST['id'])?$_POST['id']:"";
    $name = isset($_POST['name'])?$_POST['name']:"";
	
    if($password != num) {
        //建立连接
        $conn = mysqli_connect('127.0.0.1','root','123456','edcation');
       
        $sql_select="SELECT name FROM t_subject WHERE name = '$name'";
        
        $ret = mysqli_query($conn,$sql_select);
        $row = mysqli_fetch_array($ret);
        
        if($id == $row['id']) {
            //用户名已存在，显示提示信息
            header("Location:subjectadmin.php?err=1");
        } else {

            
            $sql_insert = "INSERT INTO t_subject(id,name) VALUES('$id','$name')";
            //执行SQL语句
            mysqli_query($conn,$sql_insert);
            header("Location:subjectadmin.php?err=3");
        }

        //关闭数据库
        mysqli_close($conn);
    } else {
        header("Location:subjectadmin.php?err=2");
    }

?>