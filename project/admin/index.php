<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>金陵贸易 后台管理系统</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link media="all" href="styles/style.css" type="text/css" rel="stylesheet">
</head>
<body scroll="no">
<?php
//设置编码为UTF-8，以避免中文乱码
header('Content-Type:text/html;charset=utf-8');
session_start();
if (isset($_SESSION['name'])) {
} else {
    session_start();
    setcookie('name', '', time() - 60);
    session_unset();
    session_destroy();
    unset($_SESSION['name']);
    header("Location: login.php");
}
?>
<table height="100%" cellspacing="0" cellpadding="0" width="100%">
    <tbody>
        <tr>
            <td colspan="2" height="69">
            	<iframe name="header" src="top.html" frameBorder="0" width="100%" scrolling="no" height="69"></iframe>
            </td>
        </tr>
        <tr>
            <td valign="top" width="160">
            <iframe name="menu" src="menu.php" frameBorder="0" width="160" scrolling="no" height="100%" target="main"></iframe>
            </td>
            <td valign="top" width="100%">

            <iframe style="overflow:visible" name="main" src="sysInfo.php" frameBorder="0" width="100%" scrolling="yes" height="100%"></iframe>
            </td>
        </tr>
    </tbody>
</table>
</body>
</html>