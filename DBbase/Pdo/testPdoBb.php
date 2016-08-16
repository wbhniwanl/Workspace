<?php
/**
 * Created by PhpStorm.
 * User: tanyunbao
 * Date: 2016/8/15
 * Time: 23:00
 */
include "PdoBb.php";
$test = new PdoBb();
$test->construct("mysql:host=192.168.195.128;dbname=studentTWo", "root", "root");
$arr = array('name' => '小明');
$test->insert('zhangHao', $arr);
