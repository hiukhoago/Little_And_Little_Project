<?php
    include 'Database.php';

    $event=$connect->prepare('SELECT * FROM `events`');
    $event->execute();
    $eventData = $event->fetchALL();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sự kiện</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./vendor/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css"/>
</head>
<body class ="body">
    <?php include ($level."Header.php") ?>
    <main class ="main">
        <div class="background">
            <img class="sukiennoibat" src="<?php echo $level.img_path?>sukiennoibat.png">
            <img class ="phaobong" src="<?php echo $level.img_path?>phaubong.png">
            <img class="flag-trai" src="<?php echo $level.img_path?>flag-trai.png">
            <img class="flag-phai" src="<?php echo $level.img_path?>flag-phai.png">
            <div class="list-event">
                <div class="card-deck-event">
                    <?php 
                        foreach ($eventData as $rowData){
                    ?>
                            <div class="card-event">
                                <img class="card-img-top" src="<?php echo $level.img_path?>sukien-1.png" alt="Card image">
                                <div class="card-body">
                                    <h4 class="card-title1"><?php echo $rowData["event_name"] ?></h4>
                                    <div class="event-address"><?php echo $rowData["address"] ?></div>
                                    <div class="date-start">
                                        <img class="calendar-icon1" src="<?php echo $level.img_path?>icon-calendar.png">
                                        <div class="event-date1"><?php echo $rowData["date_start"] ?> - <?php echo $rowData["date_end"] ?></div>
                                    </div>
                                    <div class="event-price1"><?php echo number_format( $rowData["ticket_price"],0)." VNĐ" ?></div>
                                    <a href="<?php echo $level.page_path.'EventDetail.php?id='.$rowData['id'];?>" class="btn-xemchitiet"></a>
                                </div>
                            </div>
                    <?php
                        }
                    ?>
                    <!-- <div class="card-event">
                        <img class="card-img-top" src="<?php echo $level.img_path?>sukien-1.png" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title1">Sự kiện 1</h4>
                            <div class="event-address">Đầm sen Park</div>
                            <div class="date-start">
                                <img class="calendar-icon1" src="<?php echo $level.img_path?>icon-calendar.png">
                                <div class="event-date1">30/05/2021 - 01/06/2021</div>
                            </div>
                            <div class="event-price1">25.000 VNĐ</div>
                            <a href="<?php echo $level.page_path?>EventDetail.php" class="btn-xemchitiet"></a>
                          </div>
                    </div> -->
                  </div>
            </div>
            <button type="button" class="btn-previous"></button>
            <button type="button" class="btn-next"></button>
        </div>
    </main>
</body>
</html>