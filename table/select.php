<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/30/030
 * Time: 9:10
 */
include "db.php";
//$sql="select * form student";
$sql="select * from student";
$result=$db->query($sql);
$r=$result->fetch_all(MYSQLI_ASSOC);
//MYSQLI_ASSOC 查询结果是一个索引数组类型
echo json_encode($r);
//json_encode()把一个对象格式转化成字符串