<?php
session_start();
if (!isset($_SESSION['username']))
{
    header("Location: login.php");
    exit();
}
require_once"../layouts/header.php";
require_once "../../controllers/hotro.php"
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
            <h2 style="color: green">Liên hệ:</h2>
            <div style="max-width: 350px">
                Cảm ơn quý khách đã ghé thăm gian hàng của FARM Vietnam<br>
                Nếu cần thông tin chi tiết, đội ngũ chuyên viên tư vấn của chúng tôi luôn sẵn lòng phục vụ
            </div>
            <br>
            <div style="color: limegreen">
                Công ty FARM Vietnam<br>
                Tel:02-0421-212/123456<br>
                Fax:01-2345-678<br>
                Hotline:09636643145<br>
                Email:famer40@gmail.com
                <br><br>
                <h3>Văn phòng</h3>
                175-Tây Sơn-Đống Đa- Hà Nội
            </div>
            <br>
            <div> Chúng tôi sẽ phản hồi tin nhắn cùng các thắc mắc của các vị <br>nhanh nhất có thể!!</div>

        </td>
    </tr>
    </div>























</table>
<?php
require_once"../layouts/footer.php";
?>

