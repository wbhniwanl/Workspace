<?php
include "Workone.php";
$test = new \Tast\Practice\Workone();
/**
 * Created by PhpStorm.
 * User: tanyunbao
 * Date: 2016/8/8
 * Time: 17:28
 */
$test->chuanZhi();
echo "<pre>";
$test->maxNumber();
echo "<pre>";
var_dump($test->maxNum(5, 10, 7));
echo "<pre>";
$test->resuit();
echo "<pre>";
$int    = 2;
$result = $test->timeTwo($int);
echo "$result";
echo "<pre>";
$test->biJiao();
echo "<pre>";
$test->emptyOne();
echo "<pre>";
$count = 5;
echo $count;
echo $test->get_count();
echo $test->get_count();
echo "<pre>";
$test->exChange();
echo "<pre>";
$test->exChangeone();
echo "<pre>";
$test->arr();
echo "<pre>";
$test->arrMerge();
echo "<pre>";
//$test->arrSort();
print_r($test->arrSort($arrOne));
echo "<pre>";
$test->arrUse();
$test->chengFa();
