<?php
require_once "../../configs/truycapkho.php";
$error='';
if (isset($_POST['Dangban']))
{
    $tensp=$_POST['tensp'];
    $sanluong=$_POST['sanluong'];
    $giaban=$_POST['giaban'];
    $thoigianthuhoach=$_POST['thoigianthuhoach'];
    $chuthich=''.$_POST['chuthich'];

    if ($tensp==0)
    {
        $error='chọn nông sản cần bán';
    }
    else if ($sanluong<=0 || $sanluong=='')
    {
        $error="Nhập sản lượng";
    }
    else if ($giaban<0 || $giaban=='')
    {
        $error="Vui lòng nhập giá bán";
    }
    else
    {

       if ($tensp==1){
           $tensp="Gạo nếp";
       }
       else if ($tensp==2)
       {
           $tensp="Gạo tẻ";
       } else if ($tensp==3)
       {
           $tensp="Ngô";
       } else if ($tensp==4)
       {
           $tensp="Khoai";
       } else if ($tensp==5)
       {
           $tensp="Sắn";
       }else if ($tensp==6)
       {
           $tensp="cafe";
       }else if ($tensp==7)
       {
           $tensp="Chè";
       }

       if ($thoigianthuhoach==0)
       {
           $thoigianthuhoach="Đã thu hoạch";
       }
       else if ($thoigianthuhoach==1)
       {
           $thoigianthuhoach="Còn 1 tháng";
       } else if ($thoigianthuhoach==2)
       {
           $thoigianthuhoach="Còn 2 tháng";
       } else if ($thoigianthuhoach==3)
       {
           $thoigianthuhoach="Còn 3 tháng";
       } else if ($thoigianthuhoach==4)
       {
           $thoigianthuhoach="Còn 4 tháng";
       } else if ($thoigianthuhoach==5)
       {
           $thoigianthuhoach="Còn 5 tháng";
       } else if ($thoigianthuhoach==6)
       {
           $thoigianthuhoach="Còn 6 tháng";
       } else if ($thoigianthuhoach==7)
       {
           $thoigianthuhoach="Còn 7 tháng";
       } else if ($thoigianthuhoach==8)
       {
           $thoigianthuhoach="Còn 8 tháng";
       } else if ($thoigianthuhoach==9)
       {
           $thoigianthuhoach="Còn 9 tháng";
       } else if ($thoigianthuhoach==10)
       {
           $thoigianthuhoach="Còn 10 tháng";
       } else if ($thoigianthuhoach==11)
       {
           $thoigianthuhoach="Còn 11 tháng";
       } else if ($thoigianthuhoach==12)
       {
           $thoigianthuhoach="Còn 12 tháng";
       }
        $name    = $_SESSION['name'];
        $username = $_SESSION['username'];
        $Email=$_SESSION['Email'];
        $SDT= $_SESSION['SDT'];
        $Diachi= $_SESSION['Diachi'];
        $Thanhpho= $_SESSION['Thanhpho'];
            //chuẩn bị câu truy vấn
            $connection = connection();
        $sql_insert="INSERT INTO `kho` (`id`, `name`, `username`, `Email`, `SDT`, `Diachi`, `Thanhpho`, `tensp`, `sanluong`, `giaban`, `thoigianthuhoach`, `chuthich`, `ngaydang`) VALUES (NULL, '$name', '$username', '$Email', '$SDT', '$Diachi', '$Thanhpho', '$tensp', '$sanluong', '$giaban', '$thoigianthuhoach', '$chuthich', current_timestamp())";

        //gán giá trị cho các tham số trong câu truy vấn
             $is_insert = mysqli_query($connection, $sql_insert);
            echo "<br />";
            if ($is_insert) {
            echo "Đang thành công";
             } else {
            echo "Đăng thất bại";
            }

    }

}