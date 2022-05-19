<?php
        $level="";
        include_once ($level."Config.php");

	 $host_name='localhost';
	 $db_name='dam_sen2';
	 $user_name='root';
	 $password='';
	 try
     {
	$connect = new PDO("mysql:host=$host_name;dbname=$db_name",$user_name,$password);
	$connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        //  echo ' Connect successfully';

//         //CREATE table EVENTS.

        // $sql= "CREATE TABLE `dam_sen2`.`events` ( `id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
        // `event_name` VARCHAR(50) NULL DEFAULT NULL,
        // `address` VARCHAR(50) NULL DEFAULT NULL,
        // `date_start` DATE NULL DEFAULT NULL,
        // `date_end` DATE NULL DEFAULT NULL,
        // `ticket_price` INT(11) NULL DEFAULT NULL,
        // `describe_1` VARCHAR(5000) NULL DEFAULT NULL,
        // `describe_2` VARCHAR(5000) NULL DEFAULT NULL,
        // `describe_3` VARCHAR(5000) NULL DEFAULT NULL,
        // `status` INT(1) NULL DEFAULT NULL,
        // PRIMARY KEY (`id`)) ENGINE = InnoDB;";
        // $connect->exec($sql);

//        //  //INSERT INTO database EVENTS table

        // $sql = "INSERT INTO `events` (`event_name`,`address`,`date_start`,`date_end`,`ticket_price`,`describe_1`,`describe_2`,`describe_3`,`status`)
        // VALUE ('Tên sự kiện 1','Đầm sen Park','2021-05-30','2021-06-01',25000,'This is describe 1 : Lorem Ipsum chỉ đơn giản là một đoạn văn bản giả, được dùng vào việc trình bày và dàn trang phục vụ cho in ấn.','This is describe 2 : Lorem Ipsum chỉ đơn giản là một đoạn văn bản giả, được dùng vào việc trình bày và dàn trang phục vụ cho in ấn.','This is describe 3 : Lorem Ipsum chỉ đơn giản là một đoạn văn bản giả, được dùng vào việc trình bày và dàn trang phục vụ cho in ấn.',1),
        // ('Tên sự kiện 2','Đầm sen Park','2021-12-30','2022-01-01',25000,'This is describe 1 : Lorem Ipsum chỉ đơn giản là một đoạn văn bản giả, được dùng vào việc trình bày và dàn trang phục vụ cho in ấn.','This is describe 2 : Lorem Ipsum chỉ đơn giản là một đoạn văn bản giả, được dùng vào việc trình bày và dàn trang phục vụ cho in ấn.','This is describe 3 : Lorem Ipsum chỉ đơn giản là một đoạn văn bản giả, được dùng vào việc trình bày và dàn trang phục vụ cho in ấn.',1),
        // ('Tên sự kiện 3','Đầm sen Park','2021-08-30','2021-09-01',25000,'This is describe 1','This is describe 2','This is describe 3',1),
        // ('Tên sự kiện 4','Đầm sen Park','2021-09-30','2021-10-01',25000,'This is describe 1','This is describe 2','This is describe 3',1)";
        // $connect->exec($sql);

//        // //CREATE table IMAGES EVENT

    //    $sql= "CREATE TABLE `dam_sen2`.`images_event` ( `id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
    //    `images_event_id` INT UNSIGNED NULL DEFAULT NULL,
    //    `image_name` VARCHAR(50) NULL DEFAULT NULL,
    //    `describe` VARCHAR(5000) NULL DEFAULT NULL,
    //    `status` INT(1) NULL DEFAULT NULL,
    //    PRIMARY KEY (`id`,`images_event_id`),
    //    CONSTRAINT `fk_images` FOREIGN KEY (`images_event_id`) REFERENCES `events` (`id`)
    //    ) ENGINE = InnoDB;";
    //    $connect->exec($sql);

//        // //INSERT INTO database IMAGES EVENT table

    //    $sql = "INSERT INTO `images_event` (`images_event_id`,`image_name`,`describe`,`status`)
    //    VALUE ('1','chitietsukien1_0.png','Ảnh sự kiện 1', 1),
    //    ('1','chitietsukien1_1.png','Ảnh sự kiện 1', 1),
    //    ('1','chitietsukien1_2.png','Ảnh sự kiện 1', 1),
    //    ('2','chitietsukien2_1.png','Ảnh sự kiện 2', 1),
    //    ('3','chitietsukien3_1.png','Ảnh sự kiện 3', 1)";
    //    $connect->exec($sql);

//         //CREATE TICKET-TYPE TABLE

        // $sql= "CREATE TABLE `dam_sen2`.`ticket_type` ( `id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
        // `ticket_type_name` VARCHAR(255) NULL DEFAULT NULL,
        // `ticket_type_price` INT(11) NULL DEFAULT NULL,
        // `status` INT(1) NULL DEFAULT NULL,
        // PRIMARY KEY (`id`)) ENGINE = InnoDB;";
        // $connect->exec($sql);

//         //INSERT INTO TICKET-TYPE TABLE

    //     $sql = "INSERT INTO `ticket_type` (`ticket_type_name`,`ticket_type_price`,`status`)
    //    VALUE ('Vé khách lẻ',50000,1),
    //    ('Vé gia đình',40000,1),
    //    ('Vé tập thể',30000,1),
    //    ('Vé dịch vụ',60000,1),
    //    ('Vé tập thể dục',10000,1)";
    //    $connect->exec($sql);

//         //CREATE TICKET-ADDRESS TABLE

        // $sql= "CREATE TABLE `dam_sen2`.`ticket_address` ( `id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
        // `ticket_address_name` VARCHAR(255) NULL DEFAULT NULL,
        // `ticket_address_price` INT(11) NULL DEFAULT NULL,
        // `status` INT(1) NULL DEFAULT NULL,
        // PRIMARY KEY (`id`)) ENGINE = InnoDB;";
        // $connect->exec($sql);

//         //INSERT INTO TICKET-ADDRESS TABLE

    //     $sql = "INSERT INTO `ticket_address` (`ticket_address_name`,`ticket_address_price`,`status`)
    //    VALUE ('Vé cổng',120000,1),
    //    ('Vé công viên nước',90000,1),
    //    ('Vé trong công viên',70000,1)";
    //    $connect->exec($sql);

//        //CREATE table TICKET

    //    $sql= "CREATE TABLE `dam_sen2`.`tickets` ( `id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
    //    `ticket_code` VARCHAR(11) NULL DEFAULT NULL,
    //    `id_ticket_address` INT UNSIGNED NULL DEFAULT NULL,
    //    `id_ticket_type` INT UNSIGNED NULL DEFAULT NULL,
    //    `date_use` DATE NULL DEFAULT NULL,
    //    `status` INT(1) NULL DEFAULT NULL,
    //    PRIMARY KEY (`id`),
    //    CONSTRAINT `fk_ticket_address` FOREIGN KEY (`id_ticket_address`) REFERENCES `ticket_address` (`id`),
    //    CONSTRAINT `fk_ticket_type` FOREIGN KEY (`id_ticket_type`) REFERENCES `ticket_type` (`id`)
    //    ) ENGINE = InnoDB;";
    //    $connect->exec($sql);

//        //INSERT INTO TICKET TABLE

    //    $sql = "INSERT INTO `tickets` (`ticket_code`,`id_ticket_address`,`id_ticket_type`,`date_use`,`status`)
    //    VALUE ('ALT20210501',1,1,'2021-12-30',1),
    //    ('ALT20210501',1,1,'2021-12-30',1),
    //    ('ALT20210501',1,1,'2021-12-30',1),
    //    ('ALT20210501',1,1,'2021-12-30',1)";
    //    $connect->exec($sql);

		//CREATE table ADMIN

    //    $sql= "CREATE TABLE `dam_sen2`.`admins` ( `id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
    //    `user_name` VARCHAR(50) NULL DEFAULT NULL,
    //    `password` VARCHAR(50)  NULL DEFAULT NULL,
	//    `fist_name` VARCHAR(50)  NULL DEFAULT NULL,
	//    `last_name` VARCHAR(50)  NULL DEFAULT NULL,
	//    `phone_number` VARCHAR(10)  NULL DEFAULT NULL,
	//    `email` VARCHAR(50)  NULL DEFAULT NULL,
	//    `birthday` DATE NULL DEFAULT NULL,
	//    `sex` VARCHAR(5) NULL DEFAULT NULL,
    //    `avatar` VARCHAR(100) NULL DEFAULT NULL,
    //    `status` INT(1) NULL DEFAULT NULL,
    //    PRIMARY KEY (`id`)
    //    ) ENGINE = InnoDB;";
    //    $connect->exec($sql);

    //    //INSERT INTO ADMIN TABLE	

    //    $sql = "INSERT INTO `admins` (`user_name`,`password`,`fist_name`,`last_name`,`phone_number`,`email`,`birthday`,`sex`,`avatar`,`status`)
    //    VALUE ('hiukhoa1','123456aA','Khoa','Trần','0355501613','hiukhoa@gmail.com','2001-04-04','Nam','anhdaidien1.jpg',1),
    //    ('tranhiukhoa2','123456aA','Khoa2','Trần','0355501613','hiukhoa1@gmail.com','2001-04-04','Nam','anhdaidien2.jpg',1),
    //    ('tranhiukhoa3','123456aA','Khoa3','Trần','0355501613','hiukhoa2@gmail.com','2001-04-04','Nam','anhdaidien3.jpg',1),
    //    ('tranhiukhoa4','123456aA','Khoa4','Trần','0355501613','hiukhoa3@gmail.com','2001-04-04','Nam','anhdaidien4.jpg',1)";
    //    $connect->exec($sql);

	   //CREATE table MEMBER

    //    $sql= "CREATE TABLE `dam_sen2`.`members` ( `id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
    //    `visa_number` int(16)  NULL DEFAULT NULL,
    //    `full_name` VARCHAR(50)  NULL DEFAULT NULL,
	//    `phone_number` VARCHAR(10)  NULL DEFAULT NULL,
	//    `email` VARCHAR(50)  NULL DEFAULT NULL,
	//    `expiration_date` DATE NULL DEFAULT NULL,
	//    `CVV_CVC` int(4) NULL DEFAULT NULL,
    //    PRIMARY KEY (`id`)
    //    ) ENGINE = InnoDB;";
    //    $connect->exec($sql);

       //INSERT INTO ADMIN TABLE	

    //    $sql = "INSERT INTO `members` (`visa_number`,`full_name`,`phone_number`,`email`,`expiration_date`,`CVV_CVC`)
    //    VALUE ('0452569875245695','Trần Hiếu Khoa','0355501613','hiukhoa@gmail.com','2025-04-04','1235'),
    //    		('0453214889562547','Trần Hiếu Khoa','0355501613','hiukhoa@gmail.com','2024-05-08','1885')";
    //    $connect->exec($sql);

    //CREATE table BILL.

        // $sql= "CREATE TABLE `dam_sen2`.`bills` ( `id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
        // `id_member` INT UNSIGNED NOT NULL,
        // `date_create` DATE NULL DEFAULT NULL,
        // `date_delete` DATE NULL DEFAULT NULL,
        // `date_update` DATE NULL DEFAULT NULL,
        // `total_price` INT(11) NULL DEFAULT NULL,
        // `status` VARCHAR(1) NULL DEFAULT NULL,
        // PRIMARY KEY (`id`),
        // CONSTRAINT `fk_members` FOREIGN KEY (`id_member`) REFERENCES `members` (`id`)
        // ) ENGINE = InnoDB;";
        // $connect->exec($sql);

    //INSERT TABLE BILL

        // $sql = "INSERT INTO `bills` (`id_member`,`date_create`,`date_delete`,`date_update`,`total_price`,`status`)
        // VALUE ('1','2025-04-04',NULL,NULL,'500000',1),
        //         ('1','2025-04-05',NULL,NULL,'150000',1)";
        // $connect->exec($sql);


        }
	 catch(PDOException $e)  {
		 echo $e->getMessage();
		 }
?>	