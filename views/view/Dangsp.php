<?php
session_start();
require_once"../layouts/header.php";
if (!isset($_SESSION['username']))
{
    header("Location: login.php");
    exit();
}
?>
<header>
    <title>Đăng bán</title>
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
                Gạo Miền Bắc <br>
                Gạo Miền Trung <br>
                Gạo Miền Nam <br>
                Một số sản phẩm khác <br>
                Ngô<br>
                Khoai<br>
                Sắn<br>
                cafe<br>
                Chè<br>
        </td>
        <td style="background-color: none;padding-left: 300px; padding-top: none">
        <form method="post" action="" >
            <h1>THÊM NÔNG SẢN</h1>
            <br>
            <table cellspacing="5" cellpadding="5">
                <tr>
                    <td>
                        <select name="tensp">
                            <option value="0">Chọn nông sản</option>
                            <option value="1">Gạo nếp</option>
                            <option value="2">Gạo tẻ</option>
                            <option value="3">Ngô</option>
                            <option value="4">Khoai</option>
                            <option value="5">Sắn</option>
                            <option value="6">cafe</option>
                            <option value="7">Chè</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        Nhập sản lượng (kg):
                    </td>
                    <td>
                        <input type="number" name="sanluong" value="">
                    </td>
                </tr>
                <tr>
                    <td>
                        Giá bán(/kg):
                    </td>
                    <td>
                        <input type="number" name="giaban" value="">
                    </td>
                </tr>
                <tr>
                    <td>
                        Ước tính thu hoạch:
                    </td>
                    <td>
                        <select name="thoigianthuhoach">
                            <option value="0">Đã thu hoạch</option>
                            <option value="1">Còn 1 tháng</option>
                            <option value="2">Còn 2 tháng</option>
                            <option value="3">Còn 3 tháng</option>
                            <option value="4">Còn 4 tháng</option>
                            <option value="5">Còn 5 tháng</option>
                            <option value="6">Còn 6 tháng</option>
                            <option value="7">Còn 7 tháng</option>
                            <option value="8">Còn 8 tháng</option>
                            <option value="9">Còn 9 tháng</option>
                            <option value="10">Còn 10 tháng</option>
                            <option value="11">Còn 11 tháng</option>
                            <option value="12">Còn 12 tháng</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        Nhập thông tin sản phẩm:
                    </td>
                    <td>
                        <TEXTAREA name="chuthich"></TEXTAREA>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="Dangban" value="Đăng bán"></td>
                </tr>
            </table>
        </form>

            <?php
            require_once "../../controllers/Dangbansanpham.php";
            ?>
            <div style="color: red">
                <?php echo $error;?>
            </div>
    </div>
        </td>
    </tr>
</table>





















<?php
require_once"../layouts/footer.php";
?>


