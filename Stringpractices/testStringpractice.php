<?php
/**
 * Created by PhpStorm.
 * User: tanyunbao
 * Date: 2016/8/9
 * Time: 17:49
 */
include "Stringpractice.php";
$test = new \Arm\Stringpractices\Stringpractice();
$test->strRev();
echo "<pre>";
$test->subStrrev();
echo "<pre>";
$str    = "hello zhidao!";
$newStr = $test->rTrim($strFive, 1, "a");
echo $newStr;
echo "<pre>";
$test->subStr();
echo "<pre>";
$test->change();
echo "<pre>";
$arr = "There is hainan";
var_dump($test->change('There is hainan'));
echo "<pre>";
$str = "等哈就快点哈是多久啊客户端卡机的哈开始觉得哈时刻记得哈的卡号的剪卡后打开金山导航刷卡机的";
var_dump($test->substrgb($str));
$test->useString();
