<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>编辑用户资料</title>
    <link rel="stylesheet" href="styles/style.css" type="text/css" media="all">
</head>
<body>

<div class="container">
    <h3 class="marginbot">编辑用户资料<a href="userList.php" class="sgbtn">返回用户列表</a></h3>
    <div class="mainbox">
        <?php
/**
 * 更改管理员信息
 */
include "../Pdo/testPdoBb.php";
$productName = $_GET['productName'];
$data        = $test->query("select * from tp_admin where id=$productName");

foreach ($data as $arr) {
    ;?>
    </div>
    <form action="update.php" method="post">
        <table class="opt">
            <tbody>
            <tr>
                <td>
                    <input name="id" class="txt" type="hidden" value="<?php echo $arr['id']; ?>">
                </td>
            </tr>
            <tr>
                <th>标题:</th>
            </tr>
            <tr>
                <td>
                    <input name="adminLogin" class="txt" type="text" value="<?php echo $arr['adminLogin']; ?>">
                </td>
            </tr>
            <tr>
                <th>内容:</th>
            </tr>
            <tr>
                <td>
                    <input name="adminPass" class="txt" type="text" value="<?php echo $arr['adminPass']; ?>">
                </td>
            </tr>
            <tr>
                <th>公告类型</th>
            </tr>
            <tr>
                <td>
                    <input name="adminname" class="txt" type="text" value="<?php echo $arr['adminname']; ?>">
                </td>
            </tr>
            <tr>
                <th>公告来源:</th>
            </tr>
            <tr>
                <td>
                    <input name="createdate" class="txt" type="text" value="<?php echo $arr['createdate']; ?>">
                </td>
            </tr>
            <tr>
                <th>创建时间:</th>
            </tr>
            <tr>
                <td>
                    <input name="ip" class="txt" type="text" value="<?php echo $arr['ip']; ?>">
                </td>
            </tr>
            <tr>
                <th>添加人:</th>
            </tr>
            <tr>
                <td>
                    <input name="state" class="txt" type="text" value="<?php echo $arr['state']; ?>">
                </td>
            </tr>
            </tbody>
        </table>
        <div class="opt"><input name="submit2" value=" 提 交 " class="btn" tabindex="3" type="submit"></div>
    </form><?php }
;?>
</div>
</div>
</body>
</html>
