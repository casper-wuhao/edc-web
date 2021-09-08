<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>添加试题</title>
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
          <li style="box-sizing: initial;-webkit-box-sizing: initial;" class="on">查看试题</li>
          <li class="" style="box-sizing: initial;-webkit-box-sizing: initial;">添加试题</li>
        </ul>
      </div>
      <div class="bd">
        <ul style="display: block;padding: 20px;">
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
                      <form class="am-form am-form-horizontal"
							action="user/addUser1Submit.action" method="post">
                        <div class="batch-type"> <span class="intro">试题分类</span>
                          <input type="hidden" class="" name="classification" value="282215">
                          <select name="type">
                            <option value="1" selected="">单选题</option>
                            <option value="2">多选题</option>
                            <option value="3">判断题</option>
                            <option value="4">填空题</option>
                            <option value="5">问答题</option>
                          </select>
                        </div>
                        <div class="am-form-group">
                          <div class="am-u-sm-9 am-u-sm-push-3">
                            <input type="submit" class="am-btn am-btn-success" value="添加" />
                          </div>
                        </div>
                        <div class="batch-input-box">
                          <div class="toolbar"> <span class="title">输入区：</span> </div>
                          <div class="textarea-group" style="width: 100%; height: 569px; display: inline-block;">
                            <div class="textarea-wrap" style="padding: 10px 0px; background-color: rgb(237, 242, 247); position: absolute; width: 39px; height: 569px; border-right: 1px solid rgb(220, 225, 231); border-top: 1px solid rgb(220, 225, 231); border-bottom: 1px solid rgb(220, 225, 231);">
                              <div class="textarea-rows" style="color: rgb(152, 154, 156); width: 39px; height: 558px; font-size: 12px; line-height: 31px; position: absolute; overflow: hidden; margin: 0px; text-align: center; font-family: MicrosoftYaHei;">
                                <div style="margin-top: 0px;">1</div>
                              </div>
                            </div>
                            <div id="text-input"  contenteditable="true" class="box fr-box fr-ltr fr-basic fr-top" style="white-space: pre; resize: none; margin-left: 39px; width: 541px; height: 100%; overflow: auto;"></div>
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
			
			</script> 
</div>
</body>
</html>