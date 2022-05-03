<?php 
    session_start();
    include 'Database.php';

    $tenDangNhap = $_POST['tendangnhap'];
    $matKhau = $_POST['matkhau'];

    $sql = "SELECT * FROM admins WHERE user_name = '$tenDangNhap' AND password ='$matKhau' and status = 1";
    $taikhoan = $connect->prepare($sql);
    $taikhoan->execute();
    $dataTaiKhoan = $taikhoan->fetchAll();


    $count = $taikhoan ->rowcount();
    // var_dump($count);
    if($count==1){
        ?>
        <script>
            alert("Đăng nhập thành công!");
        </script>
        <?php
        header("location: ./index.php");
    }else{ 
        ?><script>
        alert("Đăng nhập thất bại!");
        history.back();
        </script> <?php
    }

?>