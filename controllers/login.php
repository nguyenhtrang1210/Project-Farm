<?php
session_start();
require_once "../../configs/truycapuser.php";

if (isset($_POST['login']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    $error='';
    if (sosanh($username,$password)==true)
    {
        header("Location: index.php");
    }
    else
    {
        $error='Tên tài khoản hoặc mật khẩu không hợp lệ;'
    }
}
?>
<form action="" method="post" >
    <div style="background: forestgreen;height: 20px; text-align: center" >ĐĂNG NHẬP</div>

    <div style="background: white; text-align: center ">
        <form>
            Tên đang nhập:
            <br>
            <input type="text" name="name" value="" style="background: gray;border-radius: 7px">
            <br>
            Mật khẩu:
            <br>
            <input type="password" name="password" value="" style="background: gray;border-radius: 7px">
            <br>
            <input type="checkbox" name="remember" value="remember"> Ghi nhớ đăng nhập
            <br>
            <input type="submit" name="login" value="Đăng nhập">
            <br>
            <a href="quenmk.php" style="text-decoration: none; color: dodgerblue" >Quên mật khẩu</a>
            <br>
            <a href="create-farm.php" style="text-decoration: none; color: dodgerblue" >Tạo tài khoản</a>
        </form>
