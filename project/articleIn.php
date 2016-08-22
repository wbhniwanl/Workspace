<?php include "nav.html";?>
<div class="content">
	<div class="lefter">
    	<div class="title">
        	<h2 class="cBlue fB">详细信息<b class="cGrey fn">News</b></h2>
        </div>
        <div class="article">
            <?php
include "Pdo/testPdoBb.php";
//通过$_GET获取页面传递过来的<a>的php链接eg 《？php "文件名？跳转路径 ，传递$ad=[id]"？》
$productName = $_GET['noticeName'];
$data        = $test->query("select * from tp_information where id=$productName");

foreach ($data as $arr) {
    ;?>
            <h3 style="text-align: center"><?php echo $arr['title']; ?></h3>
            <h4><?php echo $arr['createTime']; ?></h4>
            <?php echo $arr['content']; ?>

        </div>
    <?php }
;?>

    </div>
    <?php include "left.php";?>

</div>
<?php include "buttom.html";?>