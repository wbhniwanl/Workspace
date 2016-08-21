<?php
/**
 * Created by PhpStorm.
 * User: tanyunbao
 * Date: 2016/8/11
 * Time: 10:03
 */
class FileUpload
{
    public function file($file)
    {
        $fileName = $_FILES["$file"]['name'];
        $tempName = $_FILES["$file"]['tmp_name'];
        $fileSize = $_FILES["$file"]['size'];
        if (is_array($fileName)) {
            for ($i = 0; $i < count($fileName); $i++) {
                $temp = $tempName[$i];
                $size = $fileSize[$i];
                $name = $fileName[$i];
                $this->singleUpload($temp, $name, $size);
            }
        } else {
        }
    }

    public function singleUpload($temp, $fileName, $size)
    {
        $finalName = $this->finalName($fileName);
        if (is_bool($this->checkFileSize($size))) {
            move_uploaded_file($temp, $finalName);
        }

    }
    public function checkFileSize($size)
    {
        if ($size > 1000000) {
            echo "文件过大";
            return false;

        } else {
            return true;}
    }
    public function finalName($name)
    {
        $finalName = iconv("utf-8", "gb2312", $name);
        return $finalName;
    }
}
$test = new FileUpload();
$file = 'file';
$test->file($file);
