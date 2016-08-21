<?php
/**
/**
 * Created by PhpStorm.
 * User: tanyunbao
 * Date: 2016/8/19
 * Time: 10:13
 * 判断获取id修改信息
 */
include "../Pdo/testPdoBb.php";
if (isset($_POST['submit1'])) {
    $id           = $_POST['id'];
    $name         = $_POST['name'];
    $desription   = $_POST['desription'];
    $type         = $_POST['type'];
    $addPeople    = $_POST['addPeople'];
    $soure        = $_POST['soure'];
    $productImage = $_POST['productImage'];
    $upload1      = 'images/' . $_FILES['upload1']['name']; //获取他的文件的name数组的值
    $arr          = array('name' => "$name", 'desription' => "$desription", 'type' => "$type", 'addPeople' => "$addPeople", 'souse' => "$soure", 'productImage' => "$productImage");
    $test->update('tp_produce', $arr, "id=$id");
}
if (isset($_POST['submit'])) {
    $id         = $_POST['id'];
    $name       = $_POST['name'];
    $desription = $_POST['desription'];
    $type       = $_POST['type'];
    $addPeople  = $_POST['addman'];
    $soure      = $_POST['soure'];
    $createdate = $_POST['createdate'];
    $upload1    = 'images/' . $_FILES['upload1']['name']; //获取他的文件的name数组的值
    $arr        = array('title' => "$name", 'content' => "$desription", 'type' => "$type", 'addman' => "$addPeople", 'souse' => "$soure", 'createTime' => "$createdate");
    $test->update('tp_notice', $arr, "id=$id");
}
if (isset($_POST['submit2'])) {
    $id         = $_POST['id'];
    $adminname  = $_POST['adminname'];
    $createdate = $_POST['createdate'];
    $ip         = $_POST['ip'];
    $state      = $_POST['state'];
    $adminLogin = $_POST['adminLogin'];
    $adminPass  = $_POST['adminPass'];
    //$upload1    = 'images/' . $_FILES['upload1']['name']; //获取他的文件的name数组的值
    $arr = array('adminLogin' => "$adminLogin", 'adminPass' => "$adminPass", 'adminname' => "$adminname", 'createdate' => "$createdate", 'ip' => "$ip", 'state' => "$state");
    $test->update('tp_admin', $arr, "id=$id");
}
