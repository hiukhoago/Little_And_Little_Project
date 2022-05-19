<?php
    session_start();
    include '../../../Database.php';

    $name_event = $_POST['tensukien']; 
    $address = $_POST['diachi']; 
    $date_start = $_POST['ngaybatdau'];
    $date_end = $_POST['ngayketthuc'];
    $giaVe = $_POST['giave'];
    $describe1 = $_POST['mota1'];
    $describe2 = $_POST['mota2'];
    $describe3 = $_POST['mota3'];
    $status = $_POST['trangthai'];

    $add_event_sql = "INSERT INTO events (event_name, address, date_start, date_end, ticket_price, describe_1, describe_2, describe_3,status)
                        VALUE ('".$name_event."', '".$address."','". $date_start."', '".$date_end."', '".$giaVe."', '".$describe1."', '".$describe2."', '".$describe3."','".$status."')";
    
    $result = $connect ->prepare($add_event_sql);
    $result->execute();
    header('Location: ../list_event.php');
    // $data = [
    //     ':name_event' => $name_event,
    //     ':address' => $address,
    //     ':date_start' => $date_start,
    //     ':date_end' => $date_end,
    //     ':giaVe' => $giaVe,
    //     ':describe1' => $describe1,
    //     ':describe2' => $describe2,
    //     ':descrbibe3' => $describe3,
    //     ':status' => $status,
    // ];
    // $query_execute = $result->execute($data);
    // if($query_execute){
    //     $_SESSION['message'] = "Thêm thành công";
    //     header('Location: ../list_event.php');
    //     exit(0);
    // }
    // else{
    //     $_SESSION['message'] = "Không thành công";
    //     header('Location: ../list_event.php');
    //     exit(0);
    // }
?>