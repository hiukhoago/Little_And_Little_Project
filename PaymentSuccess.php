<?php
    include 'Database.php';
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
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css"/>
</head>
<body class ="body">
    <?php include ($level."Header.php") ?>
    <main class ="main">
        <div class="background">
            <img class="thanhtoanthanhcong" src="./img/text-thanhtoanthanhcong.png">
            <img class="thangdeokinh" src="./img/ThangDeoKinh.png">
            <div class="khung-payment-success">
                <img class = "bangthanhtoanthanhcong" src="./img/bangchitietsukien.png">
                <div class="list-ve">
                    <div class="card-deck-ve">
                        <div class="card-ve">
                            <img class="card-img-top1" src="./img/maqr.png" alt="Card image">
                            <div class="card-body">
                                <h4 class="card-title1">ALT20210501</h4>
                                <div class="ticket-address">VÉ CỔNG</div>
                                <div class="bagach">---</div>
                                <div class="use-date">Ngày sử dụng: 31/05/2021</div>
                                <img src="./img/tick.png" class="tick">
                              </div>
                        </div>
                        <div class="card-ve">
                            <img class="card-img-top1" src="./img/maqr.png" alt="Card image">
                            <div class="card-body">
                                <h4 class="card-title1">ALT20210501</h4>
                                <div class="ticket-address">VÉ CỔNG</div>
                                <div class="bagach">---</div>
                                <div class="use-date">Ngày sử dụng: 31/05/2021</div>
                                <img src="./img/tick.png" class="tick">
                              </div>
                        </div>
                        <div class="card-ve">
                            <img class="card-img-top1" src="./img/maqr.png" alt="Card image">
                            <div class="card-body">
                                <h4 class="card-title1">ALT20210501</h4>
                                <div class="ticket-address">VÉ CỔNG</div>
                                <div class="bagach">---</div>
                                <div class="use-date">Ngày sử dụng: 31/05/2021</div>
                                <img src="./img/tick.png" class="tick">
                              </div>
                        </div>
                        <div class="card-ve">
                            <img class="card-img-top1" src="./img/maqr.png" alt="Card image">
                            <div class="card-body">
                                <h4 class="card-title1">ALT20210501</h4>
                                <div class="ticket-address">VÉ CỔNG</div>
                                <div class="bagach">---</div>
                                <div class="use-date">Ngày sử dụng: 31/05/2021</div>
                                <img src="./img/tick.png" class="tick">
                              </div>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn-previous-ve"></button>
                <button type="button" class="btn-next-ve"></button>
                <div class="text-soluongve">Số lượng: 12 vé</div>
                <div class="text-trang">Trang 1/3</div>
            </div>
            <button class="btn-taive"></button>
            <button class="btn-guiemail"></button>
        </div>
    </main>
</body>
</html>