<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>联系我们</title>
<link rel="stylesheet" href="styles/style.css" type="text/css" media="all">
</head>
<body>
<?php
include "../Pdo/testPdoBb.php";
$two = $_POST['content'];
$arr = array('introduction' => "$two");
$test->insert('tp_conpany', $arr);
?>
<div id="append"></div>
<div class="container">
	<h3>公司简介</h3>
    <div class="mainbox">
        <form action="aboutUs.php" method="post">
            <table style="width:700px;">
                <tbody>
                	<tr>
                    	<td><textarea rows="10" cols="80" name="content"></textarea></td>
                    </tr>
                    <tr>
                    	<td>添加人：admin &nbsp;&nbsp;&nbsp;添加时间：2009-07-01 12:05</td>
                    </tr>
                    <tr>
                        <td><input value="提 交" class="btn" type="submit"></td>
                    </tr>

                </tbody>
            </table>
        </form>
    </div>
</div>
</body>
</html>

