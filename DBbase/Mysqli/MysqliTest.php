<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 2016/8/15
 * Time: 16:57
 */
include "./Mysqli.php";
$mysql = new \Ycf\Lession\MysqliDb\Mysqli();
$mysql->connect('192.168.195.128', 'root', 'root', 'studentTWo');
$arr = array('name' => 'timmmm');
echo 'affected rows:' . $mysql->insert($arr, 'zhangHao');
//$arr1 = array('id' => 1, 'name' => 'tisdfsdf');
//echo $mysql->update($arr1, 'test');
//echo 'delete rows:' . $mysql->delete('test', 'id=1');
//var_dump($mysql->fetchOne('select * from test'))
//var_dump($mysql->fetchAll('select * from test'));
//echo $mysql->getTotalRows('select * from test');
//echo $mysql->freeResult();
//echo $mysql->close();
