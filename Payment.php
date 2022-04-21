<?php
    include 'Database.php';
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
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css"/>
</head>
<body class ="body">
    <?php include ($level."Header.php") ?>
    <main class ="main">
        <div class="background">
            <img class="text-thanhtoan" src="./img/text-thanhtoan.png">
            <img class="nhotocvang" src="./img/NhoTocVang.png">
            <div class = "content">
                <img class="bang1" src="./img/bang1.png">
                <img class="khungnoi" src="./img/khungnoi.png">
                <img class="bang2" src="./img/bang2.png">
                <img class="thongtinthanhtoan" src="./img/thongtinthanhtoan.png">
                <img class="vecong-vegiadinh" src="./img/vecong-vegiadinh.png">
                <form class="formthanhtoan">
                    <div class="thongtinve">
                        <div class=" group-tt">
                            <label>Số tiền thanh toán</label>
                            <input class="sotienthanhtoan-input" type="text" placeholder="  012458963257458">
                        </div>
                        <div class=" group-slv">
                            <label>Số lượng vé</label>
                            <input class="soluongve-input" type="text" placeholder="  4">  <div class="ve">vé</div>
                        </div>
                        <div class="group-nsd">
                            <label>Ngày sử dụng</label>
                            <input class="ngaysudung-input" value='12/4/2022'>
                        </div>
                        <div class=" group-ttlh">
                            <label>Thông tin liên hệ</label>
                            <input class="thongtinlienhe-input" type="text" placeholder="  Trần Hiếu Khoa">
                        </div>
                        <div class="group-dt">
                            <label>Điện thoại</label>
                            <input class="dienthoai-input" type="number" placeholder="  0355501613">
                        </div>
                        <div class=" group-email">
                            <label>Email</label>
                            <input class="email-input" type="text" placeholder="  tranhieukhoa442220@gmail.com">
                        </div>
                    </div>
                    <div class = thanhtoan>
                        <div class=" group1">
                            <label>Số thẻ</label>
                            <input class="sothe" type="text" placeholder="  012458963257458">
                        </div>
                        <div class=" group2">
                            <label>Họ tên chủ thẻ</label>
                            <input class="hotenchuthe" type="text" placeholder="  Trần Hiếu Khoa">
                        </div>
                        <div class="group3">
                            <label>Ngày hết hạn</label>
                        <input class="ngayhethan" type="date" placeholder="  8/2030">
                        </div>
                        <div class="group4">
                            <label>CVV/CVC</label>
                            <input class="cvv-cvc" type="number" placeholder="  ****">
                        </div>
                    </div>
                    <button type = "submit" class="nutthanhtoan"><a href ="<?php echo $level.page_path?>PaymentSuccess.php">Thanh toán</a></button>
                </form>
            </div>
        </div>
    </main>
</body>
</html>