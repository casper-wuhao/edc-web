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
</head>

<body>
<div class="login_box">
  <div class="login_l_img"><img src="images/login-img.png" /></div>
  <div class="login">
    <div class="login_logo"><img src="images/login_logo.png" /></div>
    <div class="login_name">
        <p style="font-family:'fz'">系统登录 学生</p>
    </div>
    <form method="post" action="logintion_student.php">
      <input style="font-family: 'zz'" name="name" type="text"  value="用户名" onfocus="this.value=''" onblur="if(this.value==''){this.value='用户名'}">
      <span style="font-family: 'zz'" id="password_text" onclick="this.style.display='none';document.getElementById('password').style.display='block';document.getElementById('password').focus().select();" >密码</span>
      <input name="password" type="password" id="password" style="display:none;" onblur="if(this.value==''){document.getElementById('password_text').style.display='block';this.style.display='none'};"/>
     
       <?php
                                $err=isset($_GET["err"])?$_GET["err"]:"";
                                switch($err) {
                                    case 1:
                                    echo "用户名或密码错误！";
                                    break;
                                    case 2:
                                    echo "用户名或密码不能为空！";
                                    break;
                                }
                            ?>
                             
      <input value="登录" style="width:100%;font-family: 'zz'" type="submit">
    </form>
  </div>
</div>
</body>
</html>



