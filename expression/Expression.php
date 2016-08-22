<?php
namespace Ary\Workspece;

/**
 * Created by PhpStorm.
 * User: tanyunbao
 * Date: 2016/8/21
 * Time: 13:53
 */
class Expression
{
    /**
     * @param $arr
     * @return array
     *以字母开头与数字结尾中间不含空格
     *    */
    public function reExpression($arr)
    {
        foreach ($arr as $row) {
            if (preg_match('/^[a-zA-Z]\S*[0-9]$/', $row)) {
                $str[] = $row;
            }

        }
        return $str;
    }
    public function reExpressionHttp($row)
    {
        /**
         *获取http协议 主机名和域名和文件名
         */
        $one = '@^(http://)+(\w+.)(\w+.)(\w+.)(\w.*)@i';
        //$one = '@^(http://)(\w+.)(\w+.\w+.)(\w.*)@i';
        if (preg_match($one, $row, $shu)) {
            $str1[] = $shu;
        }
        return $str1;
    }
    public function jieQu($arrTwo)
    {
        /**
         *获取所有<a>标签中的地址
         *         */
/* foreach ($arrOne as $rwo) {
if (preg_match_all('/^(http://)(\w+.)(\w+.)(\w+)/', $rwo, $shu)) {
$str1[] = $shu[1];
}
}*/
        /* $one = "/<a[\s\S]*?href=['']?([\w\.]*)['']?[\s\S]*?></a>/";*/
        preg_match_all('/<a\s.*?href=[\'|\"]([^\"\']*)[\'|\"][^>]*>/is', $arrTwo, $matched);
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
    public function delectHtml($arrOne)
    {
        /**
         *通过替换的方式除掉所有html标签
         *         */
        $delect = "/<\/?[^>]+>/";
        $arrOne = preg_replace($delect, '', $arrOne); //直接返回
        // $arrOne1 = $arrOne;
        return $arrOne;
    }
}
