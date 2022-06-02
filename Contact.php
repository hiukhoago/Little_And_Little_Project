<?php
include 'Database.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liên hệ</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./vendor/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css" />
</head>

<body class="body">
    <?php include($level . "Header.php") ?>
    <main class="main">
        <div class="background">
            <img class="text-lienhe" src="./img/text-lienhe.png">
            <img class="thangtocnau" src="./img/ThangTocNau.png">
            <div class="lienhe">
                <div class="bang-lienhe-1">
                    <img class="bang1" src="./img/bang-lienhe1.png">
                    <div class="paragraph-lienhe">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ac
                        mollis justo. Etiam volutpat tellus quis risus volutpat, ut posuere ex facilisis.</div>
                    <form class="form-contact" acction="" method="POST">
                        <div class="group-contact1">
                            <input type="text" name="name" class="input-ten" placeholder="Tên">
                            <input type="text" name="email" class="input-email" placeholder="Email">
                        </div>
                        <div class="group-contact2">
                            <input type="text" name="phone" class="input-sdt" placeholder="Số điện thoại">
                            <input type="text"name="address" class="input-diachi" placeholder="Địa chỉ">
                        </div>
                        <textarea class="input-loinhan" name="message" placeholder="Lời nhắn"></textarea>
                        <button type="submit" name="send" class="nutguilienhe">Gửi liên hệ</button>
                    </form>
                </div>
                <div class="bang-lienhe-2">
                    <img class="bang2" src="./img/bang-lienhe2.png">
                    <div class="text-content">
                        <img class="address-icon" src="./img/address-icon.png">
                        <div class="text-content-smaller1">
                            <div class="text-title">Địa chỉ:</div>
                            <div class="content-title">86/33 Âu Cơ, Phường 9, Quận Tân Bình, TP. Hồ Chí Minh</div>
                        </div>
                    </div>
                </div>
                <div class="bang-lienhe-3">
                    <img class="bang3" src="./img/bang-lienhe2.png">
                    <div class="text-content">
                        <img class="email-icon" src="./img/emain-icon.png">
                        <div class="text-content-smaller2">
                            <div class="text-title">Email:</div>
                            <div class="content-title" style="top:10%">tranhieukhoa442001@gmail.com</div>
                        </div>
                    </div>
                </div>
                <div class="bang-lienhe-4">
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
    <?php
    if (isset($_POST["send"])) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $address = $_POST["address"];
        $message = $_POST["message"];
        // $to='tranhieukhoa@gmail.com';
        // $subject='Hỗ trợ cho khách hàng' . $email;
        // $header = "From: hiukhoago@gmail.com";
        // $value="Rổng";
        // ini_set(mail($to, $subject,$message,$header),$value);
        //SMTP needs accurate times, and the PHP time zone MUST be set
        //This should be done in your php.ini, but this is how to do it if you don't have access to that
        // date_default_timezone_set('Etc/UTC');

        require 'smtpmail/PHPMailerAutoload.php';

        //Create a new PHPMailer instance
        $mail = new PHPMailer();
        //Tell PHPMailer to use SMTP
        $mail->isSMTP();

        //Enable SMTP debugging
        // 0 = off (for production use)
        // 1 = client messages
        // 2 = client and server messages
        //$mail->SMTPDebug = 0;

        //Ask for HTML-friendly debug output
        $mail->Debugoutput = 'html';

        //Set the hostname of the mail server
        $mail->Host = 'smtp.gmail.com';
        // $mail->Host = "ssl://smtp.gmail.com"; 

        //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
        $mail->Port =465;

        //Set the encryption system to use - ssl (deprecated) or tls
        //$mail->SMTPSecure = 'tls';

        //Whether to use SMTP authentication
        $mail->SMTPAuth = true;

        //Username to use for SMTP authentication - use full email address for gmail
        $mail->Username = 'hiukhoago@gmail.com';

        //Password to use for SMTP authentication
        $mail->Password = "0918273645Aa";

        //Set who the message is to be sent from
        $mail->setFrom($email, $name);

        //Set an alternative reply-to address
        //$mail->addReplyTo('replyto@example.com', 'First Last');

        //Set who the message is to be sent to
        $mail->addAddress('tranhieukhoa442001@gmail.com', 'Admin');

        //Set the subject line
        $mail->Subject = 'Hỗ trợ khách hàng: '.$email ;

        //Read an HTML message body from an external file, convert referenced images to embedded,
        //convert HTML into a basic plain-text alternative body
        // $mail->msgHTML($phone);
        // $mail->msgHTML($address);
        $mail->msgHTML($message);

        //Replace the plain text body with one created manually
        //$mail->AltBody = 'This is a plain-text message body';

        //Attach an image file
        //$mail->addAttachment('images/phpmailer_mini.png');

        //send the message, check for errors
        if (!$mail->send()) {
            echo "Mailer Error: " . $mail->ErrorInfo;
        } else {
            echo "Message sent!";
        }
    }
    ?>
</body>

</html>