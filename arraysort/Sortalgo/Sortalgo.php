<?php
namespace Amdy;

/**
 * Created by PhpStorm.
 * User: tanyunbao
 * Date: 2016/8/5
 * Time: 9:43
 */
class Sortalgo
{
    /*快速排序*/
    public function kuaiSu($arr)
    {
        $count = count($arr);
        if ($count <= 1) {
            return $arr;
        }
        $one  = $arr[0];
        $left = $right = [];
        for ($i = 1; $i < $count; $i++) {
            if ($one < $arr[$i]) {
                $right[] = $arr[$i];
            } else {
                $left[] = $arr[$i];
            }
        }
        $left  = $this->kuaiSu($arr);
        $right = $this->kuaiSu($arr);
        return array_merge($left, array($one), $right);
    }
    /*插入排序*/
    public function inSert($arr)
    {
        $count = count($arr);
        for ($i = 1; $i < $count; $i++) {
            $one = $arr[$i];
            for ($j = $i - 1; $j >= 0; $j--) {
                if ($one < $arr[$j]) {
                    $arr[$j + 1] = $arr[$j];
                    $arr[$j]     = $one;
                } else {
                    break;
                }
            }
        }
        return $arr;
    }
    /*冒泡排序*/
    public function maoPao($arr)
    {
        $count = count($arr);

        for ($i = 0; $i < $count - 1; $i++) {
            for ($j = $i + 1; $j < $count; $j++) {
                if ($arr[$i] > $arr[$j]) {
                    $temp    = 0;
                    $temp    = $arr[$j];
                    $arr[$j] = $arr[$i];
                    $arr[$i] = $temp;
                }
            }
        }
        return $arr;
    }
    /*选择排序*/
    public function choiceSort($arr)
    {
        $count = count($arr);
        for ($i = 0; $i < $count - 1; $i++) {
            $min = $i;

            for ($j = $i + 1; $j < $count; $j++) {
                if ($arr[$min] > $arr[$j]) {
                    $min = $j;
                }
            }
            if ($i != $min) {
                $temp      = 0;
                $temp      = $arr[$min];
                $arr[$i]   = $temp;
                $arr[$min] = $arr[$i];
            }
        }
        return $arr;
    }
/*木桶排序*/
    public function mTong($arr)
    {
        $min = min($arr);
        $max = max($arr);

        $count = count($arr);
        //填充木桶
        $buffer = array_fill($min, $max - $min + 1, 0);
        //开始标示木桶
        for ($i = 0; $i < $count; $i++) {
            $buffer[$arr[$i]]++;
        } //根据统计桶内的次数输出桶内的数字
        for ($i = $min; $i < $max + 1; $i++) {
            for ($j = 0; $j < $buffer[$i]; $j++) {
//这一行主要用来控制输出多个数字
                $result[] = $i;
            }
        }
        return $result;
    }
}
