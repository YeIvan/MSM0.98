<?php
session_start();
if(isset($_SESSION['username'])){
    echo "<script>alert('您已登录');window.open('index.php');</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h3 align="center">登录</h3>
<form style="text-align: center" method="post" action="logcheck.php">
    用户名<input type="text" name="username"><br/>
    密码<input type="password" name="password"><br/>
    <input type="submit" name="submit" value="登录"><input type="button" value="注册" onclick="window.open('register.html')">
</form>
</body>
</html>