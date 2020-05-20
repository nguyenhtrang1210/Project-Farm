<?php
const DB_HOST = 'localhost';
const DB_USERNAME = 'root';
const DB_PASSWORD = '';
const DB_NAME = 'farmer40';
const DB_PORT = 3306;

function connection()
{
    $connection = mysqli_connect(DB_HOST, DB_USERNAME,
        DB_PASSWORD, DB_NAME, DB_PORT);

//nếu kết nối không thành công thì hiển thị thông báo lỗi
    if (!$connection) {
        die("Kết nối thất bại. Chi tiết lỗi: " . mysqli_connect_error());
    }
    return $connection;
}

function themsanpham($name,$username,$Email,$SDT,$Diachi,$Thanhpho,$tensp,$sanluong,$giaban,$thoigianthuhoach,$chuthich)
{
    //chuẩn bị câu truy vấn
    $connection = connection();
    $sql_insert = "INSERT INTO kho(`name`,`username`,`Email`,`SDT`,`Diachi`,`Thanhpho`,`tensp`,`sanluong`,`giaban`,`thoigianthuhoach`,`chuthich`) 
                VALUES('$name','$username','$Email','$SDT','$Diachi','$Thanhpho','$tensp','$sanluong','$giaban'.'$thoigianthuhoach','$chuthich')";
    //gán giá trị cho các tham số trong câu truy vấn
    $is_insert = mysqli_query($connection, $sql_insert);
}




