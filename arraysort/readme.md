PHP常用的5中排序算法

 1.快速排序->kuaiSu()    

 2.冒泡排序-maoPao()   

 3.插入排序-inSert()   

 4.选择排序->choiceSort()

 5.木桶排序-mTong()    

排序算法类:ArraySort

测试数组排序的功能:tastsortalgo

测试方法：

<?php
include 'Sortalgo.php';
$testSalgo = new \Amdy\Sortalgo();
$arr       = array(5, 7, 1, 2, 9, 10, 15, 30, 45, 3);
var_dump($testSalgo->kuaiSu($arr));
