<?php
/**
 * Created by PhpStorm.
 * User: Ye
 * Date: 2018/7/3
 * Time: 14:52
 */
if(isset($_POST['submit'])&&$_POST['submit']=="登录"){
include_once 'mysql.php';
$username=$_POST['username'];
$passowrd=$_POST['password'];
$sql="select username,password from USER WHERE username='$username' AND password='$passowrd'";
$res=sql_query($sql);
$num=mysqli_num_rows($res);//统计影响的行数
    if($num){
        $row=mysqli_fetch_assoc($res);
        session_start();
        $_SESSION['username']=$row['username'];
        echo "<script>alert('登录成功');window.location.href='index.php';</script>";
    }
    else
    {
        echo "<script>alert('用户名或密码不正确！');history.go(-1);</script>";
    }
}
else
{
    echo "<script>alert('未提交成功！'); history.go(-1);</script>";
}