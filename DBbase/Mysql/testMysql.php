<?php
/**
 * Created by PhpStorm.
 * User: tanyunbao
 * Date: 2016/8/15
 * Time: 19:50
 */
header('content-type:text/html;charset=utf-8');
require_once 'Mysql.php';
require_once 'config.php';
$link = new Mysql();
$link->connect(DB_HOST, DB_USER, DB_PWD, DB_CHARSET, DB_DBNAME);
//var_dump($link);

;
