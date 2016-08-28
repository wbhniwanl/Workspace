<div class="righter" style="float: left;margin-left: 45px;">
    <div class="rightBox">
        <a href="#" class="btn_s">我要留言</a>
    </div>
    <div class="blank10"></div>
    <div class="rightBox">
        <h3>最新公告<b class="cGrey fn">News</b></h3>
        <ul class="list_r">
            <?php
$data1 = $test->query("select * from tp_notice  order by id");
foreach ($data1 as $arr) {
    ;?>
                <li>
                    <a title="<?php echo $arr['title']; ?>" href=<?php echo "article.php?noticeName=" . $arr['id']; ?>><?php echo $arr['content']; ?></a>
                </li>
            <?php }
;?>
        </ul>
    </div>
    <div class="blank10"></div>
    <div class="rightBox">
        <h3>友情链接<b class="cGrey fn">Links</b></h3>
        <ul class="list_r">
            <?php
$data = $test->query("select * from tp_link  order by id ");
foreach ($data as $arr) {
    ?>
    <li><a href=<?php echo $arr['linkUrl']; ?>><?php echo $arr['linkName']; ?></a></li>
  <?php }
?>

        </ul>
    </div>
</div>
<div class="hackbox"></div>