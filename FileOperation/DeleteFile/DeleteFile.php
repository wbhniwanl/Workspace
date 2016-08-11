<?php
namespace Workspece\DeleteFile;

class FileDelete
{
    public function fileOne($shuJU)
    /**
     * 实现文件的遍历删除
     */
    {
        $arr[]   = $shuJU; //需要删除的文件夹
        $Filedir = opendir($shuJU);
        while (($file = readdir($Filedir)) !== false) {
//遍历文件夹里的文件
            $dirFile = $shuJU . "/" . $file; //当前文件夹
            if ($file != "." && $file != "..") {
                if (is_dir($dirFile)) { //当前路径是否是一个文件夹
                    $this->fileOne($dirFile); //递归调用遍历文件夹所有文件内容
                }
                if (is_file($dirFile)) {

                    unlink($dirFile);
                    echo "删除的有" . $dirFile;

                }

            }
        }
        closedir($Filedir);
        foreach ($arr as $value) {
            rmdir($value);
            # code...
        }

    }
}
