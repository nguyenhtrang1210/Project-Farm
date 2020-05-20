<?php
$id=$_GET['id'];

const DB_HOST = 'localhost';
const DB_USERNAME = 'root';
const DB_PASSWORD = '';
const DB_NAME = 'farmer40';
const DB_PORT = 3306;
$connection = mysqli_connect(DB_HOST, DB_USERNAME,
    DB_PASSWORD, DB_NAME, DB_PORT);
$sql_delete = "DELETE FROM kho WHERE id = '$id'";
$is_delete = mysqli_query($connection, $sql_delete);
echo "Xóa thành công <br> <a href='quanlysanpham.php'>Quay lại trang quản lý</a>";