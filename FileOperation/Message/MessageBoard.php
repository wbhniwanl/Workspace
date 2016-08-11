<?php
/**
 * Created by PhpStorm.
 * User: tanyunbao
 * Date: 2016/8/10
 * Time: 9:35
 */
class MessageBoard
{
    public function Message()
    {
        /**
         * 文件的写入
         */
        $date    = date("Y/m/d  H:i:s");
        $name    = $_POST["number"];
        $content = $_POST["content"];
        $fh      = fopen("Message.txt", "a+"); //打开文件
        fwrite($fh, "$name" . "$content" . $date . "\r\n"); //写入文件
        fclose($fh);
        header('Location: indexOne.php'); //跳回index.php文件
    }

}

if (isset($_POST["btn_submit"])) {
    $oneDemo = new MessageBoard();
    $oneDemo->Message();

}
