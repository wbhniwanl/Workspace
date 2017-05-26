<?php
/**
 * Created by PhpStorm.
 * User: tanyunbao
 * Date: 2016/8/24
 * Time: 14:39
 */
include "./Pdo/testPdoBb.php";
include "fileUpload.php";
if (isset($_POST['submit'])) {
    if (!empty($_POST['username'])) {
        if (!empty($_POST['pass'])) {
            if ($_POST['pass'] == $_POST['passAgain']) {
                $username = $_POST['username'];
                //$usernameStr = preg_match('/\s+./', $username, $arrDate);
                //var_dump($usernameStr);
                $pass        = md5($_POST['pass']);
                $radio       = $_POST['radio'];
                $checkboxOne = $_POST['checkboxOne'];
                $checkboxTwo = implode(',', $checkboxOne);
                $city        = $_POST['city'];
                $content     = $_POST['content'];
                $upload1     = 'images/' . $_FILES['upload1']['name']; //获取他的文件的name数组的值
                $arr         = array('username' => "$username", 'password' => "$pass", 'sex' => "$radio", 'hobby' => "$checkboxTwo", 'liveCity' => "$city", 'imagesSelf' => "$upload1", 'profile' => "$content");
                $test->insert('tp_user', $arr);
            }
        }
    }
}
header('Content-Type:text/html;charset=utf-8');
$oneDemo = new FileUpload();
$oneDemo->upLoad();
