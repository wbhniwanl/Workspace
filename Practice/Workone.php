<?php
namespace Tast\Practice;

/**
 * Created by PhpStorm.
 * User: tanyunbao
 * Date: 2016/8/8
 * Time: 9:42
 * oneday：今天任务
 */

class Workone
{
    /**
     * 通过传址的方法专递数值
     */
    public function chuanZhi()
    {
        $empty = '';
        $null  = null;
        $bool  = false;
        $array = array();
        $a     = 5;
        $x     = &$a;
        $b     = $a++;
        echo $b;

    }
    public function maxNumber()
    {
        /**
         * 通过最简单的语句实现一个三值的比较
         * 用到三目比较法
         * （先比较前两个，谁大选择谁）>第三个数 ？（先比较前两个，谁大选择谁）：第三个数
         * 切记比较后 :？ 后面的数的排序要和比较时数的位置一样要不会出现排错：eg:($a > $b ? $a : $b)
         */
        $a   = 1555;
        $b   = 33333;
        $c   = 999;
        $max = ($a > $b ? $a : $b) > $c ? ($a > $b ? $a : $b) : $c; //$max= ($a>$b?$a:$b);max = max>c?max:c;
        echo $max;

    }
    public function maxNum($a, $b, $c)
    {
        return (($a > $b ? $a : $b) > $c ? ($a > $b ? $a : $b) : $c);
    }

    //输出结果显示
    public function resuit()
    {
        /**
         *输出结果为4，
         * 原因：比较b于c,b大于c ,所以把取4赋值到a中
         * 如果c大于b则会取5赋值a
         * 一一对应原则
         */
        $b = 201;
        $c = 44;
        $a = $b > $c ? 4 : 5;
        echo $a;

    }
    //return的应用
    public function timeTwo($int)
    {
        /**
         * 输出为空，因为没有返回值
         * 如果加上return $int 则返回4
         */
        $int = $int * 2;
    }
    //false的简单知识
    public function biJiao()
    {
        /**
         * 输出值为相等
         * false中包含null，0，’0‘，null没一种都可以看成是false所以相等
         */
        $str1 = null;
        $str2 = false;
        echo $str1 == $str2 ? '相等' : '不相等';
        $str3 = '';
        $str4 = 0;
        //输出的值相等$str3被看出false !而false中包含整数0；
        echo $str3 == $str4 ? '相等' : '不相等';
        $str5 = 0;
        $str6 = '0';
        //输出的值相等$str5被看出false !而false中包含字符串'0'；
        echo $str5 == $str6 ? '相等' : '不相等';
    }
    //isset与empty的区别
    public function emptyOne()
    {
        /**empty — 检查一个变量是否为空
         * 判断一个变量是否被认为是空的。当一个变量并不存在，
         * 或者它的值等同于FALSE，那么它会被认为不存在。如果变量不存在的话，empty()并不会产生警告。
         * 当var存在，并且是一个非空非零的值时返回 FALSE 否则返回 TRUE.
         * 以下的被认为是空的：
        "" (空字符串)
        0 (作为整数的0)
        0.0 (作为浮点数的0)
        "0" (作为字符串的0)
        NULL
        FALSE
        array() (一个空数组)
        $var; (一个声明了，但是没有值的变量)
         * 所以前7个返回的是true
         *
         *
         *isset — 检测变量是否设置
         * 如果已经使用 unset() 释放了一个变量之后，
         * 它将不再是 isset()。若使用 isset() 测试一个被设置成 NULL 的变量，
         * 将返回 FALSE。同时要注意的是一个 NULL 字节（"\0"）并不等同于 PHP 的 NULL 常数。
         * 如果 var 存在并且值不是 NULL 则返回 TRUE，否则返回 FALSE。
         */
        $str1 = null;
        $str2 = false;
        $str3 = 0;
        $str4 = '';
        $str5 = '0';
        $str6 = null;
        $str7 = array();
        $str8 = array(array());
        echo empty($str1) ? 'ture' : 'false';
        echo empty($str2) ? 'ture' : 'false';
        echo empty($str3) ? 'ture' : 'false';
        echo empty($str4) ? 'ture' : 'false';
        echo empty($str5) ? 'ture' : 'false';
        echo empty($str6) ? 'ture' : 'false';
        echo empty($str7) ? 'ture' : 'false';
        echo empty($str8) ? 'ture' : 'false';
        echo "<pre>";
        //isset()方法
        echo isset($str1) ? 'ture' : 'false';
        echo isset($str2) ? 'ture' : 'false';
        echo isset($str3) ? 'ture' : 'false';
        echo isset($str4) ? 'ture' : 'false';
        echo isset($str5) ? 'ture' : 'false';
        echo isset($str6) ? 'ture' : 'false';
        echo isset($str7) ? 'ture' : 'false';
        echo isset($str8) ? 'ture' : 'false';

    }

