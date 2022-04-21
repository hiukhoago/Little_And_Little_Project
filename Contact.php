<?php
    include 'Database.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liên hệ</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./vendor/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css"/>
</head>
<body class ="body">
    <?php include ($level."Header.php") ?>
    <main class ="main">
        <div class="background">
            <img class="text-lienhe" src="./img/text-lienhe.png">
            <img class="thangtocnau" src="./img/ThangTocNau.png">
            <div class = "lienhe">
                <div class = "bang-lienhe-1">
                    <img class="bang1" src="./img/bang-lienhe1.png">
                    <div class="paragraph-lienhe">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ac
                        mollis justo. Etiam volutpat tellus quis risus volutpat, ut posuere ex facilisis.</div>
                    <form class="form-contact">
                        <div class="group-contact1">
                            <input type="text" class="input-ten" placeholder="Tên">
                            <input type="text" class="input-email" placeholder="Email">
                        </div>
                        <div class="group-contact2">
                            <input type="text" class="input-sdt" placeholder="Số điện thoại">
                            <input type="text" class="input-diachi" placeholder="Địa chỉ">
                        </div>
                    <textarea class="input-loinhan" placeholder="Lời nhắn"></textarea>
                    <button type = "submit" class="nutguilienhe">Gửi liên hệ</button>
                    </form>
                </div>
                <div class = "bang-lienhe-2">
                    <img class="bang2" src="./img/bang-lienhe2.png">
                    <div class="text-content">
                        <img class="address-icon" src="./img/address-icon.png">
                        <div class="text-content-smaller1">
                            <div class="text-title">Địa chỉ:</div>
                            <div class="content-title">86/33 Âu Cơ, Phường 9, Quận Tân Bình, TP. Hồ Chí Minh</div>
                        </div>
                    </div>
                </div>
                <div class = "bang-lienhe-3">
                    <img class="bang3" src="./img/bang-lienhe2.png">
                    <div class="text-content">
                        <img class="email-icon" src="./img/emain-icon.png">
                        <div class="text-content-smaller2">
                            <div class="text-title">Email:</div>
                            <div class="content-title" style="top:10%">tranhieukhoa442220@gmail.com</div>
                        </div>
                    </div>
                </div>
                <div class = "bang-lienhe-4">
                    <img class="bang4" src="./img/bang-lienhe2.png">
                    <div class="text-content">
                        <img class="phone-icon" src="./img/phone-icon.png">
                        <div class="text-content-smaller3">
                            <div class="text-title">Điện thoại:</div>
                            <div class="content-title" style="top:10%">+84 35 5501 613</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>