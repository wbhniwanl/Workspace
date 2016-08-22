<?php include "nav.html";
include "Pdo/testPdoBb.php";
?>
<div class="content">
	<div class="lefter">
    	<div class="title">
        	<h2 class="cBlue fB">行业资讯<b class="cGrey fn">Information</b></h2>
        </div>
        <ul class="list_r" style="padding-right:40px">
            <?php
$data = $test->query("select * from tp_information  order by id ");
foreach ($data as $arr) {
    ;?>
                <li>
                    <a title="<?php echo $arr['title']; ?>" href=<?php echo "articlein.php?noticeName=" . $arr['id']; ?>><?php echo $arr['content']; ?></a>
                    <span class="time1"><?php echo $arr['createTime']; ?></span >
                </li>

            <?php }
;?>
        </ul>
           </div>
    <?php include "left.php";?>

</div>
<?php include "buttom.html";?>