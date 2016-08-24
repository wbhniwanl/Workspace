<!DOCTYPE html>
<html lang="en">
<head>
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<div class="resiter">
    <form action="fileUpload.php" enctype="multipart/form-data" method="post" onsubmit="return check(this)">
    <fieldset>
<legend>用户注册信息</legend>
<div class="resitertop">
    <fieldset>
        <legend>重要信息</legend>
        <p><label>&nbsp;用户名:</label>
        <input type="text" name="username" placeholder="请输入账号" value=""></p>
        <p><label>&nbsp;&nbsp;密码:</label>
        <input type="password" name="pass" placeholder="请输入密码" value=""></p>
        <p> <label>确认密码:</label>
        <input type="password" name="passAgain" placeholder="请再次输入密码" value=""></p>
    </fieldset>
</div>
 <div class="resiterbottom">
     <fieldset>
         <legend>基本信息</legend>
         <p><label>&nbsp;性别:</label>
             <input type="radio" name="radio" value="男">男
             <input type="radio" name="radio" value="女">女
         </p>
         <p><label>&nbsp;爱好:</label>
             <input type="checkbox" name="checkboxOne[]" value="听音乐">听音乐
             <input type="checkbox" name="checkboxOne[]" value="看电影">看电影
             <input type="checkbox" name="checkboxOne[]" value="玩游戏">玩游戏
         </p>
         <p> <label>&nbsp;城市:</label>
             <select name="city">
                 <option value="">请选择</option>
                 <option value="北京">北京</option>
                 <option value="上海">上海</option>
                 <option value="老城">老城</option>
            </select>
         </p>
         <p><label>&nbsp;照片:</label>
             <input type="file" name="upload1" value=""></p>
         <p>
             <label style="margin-left:38px ">个人简历:</label>
             <textarea name="content" rows="10" cols="55" ></textarea>
         </p>
     </fieldset>
 </div>
        <input type="submit" name="submit" style="height: 25px;width: 60px;margin-left: 240px;"/>
        <input type="reset" name="reset" style="height: 25px;width: 60px;"/>
    </fieldset>


    </form>
</div>
<script type="text/javascript">

    function check(form) {
        //判断账号不为空
       if(form.username.value==""){
           alert("请输入账号");
           form.username.focus();
           return false;
       }
        //判断密码不为空
        if(form.pass.value==""){
            alert("请输入密码");
            form.pass.focus();
            return false;
        }
        //判断两次密码要一致
        if(form.pass.value!=form.passAgain.value){
            alert("两次密码不一致");
            form.pass1.focus();
            return false;
        }
        //判断下拉框不为空
        if(form.city.value==""){
            alert("请选择城市");
            form.city.focus();
            return false;
        }
        //判断图片不为空
        if(form.upload1.value==""){
            alert("请选择图片");
            form.upload1.focus();
            return false;
        }
        //判断文本不为空
        if(form.content.value==""){
            alert("请输入个人简介");
            form.content.focus();
            return false;
        }


        return true;
    }
</script>
</body>
</html>
