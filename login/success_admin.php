<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Cache-Control" content="no-cache">
<meta http-equiv="Expires" content="0">
<title>系统登录</title>
    <link href="images/ziti.css" rel="stylesheet" type="text/css" />
<link href="login.css" rel="stylesheet" type="text/css" />
    <script language='javascript' type='text/javascript'>
        var secs =5; //倒计时的秒数
        var URL ;
        function Load(url){
            URL =url;
            for(var i=secs;i>=0;i--)
            {
                window.setTimeout('doUpdate(' + i + ')', (secs-i) * 1000);
            }
        }
        function doUpdate(num)
        {
            document.getElementById('ShowDiv').innerHTML = '页面将在'+num+'秒后自动跳转' ;
            if(num == 0) { window.location=URL; }
        }

    </script>
</head>

<body>
<div class="login_box">
  <div class="login_l_img"><img src="images/login-img.png" /></div>
  <div class="login">
    <div class="login_logo"><img src="images/login_logo.png" /></div>
    <div class="login_name">
        <p style="font-family:'fz'">系统登录</p>
    </div>
    <?php
            //开启session
            session_start();
            //声明变量
            $username= isset($_SESSION['t_manager'])?$_SESSION['t_manager']:"";
            //判断session是否为空
            if(!empty($username)){
        ?>
                <p style="text-align:center;font-family:'zz'">登录成功！</p>
                <p style="text-align:center;font-family:'zz'">欢迎您！</p>
        <?php
                echo '<p style="font-size:15pt;color:dodgerblue;text-align:center;font-family:\'zz\'">'.$username.' 管理员大大<p>';
        ?>
            <br/>
                <p style="text-align: center;font-family:'zz';color: red" id="ShowDiv"></p>
                <script language="javascript">
                    Load("../admin.php");
                </script>
                <!--
                 <a href="../admin.php"><input type="submit" value="确定" style="background:rgba(20,102,237,1.00)"style="height:60px;width:100px;font-family:'zz'"></a>
                 <p>&nbsp;</p>
                 <a href="login.php"><input type="submit" value="退出" style="background:rgba(88,186,33,1.00)" style="height:60px;width:100px;font-family:'zz'"></a>
                  -->
        <?php
            }else {
            //未登录，无权访问
        ?>
            <h1>你无权访问！！！</h1>
        <?php   
            }
        ?>  
     
    </form>
  </div>
</div>
</body>
</html>

