<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>ÎÞ±êÌâÎÄµµ</title>
</head>

<body>
<table border="1" align="center" cellpadding="1" cellspacing="1">
<?php
for($v=1;$v<=9;$v++){
    echo "<tr>";
    for($x=1;$x<=$v;$x++){
        echo "<td>$v*$x=".$v*$x."</td>";
    }
    echo "</tr>";
}
?>
</table>
</body>
</html>