<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/30/030
 * Time: 9:10
 */
$id=$_GET["id"];
include "db.php";
$sql="delete from student where id='$id'";
$db->query($sql);
if($db->affected_rows==1){
    echo 1;
}else{
    echo 0;
}