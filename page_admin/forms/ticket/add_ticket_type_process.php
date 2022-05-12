<?php
    include '../../../Database.php';

    $tenLoaiVe = $_POST['tenloaive']; 
    $giaVe = $_POST['giave']; 
    $trangThai = $_POST['trangthai']; 

    $add_ticket_type_sql = "INSERT INTO ticket_type (ticket_type_name, ticket_type_price, status )
                        VALUE (:tenLoaiVe, :giaVe,:trangThai)";

    if($result = $connect ->prepare($add_ticket_type_sql)){
        echo '<script>alert("Thêm loại vé mới thành công")</script>';
    }else{
        echo "Lỗi: " . $sql . "<br>" . $connect->error;
    };
    $result ->BindValue(':tenLoaiVe',$tenLoaiVe,PDO::PARAM_STR);
    $result ->BindValue(':giaVe',$giaVe,PDO::PARAM_INT);
    $result ->BindValue(':trangThai',$trangThai,PDO::PARAM_INT);
    $result->execute();

?>
<html>
<a href="<?php echo '../add_ticket_type.php'?>">Trở lại</a>
</html>