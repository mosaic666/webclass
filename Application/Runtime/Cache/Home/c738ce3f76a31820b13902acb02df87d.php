<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=9" />
<title>后台登录</title> 
<link href="/webzuoye/Public/css/login.css" type="text/css" rel="stylesheet"> 
<script type="text/javascript" src="/webzuoye/Public/js/jquery.min.js"></script>
</head> 
<body> 

<div class="login">
    <div class="message" style="white-space: nowrap;">
        <img src="/webzuoye/Public/images/logo.png" width="35" height="30" style="display: inline-block;position: relative;top:5px;"/>
        软件测试精品课程网站
    </div>
    <div id="darkbannerwrap"></div>
    
    <form onsubmit="return false" id="form">
		<input name="action" value="login" type="hidden">
		<input name="user" placeholder="用户名" required="" type="text">
		<hr class="hr15">
		<input name="pwd" placeholder="密码" required="" type="password">
		<hr class="hr15">
        <span style="display: inline-block;width: 20px;"></span>
        <label for="admin" style="font-size: 14px;">
            <input style="position: relative;top:2px;left: -5px;" checked="checked" id="user" type="radio" name="status" value="1"/>学生
        </label>
        <span style="display: inline-block;width: 50px;"></span>
        <label for="user" style="font-size: 14px;">
            <input style="position: relative;top:2px;left: -5px;" id="admin" type="radio" name="status" value="0"/>老师
        </label>
        <hr class="hr15">
		<input onclick="login()" value="登录" style="width:100%;" type="submit">
		<hr class="hr20">
		<!-- 帮助 <a onClick="alert('请联系管理员')">忘记密码</a> -->
	</form>
</div>
</body>
<script type="text/javascript">
    function login() {
        var userdata=$("#form").serialize();
        $.post("<?php echo U('Index/login');?>", userdata, function(res) {
            switch(res){
                case '0':
                    window.location.href="<?php echo U('Admin/Index');?>";
                    break;
                case '1':
                    window.location.href="<?php echo U('User/Index');?>";
                    break;
                default:
                    alert("密码错误！");
                    break
            }
        });
    }
</script>
</html>