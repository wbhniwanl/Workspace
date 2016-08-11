<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style type="text/css">
        *{  margin: 0px;
            padding: 0px;
        }
        .div1 {
            width: 600px;
            height: 350px;
            margin: auto;
            background: slategrey;
            margin-top: 150px;
        }
.div1 .div11{
float: left;

}
    </style>
</head>
<body>

<div class="div1">
<div class="div11">
    <form  action="Login.php" method="post" style="margin-top: 70px;margin-left: 170px;">

        </br>
        <label>账号</label><input type="text" name="user" ><br/>
        <label >密码 </label><input type="password"  name="password" style="margin-top: 20px;"><br/>
      <input type="submit" value="登录" name="btn_submit" style="width: 72px;margin-left: 40px;margin-top:30px;">
        <input type="submit" value="退出" name="btn_submit1" style="width: 72px;margin-left: 0px;">


    </form>
</div>
</div>
</body>
</html>
