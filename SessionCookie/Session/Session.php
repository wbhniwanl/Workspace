<?php
/**
 * Created by PhpStorm.
 * User: tanyunbao
 * Date: 2016/8/11
 * Time: 11:07
 */
class Session
{
    public function sessionDemo($name)
    {
        /**
         * 创建一个session 回到到注销会话
         */
        session_start(); //创建一个session会话
        $_SESSION['username'] = "$name";
        echo "Your username os " . $_SESSION['username'];
        //注销会话
        session_start();
        unset($_SESSION['username']);
        echo "<pre>";
        echo "你注销了会话变量 " . $_SESSION['username'];
        //销毁会话
        session_start(); //创建一个session会话
        $nameOne          = "Oneorder";
        $_SESSION['user'] = "$nameOne";
        echo "<pre>";
        echo "Your username os " . $_SESSION['user'];
        echo "<pre>";
        session_unset();
        echo "$nameOne";
        echo "<pre>";
    }

    public function cookieDemo()
    {
        /**
         * 要删除一个已经存在的cookie，有两个办法：
         * 1、调用只带有name参数的setcookie，那么名为这个cookie将被从客户机上删除；
        例：setcookie(“MyCookie”); 
         */
        //创建cookie
        setcookie("cookiehiself", "admin", time() + 60 * 60);
        echo $_COOKIE['cookiehiself'];
        echo "<pre>";
        //删除cookie
        setcookie('cookiehiself'); //自带setcookie的name就可
        echo $_COOKIE['cookiehiself'];
        //设置Cookie的失效时间为time()或time()-1
        setcookie("cookiehiself", "admin", time() - 1);

    }

}
