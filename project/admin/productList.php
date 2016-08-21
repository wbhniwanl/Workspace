<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>最新公告</title>
<link rel="stylesheet" href="styles/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/common.js"></script>
</head>
<body>
<?php
include "../Pdo/testPdoBb.php";
?>
<div class="container">
    <h3 class="marginbot">最新公告<a href="indexUpload.php" class="sgbtn">添加新产品</a></h3>
    <div class="mainbox">
        <form action="delectProduct.php" method="post">
            <table class="datalist fixwidth">
                <tbody>
                    <tr>
                        <th nowrap="nowrap"><input name="chkall" id="chkall" class="checkbox" type="checkbox"><label for="chkall">删除</label></th>
                        <th nowrap="nowrap">产品名称</th>
						<th nowrap="nowrap">产品团片</th>
                        <th nowrap="nowrap">添加人</th>
                        <th nowrap="nowrap">添加时间</th>
                        <th nowrap="nowrap">详情</th>
                    </tr>
                    <?php
$data = $test->query("select * from tp_produce order by id");
foreach ($data as $arr) {
    ;?>
                    <tr>
                        <td width="80"><input name="shuJu[]" value="<?php echo $arr['id']; ?>" class="checkbox" type="checkbox"></td>
                        <td width="200"><strong><?php echo $arr['desription']; ?></strong></td>
						<td width="100"><img src="<?php echo $arr['productImage']; ?>"></td>
                        <td width="100"><?php echo $arr['addPeople']; ?></td>
                        <td width="150"><?php echo date('Y-m-d H:m:s'); ?></td>
                        <td width="100"><a href=<?php echo "edit.php?productName=" . $arr['id']; ?>>编辑</a></td>
                    </tr><?php }
;?>
                    <tr class="nobg">
                    	<td ><input value="提 交" class="btn" type="submit"></td>
                        <td class="tdpage" colspan="4">
                            <div class="pages">
                            <em>100</em>
                            <strong>1</strong>
                            <a href="">2</a>
                            <a href="">3</a>
                            <a href="">4</a>
                            <a href="" class="next">&rsaquo;&rsaquo;</a>
                            <a href="" class="last">... </a>
                            <kbd><input type="text" name="custompage" size="3" onkeydown="if(event.keyCode==13) {window.location='?page='+this.value; return false;}" /></kbd>
                            </div>
                      	</td>
                    </tr>
                </tbody>
        	</table>
        <div class="margintop"></div>
        </form>
    </div>
</div>
</body>
</html>
