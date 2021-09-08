<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>随机生成扑克</title>
    <style>
        div{margin:15px 0}
        font{border:1px solid #ccc;padding:6px 3px;margin-right:10px}
    </style>
    <?php
// 建立数组保存的牌组池
    $num = ['A', '2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K'];
    $tuan = ['♥' => 'red', '♦' => 'red', '♠' => 'black', '♣' => 'black'];
    //生成扑克牌
    $puke = [];
    foreach ($tuan as $tuankey => $tuanvalue) {
    foreach ($num as $value) {
    $puke[] = "<font style='color:$tuanvalue'> {$value} {$tuankey}</font>";
    }
    }
    shuffle($puke);   //打乱数组
    ?>

</head>
<body>
<div>玩家A 牌组</div>
<?php for ($i = 0; $i < 10; ++$i) {
    echo current($puke);
    next($puke);
} ?>
<div>玩家B 牌组</div>
<?php for ($i = 0; $i < 10; ++$i) {
    echo current($puke);
    next($puke);
} ?>
<div>玩家C 牌组</div>
<?php for ($i = 0; $i < 10; ++$i) {
    echo current($puke);
    next($puke);
} ?>

</body>
</html>