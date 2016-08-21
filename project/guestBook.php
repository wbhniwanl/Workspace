<?php include "nav.html";?>
<div class="content">
    <div class="lefter">
        <div class="title">
            <h2 class="cBlue fB">客户留言<b class="cGrey fn">Guestbook</b></h2>
        </div>
<?php
include "Pdo/testPdoBb.php";
$one = $_POST['name'];
$two = $_POST['content'];
$arr = array('fullName' => "$one", 'msg' => "$two");
$test->insert('tp_message', $arr);
?>
        <div class="intro">
            <form  action="guestBook.php" method="post">
                <label>呢称：</label><input name="name" type="text" /><br />
                <label>内容：</label><textarea name="content" cols="" rows="" style="width:545px;height:138px"></textarea>
                <input  type="submit"  value="提交" class="btn_input" />
            </form>
        </div>

    </div>
    <?php include "left.php";?>
</div>
<?php include "buttom,.html";?>
