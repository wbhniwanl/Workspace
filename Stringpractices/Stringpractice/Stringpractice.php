<?php
namespace Arm\Stringpractices;

/**
 * Created by PhpStorm.
 * User: tanyunbao
 * Date: 2016/8/9
 * Time: 10:26
 */
class Stringpractice
{
    /**
     * 实现倒叙
     * 通过while循环没三位用一个逗号隔开
     * 在通过substr截取
     * 最后通过strrev倒叙输出
     */
    public function strRev()
    {
        $i      = 0;
        $number = '';
        $str    = "1112223334445";
        //每三位用一个逗号隔开
        while ($i <= strlen($str)) {
            $number = $number . "," . substr($str, $i, 3);
            $i      = $i + 3;
        }
        $number = substr($number, 1, strlen($number)); //第一种截取（从第一位开始截取）
        // $number = substr($number, 1);//第二种截取
        echo strrev($number);
    }

    /**
     *假设给定字符串通过截取反向输出
     */
    public function subStrrev()
    {
        $str    = "www.yaochufa.com";
        $number = '';
        $number = substr($str, 3, strlen($str)); //从第三位开始截取
        echo strrev($number);
    }

    public function rTrim($strFive, $input, $substr)
    {
        /**
         * 本题通过ucwords实现首字母的大写
         * 在通过str_replace 实现替换
         * 得到自己想要的值
         */

        $strOne   = "my_leader";
        $strTwo   = "mke_by_name";
        $strThree = '';
        $strFive  = '';
        $strThree = ucwords(str_replace("_", " ", $strOne)); //转化成大写除去_的字符串
        $strThree = str_replace(" ", "", $strThree); //去掉空格
        $strFive  = ucwords(str_replace("_", " ", $strTwo)); //转化成大写除去_的字符串
        $strFive  = str_replace(" ", "", $strFive); //去掉空格
        echo "$strThree\n$strFive";
        echo "<pre>";
        //指定插入位置前的字符串
        $startstr = "";
        for ($j = 0; $j < $input; $j++) {
            $startstr .= $strFive[$j]; //得出插入位置之前的字符串

        }

        //指定插入位置后的字符串
        $laststr = "";
        for ($j = $input; $j < strlen($strFive); $j++) {
            $laststr .= $strFive[$j]; //得出插入位置之后的字符串
        }

        //将插入位置前，要插入的，插入位置后三个字符串拼接起来
        $strFive = $startstr . $substr . $laststr;

        //返回结果
        return $strFive;

    }
    public function subStr()
    {
        /**
         * 实现字符串的截取
         */
        $mail     = "liming@yaochufa.com";
        $oneWay   = substr($mail, 7, 8);
        $oneTwo   = str_replace($mail, "yaochufa", $mail);
        $oneThree = str_replace("liming@", "", $mail);
        $oneThree = str_replace(".com", "", $oneThree);
        echo "$oneWay\n$oneTwo\n$oneThree";

    }
    public function change($arr)
    {
        /**
         * 通过for语句实现字符串的翻转
         * 先把字符串截取成一个一个单词
         * 通过for语句实现字符串的翻转
         */
        $array1 = '';
        $number = str_word_count($arr, 1);
        for ($i = count($number) - 1; $i >= 0; $i--) {
            $array1 = $array1 . "  " . $number[$i];
        }
        return $array1;
    }
    //实现截取20个汉字
    public function substrgb($str)
    {
        $shuJu = '';
        $shuJu = substr($str, 0, 60);
        return $shuJu . "....";
        /*$out      = '';
        $notHaizi = 0;
        for ($i = 0; $i < $len; $i++) {
        if ($) {

        }
        if ($out >= $len) {
        $out = $out . "....";

        }
        return $out;*/
        /*if (ord(substr($arr, $i, 1)) <= 128) {
    $notHaizi++;
    }
    if (($len % 2 == 0) && ($notHaizi % 2 == 1)) {

    }
    $one = substr($arr, 0, 90);
    if ($one) {
    }*/

    }
    public function useString()
    {
        //addslashes — 使用反斜线引用字符串
        $str = "Is your name O'reilly?";
        echo addslashes($str);
        //chunk_split — 将字符串分割成小块
        //explode将字符串变成数组
        $arr = "there is my friends";
        $one = explode(",", $arr);
        //html_entity_decode — Convert all HTML entities to their applicable characters
        //htmlentities — Convert all applicable characters to HTML entities(编码——所有适用的字符转换为HTML实体)
        //htmlspecialchars — Convert special characters to HTML entities(:- - - - - -特殊字符转换为HTML实体)
        //implode将数组转换成字符串
        $yyi    = array(5, 7, 9);
        $arrOne = implode(",", $yyi);
        //join是implode的别名；
        //Ltrim 函数删除字符左侧空格或其他预定义字符;
        //md5 — 计算字符串的 MD5 散列值
        //money_format格式为货币数量的字符串
        //number_format
        $int      = 45642135;
        $arrThree = money_format();
        $arrTwo   = number_format($int);
        echo "<pre>";
        echo $arrTwo, $arrThree;
        //rtrim函数删除字符右侧空格或其他预定义字符
        //sprintf功能与printf相同，但不会直接输出结果;
        $str = "123 test";
        $val = sprintf(" % d", $str);
        echo $val;
        echo "<pre>";
        //str_ireplace 等同//str_replace 都是用来替换
        //str_pad — 使用另一个字符串填充字符串为指定长度
        $input = "Alien";
        echo str_pad($input, 15, "____"); //(原数，长度，填充数)
        //str_repeat — 重复一个字符串
        echo str_repeat("-=", 10); //（重复数，重复次数）
        //str_ireplace 等同//str_replace 都是用来替换
        //str_shuffle — 随机打乱一个字符串
        $str      = 'abcdef';
        $shuffled = str_shuffle($str);
        echo $shuffled;
        //str_split — 将字符串转换为数组
        $str  = "Hello Friend";
        $arr1 = str_split($str);
        print_r($arr1);
        //strchr等同于strstr
        //strip_tags—从字符串中去除HTML和PHP标记
        //stripos — 查找字符串首次出现的位置（不区分大小写）
        $findme    = 'a';
        $mystring2 = 'ABC';
        $pos2      = stripos($mystring2, $findme);
        echo $pos2;
        //stristr忽略大小写版（strstr）
        //strlen 求字符串长度
        //strpos//查找字符串首次出现的位置（区分大小写）
        //strrchr — 查找指定字符在字符串中的最后一次出现
        // 获取 $PATH 中不含磁盘符号的目录
        //$dir  = substr(strrchr($PATH, ":"), 1);
        // 获取最后一行内容
        $text = "Line 1\nLine 2\nLine 3";
        $last = substr(strrchr($text, 10), 1);
        //strrev — 反转字符串
        //strripos — 计算指定字符串在目标字符串中最后一次出现的位置（不区分大小写）
        // strrpos — 计算指定字符串在目标字符串中最后一次出现的位置
        //strstr — 查找字符串的首次出现
        $email  = 'name@example.com';
        $domain = strstr($email, 'o');
        echo $domain;
        //strtolower — 将字符串转化为小写
        //strtoupper — 将字符串转化为大写
        //strtr — 转换指定字符
        $addr = "123aao";
        $addr = strtr($addr, "???", "aao");
        echo $addr;
        //substr截取字符串
        //substr_compare — 二进制安全比较字符串（从偏移位置比较指定长度）
        //substr_count — 计算字串出现的次数（重复出现的次数）
        //substr_replace — 替换字符串的子串(输入字符串，替换字符串，开始位置，距离尾部的位置)
        $var = 'ABCDEFGH:/MNRPQR/';
        echo "<pre>";
        echo substr_replace($var, 'bob', 0); //使用 “bob” 替换整个 $var。*/
        echo "<pre>";
        echo substr_replace($var, 'bob', 0, 0); //bob” 插入到 $var 的开头处
        echo "<pre>";
        echo substr_replace($var, 'bob', 10, -1); //下面两个例子使用 “bob” 替换 $var 中的 “MNRPQR
        //rtrim 删除字符串末端的空白字符
        //ucfirst//首字母大写
        //uclword每个字母大写
    }

}
