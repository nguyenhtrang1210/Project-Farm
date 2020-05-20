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


function isinsert($name,$username,$password,$Email,$SDT,$Diachi,$Thanhpho) {
        //chuẩn bị câu truy vấn
        $connection = connection();
        $sql_insert = "INSERT INTO farm(`name`, `username`,`password`,`Email`,`SDT`,`Diachi`,`Thanhpho`) 
                VALUES('$name','$username','$password','$Email','$SDT','$Diachi','$Thanhpho')";
        //gán giá trị cho các tham số trong câu truy vấn
        $is_insert = mysqli_query($connection, $sql_insert);
}


function sosanh($username,$password)
{
    $kiemtra=false;
    $connection = connection();
    $sql_select = "SELECT * FROM farm";
    $results = mysqli_query($connection, $sql_select);
//kiểm tra xem có bản ghi nào trả về từ câu truy vấn select hay ko
    if (mysqli_num_rows($results) > 0) {
        //lấy ra được dữ liệu mong muốn,
//    cần chú ý phải truyền hằng MYSQLI_ASSOS để có thể trả về 1 mảng
//    kết hợp
        $farms = mysqli_fetch_all($results, MYSQLI_ASSOC);
        //lặp và hiển thị ra các thông tin
        foreach ($farms as $farm) {
            if ($username==$farm['username'] && $password==$farm['password'])
            {$kiemtra=true;
            break;
            }
        }
    }
    return $kiemtra;
}

function kiemtra($username)
{
    $taikhoan=true;
    $connection = connection();
    $sql_select = "SELECT * FROM farm";
    $results = mysqli_query($connection, $sql_select);
//kiểm tra xem có bản ghi nào trả về từ câu truy vấn select hay ko
    if (mysqli_num_rows($results) > 0) {
        //lấy ra được dữ liệu mong muốn,
//    cần chú ý phải truyền hằng MYSQLI_ASSOS để có thể trả về 1 mảng
//    kết hợp
        $farms = mysqli_fetch_all($results, MYSQLI_ASSOC);
        //lặp và hiển thị ra các thông tin
        foreach ($farms as $farm) {
           if ($username==$farm['username'])
           {$taikhoan=false;
           break;}
        }
    }
    return $taikhoan;
}
function laythongtin ($username)
{
    $connection = connection();
    $sql_select = "SELECT * FROM farm";
    $results = mysqli_query($connection, $sql_select);
//kiểm tra xem có bản ghi nào trả về từ câu truy vấn select hay ko
    if (mysqli_num_rows($results) > 0) {
        //lấy ra được dữ liệu mong muốn,
//    cần chú ý phải truyền hằng MYSQLI_ASSOS để có thể trả về 1 mảng
//    kết hợp
        $farms = mysqli_fetch_all($results, MYSQLI_ASSOC);
        //lặp và hiển thị ra các thông tin
        foreach ($farms as $farm) {
            if ($username==$farm['username'])
            {
                $_SESSION['name']=$farm['name'];
                $_SESSION['username']=$farm['username'];
                $_SESSION['Email']=$farm['Email'];
                $_SESSION['SDT']=$farm['SDT'];
                $_SESSION['Diachi']=$farm['Diachi'];
                $_SESSION['Thanhpho']=$farm['Thanhpho'];
            break;}

        }
    }

}
