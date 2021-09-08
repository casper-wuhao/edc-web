<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>成绩查询</title>
<link rel="stylesheet" />
<link rel="stylesheet" href="css/Site.css" />
<link rel="stylesheet" href="css/zy.all.css" />
<link rel="stylesheet" href="css/font-awesome.min.css" />
<link rel="stylesheet" href="css/amazeui.min.css" />
<link rel="stylesheet" href="css/admin.css" />
</head>
<body>
<div class="dvcontent">
  <div>
    <div class="tabs">
      <div class="hd">
        <ul style="">
          <li style="box-sizing: initial;-webkit-box-sizing: initial;" class="on">查看成绩</li>
          <li class="" style="box-sizing: initial;-webkit-box-sizing: initial;">添加成绩</li>
        </ul>
      </div>
      <div class="bd">
        <ul style="display: block;padding: 20px;">
          <li> 
            <!--分页显示角色信息 start-->
            <div id="dv1">
              <table class="table" id="tbRecord">
    <tr>
        <td>学号</td>
        <td>姓名</td>
        <td>学科</td>
        <td>成绩</td>
        <td>操作</td>
    </tr>
     <?php
        $link=mysqli_connect('127.0.0.1','root','123456','edcation')or die("数据库连接失败");//连接数据库

$sql="SELECT * FROM t_score";
$result = mysqli_query($link,$sql);
while($row=mysqli_fetch_assoc($result))//将result结果集中查询结果取出一条

{ 
   echo"<tr><td>".$row["number"]."</td><td>".$row["name"]."</td><td>".$row["subject"]."</td><td>".$row["score"]."</td><td><button>删除</button></td></tr>"; 
   }
?>
</table>

            </div>
          </li>
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
							action="scoretion.php" method="post" enctype="multipart/form-data">
                        <div class="am-form-group">
                          <label for="user-name" class="am-u-sm-3 am-form-label"> 学号</label>
                          <div class="am-u-sm-9">
                            <input type="text" id="number" name="number">
                          </div>
                        </div>
						  <div class="am-form-group">
                          <label for="user-name" class="am-u-sm-3 am-form-label"> 姓名</label>
                          <div class="am-u-sm-9">
                            <input type="text" id="name" name="name">
                          </div>
                        </div>
                         <div class="am-form-group">
                          <label for="user-name" class="am-u-sm-3 am-form-label"> 学科</label>
                          <div class="am-u-sm-9">
                            <input type="text" id="subject" name="subject">
                          </div>
                        </div>
                        <div class="am-form-group">
                          <label for="user-intro" class="am-u-sm-3 am-form-label"> 成绩</label>
                          <div class="am-u-sm-9">
                            <input type="text" id="score" name="score">
                          </div>
                        </div>
                         <?php
                                $err=isset($_GET["err"])?$_GET["err"]:"";
                                switch($err) {
                                    case 1:
                                    echo "成绩已存在！";
                                    break;
                                    case 2:
                                    echo "错误";
                                    break;
                                    case 3:
                                    echo "添加成功！";
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