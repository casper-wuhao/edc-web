<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>

<caption>学生成绩等级</caption>
<?php
   echo "<br>";
   $name="xiaoming";
   echo "姓名: $name" ;
   echo "<br>";
   
 ?>
 <?php 
     $score=78;
	 echo "学生成绩：$score";
	 echo "<br>";
	 echo "成绩等级：";
   if($score<60){
	   echo "不及格";
   }elseif($score<90){
	   echo "良好";
	   }elseif($score>90){
		   echo "优秀";
		   }?>

</body>
</html>