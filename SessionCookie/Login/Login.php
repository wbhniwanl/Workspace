<?php
/**
 * Created by PhpStorm.
 * User: tanyunbao
 * Date: 2016/8/11
 * Time: 15:17
 */
class Login
{
    public function userLogin()
    {
        if (isset($_POST['btn_submit'])) {
            $user     = $_POST['user'];
            $password = $_POST['password'];
            if ($user == "123" && $password == "123") {
                session_start();
                $_SESSION['name'] = $user;
                var_dump($_SESSION);
                header("Location: User.php");

            } else {
                echo "用户密码错误";
            }
        }
    }

}
$test = new Login();
$test->userLogin();
