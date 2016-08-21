<?php
/**
 * Created by PhpStorm.
 * User: tanyunbao
 * Date: 2016/8/18
 * Time: 23:41
 * * 获取数组遍历id实现删除
 */
include "../Pdo/testPdoBb.php";
foreach ($_POST['shuJu'] as $row) {
    $test->delete('tp_produce', "id=$row");
}
header('Location: productList.php');
