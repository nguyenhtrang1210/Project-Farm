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
<table cellspacing="0" cellpadding="8" border="1" style="margin-left: 30%">
    <tr>
        <th>name</th>
        <th>username</th>
        <th>Email</th>
        <th>SDT</th>
        <th>Địa chỉ </th>
        <th>Hành động</th>
    </tr>
        <?php
        $connection = connection();
        $sql_select = "SELECT * FROM farm";
        $results = mysqli_query($connection, $sql_select);
        $farms = mysqli_fetch_all($results, MYSQLI_ASSOC);
        foreach ($farms as $farm):
            ?>
            <tr>
                <td>
                    <?php echo $farm['name']; ?>
                </td>
                <td>
                    <?php echo $farm['username'];

                    ?>
                </td>
                <td>
                    <?php echo $farm['Email']; ?>
                </td>
                <td>
                    <?php echo $farm['SDT']; ?>
                </td>
                <td>
                    <?php echo $farm['Diachi']; ?>
                </td>
                <td>
                    <a href="Xoataikhoan.php?id=<?php echo $farm['id']?>">Xóa tài khoản</a>
                </td>
            </tr>
        <?php endforeach; ?>
    <tr>
        <td colspan="6"><button style="background: greenyellow" ><a href="create-farm.php" style="text-decoration: none">Tạo người dùng</a></button></td>
    </tr>
    <tr>
        <td colspan="6"><button style="background: greenyellow" ><a href="quanlysanpham.php" style="text-decoration: none">Quản lý sản phẩm</a></button></td>
    </tr>
</table>
