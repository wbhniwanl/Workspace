<?php
/**
 * Created by PhpStorm.
 * User: tanyunbao
 * Date: 2016/8/15
 * Time: 23:00
 */
include "PdoBb.php";
$test = new PdoBb();
$test->construct("mysql:host=192.168.195.128;dbname=Project", "root", "root");
/*$one = "addman='谭';";
var_dump($one);
$test->delete('tp_notice', $one);
var_dump($test->delete('tp_notice', $one));
echo "删除成功";*/
/*$arr = array('name' => '小明');
$test->insert('zhangHao', $arr);*/
