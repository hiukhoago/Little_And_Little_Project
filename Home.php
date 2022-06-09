<?php
    include 'Database.php';
    $ticket_type=$connect->prepare('SELECT * FROM ticket_type ');
    $ticket_type->execute();
    $row_ticket_type = $ticket_type->fetchALL();
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
    <title>Trang chủ</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./vendor/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css"/>
</head>
<body class="body">
    <?php include ($level."Header.php") ?>
    <main class="main">
        <div class="background">
            <img class="logoDamSen" src="./img/LogoDamSen.png">
            <img class="kc1" src="./img/KhiCau1.png">
            <img class="kc2" src="./img/KhiCau2.png">
            <img class="bonduanho" src="./img/4DuaNho.png">
            <img class="kc4" src="./img/KhiCau4.png">
            <img class="kc3" src="./img/KhiCau3.png">
            <img class="kc5" src="./img/KhiCau5.png">
            <img class="kc6" src="./img/KhiCau6.png">
            <img class="nhotochong" src="./img/NhoTocHong.png">
            <div class = "content">
                <img class="bang1" src="./img/bang1.png">
                <img class="khungnoi" src="./img/khungnoi.png">
                <img class="bang2" src="./img/bang2.png">
                <img class="vecuaban" src="./img/vecuaban.png">
                <p class="paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ac
                    mollis justo. Etiam volutpat tellus quis risus volutpat, ut posuere ex facilisis. 

                    Suspendisse iaculislibero lobortis condimentum gravida. Aenean auctor iaculis risus, lobortis molestie lectus
                    consequat a.</p>
                <div class="text0">
                    <img class="star" src="./img/star.png">
                    <p class="text-item">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="text1">
                    <img class="star" src="./img/star.png">
                    <p class="text-item">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="text2">
                    <img class="star" src="./img/star.png">
                    <p class="text-item">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="text3">
                    <img class="star" src="./img/star.png">
                    <p class="text-item">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <form class="datve" action="<?php echo 'Payment.php'?> " method="GET" enctype="multipart/form-data">
                    <div class="col-md-6">
                            <div class="form-group row">
                            <div class="col-sm-9">
                            <select class="form-control" name="loaive">
                                <?php foreach ($row_ticket_type as $ticket_type)
                                        {
                                ?>
                                    <option value = "<?php echo $ticket_type['id'];?>">
                                    <?php if($ticket_type['status']==1){ 
                                    echo $ticket_type['ticket_type_name'];}?></option>
                                <?php
                                        }
                                ?>
                                </select>
                            </div>
                            </div>
                    </div>
                    <input class="soluong" type="number" name = "soluong" placeholder="  Số lượng vé">

                    <input class="ngaysudung" type="date" name="ngaysudung" placeholder="  Ngày sử dụng">
                    <input class="hoten" type="text" name="hoten" placeholder="  Họ và tên">
                    <input class="sodienthoai" type="text" name = "sodienthoai" placeholder="  Số điện thoại">
                    <input class="email" type="email" name= "email" placeholder="  Địa chỉ email">
                    <button type = "submit" class="nutdatve">Đặt vé</button>
                </form>
            </div>
        </div>
    </main>

    <footer>

    </footer>
</body>
</html>