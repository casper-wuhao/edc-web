<?php

header("Content-type:text/html;charset=utf-8");
require './common/function.php';

//题库id
$id = getTestId($_GET['id']);
//题库数据
$data=getDataById($id);

if(!$data){
    require './view/404.html';
    exit;
}

list($count,$score)=getDataInfo($data['data']);


//引入答题页模板
require './view/test.html';