    public function get_count()
    {
        /**
         * 静态型变量区别在于他只执行一次初始化！
         * 输出为5
         * 0
         * 1
         */
        static $count = 0;
        return $count++;
    }
    //不借助第三变量实现交换方法一
    public function exChange()
    {
//通过字符串交换
        $a = "霸气";
        $b = "威武";
        echo "$a.$b";
        echo "<pre>";
        $a .= $b; //$a输出是a.b
        $b = substr($a, 0, (strlen($a) - strlen($b))); //(目标数，开始位置，截取长度)
        $a = substr($a, strlen($b));
        echo "$a.$b";

    }
    //不借助第三变量实现交换方法二
    public function exChangeone()
    {
//运用str_replace函数
        $a = "霸气";
        $b = "威武";
        echo "$a.$b";
        echo "<pre>";
        $a .= $b; //$a输出是a.b
        $b = str_replace($b, "", $a); //（目标数，替换数，执行数）
        $a = str_replace($b, "", $a);
        echo "$a.$b";
//通过list 于array()结合
        list($b, $a) = array($a, $b);
        echo "$a.$b";

    }
//$arr = array('zhangsan', 'lisi', 'wangmu');用’，‘隔开转换为字符串
    //把数组与字符串来回的转化
    public function arr()
    {
        $arr = array('zhangsan', 'lisi', 'wangmu');
        print_r(implode(',', $arr)); //以逗号隔开
        $str = "1,2,3,4,5,6"; //以逗号为隔开每个为一个数组
        print_r(explode(',', $str));

    }
    //数组的重新组合
    public function arrMerge()
    {
        $arrOne = array(
            0 => array('fid' => 1, 'tid' => 1, 'name' => 'xiaoming'),
            1 => array('fid' => 1, 'tid' => 2, 'name' => 'zhangsan'),
            2 => array('fid' => 1, 'tid' => 5, 'name' => 'lisi'),
            3 => array('fid' => 1, 'tid' => 7, 'name' => 'wangmu'),
            4 => array('fid' => 3, 'tid' => 9, 'name' => 'liufen'),
        );
        /*$arrTwo = array(
        0 => array(
        0 => array('fid' => 1, 'tid' => 1, 'name' => 'xiaoming'),
        1 => array('fid' => 1, 'tid' => 2, 'name' => 'zhangsan'),
        2 => array('fid' => 1, 'tid' => 5, 'name' => 'lisi'),
        3 => array('fid' => 1, 'tid' => 7, 'name' => 'wangmu'),

        ),
        1 => array(

        0 => array('fid' => 3, 'tid' => 9, 'name' => 'liufen'),
        ),
        );*/
        $arrTmp = array(); //
        $arrTwo = array();
        foreach ($arrOne as $value) {
            $arrTmp[$value['fid']][] = array_slice($value, 1); //遍历二维
        }
        foreach ($arrTmp as $v) {
            $arrTwo[] = $v; //遍历一维

            /* if ($value2 == 1) {
        $arrTwo[$fidcount] = array_slice($value, 1);
        $fidcount++;
        $arrTwo[$value['fid']][$key] = $value;
        }*/
        }

        //  unset($arrTwo[$value]);
        print_r($arrOne);
        print_r($arrTmp);
        print_r($arrTwo);
    }

