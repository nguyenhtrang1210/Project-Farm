<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
require_once "../layouts/header.php";
?>
<div style="text-align: center">
<header>
    <title>Hóa đơn</title>
    <link href="../../assets/css/indexcss.css" rel="stylesheet">
</header>
<div style="color: green;font-size: 30px">Hóa đơn </div>
<table>
    <?php
    require_once "../../controllers/inhoadon.php";
    ?>
</table>
                <form method="post">
                 Nhập mã khuyến mại (nếu có):<br>
                <input type="text" name="nhapmakm" value=""> <br><input type="submit" name="xacnhan" value="Xuât">
                </form>
<div style="color: black">
<?php
if (isset($result))
    echo "Tổng tiền của bạn là: $result đồng";

?>
</div>
<div style="font-size: 24px;color: green">
    Cảm ơn đã sử dụng dịch vụ của chúng tôi!!
</div>
    <button style="background: lawngreen;width: 100px;height: 55px; margin-left: 30px"><a href="index.php">Quay lại trang chủ</a></button>
</div>
