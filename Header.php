<?php
    $level="";
    include_once ($level."Config.php");
?>
<header class = "header">
        <div class="header_left">
            <a href="/">
                <img src="./img/Logo.png">
            </a>
        </div>
        <div class="header_middle">
            <nav class="nav">
                <div class="item "><a href="<?php echo $level.page_path?>Home.php">Trang chủ</a></div>
                <div class="item"><a href="<?php echo $level.page_path?>Event.php">Sự kiện</a></div>
                <div class="item"><a href="<?php echo $level.page_path?>Contact.php">Liên hệ</a></div>
            </nav>
        </div>
        <div class="header_right">
            <span class="icon-search"><i class="fa fa-phone" aria-hidden="true"></i> 0123456789</span>
        </div>
</header>