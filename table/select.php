<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/30/030
 * Time: 9:10
 */
include "db.php";
error_reporting(0);
$order=$_GET["order"];
$sname=$_GET["sname"];
if(isset($order)){
    $sql="select * from student order by age $order";
    //asc 升序排列  desc 降序排列
}else if(isset($sname)){
    $sql="select * from student where name like '%$sname%' order by id";
}else{
    $sql="select * from student order by id asc";
}
$result=$db->query($sql);
$r=$result->fetch_all(MYSQLI_ASSOC);
//MYSQLI_ASSOC 查询结果是一个索引数组类型
echo json_encode($r);
//json_encode()把一个对象格式转化成字符串