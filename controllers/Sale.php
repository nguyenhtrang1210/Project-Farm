<?php
    if (isset($_POST['saleclick'])) {
        $sale=$_POST['sale'];
        $sql_update = "UPDATE kho SET `giamoi` = $sale WHERE id ='$id' ";
        $is_update = mysqli_query($connection, $sql_update);

        $sql_update = "UPDATE kho SET `sale` = 1 WHERE id ='$id' ";
        $is_update = mysqli_query($connection, $sql_update);
    }
    ?>

