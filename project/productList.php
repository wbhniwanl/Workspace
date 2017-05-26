<?php include "public/nav.html";?>
<div class="content">
	<div class="lefter">
    	<div class="title">
        	<h2 class="cBlue fB">产品展示<b class="cGrey fn">Products</b></h2>
        </div>
        <ul class="list_l">
<?php
include "Pdo/testPdoBb.php";
//if (isset($productName)) {
//判断是否接受到专递的数值
if (!empty($productName = $_GET["productName1"])) {
    //遍历数据
    $data = $test->query("select * from tp_produce where type='$productName'");
    foreach ($data as $arr) {
        ;?>
    <li>
                <span class="listimg">
                    <!-- 调用图片  链接专递地址又传递id等数据的跳转     后面为链接上传文件路径admin/.-->
                    <a href=<?php echo "product_info.php?productName=" . $arr['id']; ?>><img src="<?php echo "admin/" . $arr['productImage']; ?>" alt="图片" /></a>
                </span>
        <span class="listtxt"><a href="productInfo.php"><?php echo $arr['name']; ?>  </a></span>
    </li>
<?php }} else {
    ?>
<?php
$data = $test->query("select * from tp_produce order by id;");
    foreach ($data as $arr) {
        ;?>
    <li>
                <span class="listimg">
                    <a href=<?php echo "productInfo.php?productName=" . $arr['id']; ?>><img src="<?php echo "admin/" . $arr['productImage']; ?>" alt="图片" /></a>
                </span>
        <span class="listtxt"><a href="productInfo.php"><?php echo $arr['name']; ?>  </a></span>
    </li>
<?php }
    ;?>
<?php }
?>
        </ul>
    </div>
	<div class="righter">
    	<div class="rightBox">
        	<h3>产品分类</h3>
            <ul class="list_r">
                <?php
$data = $test->query(" select * from tp_produce join tp_typeProduct on (tp_produce.type=tp_typeProduct.type);");

foreach ($data as $arr) {
    ;?>

            	<li><a href=<?php echo "productList.php?productName1=" . $arr['type']; ?>><?php echo $arr['type']; ?></a></li>

                <?php }
;?>
            </ul>
        </div>
    </div>
    <div class="hackbox"></div>


</div>
<?php include "public/buttom.html";?>