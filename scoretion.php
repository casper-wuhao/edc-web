<?php
    //声明变量
    print_r($_FILES);
    $number = isset($_POST['number'])?$_POST['number']:"";
	$name = isset($_POST['name'])?$_POST['name']:"";
	$subject = isset($_POST['subject'])?$_POST['subject']:"";
    $score = isset($_POST['score'])?$_POST['score']:"";
    
    if($score != num) {
        //建立连接
        $conn = mysqli_connect('127.0.0.1','root','123456','edcation');
       
        $sql_select="SELECT name FROM t_score WHERE name = '$name'";
        
        $ret = mysqli_query($conn,$sql_select);
        $row = mysqli_fetch_array($ret);
        
        if($number == $row['number']) {
            //用户名已存在，显示提示信息
            header("Location:scoreadmin.php?err=1");
        } else {

            
            $sql_insert = "INSERT INTO t_score(number,name,subject,score) VALUES('$number','$name','$subject','$score')";
            //执行SQL语句
            mysqli_query($conn,$sql_insert);
            header("Location:scoreadmin.php?err=3");
        }

        //关闭数据库
        mysqli_close($conn);
    } else {
        header("Location:scoreadmin.php?err=2");
    }

?>