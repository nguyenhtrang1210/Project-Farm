<?php
session_start();
if (!isset($_SESSION['username']))
{
    header("Location: login.php");
    exit();
}
$id=$_GET['id'];

const DB_HOST = 'localhost';
const DB_USERNAME = 'root';
const DB_PASSWORD = '';
const DB_NAME = 'farmer40';
const DB_PORT = 3306;
$connection = mysqli_connect(DB_HOST, DB_USERNAME,
    DB_PASSWORD, DB_NAME, DB_PORT);

require_once"../layouts/header.php";
?>
<header>
    <title>Trang chủ</title>
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
            <table cellpadding="0" cellspacing="10" style="margin-left: 200px;">
                <?php

                $sql_select = "SELECT * FROM kho  WHERE id = '$id'";
                $results = mysqli_query($connection, $sql_select);
                $khos = mysqli_fetch_all($results, MYSQLI_ASSOC);
                foreach ($khos as $kho): ?>
                    <tr>
                        <th>Tên sản phẩm: </th>
                        <td><?php
                            $tensphienthi=$kho['tensp'];
                            echo $kho['tensp'];
                            ?></td>
                    </tr>
                    <tr>
                        <th>Sản lượng</th>
                        <td><?php echo $kho['sanluong']." kg"; ?></td>
                    </tr>
                    <tr>
                        <th>Giá gốc</th>
                        <td><?php echo $kho['giaban']." /kg"; ?></td>
                    </tr>
                    <tr>
                        <th>Giá đang sale</th>
                        <td><?php echo $kho['giamoi']." /kg"; ?></td>
                    </tr>
                    <tr>
                        <th>Thời gian thu hoạch </th>
                        <td><?php echo $kho['thoigianthuhoach']; ?></td>
                    </tr>
                    <tr>
                        <th>Người bán</th>
                        <td><?php echo $kho['name']; ?></td>
                    </tr>
                    <tr>
                        <th>SDT </th>
                        <td><?php echo $kho['SDT']; ?></td>
                    </tr>
                    <tr>
                        <th>Email </th>
                        <td><?php echo $kho['Email']; ?></td>
                    </tr>
                    <tr>
                        <th>Thành phố </th>
                        <td><?php echo $kho['Thanhpho']; ?></td>
                    </tr>
                    <tr>
                        <th>Địa chỉ </th>
                        <td><?php echo $kho['tensp']; ?></td>
                    </tr>
                    <tr>
                        <th>Chú thích </th>
                        <td><?php echo $kho['chuthich']; ?></td>
                    </tr><tr>
                        <th>Ngày đăng</th>
                        <td><?php
                            $created_at =
                                date('d-m-Y H:i:s', strtotime($kho['ngaydang']));
                            echo $created_at;
                            ?></td>
                    </tr>
                <?php endforeach;?>

                <tr>
                    <td>
                        <form method="post">
                            <button name="themgiohang">Thêm vào giỏ hàng</button>
                        </form>
                    </td>
                    <td>
                        <button type="button" onclick="quaylai()">Hiển thị thêm</button>
                    </td>
                </tr>
                </div>
            </table>
            <script>
                function quaylai() {history.back();}
            </script>