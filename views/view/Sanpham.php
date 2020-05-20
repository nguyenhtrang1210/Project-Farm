<?php
session_start();
if (!isset($_SESSION['username']))
{
    header("Location: login.php");
    exit();
}
require_once"../layouts/header.php";
?>
<header>
    <title>Trang chủ</title>
    <link href="../../assets/css/indexcss.css" rel="stylesheet">
    <style type="text/css">
        .img-sanpham{
            max-width: 300px;
            max-height: 300px;
        }
    </style>
</header>
<table cellpadding="10">
    <tr>
        <td style="background-color: darkorange">
            <div style="height: 200px">
                <h2 style="color: green">WELCOME</h2>
                <?php
                echo  $_SESSION['name'];
                ?>
                <br>
                <br>
                <button style="background: greenyellow;height: 30px;width: 200px;" > <a href="Dangsp.php" style="text-decoration: none ">Đăng nông sản</a></button>
                <br><br>
                <button style="background: greenyellow;height: 30px;width: 200px;" > <a href="sanphamcuatoi.php" style="text-decoration: none ">Sản phẩm của tôi</a></button>
                <form action="" method="post">

                    <br></br>
                    <input type="submit" name="logout" value="Đăng xuất">
                </form>
                <?php
                if (isset($_POST['logout']))
                {
                    unset($_SESSION['username']);
                    header("Location: login.php");
                    exit();
                }
                ?>
            </div>
            <br>
            <div style="background: white;text-align: center">
                <div style="background: forestgreen;height: 20px" >
                    GỢI Ý SẢN PHẨM
                </div>
                Gạo nếp <br>
                Gạo tẻ <br>
                Ngô<br>
                Khoai<br>
                Sắn<br>
                cafe<br>
                Chè<br>
        </td>
        <td style="padding-left: 100px; padding-top: none">

            <table>
                <tr>
                    <td style="text-align: center">
                        <img src="../../assets/images/gaonep.jpg" class="img-sanpham" />
                        <br>
                        <h3>Gạo nếp</h3>
                        <a href="gaonep.php">Chi tiết</a>
                    </td>
                    <td style="text-align: center">
                        <img src="../../assets/images/gaote.jpg" class="img-sanpham" />
                        <br>
                        <h3>Gạo tẻ</h3>
                        <a href="gaote.php">Chi tiết</a>
                    </td>
                    <td style="text-align: center">
                        <img src="../../assets/images/ngo.jpg" class="img-sanpham" />
                        <br>
                        <h3>Ngô</h3>
                        <a href="ngo.php">Chi tiết</a>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center">
                        <img src="../../assets/images/khoai.jpg" class="img-sanpham" />
                        <br>
                        <h3>Khoai</h3>
                        <a href="khoai.php">Chi tiết</a>
                    </td>
                    <td style="text-align: center">
                        <img src="../../assets/images/san.jpg" class="img-sanpham" />
                        <br>
                        <h3>Sắn</h3>
                        <a href="san.php">Chi tiết</a>
                    </td>
                    <td style="text-align: center">
                        <img src="../../assets/images/cafe.jpg" class="img-sanpham" />
                        <br>
                        <h3>Cafe</h3>
                        <a href="cafe.php">Chi tiết</a>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center">
                        <img src="../../assets/images/che-xanh.jpg" class="img-sanpham" />
                        <br>
                        <h3>Chè</h3>
                        <a href="che.php">Chi tiết</a>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    </div>























</table>
<?php
require_once"../layouts/footer.php";
?>

