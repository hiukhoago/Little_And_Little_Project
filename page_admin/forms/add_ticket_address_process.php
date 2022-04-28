<?php
    include '../../Database.php';

    $tenDiaDiem = $_POST['tendiadiem']; 
    $giaVe = $_POST['giave']; 
    $trangThai = $_POST['trangthai']; 

    $add_ticket_sql = "INSERT INTO ticket_address (ticket_address_name, ticket_address_price, status )
                        VALUE (:tenDiaDiem, :giaVe,:trangThai)";

    if($result = $connect ->prepare($add_ticket_sql)){
        echo '<script>alert("Thêm địa điểm mới thành công")</script>';
    }else{
        echo "Lỗi: " . $sql . "<br>" . $connect->error;
    };
    $result ->BindValue(':tenDiaDiem',$tenDiaDiem,PDO::PARAM_STR);
    $result ->BindValue(':giaVe',$giaVe,PDO::PARAM_INT);
    $result ->BindValue(':trangThai',$trangThai,PDO::PARAM_INT);
    $result->execute();

?>
<html>
<a href="<?php echo './add_ticket_address.php'?>">Trở lại</a>
</html>