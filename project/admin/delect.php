<?php
/**
 * Created by PhpStorm.
 * User: tanyunbao
 * Date: 2016/8/18
 * Time: 23:23
 * 获取数组遍历id实现删除
 */
include "../Pdo/testPdoBb.php";
foreach ($_POST['shuJ'] as $row) {
    $test->delete('tp_notice', "id=$row");
}
header('Location: newsList.php');
