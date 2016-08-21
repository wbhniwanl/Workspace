<?php
/**
 * Created by PhpStorm.
 * User: tanyunbao
 * Date: 2016/8/10
 * Time: 17:33
 */

class FileUpload
{
    //单个文件上传
    /**
     * 文件上传类
     */
    public function upLoad()
    {
        header('Content-Type:text/html;charset=utf-8');
        $first_file  = $_FILES['upload1']; //获取文件1的信息
        $second_file = $_FILES['upload2']; //获取文件2的信息
        $upload_dir  = './images/'; //保存上传文件的目录 位置（记住）写出的地址为他的名字
        if ($first_file['error'] == UPLOAD_ERR_OK) {
            //上传文件1在服务器上的临时存放路径
            $temp_name = $first_file['tmp_name'];
            //上传文件1在客户端计算机上的真实名称
            $file_name = $first_file['name'];
            //移动临时文件夹中的文件1到存放上传文件的目录，并重命名为真实名称
            move_uploaded_file($temp_name, $upload_dir . $file_name);
            echo '[文件1]上传成功!<br/>';
        } else {
            echo '[文件1]上传失败!<br/>';
        }
        /*if ($second_file['error'] == UPLOAD_ERR_OK) {
        //上传文件2在服务器上的临时存放路径
        $temp_name = $second_file['tmp_name'];
        //上传文件2在客户端计算机上的真实名称
        $file_name = $second_file['name'];
        //移动临时文件夹中的文件2到存放上传文件的目录，并重命名为真实名称
        move_uploaded_file($temp_name, $upload_dir . $file_name);
        echo '[文件2]上传成功!<br/>';
        } else {
        echo '[文件2]上传失败!<br/>';
        }*/
        echo "<pre>";
        //print_r($_FILES);
    }
    //多文件上传
    /*public function upLoadmore()
{

header('Content-Type:text/html;charset=utf-8');
$fileArray = $_FILES['upload_file']; //获取多个文件的信息，注意：这里的键名不包含[]

$upload_dir = 'D:/upload/'; //保存上传文件的目录
foreach ($fileArray['error'] as $key => $error) {
if ($error == UPLOAD_ERR_OK) {
//PHP常量UPLOAD_ERR_OK=0，表示上传没有出错
$temp_name = $fileArray['tmp_name'][$key];
$file_name = $fileArray['name'][$key];
move_uploaded_file($temp_name, $upload_dir . $file_name);
echo '上传[文件' . $key . ']成功!<br/>';
} else {
echo '上传[文件' . $key . ']失败!<br/>';
}
}
print_r($_FILES);
}*/

}
include "../Pdo/testPdoBb.php";
if (isset($_POST['btnSubmit'])) {
    $title      = $_POST['title'];
    $addman     = $_POST['addman'];
    $desription = $_POST['desription'];
    $type       = $_POST['type'];
    $soure      = $_POST['soure'];
    $upload1    = 'images/' . $_FILES['upload1']['name']; //获取他的文件的name数组的值
    $arr        = array('name' => "$title", 'desription' => "$desription", 'type' => "$type", 'addPeople' => "$addman", 'soure' => "$soure", 'productImage' => "$upload1");
    $test->insert('tp_produce', $arr);
}
header('Content-Type:text/html;charset=utf-8');
$oneDemo = new FileUpload();
$oneDemo->upLoad();
$oneDemo->upLoadmore();
