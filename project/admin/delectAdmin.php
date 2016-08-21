<?php
/**
 * Created by PhpStorm.
 * User: tanyunbao
 * Date: 2016/8/19
 * Time: 8:58
 * * 获取数组遍历id实现删除
 */
include "../Pdo/testPdoBb.php";
foreach ($_POST['row'] as $row) {
    $test->delete('tp_admin', "id=$row");
}
header('Location: userList.php');
