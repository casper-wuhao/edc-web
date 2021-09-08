<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>ÎÞ±êÌâÎÄµµ</title>
</head>

<body>
<?php
$num = 5;//总行数
$i = 1;
while($i <= $num){
	$j = 1;
	while($j <= ($num-$i)){
		echo '&nbsp;&nbsp;';
		$j++;
	}
	$j = 1;
	while($j <= ($i*2-1)){
		echo '*';
		$j++;
	}
	echo $i;
	$i ++;
	echo '<br />';
	}
?>
</body>
</html>