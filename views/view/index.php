<?php
session_start();
if (!isset($_SESSION['username']))
{
    header("Location: login.php");
    exit();
}
require_once"../layouts/header.php";
?>
<header>
    <title>Trang chủ</title>
    <link href="../../assets/css/indexcss.css" rel="stylesheet">
</header>
<table cellpadding="10">
    <tr>
        <td style="background-color: darkorange;height: 100px">
           <div style="height: 200px">
               <h2 style="color: green">WELCOME</h2>
               <?php
               echo  $_SESSION['name'];
               ?>
               <br>
               <br>
               <button style="background: greenyellow;height: 30px;width: 200px;" > <a href="Dangsp.php" style="text-decoration: none ">Đăng nông sản</a></button>
               <br><br>
               <button style="background: greenyellow;height: 30px;width: 200px;" > <a href="sanphamcuatoi.php" style="text-decoration: none ">Sản phẩm của tôi</a></button>
               <form action="" method="post">

                   <br></br>
                   <input type="submit" name="logout" value="Đăng xuất">
               </form>
               <?php
               if (isset($_POST['logout']))
               {
                   unset($_SESSION['username']);
                   header("Location: login.php");
                   exit();
               }
               ?>
           </div>
            <br>
            <div style="background: white;text-align: center">
                <div style="background: forestgreen;height: 20px" >
                    GỢI Ý SẢN PHẨM
                </div>
                Gạo nếp <br>
                Gạo tẻ <br>
                Ngô<br>
                Khoai<br>
                Sắn<br>
                cafe<br>
                Chè<br>
        </td>
        <td style="padding-left: 100px; padding-top: none;max-width: 600px">
            <h3>Gạo nếp Lào 27k/kg</h3>
            Gạo Nếp Lào là món ăn truyền thống của người Lào. Gạo cho xôi mềm, vị béo do nếp và đậu phộng tạo nên vị ngon đặc trưng. Khi ăn có cảm giác như chưa kịp nhai thì xôi đã rã trong miệng.
            <br>
            <h3>Gạo nếp hoa vàng 35k/kg</h3>
            tròn, mẩy, trắng muốt và thơm nồng không như hạt nếp thường, nhấm thử thấy ngọt mát lan tỏa đầu lưỡi. Khi nấu lên hạt trong và ráo, mềm, dẻo, ăn có mùi thơm nhẹ hấp dẫn.
            <br>
            <h3>Gạo nếp nương điện biên 40k/kg</h3>
            Gạo Nếp Nương Điện Biên loại Gạo Đặc Sản hạt dài mẩy,mùi thơm nhẹ nhàng. Gạo cho xôi có vị ngọt, dẻo, thơm. Gạo được trồng theo lối canh tác truyền thống từ xưa.
            <br><br>


            <h3>Gạo tám hải hậu 30/kg</h3>
            Gạo Tám Hải Hậu là loại Gạo Đặc Sản của vùng châu thổ sông Hồng. Gạo cho hạt nhỏ, thon dài. Gạo nấu cho cơm thơm, dẻo đậm đà, chất lượng tuyệt hảo lừng danh khắp chốn vùng quê.
            <br>
            <h3>Gạo khang dân 13k/kg</h3>
            Gạo Khang Dân hạt nhỏ thon, trắng trong, ít gãy.Gạo nấu lên cho cơm hơi khô không bị bết, thích hợp cho những ai thích ăn cơm chan canh.Gạo dùng cho các khu công nghiệp và làm bánh.
            <br><h3>Gạo tám điện biên 21k/kg</h3>
            Gạo Tám Điện Biên vốn là một loại GẠO ĐẶC SẢN của vùng tây bắc.Gạo Tám Điện Biên cho hương thơm tự nhiên, hạt gạo mẩy, bầu bĩnh, khi nấu cho cơm dẻo, thơm bùi, vẫn ngon khi cơm nguội.
            <br><h3>Gạo bắc hương Organic 35k/1 cân</h3>
            Bắc Hương Organic là Gạo sạch cao cấp được chế biến từ nguồn thóc lúa được trồng và chăm sóc theo phương thức sản xuất sạch hữu cơ, không sử dụng phân bón, hóa chất độc hại cho sức khỏe con người.
            <br><br>


            <h3>Ngô nếp bắp 4k/bắp</h3>
            thơm, ngon, dẻo hơn so với những nơi khác, cùi nhỏ, nhiều hạt Thành phần dinh dưỡng trong ngô nếp: Nước, protein, carbohydrate, chất xơ, đường, không chứa cholesterol, giàu canxi, sắt, magie, photpho, kali, kẽm, vitamin C, B1, B2,, Pantothenic acid, folic, vitamin A, E, K,...
            <br><h3>Ngô ngọt hạt 45k/kg</h3>
            ngô chứa nhiều chất xơ giúp bảo vệ hệ tiêu hóa khỏe mạnh, vitamin A tăng cường thị lực và làm đẹp da. Ngoài ra, ngô ngọt còn có vitamin E giúp da căng mọng, mịn màng, làm chậm quá trình lão hóa. Chất sắt cải thiện tình trạng thiếu máu giảm bớt sự hấp thụ cholesterol trong cơ thể
            <br><h3>Ngô ngọt bắp 7k/ 1 bắp</h3>
            ngô có hàm lượng đường cao. Ngô ngọt là kết quả xuất hiện tự nhiên của đặc tính lặn của gen điều khiển việc chuyển đường thành tinh bột bên
            <br><br>

            <h3>Khoai lang mật 45k/kg</h3>
            khoai lang mật có vị thơm, mềm, ngọt và tươm mật nên có giá trị cao hơn so với các loại khoai lang khác, trong khoai ít tinh bột giúp giảm cân, ngoài ra có  Magie, Kali, Vitamin A và chất xơ,Vitamin B, C…
            <br><h3>Khoai lang nhật  40k/kg</h3>
            khoai lang nhật  có hình dáng thon, dài. Vỏ màu tím, ruột vàng, hương vị dịu nhẹ, bùi, chiếm được cảm tình nhiều người giàu chất xơ còn dồi dào vitamin A, B6, C...rất tốt cho cơ thể. Bên cạnh đó, khoai lang Nhật có vitamin chống nhiễm mỡ rất hiệu quả.
            <br><h3>Khoai tây 20k/kg</h3>
            Khoai tròn màu vàng đẹp mắt, chứa nhiều thành phần dinh dưỡng có thể bổ sung năng lượng cho cơ thể, ngoài ra chứa  vitamin C, vitamin B6, kali, magie, kẽm và photpho,...
            <br><br>

            <h3>Chè Nõn Tôm 750k/1kg</h3>
            Chè mõm tôm được sử dụng 1 nõn tôm trên 1 lá sẽ đem lại ngon và sạch nhất. sau đó chè được sao bằng phương pháp thủ của các nghệ nhân sao chè thực thụ đã tạo nên sản phẩm chè nõn tôm có hương cốm non nồng nàn ,quyến rũ; nước trà trong, xanh sánh; vị chè chát dịu, ngọt thanh, đượm đà và vô cùng sâu lắng
            <br><h3>Chè Tân Cương Truyền Thống 70k/200g</h3>
            Chè Tân Cương Truyền Thống  là Trà  được lựa chọn từ những búp chè ngon được hái đạt chuẩn 1 tôm 2 lá non tại đồi chè Tân Cương Thái Nguyên nổi tiếng với quy trình chăm sóc chuẩn. Chè được sao bằng tay theo phương pháp thủ công truyền thống với bí quyết chỉnh lửa, lấy hương của các nghệ nhân sao chè đã tạo nên những cánh trà xoăn tít, cong như móc câu đồng thời cho ra một hương cốm non nồng nàn, nước xanh sánh, vị chát dịu, vị ngọt thanh rất đặc trưng.


        </td>
    </tr>
</div>























</table>
<?php
require_once"../layouts/footer.php";
?>

