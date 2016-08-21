<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style type="text/css">
        *{  margin: 0px;
            padding: 0px;
        }
        .div1 {
            width: 1080px;
            height: 200px;
            margin: auto;
            background: slategrey;
        }
    </style>
</head>
<body>
<?php
//设置编码为UTF-8，以避免中文乱码
header('Content-Type:text/html;charset=utf-8');
?>
<div class="div1">
<form  action="FileUpload.php" method="post" enctype="multipart/form-data" style="margin-left: 50px;">

    <input type="file" name="upload1">
    <input type="file" name="upload2"><br/><br/><br/>
    <input name="upload_file[]" type="file" />
    <input name="upload_file[]" type="file" />

    <a href="product_list.php" class="sgbtn">返回文章列表</a>
    </br>
    <input type="submit" value="上传" name="btn_submit" style="width: 72px;margin-left: 0px;">

</form>
</div>
</body>
</html>
