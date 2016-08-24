<?php
/**
 * Created by PhpStorm.
 * User: tanyunbao
 * Date: 2016/8/22
 * Time: 10:46
 */
$test = new \Ary\Workspece\Expression();
$arr  = array("Linux RedHat9.0", "Apache2.2.9", "MySQL5.0.51", "PHP5.2.6", "LAMP", "100");
var_dump($test->reExpression($arr));
$row = "http://www.yaochufa.com/index.php";
echo "<pre>";
var_dump($test->reExpressionHttp($row));
echo "<pre>";
$arr = "<tr><td><a href=\"http://qzone.qq.com\">QQ空间</a></td><td><a href=\"http://www.ganji.com\">赶 集 网</a></td><td>";
var_dump($test->intercept($arr));
echo "<pre>";
$arr = "<tr><td><a href=”http://qzone.qq.com”>QQ空间</a></td><td><a href=\"http://www.ganji.com\">赶 集 网</a></td><td>";
var_dump($test->delectHtml($arr));
