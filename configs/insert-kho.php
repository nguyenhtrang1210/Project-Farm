<?php
const DB_HOST = 'localhost';
const DB_USERNAME = 'root';
const DB_PASSWORD = '';
const DB_NAME = 'farmer40';
const DB_PORT = 3306;


$connection = mysqli_connect(DB_HOST, DB_USERNAME,
    DB_PASSWORD, DB_NAME, DB_PORT);


$sql_insert="INSERT INTO `kho` (`id`, `name`, `username`, `Email`, `SDT`, `Diachi`, `Thanhpho`, `tensp`, `sanluong`, `giaban`, `thoigianthuhoach`, `chuthich`, `ngaydang`) VALUES (NULL, 'linh', 'linh', 'linh', '123', '123', '123', 'gạo nếp', '555', '30', 'đã thu hoạch', 'ádsad', current_timestamp())";
//gán giá trị cho các tham số trong câu truy vấn
$is_insert = mysqli_query($connection, $sql_insert);
if ($is_insert) {
    echo "Insert kho thành công";
} else {
    echo "Insert kho thất bạiiiiiiiiiii";
}


