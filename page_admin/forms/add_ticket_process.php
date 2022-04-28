<?php
    include '../../Database.php';

    $maVe = $_POST['code'];
    $noiMuaVe = $_POST['noimuave']; 
    $loaiVe = $_POST['loaive']; 
    $ngaySuDung = $_POST['ngaysudung']; 
    $trangThai = $_POST['trangthai']; 

    $add_ticket_sql = "INSERT INTO tickets (ticket_code, id_ticket_address, id_ticket_type, date_use, status )
                        VALUE (:maVe, :noiMuaVe, :loaiVe, :ngaySuDung,:trangThai)";

    if($result = $connect ->prepare($add_ticket_sql)){
        echo '<script>alert("Thêm vé mới thành công")</script>';
    }else{
        echo "Lỗi: " . $sql . "<br>" . $connect->error;
    };
    $result ->BindValue(':maVe',$maVe,PDO::PARAM_STR);
    $result ->BindValue(':noiMuaVe',$noiMuaVe,PDO::PARAM_INT);
    $result ->BindValue(':loaiVe',$loaiVe,PDO::PARAM_INT);
    $result ->BindValue(':ngaySuDung',$ngaySuDung,PDO::PARAM_INT);
    $result ->BindValue(':trangThai',$trangThai,PDO::PARAM_INT);
    $result->execute();

?>
<html>
<a href="<?php echo './add_ticket.php'?>">Trở lại</a>
</html>