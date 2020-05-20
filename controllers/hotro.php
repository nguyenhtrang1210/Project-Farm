<?php
$error='';
$result='';
if (isset($_POST['guithacmac']))
{
    $thacmac=$_POST['thacmac'];
    if ($thacmac=='')
    {
        $error='vui lòng nhập câu hỏi';
    }
}

?>