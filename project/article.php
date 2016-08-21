<?php include "nav.html";?>
<div class="content">
	<div class="lefter">
    	<div class="title">
        	<h2 class="cBlue fB">详细信息<b class="cGrey fn">News</b></h2>
        </div>
        <div class="article">

        </div>
<?php
include "Pdo/testPdoBb.php";
$productName = $_GET['noticeName'];
$data        = $test->query("select * from tp_notice where id=$productName");

foreach ($data as $arr) {
    ;?>
			<h3 style="text-align: center"><?php echo $arr['title']; ?></h3>
			<h4><?php echo $arr['createTime']; ?></h4>
    <?php echo $arr['content']; ?>
<?php }
;?>
        </div>

<?php include "left.php";?>

</div>
<?php include "buttom,.html";?>