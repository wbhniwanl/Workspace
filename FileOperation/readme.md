  public function Message()//通过写入$_POST传来的值！再前台显示

   public function upLoad()//文件上传

 public function upLoadmore()//多文件上传

 public function bianLi($dir)//遍历文件

 public function fileOne($shuJU)//删除文件


测试方法
public function fileOne($shuJU)
{$test  = new Workspece\DeleteFile\FileDelete();
$shuJu = "I:\one";
$test->fileOne($shuJu);
}

public function bianLi($dir)//遍历文件{
$test  = new Workspece\DeleteFile\FileDelete();
$shuJu = "I:\one";
$test->fileOne($shuJu);}



