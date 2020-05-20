<?php
session_start();
require_once"../layouts/header.php";
require_once "../../configs/truycapuser.php";
if (!isset($_SESSION['username']))
{
    header("Location: login.php");
    exit();
}
$username=$_SESSION['username'];
?>
<header>
    <title>Liên hệ hỗ trợ</title>
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
            $id=$_GET['id'];
            ?>
            <table cellspacing="0" cellpadding="8" border="1" style="margin-left: 15%">
                <tr>
                    <th>Tên sản phẩm: </th>
                    <th>Sản lượng</th>
                    <th>Giá bán</th>
                    <th>Chú thích </th>
                    <th>Ngày đăng</th>
                    <th>Nhập giá bán mới</th>
                </tr>
                <?php
                $connection = connection();
                $sql_select = "SELECT * FROM kho Where id='$id'";
                $results = mysqli_query($connection, $sql_select);
                $khocuatois = mysqli_fetch_all($results, MYSQLI_ASSOC);
                foreach ($khocuatois as $khocuatoi):
                    ?>
                    <tr>
                        <td>
                            <?php echo $khocuatoi['tensp']; ?>
                        </td>
                        <td>
                            <?php echo $khocuatoi['sanluong'];

                            ?>
                        </td>
                        <td>
                            <?php echo $khocuatoi['giaban']; ?>
                        </td>
                        <td>
                            <?php echo $khocuatoi['chuthich']; ?>
                        </td>
                        <td><?php
                            $created_at =
                                date('d-m-Y H:i:s', strtotime($khocuatoi['ngaydang']));
                            echo $created_at;
                            ?></td>
                        <td>
                            <form action="" method="post">
                            <input type="number" name="sale" value=""> <br> <input type="submit" name="saleclick" value="sale">
                            </form>
                            <?php
                            require_once "../../controllers/Sale.php"?>
                        </td>

                    </tr>
                <?php endforeach; ?>
            </table>
        </td>
    </tr>
    </div>

