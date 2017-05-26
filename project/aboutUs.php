<?php include "public/nav.html";?>
<div class="content">
	<div class="lefter">
    	<div class="title">
			<?php
include "Pdo/testPdoBb.php";
/**
 * 判断是否接受到数据
 * 遍历数据库数据
 * 打出数据
 * 一下eles一样
 */
if (!empty($productName = $_GET['productName'])) {
    $data = $test->query("select * from tp_conpany where id=$productName");
    foreach ($data as $arr) {
        ;?>
        	<h2 class="cBlue fB">公司简介<b class="cGrey fn">About us</b></h2>
           </div>
            <div class="intro">
			<?php echo $arr['introduction']; ?>
		</div>
		<?php }
} else {
    ?>
		<?php
$data = $test->query("select * from tp_conpany where id=1;");
    foreach ($data as $arr) {
        ;?>
		<h2 class="cBlue fB">公司简介<b class="cGrey fn">About us</b></h2>
	</div>
	<div class="intro">
		<?php echo $arr['introduction']; ?>
	</div>
		<?php }
    ;?>
		<?php }
?>

    </div>
<?php include "public/left.php";?>
<?php include "public/buttom.html";?>