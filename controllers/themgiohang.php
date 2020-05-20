<?php
require_once "../../configs/truycapkho.php";
$tongtien=0;
$thanhtien=0;
$connection = connection();
if (!isset($_SESSION['id1']))
    {
        echo "Giỏ hàng trống";
    }
elseif (isset($_SESSION['id1']))
{
    $id1=$_SESSION['id1'];
    $sql_select = "SELECT * FROM kho  WHERE id = '$id1'";
    $results = mysqli_query($connection, $sql_select);
    $khos = mysqli_fetch_all($results, MYSQLI_ASSOC);
    foreach ($khos as $kho)
    {
        if ($kho['giamoi'] != 0) {
            $thanhtien = $kho['sanluong'] * $kho['giamoi'];
        } else {
            $thanhtien = $kho['sanluong'] * $kho['giaban'];
        }
        $tongtien += $thanhtien;
        echo "Tên sản phẩm: " . $kho['tensp'] . " - sản lượng: " . $kho['sanluong'] . "kg - Thanh tiền: $thanhtien <br>";
    }
         if (isset($_SESSION['id2']))
         {
             $id2=$_SESSION['id2'];
              $sql_select = "SELECT * FROM kho  WHERE id = '$id2'";
              $results = mysqli_query($connection, $sql_select);
             $khos = mysqli_fetch_all($results, MYSQLI_ASSOC);
             foreach ($khos as $kho)
             {
                 if ($kho['giamoi'] != 0) {
                        $thanhtien = $kho['sanluong'] * $kho['giamoi'];
                   } else {
                     $thanhtien = $kho['sanluong'] * $kho['giaban'];
                   }
                  $tongtien += $thanhtien;
                  echo "Tên sản phẩm: " . $kho['tensp'] . " - sản lượng: " . $kho['sanluong'] . "kg - Thanh tiền: $thanhtien <br>";
              }
             if (isset($_SESSION['id3']))
             {
                 $id3=$_SESSION['id3'];
                 $sql_select = "SELECT * FROM kho  WHERE id = '$id3'";
                 $results = mysqli_query($connection, $sql_select);
                 $khos = mysqli_fetch_all($results, MYSQLI_ASSOC);
                 foreach ($khos as $kho)
                 {
                     if ($kho['giamoi'] != 0) {
                         $thanhtien = $kho['sanluong'] * $kho['giamoi'];
                     } else {
                         $thanhtien = $kho['sanluong'] * $kho['giaban'];
                     }
                     $tongtien += $thanhtien;
                     echo "Tên sản phẩm: " . $kho['tensp'] . " - sản lượng: " . $kho['sanluong'] . "kg - Thanh tiền: $thanhtien <br>";
                 }
                 if (isset($_SESSION['id4']))
                 {
                     $id4=$_SESSION['id4'];
                     $sql_select = "SELECT * FROM kho  WHERE id = '$id4'";
                     $results = mysqli_query($connection, $sql_select);
                     $khos = mysqli_fetch_all($results, MYSQLI_ASSOC);
                     foreach ($khos as $kho)
                     {
                         if ($kho['giamoi'] != 0) {
                             $thanhtien = $kho['sanluong'] * $kho['giamoi'];
                         } else {
                             $thanhtien = $kho['sanluong'] * $kho['giaban'];
                         }
                         $tongtien += $thanhtien;
                         echo "Tên sản phẩm: " . $kho['tensp'] . " - sản lượng: " . $kho['sanluong'] . "kg - Thanh tiền: $thanhtien <br>";
                     }
                     if (isset($_SESSION['id5']))
                     {
                         $id5=$_SESSION['id5'];
                         $sql_select = "SELECT * FROM kho  WHERE id = '$id5'";
                         $results = mysqli_query($connection, $sql_select);
                         $khos = mysqli_fetch_all($results, MYSQLI_ASSOC);
                         foreach ($khos as $kho)
                         {
                             if ($kho['giamoi'] != 0) {
                                 $thanhtien = $kho['sanluong'] * $kho['giamoi'];
                             } else {
                                 $thanhtien = $kho['sanluong'] * $kho['giaban'];
                             }
                             $tongtien += $thanhtien;
                             echo "Tên sản phẩm: " . $kho['tensp'] . " - sản lượng: " . $kho['sanluong'] . "kg - Thanh tiền: $thanhtien <br>";
                         }
                     }
                 }
             }
          }
}
?>
<?php
if (isset($_POST['xacnhan'])) {
    if (isset($_POST['nhapmakm'])) {
        $makm = $_POST['nhapmakm'];

        if ($makm == "GIAM10") {
            $tongtien = $tongtien - $tongtien / 10;
            ceil($tongtien);
        }
        if ($makm == "GIAM20") {
            $tongtien = $tongtien - $tongtien / 20;
            ceil($tongtien);
        }
        if ($makm == "GIAM30") {
            $tongtien = $tongtien - $tongtien / 30;
            ceil($tongtien);
        }
        if ($makm == "GIAM40") {
            $tongtien = $tongtien - $tongtien / 40;
            ceil($tongtien);
        }
        if ($makm == "GIAM50") {
            $tongtien = $tongtien - $tongtien / 50;
            ceil($tongtien);
        }
        $result = $tongtien;
        $_SESSION['hoadon'] = $result;
        echo $_SESSION['hoadon'];
    }
    if (isset($_POST['xoa'])) {
        if (isset($_SESSION['id1'])) ;
        {
            unset($_SESSION['id1']);
        }
        if (isset($_SESSION['id2'])) ;
        {
            unset($_SESSION['id2']);
        }
        if (isset($_SESSION['id3'])) ;
        {
            unset($_SESSION['id3']);
        }
        if (isset($_SESSION['id4'])) ;
        {
            unset($_SESSION['id4']);
        }
        if (isset($_SESSION['id5'])) ;
        {
            unset($_SESSION['id5']);
        }
        $tongtien = 0;
        $thanhtien = 0;

    }
}
?>
