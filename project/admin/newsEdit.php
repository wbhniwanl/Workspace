<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>添加新文章</title>
<link rel="stylesheet" href="styles/style.css" type="text/css" media="all">
</head>
<body>
<?php
/**
 * 插入公告信息
 */
include "../Pdo/testPdoBb.php";
if (isset($_POST['submit'])) {
    if (!empty($_POST['title'])) {
        if (!empty($_POST['content'])) {

            $title   = $_POST['title'];
            $content = $_POST['content'];
            $addman  = $_POST['addman'];
            $arr     = array('content' => "$content", 'title' => "$title", 'addman' => "$addman");
            var_dump($arr);
            $test->insert('tp_notice', $arr);
        }} else {
        echo '<script> alert("请输入标题和内容!")</script>';
    }

}
?>
<div class="container">
    <h3 class="marginbot">添加新文章<a href="newsList.php" class="sgbtn">返回文章列表</a></h3>
    <div class="mainbox">
        <form action="newsEdit.php" method="post">
            <table class="opt" >
                <tbody>
                    <tr>
                        <th>文章名称：</th>
                    </tr>
                    <tr>
                        <td>
                        <input name="title" class="txt" type="text">
                        </td>
                    </tr>
                    <tr>
                        <th>添加人：</th>
                    </tr>
                    <tr>
                        <td>
                            <input name="addman" class="txt" type="text">
                        </td>
                    </tr>
                    <tr>
                        <th>文章内容：</th>
                    </tr>
                    <tr>
                        <td><textarea  name="content"></textarea></td>
                    </tr>

                </tbody>
            </table>

            <div class="opt"><input name="submit" value=" 提 交 " class="btn" tabindex="3" type="submit"></div>
        </form>
    </div>
</div>
</body>
</html>
