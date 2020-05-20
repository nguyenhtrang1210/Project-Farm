<?php
session_start();
require_once "../../configs/truycapuser.php";
require_once"../layouts/header.php";
$error='';
if (isset($_POST['login']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    if (sosanh($username,$password)==true)
    {
        laythongtin($username);
        header("Location: index.php");
        exit();
    }
    else
    {
        $error='Tên tài khoản hoặc mật khẩu không hợp lệ;';
    }

}
?>
<body>
<div style="background-color: darkorange;max-width: 30%;margin-left:35%" >
<form action="" method="post" >
    <div style="background: forestgreen;text-align: center" ><h1>ĐĂNG NHẬP</h1></div>

    <div style="background: none; text-align: center;;">
            Tên đang nhập:
            <br>
            <input type="text" name="username" value="" style="background: gray;border-radius: 7px">
            <br>
            Mật khẩu:
            <br>
            <input type="password" name="password" value="" style="background: gray;border-radius: 7px">
            <br>
            <input type="checkbox" name="remember" value="remember"> Ghi nhớ đăng nhập
            <br>
            <input type="submit" name="login" value="Đăng nhập">
            <br>
        <br>
            <a href="quenmk.php" style="text-decoration: none; color: dodgerblue" >Quên mật khẩu</a>
            <br>
            <a href="create-farm.php" style="text-decoration: none; color: dodgerblue" >Tạo tài khoản</a>
</form>
        <div style="color: red">
        <?php

                echo "$error";
        ?>
        </div>
    </div>


