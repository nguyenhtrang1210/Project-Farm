<?php
$id=$_GET['id'];

const DB_HOST = 'localhost';
const DB_USERNAME = 'root';
const DB_PASSWORD = '';
const DB_NAME = 'farmer40';
const DB_PORT = 3306;
$connection = mysqli_connect(DB_HOST, DB_USERNAME,
    DB_PASSWORD, DB_NAME, DB_PORT);
$sql_delete = "DELETE FROM farm WHERE id = '$id'";
$is_delete = mysqli_query($connection, $sql_delete);


$sql_select = "SELECT * FROM farm WHERE id='$id'";
$results = mysqli_query($connection, $sql_select);
$farms = mysqli_fetch_all($results, MYSQLI_ASSOC);
foreach ($farms as $farm)
{
    $username=$farm['username'];
}

$sql_delete = "DELETE FROM kho WHERE username = '$username'";
$is_delete = mysqli_query($connection, $sql_delete);

echo "Xóa thành công <br> <a href='quanlyuser.php'>Quay lại trang quản lý</a>";