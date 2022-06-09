<?php

$loaive = $_GET['loaive'];
$soluong = $_GET['soluong'];
$ngaysudung = $_GET['ngaysudung'];
$hoten = $_GET['hoten'];
$sodienthoai = $_GET['sodienthoai'];
$email = $_GET['email'];

if ($soluong == "" || empty($soluong) || empty($ngaysudung) || empty($hoten) || empty($sodienthoai) || empty($email)) {
    header('location:Home.php?message=Vui lòng nhập đầy đủ thông tin');
}

?>