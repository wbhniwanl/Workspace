<?php include "nav.html";?>

<div class="content">
	<div class="lefter">
    	<div class="title">
        	<h2 class="cBlue fB">产品信息<b class="cGrey fn">Product Info</b></h2>
        </div>
        <div class="product">
            <?php
include "Pdo/testPdoBb.php";
$productName = $_GET['productName'];
$data        = $test->query("select * from tp_produce where id=$productName");

foreach ($data as $arr) {
    ;?>

			<img src="<?php echo "admin/" . $arr['productImage']; ?>" />
			<p><strong>产品名称</strong><?php echo $arr['name']; ?> </p>
			<p><strong>产品描述</strong>：</p>
            <p><?php echo $arr['desription']; ?></p>
        </div>            <?php }
;?>
    </div>

<?php include "left.php";?>

</div>
<?php include "buttom.html";?>
