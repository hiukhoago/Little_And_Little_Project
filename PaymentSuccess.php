<?php
include 'Database.php';

$soluong = $_GET['soluongve'];
$ngaysudung = $_GET['ngaysudung'];
$hoten = $_GET['thongtinlienhe'];
$sodienthoai = $_GET['sodienthoai'];
$email = $_GET['email'];
$sothe = $_GET['sothe'];
$hotenchuthe = $_GET['hotenthe'];
$ngayhethan = $_GET['ngayhethan'];
$cvv_cvc = $_GET['cvv_cvc'];
$sotienthanhtoan = $_GET['sotienthanhtoan'];


$date = date('d');
$month = date('m');
$year = date('Y');

$datetime = date('Ymd');
$code_ticket = 'ALT' . $datetime;

$add_event_sql = "INSERT INTO bills (fullname_buy,amount,date_create,date_delete,date_update,total_price,status)
    VALUE ('" . $hoten . "', '" . $soluong . "','" . $datetime . "', '" . NULL . "', '" . NULL . "', '" . $sotienthanhtoan . "',1)";

$result = $connect->prepare($add_event_sql);
$result->execute();
echo "<script>alert('Thanh toán thành công');</script>";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanh toán thành công</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./vendor/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css" />
</head>

<body class="body">
    <?php include($level . "Header.php") ?>
    <main class="main">
        <div class="background">
            <img class="thanhtoanthanhcong" src="./img/text-thanhtoanthanhcong.png">
            <img class="thangdeokinh" src="./img/ThangDeoKinh.png">
            <div class="khung-payment-success">
                <img class="bangthanhtoanthanhcong" src="./img/bangchitietsukien.png">
                <div class="list-ve">
                    <div class="card-deck-ve">
                        <?php for ($i = 0; $i < $soluong; $i++) { ?>
                            <div class="card-ve">
                                <img class="card-img-top1" src="./img/maqr.png" alt="Card image">
                                <div class="card-body">
                                    <h4 class="card-title1"><?php echo $code_ticket; ?></h4>
                                    <div class="ticket-address">VÉ CỔNG</div>
                                    <div class="bagach">---</div>
                                    <div class="use-date">Ngày sử dụng: <?php echo $date . '/' . $month . '/' . $year ?></div>
                                    <img src="./img/tick.png" class="tick">
                                </div>
                            </div>

                        <?php } ?>
                    </div>
                </div>
                <button type="button" class="btn-previous-ve"></button>
                <button type="button" class="btn-next-ve"></button>
                <div class="text-soluongve">Số lượng: <?php echo '' . $soluong; ?></div>
                <div class="text-trang">Trang 1/1</div>
            </div>
            <button class="btn-taive"></button>
            <button class="btn-guiemail"></button>
        </div>
    </main>
</body>

</html>