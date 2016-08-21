<?php
/**
 * Created by PhpStorm.
 * User: tanyunbao
 * Date: 2016/8/11
 * Time: 15:17
 */
class Login
{
    /**
     * 检查传入的密码与账号
     */
    public function userLogin()
    {
        if (isset($_POST['submit'])) {
            $user     = $_POST['username'];
            $password = $_POST['password'];
            if ($user == "123" && $password == "123") {
                session_start();
                $_SESSION['name'] = $user;
                var_dump($_SESSION);
                header("Location: index.php");

            } else {
                echo "用户密码错误";
            }
        }
    }

}
$test = new Login();
$test->userLogin();
