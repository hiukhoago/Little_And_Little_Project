<?php
    include 'Database.php';

    $id = $_GET['id'];
    $event=$connect->prepare("SELECT * FROM events WHERE id = '".$id."' ");
    $event->execute();
    $eventData = $event->fetchALL();
    //OR
    // $result = $connect->prepare("SELECT * FROM events WHERE id = :id");
    // $result ->bindValue(':id',$id,PDO::PARAM_INT);
    // $result->execute();
    // $result_row = $result->fetchAll();
    //var_dump($eventData);
    $img=$connect->prepare('SELECT * FROM events, images_event WHERE events.id = '.$id.' AND events.id = images_event.images_event_id AND images_event.status = 1');
    $img->execute();
    $rows_img = $img->fetchALL();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết sự kiện</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./vendor/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css"/>
</head>
<body class ="body">
    <?php include ($level."Header.php") ?>
    <main class ="main">
        <div class="background">
            <p class="sukien"><?php echo $eventData[0]["event_name"] ?></p>
            <!-- <img class="sukien" src="<?php echo $level.img_path?>text-sukien1.png"> -->
            <img class ="phaobong" src="<?php echo $level.img_path?>phaubong.png">
            <img class="flag-trai" src="<?php echo $level.img_path?>flag-trai.png">
            <img class="flag-phai" src="<?php echo $level.img_path?>flag-phai.png">
            <div class="khung-event">
                <img class = "bangchitiet" src="<?php echo $level.img_path?>bangchitietsukien.png">
                <div class="content-event">
                    <div class="content-event-left">
                        <img  class="anh1" src="<?php echo $level.img_event.$rows_img[0]['image_name']?>">
                        <div class="infom">
                            <div class="date-start">
                                <img class="calendar-icon" src="<?php echo $level.img_path?>icon-calendar.png">
                                <div class="event-date"><?php echo $eventData[0]["date_start"] ?> - <?php echo $eventData[0]["date_end"] ?></div>
                            </div>
                            <div class="event-address"><?php echo $eventData[0]["address"] ?></div>
                            <div class="event-price"><?php echo number_format( $eventData[0]["ticket_price"],0)." VNĐ" ?></div>
                        </div>
                    </div>
                    <div class="content-event-right">
                        <div class="content-event-right-ss1">
                            <div class="event-detail-text">
                                <?php echo $eventData[0]["describe_1"] ?> 
                            </div>
                        </div>
                        <div class="content-event-right-ss2">
                            <img class="anhchitiet-sk" src="<?php echo $level.img_event.$rows_img[1]['image_name']?>">
                            <div class="event-detail-text">
                            <?php echo $eventData[0]["describe_2"] ?> 
                            </div>
                        </div>
                        <div class="content-event-right-ss3">
                            <div class="event-detail-text">
                                <?php echo $eventData[0]["describe_3"] ?> 
                            </div>
                            <img class="anhchitiet-sk" src="<?php echo $level.img_event.$rows_img[2]['image_name']?>">
                        </div>
                    </div>
                </div>
            </di>
        </div>
    </main>
</body>
</html>