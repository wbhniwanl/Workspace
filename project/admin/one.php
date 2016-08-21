<?php
/**
 * Created by PhpStorm.
 * User: tanyunbao
 * Date: 2016/8/11
 * Time: 17:12
 */
header('Content-Type:text/html;charset=utf-8');
session_start();
setcookie('name', '', time() - 60);
session_unset();
session_destroy();
unset($_SESSION['name']);
header("Location: login.php");
