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
            width: 600px;
            height: 350px;
            margin: auto;
            background: slategrey;
            margin-top: 150px;
        }
        .div1 .div11{
            float: left;
        }
    </style>
</head>
<body>
<div class="div1">
    <div class="div11">
        <?php
//设置编码为UTF-8，以避免中文乱码
header('Content-Type:text/html;charset=utf-8');
session_start();
if (isset($_SESSION['name'])) {
    echo "欢迎," . $_SESSION['name'] . "";
} else {
    session_start();
    setcookie('name', '', time() - 60);
    session_unset();
    session_destroy();
    unset($_SESSION['name']);
    header("Location: indexOne.php");

}
?><a href="one.php"? data-action="post">退出</a>
       <h1 style="margin-left: 180px;margin-top: 150px;">欢迎来到首页</h1>
    </div>
</div>
</body>
</html>
<?php
/*//设置编码为UTF-8，以避免中文乱码

header('Content-Type:text/html;charset=utf-8');
session_start();
setcookie('name', '', time() - 60);
session_unset();
session_destroy();
unset($_SESSION['name']);
header("Location: indexOne.php");

 */;?>