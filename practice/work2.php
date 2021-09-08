
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>

<table width="326" border="1">

 
  <caption>
    商品价格表
  </caption>
  <tbody>
    <tr>
      <th width="74" scope="col">商品名称</th>
      <th width="117" scope="col">购买数量（斤）</th>
      <th width="113" scope="col">商品价格（元）</th>
    </tr>
    <tr>
      <th scope="row">香蕉</th>
      <td><?php $a=3; echo $a?></td>
      <td><?php $d=4; echo $d?></td>
    </tr>
    <tr>
      <th scope="row">苹果</th>
      <td><?php $b=5; echo $b?></td>
      <td><?php $e=6; echo $e?></td>
    </tr>
    <tr>
      <th scope="row">橘子</th>
      <td><?php $c=7;echo $c ?></td>
      <td><?php $f=8; echo $f?></td>
    </tr>
    <tr>
     <td colspan="3">
     <p class="text-center" align="right">商品折扣：<?php $g=0.8; echo $g?>
     </p>
     </td>
    </tr>
    <tr>
     <td colspan="3">
     <p class="text-center" align="right">打折后购买商品的价格：<?php
	 echo $price=($a*$d+$b*$e+$c*$f)*$g
	 ?></p>
     </td>
    </tr>
  </tbody>
</table>

</body>

</html>