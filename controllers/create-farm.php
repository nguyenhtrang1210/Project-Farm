<?php
$error='';
if(isset($_POST['submit']))
{

    require_once "../../configs/truycapuser.php";

    $name=$_POST['name'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $confirmpassword=$_POST['confirmpassword'];
    $Email=$_POST['Email'];
    $SDT=$_POST['SDT'];
    $Diachi=$_POST['Diachi'];
    $thanhpho=$_POST['thanhpho'];


    if ($name=='')
    {
        $error='Không được để trống tên tài khoản';
    }
    else if ($username=='')
    {
        $error='Không được để trống tên đăng nhập';
    }
    else if ($password=='')
    {
        $error='Không được để trống tên mật khẩu';
    }
    else if ($confirmpassword != $password)
    {
        $error='Mật khẩu không khớp';
    }
    else if ($Email=='')
    {
        $error='Email không hợp lệ';
    }
    else if ($SDT=='')
    {
        $error='vui lòng nhập số điện thoại';
    }
    else if ($Diachi=='')
    {
        $error='Địa chỉ không hợp lệ';
    }
    else if ($thanhpho=='')
    {
        $error='vui lòng nhập khu vực';
    }
    else if (kiemtra($username)==false)
    {
        $error='Tên tài khoản đã tồn tại';
    }
    else
    {
       isinsert($name,$username,$password,$Email,$SDT,$Diachi,$thanhpho);
//        header("Location: ../views/view/login.php");
//        exit();
        echo "Đăng ký thành công <br> Vui lòng quay lại trang đang nhập để tiếp tục";
        echo "<a href='login.php'>Đăng nhập</a>";
    }

}

?>
