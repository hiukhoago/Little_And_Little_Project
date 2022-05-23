<?php
 session_start();
    include '../../../Database.php';
    $datetime = date('Ymd');
    $string_id_ticket = 'ALT' . $datetime;

    $noiMuaVe = $_POST['noimuave']; 
    $loaiVe = $_POST['loaive']; 
    $ngaySuDung = $_POST['ngaysudung']; 
    $trangThai = $_POST['trangthai']; 

    $add_ticket_sql = "INSERT INTO tickets (ticket_code, id_ticket_address, id_ticket_type, date_use, status )
                        VALUE ('".$string_id_ticket."', '".$noiMuaVe."', '".$loaiVe."', '".$ngaySuDung."','".$trangThai."')";

    $result = $connect ->prepare($add_ticket_sql);
    if($result->execute()){
        header('Location: ../list_ticket.php');
        exit(0);
    }else{
        echo "Lỗi: " . $sql . "<br>" . $connect->error;
    };
    // $result ->BindValue(':string_id_ticket',$string_id_ticket,PDO::PARAM_STR);
    // $result ->BindValue(':noiMuaVe',$noiMuaVe,PDO::PARAM_STR);
    // $result ->BindValue(':loaiVe',$loaiVe,PDO::PARAM_INT);
    // $result ->BindValue(':ngaySuDung',$ngaySuDung,PDO::PARAM_INT);
    // $result ->BindValue(':trangThai',$trangThai,PDO::PARAM_INT);
    

?>