
    function check(form) {
        //判断账号不为空
        if (document.forms["form1"].username.value.replace(/^\s+|\s+$/g,"")==""){
            alert('请输入账号');
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
            form.passAgain.focus();
            return false;
        }
        //判断单选按钮不为空
        var sex = document.getElementsByName("radio");
        var resultSex=0;
        for (var i=0;i<sex.length;i++){
            if(sex[i].checked){//判断是否被选中
                resultSex+=1;
            }
        }
        if (resultSex==0){
            alert("请选择性别");
            return false;
        }
        //判断复选框不为空
        var hobby = document.getElementsByName("checkboxOne[]");
        var result=0;
        for(var j=0;j<hobby.length;j++){
            if(hobby[j].checked){
                result+=1;
            }
        }
        if (result==0){
            alert("请你选择爱好");
            return false;
        }
        //判断下拉框不为空
        if(form.city.value==""){
            alert("请选择城市");
            form.city.focus();
            return false;
        }
        //判断图片不为空
        if(form.upload.value==""){
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