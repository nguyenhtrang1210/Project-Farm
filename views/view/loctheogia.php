<?php
session_start();
if (!isset($_SESSION['username']))
{
    header("Location: login.php");
    exit();
}
require_once"../layouts/header.php";
require_once "../../configs/truycapkho.php";
if (isset($_POST['0-50']))
{
    $giatienmin=0;
    $giatienmax=50;
}
if (isset($_POST['50-100']))
{
    $giatienmin=51;
    $giatienmax=100;
}if (isset($_POST['100-200']))
{
    $giatienmin=101;
    $giatienmax=200;
}if (isset($_POST['200-500']))
{
    $giatienmin=200;
    $giatienmax=500;
}
?>
<header>
    <title>Sản phẩm</title>
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
            <table cellspacing="0" cellpadding="8" >
                <tr>
                    <td colspan="3">
                        <h3>Mức giá</h3>
                        <a href="loctheogia.php" style="margin-left: 20px;text-decoration: none">0-50k</a>
                        <a href="loctheogia.php" style="margin-left: 20px;text-decoration: none">50-100k</a>
                        <a href="loctheogia.php" style="margin-left: 20px;text-decoration: none">100-200k</a>
                        <a href="loctheogia.php" style="margin-left: 20px;text-decoration: none">200-500k</a>
                    </td>
                </tr>
                <tr>
                    <th></th>
                    <th>Tên sản phẩm</th>
                    <th>Sản lượng</th>
                    <th>Giá bán</th>
                    <th>Thời gian thu hoạch </th>
                    <th>Ngày đăng</th>
                    <th></th>
                </tr>
                <?php
                $connection = connection();
                $sql_select = "SELECT * FROM kho WHERE giaban > '$giatienmin'";
                $results = mysqli_query($connection, $sql_select);
                $khos = mysqli_fetch_all($results, MYSQLI_ASSOC);
                foreach ($khos as $kho):
                    ?>
                     <?php if ($kho['tensp']=="gạo nếp"):?>
                    <tr>
                        <td>
                            <?php echo $kho['tensp']; ?>
                        </td>
                        <td>
                            <?php echo $kho['sanluong']; ?>kg
                        </td>
                        <td>
                            <?php echo $kho['giaban']; ?>k/kg
                        </td>
                        <td>
                            <?php echo $kho['thoigianthuhoach']; ?>
                        </td>
                        <td>
                            <?php
                            $created_at =
                                date('d-m-Y H:i:s', strtotime($kho['ngaydang']));
                            echo $created_at;
                            ?>
                        </td>
                        <td>
                            <a href="Chitiet.php?id=<?php echo $kho['id']?>">Xem chi tiết</a>
                        </td>
                    </tr>
                    <?php endif; ?>
                <?php endforeach; ?>
            </table>
        </td>
    </tr>
    </div>























</table>
<?php
require_once"../layouts/footer.php";
?>


