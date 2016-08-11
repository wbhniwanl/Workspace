<?php
/**
 * Created by PhpStorm.
 * User: tanyunbao
 * Date: 2016/8/11
 * Time: 13:43
 */
include "Session.php";
$test = new Session();
$test->sessionDemo("demo");
$test->cookieDemo();
var_dump($_SESSION['user']);
var_dump($_COOKIE['cookiehiself']);
