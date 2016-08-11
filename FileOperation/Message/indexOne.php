<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script src="jquery.min.js"></script>
    <style type="text/css">
        *{  margin: 0px;
            padding: 0px;
        }
        .div1 {
            width: 1080px;
            height: 200px;
            margin: auto;
            background: slategrey;

        }
        .div11{
            width: 1080px;
            height: 150px;
        }
        .div2{
            width: 1080px;
            height: 400px;
            margin: auto;
        }
        .one{
            height: 35px;
            width:50px;
margin-left: 40px;
        }
    </style>

</head>
<body>
<div class="div1">

    <h2>我的留言本</h2><br/>

    <hr/>
    //php读取文件
    <?php
$fw = fopen("Message.txt", "r+");
while (!feof($fw)) {
    $content = fgets($fw);
    echo $content . "<br>";
}
fclose($fw);
?>
    <div class="div11">
    </div>
</div>
<div class="div2">
    <h2>我要留言</h2><br/>
    <hr/>
    <br/>
    <form  action="MessageBoard.php" method="post">

        <label>匿名:</label><span><input type="text" name="number" style="width: 500px;height: 25px;"></span>
        <p><label style="position: relative;top: -70px;">内容:</label><textarea name="content" style="width: 500px;height: 150px;margin-top: 15px;"></textarea></p>
        <input type="submit" value="提交" name="btn_submit" style="width: 72px;margin-left: 40px;">

    </form>
    <button class="one" value="获取" >JS获取</button>
</div>

</body>
<script>
    //js获取文本文件信息
    $(document).ready(function(){
        $(".one").click(function(){
            htmlobj=$.ajax({url:"Message.txt",async:false});
            $(".div11").html(htmlobj.responseText).split("\n");

        });
    });
</script>
</html>
