<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/30/030
 * Time: 9:10
 */
$id=$_GET["id"];
$attr=$_GET["attr"];
$val=$_GET["val"];
include "db.php";
$sql="update student set $attr='$val' where id='$id'";
$db->query($sql);
if($db->affected_rows==1){
    echo 1;
}else{
    echo 0;
}