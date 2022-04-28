<?php
        $level="";
        include_once ($level."Config.php");

	 $host_name='localhost';
	 $db_name='dam_sen';
	 $user_name='root';
	 $password='';
	 try
     {
	$connect = new PDO("mysql:host=$host_name;dbname=$db_name",$user_name,$password);
	$connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        //  echo ' Connect successfully';

//         //CREATE table EVENTS.

//         $sql= "CREATE TABLE `dam_sen`.`events` ( `id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
//         `event_name` VARCHAR(50) NULL DEFAULT NULL,
//         `address` VARCHAR(50) NULL DEFAULT NULL,
//         `date_start` DATE NULL DEFAULT NULL,
//         `date_end` DATE NULL DEFAULT NULL,
//         `ticket_price` INT(11) NULL DEFAULT NULL,
//         `describe` VARCHAR(5000) NULL DEFAULT NULL,
//         `images_id` VARCHAR(10) NULL DEFAULT NULL,
//         PRIMARY KEY (`id`)) ENGINE = InnoDB;";
//         $connect->exec($sql);

//        //  //INSERT INTO database EVENTS table

//         $sql = "INSERT INTO `events` (`event_name`,`address`,`date_start`,`date_end`,`ticket_price`,`describe`,`images_id`)
//         VALUE ('Tên sự kiện 1','Đầm sen Park','2021-05-30','2021-06-01',25000,'This is describe','sk001'),
//         ('Tên sự kiện 2','Đầm sen Park','2021-12-30','2022-01-01',25000,'This is describe','sk002'),
//         ('Tên sự kiện 3','Đầm sen Park','2021-08-30','2021-09-01',25000,'This is describe','sk003'),
//         ('Tên sự kiện 4','Đầm sen Park','2021-09-30','2021-10-01',25000,'This is describe','sk004')";
//         $connect->exec($sql);

//        // //CREATE table IMAGES EVENT

//        $sql= "CREATE TABLE `dam_sen`.`images_event` ( `id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
//        `images_event_id` INT UNSIGNED NULL DEFAULT NULL,
//        `image_name` VARCHAR(50) NULL DEFAULT NULL,
//        PRIMARY KEY (`id`,`images_event_id`),
//        CONSTRAINT `fk_images` FOREIGN KEY (`images_event_id`) REFERENCES `events` (`id`)
//        ) ENGINE = InnoDB;";
//        $connect->exec($sql);

//        // //INSERT INTO database IMAGES EVENT table

//        $sql = "INSERT INTO `images_event` (`images_event_id`,`image_name`)
//        VALUE ('1','chitiet1.png'),
//        ('1','chitiet2.png'),
//        ('1','sukien-1.png'),
//        ('2','sukien-2.png'),
//        ('3','sukien-3.png')";
//        $connect->exec($sql);

//         //CREATE TICKET-TYPE TABLE

//         $sql= "CREATE TABLE `dam_sen`.`ticket_type` ( `id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
//         `ticket_type_name` VARCHAR(255) NULL DEFAULT NULL,
//         `ticket_type_price` INT(11) NULL DEFAULT NULL,
//         `status` INT(1) NULL DEFAULT NULL,
//         PRIMARY KEY (`id`)) ENGINE = InnoDB;";
//         $connect->exec($sql);

//         //INSERT INTO TICKET-TYPE TABLE

//         $sql = "INSERT INTO `ticket_type` (`ticket_type_name`,`ticket_type_price`,`status`)
//        VALUE ('Vé khách lẻ',50000,1),
//        ('Vé gia đình',40000,1),
//        ('Vé tập thể',30000,1),
//        ('Vé dịch vụ',60000,1),
//        ('Vé tập thể dục',10000,1)";
//        $connect->exec($sql);

//         //CREATE TICKET-ADDRESS TABLE

//         $sql= "CREATE TABLE `dam_sen`.`ticket_address` ( `id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
//         `ticket_address_name` VARCHAR(255) NULL DEFAULT NULL,
//         `ticket_address_price` INT(11) NULL DEFAULT NULL,
//         `status` INT(1) NULL DEFAULT NULL,
//         PRIMARY KEY (`id`)) ENGINE = InnoDB;";
//         $connect->exec($sql);

//         //INSERT INTO TICKET-ADDRESS TABLE

//         $sql = "INSERT INTO `ticket_address` (`ticket_address_name`,`ticket_address_price`,`status`)
//        VALUE ('Vé cổng',120000,1),
//        ('Vé công viên nước',90000,1),
//        ('Vé trong công viên',70000,1)";
//        $connect->exec($sql);

//        //CREATE table TICKET

//        $sql= "CREATE TABLE `dam_sen`.`tickets` ( `id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
//        `ticket_code` VARCHAR(11) NULL DEFAULT NULL,
//        `id_ticket_address` INT UNSIGNED NULL DEFAULT NULL,
//        `id_ticket_type` INT UNSIGNED NULL DEFAULT NULL,
//        `date_use` DATE NULL DEFAULT NULL,
//        `status` INT(1) NULL DEFAULT NULL,
//        PRIMARY KEY (`id`),
//        CONSTRAINT `fk_ticket_address` FOREIGN KEY (`id_ticket_address`) REFERENCES `ticket_address` (`id`),
//        CONSTRAINT `fk_ticket_type` FOREIGN KEY (`id_ticket_type`) REFERENCES `ticket_type` (`id`)
//        ) ENGINE = InnoDB;";
//        $connect->exec($sql);

//        //INSERT INTO TICKET-ADDRESS TABLE

//        $sql = "INSERT INTO `tickets` (`ticket_code`,`id_ticket_address`,`id_ticket_type`,`date_use`,`status`)
//        VALUE ('ALT20210501',1,1,'2021-12-30',1),
//        ('ALT20210501',1,1,'2021-12-30',1),
//        ('ALT20210501',1,1,'2021-12-30',1),
//        ('ALT20210501',1,1,'2021-12-30',1)";
//        $connect->exec($sql);

        }
	 catch(PDOException $e)  {
		 echo $e->getMessage();
	 }
?>	