    //return $arrTress;
    //print_r($arrTwo);

//封装一个类对二维数组进行排序
    public function arrSort()
    {
        $arrOne = array(
            0 => array('fid' => 1, 'tid' => 1, 'name' => 'xiaoming'),
            1 => array('fid' => 5, 'tid' => 2, 'name' => 'zhangsan'),
            2 => array('fid' => 1, 'tid' => 5, 'name' => 'lisi'),
            3 => array('fid' => 7, 'tid' => 7, 'name' => 'wangmu'),
            4 => array('fid' => 3, 'tid' => 9, 'name' => 'liufen'),
        );
        foreach ($arrOne as $key => $value) {
            $fid[$key] = $value['fid'];
            $tid[$key] = $value['tid'];
        }
        array_multisort($tid, SORT_ASC, SORT_REGULAR, $fid, SORT_DESC, SORT_REGULAR, $arrOne);
        //把相同的放在一起fid相等的放在一起
        /*  $arrTmp = array();
        $arrTwo = array();
        foreach ($arrOne as $value) {
        $arrTmp[$value['fid']][] = $value; //遍历二维
        }
        foreach ($arrTmp as $v) {
        $arrTwo[] = $v;} //遍历一维
        //降序
        // sort($arrOne);//升序*/
        return $arrOne;
        //print_r($arrOne);
    }
//熟悉掌握数组函数并解释下面列出的函数
    public function arrUse()
    {
        //array_chunk — 将一个数组分割成多个
        $input_array = array('a', 'b', 'c', 'd', 'e');
        print_r(array_chunk($input_array, 3));
        //array_combine — 创建一个数组，用一个数组的值作为其键名，另一个数组的值作为其值
        $a = array('one', 'two');
        $b = array(1, 2, 3, 4);
        $d = array(
            0 => array('fid' => 1, 'tid' => 1, 'name' => 'hong'),
            1 => array('fid' => 1, 'tid' => 2, 'name' => 'lv'));
        $c = array_combine($b, $a);
        print_r($c);
        //array_key_exists — 检查给定的键名或索引是否存在于数组中
        if (array_key_exists('one', $a)) {
            echo "存在";
        }
        //array_keys — 返回数组中所有的键名
        print_r(array_keys($input_array));
        //array_merge() 将一个或多个数组的单元合并起来，一个数组中的值附加在前一个数组的后面。
        print_r(array_merge($a, $b));
        //array_merge_recursive — 递归地合并一个或多个数组
        $ar1 = array("color" => array("favorite" => "red"), 5);
        $ar2 = array(10, "color" => array("favorite" => "green", "blue"));
        print_r(array_merge_recursive($ar1, $ar2));
        //array_multisort — 对多个数组或多维数组进行排序,
        print_r(array_multisort($ar1, $ar2));
        var_dump($ar1);
        var_dump($ar2);
        //array_pop — 将数组最后一个单元弹出（出栈）
        print_r(array_pop($a));
        //array_push — 将一个或多个单元压入数组的末尾（入栈）
        array_push($b, "one", "two");
        print_r($b);
        //array_rand — 从数组中随机取出一个或多个单元
        $one = array_rand($b, 2);
        print_r($one);
        //array_replace — 使用传递的数组替换第一个数组的元素
        $five = array_replace($ar1, $b, $a);
        print_r($five);
        //array_shift — 将数组开头的单元移出数组
        $number = array_shift($b);
        print_r($number);
        //array_slice — 从数组中取出一段(及移除一段)
        $number1 = array_slice($b, 1);
        print_r($number1);
        //array_unique — 移除数组中重复的值（只要出现过就会被移除）
        $e       = array(1, 2, 3, 4, 5, 5, 1);
        $number2 = array_unique($e);
        print_r($number2);
        //array_unshift — 在数组开头插入一个或多个单元
        array_unshift($e, 9, 10);
        print_r($e);
        //array_values — 返回数组中所有的值
        print_r(array_values($b));
        //count — 计算数组中的单元数目或对象中的属性个数
        // in_array — 检查数组中是否存在某个值
        if (in_array("1", $a));{
            echo "yes";
        }
        //key — 从关联数组中取得键名
        //sort — 对数组排序

    }
//利用for循还输出9*9乘法表
    public function chengFa()
    {
        for ($i = 1; $i <= 9; $i++) {
            echo "<pre>";
            for ($j = 1; $j <= $i; $j++) {
                echo "$i*$j=" . $i * $j . "      ";
            }

        }

    }

}
