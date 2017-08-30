<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/30/030
 * Time: 9:10
 */
include "db.php";
$sql="insert into student(name,age,sex)values('','','')";
$db->query($sql);
if($db->affected_rows==1){
    echo 1;
}else{
    echo 0;
}