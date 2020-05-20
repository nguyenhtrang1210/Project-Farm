<?php
session_start();

require_once"../layouts/header.php";
?>
<header>
    <title>Tạo tài khoản</title>
    <link href="../../assets/css/indexcss.css" rel="stylesheet">
</header>
           <form action="" method="post" enctype="multipart/form-data" style="margin-left: 30%;">
               <table border="0" cellpadding="0" cellspacing="5">
                   <tr>
                       <td colspan="2"><h2 style="color: green">Đăng Ký</h2></td>
                   </tr>
                   <tr>
                       <td colspan="2"> <b>Điền đầy đủ thông tin bên dưới để có thể tạo tài khoản</b></td>
                   </tr>
                   <tr>
                       <td class="td-color">
                           Tên tài khoản:
                       </td>
                       <td>
                           <input type="text" name="name" value="">
                       </td>
                   </tr>
                   <tr>
                       <td class="td-color">
                           Tên đang nhập:
                       </td>
                       <td>
                           <input type="text" name="username" value="">
                       </td>
                   </tr>
                   <tr>
                       <td class="td-color">
                           Mật khẩu:
                       </td>
                       <td>
                           <input type="password" name="password" value="">
                       </td>
                   </tr>
                   <tr>
                       <td class="td-color">
                           Xán nhận mật khẩu:
                       </td>
                       <td>
                           <input type="password" name="confirmpassword" value="">
                       </td>
                   </tr>
                   <tr>
                       <td colspan="2"><b>Thêm địa chỉ/liên hệ để thanh toán</b></td>
                   </tr>
                   <tr>
                       <td class="td-color">
                           E-mail:
                       </td>
                       <td>
                           <input type="Email" name="Email" value="">
                       </td>
                   </tr>
                   <tr>
                       <td class="td-color">
                           Số điện thoại:
                       </td>
                       <td>
                           <input type="number" name="SDT" value="">
                       </td>
                   </tr>
                   <tr>
                       <td class="td-color">
                           Địa chỉ:
                       </td>
                       <td>
                           <input type="text" name="Diachi" value="" >
                       </td>
                   </tr>
                   <tr>
                       <td class="td-color">
                           Thành phố:
                       </td>
                       <td>
                           <input type="text" name="thanhpho" value="">
                       </td>
                   </tr>
                   <tr>
                       <td>
                           <a href="#">Điều khoản dịch vụ</a>
                       </td>
                       <td>
                           <input type="checkbox" name="Dieu-khoan" value="1">
                           Tôi đồng ý với điều khoản dịch vụ
                       </td>
                   </tr>
                   <tr>
                       <td>
                           <input type="submit" value="ĐĂNG KÝ" name="submit">
                       </td>
                       <td>
                           <input type="reset" value="Hủy">
                       </td>
                   </tr>
                   <tr>
                       <td colspan="2">
                           <div style="color: red">
                           <?php
                           require_once "../../controllers/create-farm.php";
                           echo "$error";
                           ?>
                       </td>
                   </tr>
               </table>
           </form>

</div>






















<?php
require_once"../layouts/footer.php";
?>

