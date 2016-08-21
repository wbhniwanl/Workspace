<?php
/**
 * Created by PhpStorm.
 * User: tanyunbao
 * Date: 2016/8/19
 * Time: 10:13
 */
include "../Pdo/testPdoBb.php";
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
