<?php
session_start();
require_once"../layouts/header.php";
$error='';
if (isset($_POST['login']))
{
    $admin=$_POST['admin'];
    $password=$_POST['password'];
    $code=$_POST['code'];
    if ($admin=='farmer40' && $password=='farmer40' && $code=='123456789')
    {
        $_SESSION['admin']='login thanh cong';
        header("Location: quanlyuser.php");
        exit();
    }
    else
    {
        $error='Tên tài khoản hoặc mật khẩu không hợp lệ;';
    }

}
?>
<header>
    <title>
        Login-admin
    </title>
</header>
<body>
<div style="background-color: darkorange;max-width: 30%;margin-left:35%" >
    <form action="" method="post" >
        <div style="background: forestgreen;text-align: center" ><h1>ADMIN</h1></div>

        <div style="background: none; text-align: center;;">
            Tên đang nhập:
            <br>
            <input type="text" name="admin" value="" style="background: gray;border-radius: 7px">
            <br>
            Mật khẩu:
            <br>
            <input type="password" name="password" value="" style="background: gray;border-radius: 7px">
            <br>
            Mã đăng nhập:
            <br>
            <input type="text" name="code" value="" style="background: gray;border-radius: 7px">
            <br>
            <br>
            <input type="submit" name="login" value="Đăng nhập">
    </form>
    <div style="color: red">
        <?php

        echo "$error";
        ?>
    </div>
</div>


