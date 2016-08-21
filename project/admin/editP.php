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
 * 更改公告信息
 */
include "../Pdo/testPdoBb.php";
$productName = $_GET['productName'];
$data        = $test->query("select * from tp_notice where id=$productName");

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
                        <input name="name" class="txt" type="text" value="<?php echo $arr['title']; ?>">
                    </td>
                </tr>
                <tr>
                    <th>内容:</th>
                </tr>
                <tr>
                    <td>
                        <input name="desription" class="txt" type="text" value="<?php echo $arr['content']; ?>">
                    </td>
                </tr>
                <tr>
                    <th>公告类型</th>
                </tr>
                <tr>
                    <td>
                        <input name="type" class="txt" type="text" value="<?php echo $arr['type']; ?>">
                    </td>
                </tr>
                <tr>
                    <th>公告来源:</th>
                </tr>
                <tr>
                    <td>
                        <input name="souse" class="txt" type="text" value="<?php echo $arr['souse']; ?>">
                    </td>
                </tr>
                <tr>
                    <th>创建时间:</th>
                </tr>
                <tr>
                    <td>
                        <input name="createdate" class="txt" type="text" value="<?php echo $arr['createTime']; ?>">
                    </td>
                </tr>
                <tr>
                    <th>添加人:</th>
                </tr>
                <tr>
                    <td>
                        <input name="addman" class="txt" type="text" value="<?php echo $arr['addman']; ?>">
                    </td>
                </tr>
                </tbody>
            </table>
            <div class="opt"><input name="submit" value=" 提 交 " class="btn" tabindex="3" type="submit"></div>
        </form><?php }
;?>
    </div>
</div>
</body>
</html>
