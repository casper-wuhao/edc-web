<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>试卷管理</title>
<link rel="stylesheet" />
<link rel="stylesheet" href="css/Site.css" />
<link rel="stylesheet" href="css/zy.all.css" />
<link rel="stylesheet" href="css/font-awesome.min.css" />
<link rel="stylesheet" href="css/amazeui.min.css" />
<link rel="stylesheet" href="css/admin.css" />
    <link href="login/images/ziti.css" rel="stylesheet" type="text/css" />
    <style>
        .smart-green {
            /*margin-left: auto;*/
            margin-right: auto;
            max-width: 500px;
            /*background: #F8F8F8;*/
            padding: 30px 30px 20px 30px;
            font: 12px Arial, Helvetica, sans-serif;
            color: #666;
            border-radius: 5px;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
        }
        .smart-green h1 {
            font: 24px "Trebuchet MS", Arial, Helvetica, sans-serif;
            padding: 20px 0px 20px 40px;
            display: block;
            margin: -30px -30px 10px -30px;
            color: #FFF;
            background: #9DC45F;
            text-shadow: 1px 1px 1px #949494;
            border-radius: 5px 5px 0px 0px;
            -webkit-border-radius: 5px 5px 0px 0px;
            -moz-border-radius: 5px 5px 0px 0px;
            border-bottom: 1px solid #89AF4C;
        }
        .smart-green h1 > span {
            display: block;
            font-size: 11px;
            color: #FFF;
        }
        .smart-green label {
            display: block;
            margin: 0px 0px 5px;
        }
        .smart-green label > span {
            float: right;
            margin-top: 10px;
            color: #5E5E5E;
        }
        .smart-green input[type="text"], .smart-green input[type="email"],
        .smart-green textarea, .smart-green select {
            color: #555;
            height: 30px;
            line-height: 15px;
            width: 100%;
            padding: 0px 0px 0px 10px;
            margin-top: 2px;
            border: 1px solid #E5E5E5;
            background: #FBFBFB;
            outline: 0;
            -webkit-box-shadow: inset 1px 1px 2px rgba(238, 238, 238, 0.2);
            box-shadow: inset 1px 1px 2px rgba(238, 238, 238, 0.2);
            font: normal 14px/14px Arial, Helvetica, sans-serif;
        }
        .smart-green textarea {
            height: 100px;
            padding-top: 10px;
        }
        .smart-green .button {
            background-color: #9DC45F;
            border-radius: 5px;
            -webkit-border-radius: 5px;
            -moz-border-border-radius: 5px;
            border: none;
            padding: 10px 25px 10px 25px;
            color: #FFF;
            text-shadow: 1px 1px 1px #949494;
        }
        .smart-green .button:hover {
            background-color: #80A24A;
        }
        .error-msg{
            color: red;
            margin-top: 10px;
        }
        .success-msg{
            color: #80A24A;
            margin-top: 10px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
<div class="dvcontent">
  <div>
    <div class="tabs">
      <div class="hd">
        <ul style="">
          <li style="box-sizing: initial;-webkit-box-sizing: initial;" class="on">查看试卷</li>
          <li class="" style="box-sizing: initial;-webkit-box-sizing: initial;">添加试卷</li>
        </ul>
      </div>
      <div class="bd">
        <ul style="display: block;padding: 20px;">
          <li>
            <div id="dv1">
              <table class="table" id="tbRecord">
                <thead>
                  <tr>
                    <th>试卷号</th>
                    <th>试卷名</th>
                    <th>删除</th>
                  </tr>
                </thead>
                <?php
        $link=mysqli_connect('127.0.0.1','root','123456','edcation')or die("数据库连接失败");//连接数据库

$sql="SELECT * FROM t_paper";
$result = mysqli_query($link,$sql);
while($row=mysqli_fetch_assoc($result))//将result结果集中查询结果取出一条

{ 
   echo"<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td><button>删除</button></td></tr>"; 
   }
?>

              </table>
            </div>
          </li>
            <form action="runoob-file-uplaod-demo/upload_file.php" method="post" class="smart-green" enctype="multipart/form-data">
                <fieldset>
                    <legend style="font-size:30px;text-align:center;font-family:'fz'">文件上传:</legend>
                    <label for="file" style="font-family:'zz';font-size:30px">文件名：</label>
                    <input style="font-size:15px" type="file" name="file" id="file"><br><br>
                    <label><span>&nbsp;</span><input style="font-family:'zz';color: orangered;text-align:right" type="submit" class="button" value="确定" /></label>
                    <input type="hidden" name="csrfmiddlewaretoken" value="SfHkbL4feo1G00sJQtbO7TtLN4c2BUwa" />
                </fieldset>
            </form>
        </ul>

        <ul class="theme-popbod dform" style="display: none;">
           <div class="am-cf admin-main" style="padding-top: 0px;">
            <div class="am-cf admin-main" style="padding-top: 0px;">
              <div class="admin-content">
                <div class="admin-content-body">
                  <div class="am-g">
                    <div class="am-u-sm-12 am-u-md-4 am-u-md-push-8"> </div>
                    <div class="am-u-sm-12 am-u-md-8 am-u-md-pull-4"
						style="padding-top: 30px;">
                      <form style="text-align: center" class="am-form am-form-horizontal"
							action="papertion.php" method="post">
                        <div class="am-form-group">
                          <label for="user-intro" class="am-u-sm-3 am-form-label"> 试卷号</label>
                          <div class="am-u-sm-9">
                            <input type="text" id="id" name="id">
                          </div>
                        </div>
                        <div class="am-form-group">
                          <label for="user-name" class="am-u-sm-3 am-form-label"> 试卷名</label>
                          <div class="am-u-sm-9">
                            <input type="text" id="name" name="name">
                          </div>
                        </div>
                         <?php
                                $err=isset($_GET["err"])?$_GET["err"]:"";
                                switch($err) {
                                    case 1:
                                    echo "用户名已存在！";
                                    break;
                                    case 2:
                                    echo "错误";
                                    break;
                                    case 3:
                                    echo "注册成功！";
                                    break;
                                }
                            ?>
                        <div class="am-form-group">
                          <div class="am-u-sm-9 am-u-sm-push-3">
                            <input type="submit" class="am-btn am-btn-success" value="添加" />
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <!-- content end --> 
            </div>
          </div>
          <!-- end-->
        </ul>
      </div>
    </div>
    <!--tab end--> 
    
  </div>
  <script src="js/jquery-1.7.2.min.js" type="text/javascript"></script> 
  <script src="js/plugs/Jqueryplugs.js" type="text/javascript"></script> 
  <script src="js/_layout.js"></script> 
  <script src="js/plugs/jquery.SuperSlide.source.js"></script> 
  <script>
				var num = 1;
				$(function() {

				 $(".tabs").slide({ trigger: "click" });

				});

	
				var btn_save = function() {
					var pid = $("#RawMaterialsTypePageId  option:selected").val();
					var name = $("#RawMaterialsTypeName").val();
					var desc = $("#RawMaterialsTypeDescription").val();
					var ramark = $("#Ramark").val();
					$.ajax({
						type: "post",
						url: "/RawMaterialsType/AddRawMaterialsType",
						data: { name: name, pid: pid, desc: desc, ramark: ramark },
						success: function(data) {
							if(data > 0) {
								$.jq_Alert({
									message: "添加成功",
									btnOktext: "确认",
									dialogModal: true,
									btnOkClick: function() {
										//$("#RawMaterialsTypeName").val("");
										//$("#RawMaterialsTypeDescription").val("");
										//$("#Ramark").val("");                           
										//page1();
										location.reload();

									}
								});
							}
						}
					});
					alert(t);
				}

				var btn_edit = function(id) {
					$.jq_Panel({
						url: "/RawMaterialsType/EditRawMaterialsType?id=" + id,
						title: "编辑分类",
						dialogModal: true,
						iframeWidth: 500,
						iframeHeight: 400
					});
				}
				var btn_delete = function(id) {
					$.jq_Confirm({
						message: "您确定要删除吗?",
						btnOkClick: function() {
							$.ajax({
								type: "post",
								url: "/RawMaterialsType/DeleteRawMaterialsType",
								data: { id: id },
								success: function(data) {
									if(data > 0) {
										$.jq_Alert({
											message: "删除成功",
											btnOkClick: function() {
												page1();
											}
										});
									}
								}
							});
						}
					});
				}
			</script> 
</div>
</body>
</html>