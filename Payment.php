<?php
include 'Database.php';

$loaive = $_GET['loaive'];
$soluong = $_GET['soluong'];
$ngaysudung = $_GET['ngaysudung'];
$hoten = $_GET['hoten'];
$sodienthoai = $_GET['sodienthoai'];
$email = $_GET['email'];
if ($soluong == "" || empty($soluong) || empty($ngaysudung) || empty($hoten) || empty($sodienthoai) || empty($email)) {
    header('location:Home.php?message=Vui lòng nhập đầy đủ thông tin');
}
if ($_GET['loaive'] == 0) {
    $total = $soluong * 50000;
}
if ($_GET['loaive'] == 1) {
    $total = $soluong * 45000;
}
if ($_GET['loaive'] == 2) {
    $total = $soluong * 75000;
}
if ($_GET['loaive'] == 3) {
    $total = $soluong * 80000;
} else {
    $total = $soluong * 30000;
}
if(isset($_GET['message'])){
    echo "<script>alert('".$_GET['message']."');</script>";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanh toán</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./vendor/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css" />
</head>

<body class="body">
    <?php include($level . "Header.php") ?>
    <main class="main">
        <div class="background">
            <img class="text-thanhtoan" src="./img/text-thanhtoan.png">
            <img class="nhotocvang" src="./img/NhoTocVang.png">
            <div class="content">
                <img class="bang1" src="./img/bang1.png">
                <img class="khungnoi" src="./img/khungnoi.png">
                <img class="bang2" src="./img/bang2.png">
                <img class="thongtinthanhtoan" src="./img/thongtinthanhtoan.png">
                <img class="vecong-vegiadinh" src="./img/vecong-vegiadinh.png">
                <form class="formthanhtoan" action="<?php echo 'PaymentSuccess.php' ?> " method="GET" enctype="multipart/form-data">
                    <div class="thongtinve">
                        <div class=" group-tt">
                            <label>Số tiền thanh toán</label>
                            <input class="sotienthanhtoan-input" name="sotienthanhtoan" type="text" value="<?php echo number_format($total) . " VNĐ"; ?>">
                        </div>
                        <div class=" group-slv">
                            <label>Số lượng vé</label>
                            <input class="soluongve-input" name="soluongve" type="text" value="<?php echo $soluong; ?>">
                            <div class="ve">vé</div>
                        </div>
                        <div class="group-nsd">
                            <label>Ngày sử dụng</label>
                            <input class="ngaysudung-input" name="ngaysudung" value="<?php echo $ngaysudung; ?>">
                        </div>
                        <div class=" group-ttlh">
                            <label>Thông tin liên hệ</label>
                            <input class="thongtinlienhe-input" name="thongtinlienhe" type="text" value="<?php echo $hoten; ?>">
                        </div>
                        <div class="group-dt">
                            <label>Điện thoại</label>
                            <input class="dienthoai-input" name="sodienthoai" type="number" value="<?php echo $sodienthoai; ?>">
                        </div>
                        <div class=" group-email">
                            <label>Email</label>
                            <input class="email-input" name="email" type="text" value="<?php echo $email; ?>">
                        </div>
                    </div>
                    <div class=thanhtoan>
                        <div class=" group1">
                            <label>Số thẻ</label>
                            <input class="sothe" name="sothe" type="text" placeholder="Nhập số thẻ của bạn">
                        </div>
                        <div class=" group2">
                            <label>Họ tên chủ thẻ</label>
                            <input class="hotenchuthe" name="hotenthe" type="text" placeholder=" Nhập họ và tên">
                        </div>
                        <div class="group3">
                            <label>Ngày hết hạn</label>
                            <input class="ngayhethan" name="ngayhethan" type="date">
                        </div>
                        <div class="group4">
                            <label>CVV/CVC</label>
                            <input class="cvv-cvc" name="cvv_cvc" type="number" placeholder="  ****">
                        </div>
                    </div>
                    <button type="submit" class="nutthanhtoan">Thanh toán</button>
                </form>
            </div>
        </div>
    </main>
</body>

</html>