<?php
include "nav.html";
include "Pdo/testPdoBb.php";
?>
<div class="content">
	<div class="w475_l">
            <div class="title">
        	<h2 class="cBlue fB">公司简介<b class="cGrey fn">About us</b></h2>
        </div>

        <div class="intro">
            <?php
$data = $test->query("select * from tp_conpany order by id");
foreach ($data as $arr) {
    ;?>
                <li>
                <span class="listimg">
                    <a href=<?php echo "aboutUs.php?productName=" . $arr['id']; ?>><?php echo $arr['introduction']; ?></a>
                </span>
                </li>
            <?php }
;?>
        </div>
        <div class="blank10"></div>
        <div class="title">
        	<h2 class="cBlue fB">产品展示<b class="cGrey fn">Products</b></h2><span class="more"><a href="productList.php" class="cBlue"> 更多...</a></span>
        </div>
        <ul class="list_l">

            <?php
$data = $test->query("select * from tp_produce order by id");
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



        </ul>
    </div>
    <div class="w370_r">
    	<div class="title">
        	<h2 class="cBlue fB">最新公告<b class="cGrey fn">News</b></h2>
        </div>
        <ul class="list_r">
<?php
$data1 = $test->query("select * from tp_notice  order by id");
foreach ($data1 as $arr) {
    ;?>
            <li>
			<a title="<?php echo $arr['title']; ?>" href=<?php echo "article.php?noticeName=" . $arr['id']; ?>><?php echo $arr['content']; ?></a>
    <span class="time1"><?php echo $arr['createTime']; ?></span >
    </li>

    <?php }
;?>
        </ul>
        <div class="blank29"></div>
        <div class="title">
        	<h2 class="cBlue fB">行业资讯<b class="cGrey fn">Information</b></h2><span class="more"><a href="info.php" class="cBlue"> 更多...</a></span>
        </div>
        <ul class="list_r">
            <?php
$data = $test->query("select * from tp_information  order by id ");
foreach ($data as $arr) {
    ;?>
                <li>
                    <a title="<?php echo $arr['title']; ?>" href=<?php echo "articleIn.php?noticeName=" . $arr['id']; ?>><?php echo $arr['content']; ?></a>
                    <span class="time1"><?php echo $arr['createTime']; ?></span >
                </li>

            <?php }
;?>
        </ul>
    </div>
    <div class="hackbox"></div>

	<div class="title">
        	<h2 class="cBlue fB">友情链接<b class="cGrey fn">Links</b></h2>
    </div>
    <?php
$data = $test->query("select * from tp_link  order by id ");
foreach ($data as $arr) {
    ?>

    <span class="links">
	    	<a href="<?php echo $arr['linkUrl']; ?>" ><?php echo $arr['linkName']; ?>||</a>

    </span><?php }
?>
</div>

<?php include "buttom.html";?>
