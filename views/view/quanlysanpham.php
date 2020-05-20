<?php
session_start();
require_once"../layouts/header.php";
require_once "../../configs/truycapuser.php";
if (!isset($_SESSION['admin']))
{
    header("Location: login-admin.php");
    exit();
}
?>

            <table cellspacing="0" cellpadding="8" border="1" style="margin-left: 15%">
                <tr>
                    <th>Tên sản phẩm: </th>
                    <th>Sản lượng</th>
                    <th>Giá bán</th>
                    <th>Chú thích </th>
                    <th>Thời gian thu hoạch </th>
                    <th>Người bán</th>
                    <th>SDT </th>
                    <th>Email </th>
                    <th>Thành phố </th>
                    <th>Địa chỉ </th>
                    <th>Ngày đăng</th>
                </tr>
                <?php
                $connection = connection();
                $sql_select = "SELECT * FROM kho ";
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
                        <td><?php echo $khocuatoi['thoigianthuhoach']; ?></td>
                        <td><?php echo $khocuatoi['name']; ?></td>
                        <td><?php echo $khocuatoi['SDT']; ?></td>
                        <td><?php echo $khocuatoi['Email']; ?></td>
                        <td><?php echo $khocuatoi['Thanhpho']; ?></td>
                        <td><?php echo $khocuatoi['Diachi']; ?></td>
                        <td><?php
                            $created_at =
                                date('d-m-Y H:i:s', strtotime($khocuatoi['ngaydang']));
                            echo $created_at;
                            ?></td>
                        <td>
                            <a href="Xoasanpham.php?id=<?php echo $khocuatoi['id']?>">Xóa sản phẩm</a>
                        </td>
                        <td>
                            <a  href="nhapthongtinsale.php?id=<?php echo $khocuatoi['id']?>">Sale</a>
                        </td>
                    </tr>

                <?php endforeach; ?>
                <tr>
                    <td colspan="6"><button style="background: greenyellow" ><a href="create-farm.php" style="text-decoration: none">Tạo người dùng</a></button></td>
                </tr>
                <tr>
                    <td colspan="6"><button style="background: greenyellow" ><a href="quanlyuser.php" style="text-decoration: none">Quản lý người dùng</a></button></td>
                </tr>
            </table>



<?php
require_once"../layouts/footer.php";
?>


