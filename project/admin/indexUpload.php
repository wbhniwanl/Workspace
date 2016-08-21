<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="styles/style.css" type="text/css" media="all">
</head>
<body>

<?php
//设置编码为UTF-8，以避免中文乱码
header('Content-Type:text/html;charset=utf-8');
?>
<div class="div1">
<form  action="FileUpload.php" method="post" enctype="multipart/form-data" style="margin-left: 50px;">



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
            <th>产品描述：</th>
        </tr>
        <tr>
            <td><textarea  name="desription"></textarea></td>
        </tr>
        <tr>
            <th>产品类型：</th>
        </tr>
        <tr>
            <td><textarea  name="type"></textarea></td>
        </tr>
        <tr>
            <th>产品来源：</th>
        </tr>
        <tr>
            <td><textarea  name="soure"></textarea></td>
        </tr>

        <tr>
            <th>图片路径1：</th>
        </tr>
        <tr>
            <td>  <input type="file" name="upload1"></td>
        </tr>
        </tbody>
    </table>

    <a href="productList.php" class="sgbtn">返回文章列表</a>
    </br>
    <input type="submit" value="上传" name="btnSubmit" style="width: 72px;margin-left: 0px;">

</form>
</div>
</body>
</html>
