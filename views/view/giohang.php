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
    <title>Giỏ hàng</title>
    <link href="../../assets/css/indexcss.css" rel="stylesheet">
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
            <?php
            require_once "../../controllers/themgiohang.php";
            ?>
            <br>
            <br>
            </div>
            <br>
            <button><a href="Sanpham.php">Mua thêm</a></button>
            <br>
            <br>
            <br>
            <form method="post">

                <br>
                <button style="background: lawngreen;width: 100px;height: 55px; margin-left: 30px"><a href="hoadon.php">In hóa đơn</a></button>
                <input type="submit" name="xoa" value="Xóa giỏ hàng" style="background: lawngreen;width: 100px;height: 55px; margin-left: 30px"
                       onclick="tailai()">
            </form>
            <br>
            <br>
        </td>
    </tr>
    </div>

<script>
    function tailai() {
        location.reload();
    }
</script>





















</table>
<?php
require_once"../layouts/footer.php";
?>
