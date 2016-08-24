<?php
namespace Ary\Workspece;

/**
 * Created by PhpStorm.
 * User: tanyunbao
 * Date: 2016/8/21
 * Time: 13:53
 * 实现正则的基本操作
 */
class Expression
{
    public function reExpression($arr)
    {
        /*
         * 以字母开头与数字结尾中间不含空格
         */
        foreach ($arr as $row) {
            if (preg_match('/^[a-zA-Z]\S*[0-9]$/', $row)) {
                $str[] = $row;
            }

        }
        return $str;
    }
    public function reExpressionHttp($row)
    {
        /*
         *获取http协议 主机名和域名和文件名
         */
        $one = '@^(http://)+(\w+.)(\w+.)(\w+.)(\w.*)@i';
        //$one = '@^(http://)(\w+.)(\w+.\w+.)(\w.*)@i';
        if (preg_match($one, $row, $date)) {
            $str[] = $date;
        }
        return $str;
    }
    public function intercept($arrInter)
    {
        /*
         *获取所有<a>标签中的地
         */
/* foreach ($arrOne as $rwo) {
if (preg_match_all('/^(http://)(\w+.)(\w+.)(\w+)/', $rwo, $shu)) {
$str1[] = $shu[1];
}
}*/
        /* $one = "/<a[\s\S]*?href=['']?([\w\.]*)['']?[\s\S]*?></a>/";*/
        //第一种方法pre_match('@href=//\w+.\w+.\w+>@')
        preg_match_all('/<a\s.*?href=[\'|\"]([^\"\']*)[\'|\"][^>]*>/is', $arrInter, $matched);
        //print_r($matched[1]);
        return $matched[1];
        /* var_dump($one);
        preg_match($one, $arrOne, $shu);
        var_dump(preg_match($one, $arrOne, $shu));
        var_dump($arrOne);
        $one1 = implode(',', $shu);
        return $one1;*/
        // foreach ($shu as $rwo) {
        //// $one = "<a\b[^>]*\bhref=([^\s>]+)[^>]*>[\s\S]*?([^<>]*)</a>";
        /* preg_match_all($one, $arrOne, $arry);
        foreach ($arry as $val) {
        echo "$val[0]";
        }
        return $val;*/
        // preg_split('\\', -1, $arry);
        // $str1[] = $arry[1];
        //}
        // return $str1;
    }
    public function delectHtml($arrDelect)
    {
        /*
         *通过替换的方式除掉所有html标签
         */
        $delect = "/<\/?[^>]+>/";
        $arr = preg_replace($delect, '', $arrDelect); //直接返回
        // $arrOne1 = $arrOne;
        return $arr;
    }
}
