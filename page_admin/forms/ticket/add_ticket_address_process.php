<?php
    session_start();
    include '../../../Database.php';

if(isset($_POST['add']))
{
    $tendiadiem = $_POST['tendiadiem']; 
    $giave = $_POST['giave']; 
    $trangthai = $_POST['trangthai']; 

    $add_ticket_sql = "INSERT INTO ticket_address (ticket_address_name, ticket_address_price, status )
                            VALUE (:tendiadiem, :giave,:trangthai)";

    $result = $connect ->prepare($add_ticket_sql);
    $data = [
        ':tendiadiem' => $tendiadiem,
        ':giave' => $giave,
        ':trangthai' => $trangthai,
    ];

    if($query_execute = $result->execute($data)){
        $_SESSION['message'] = "Thêm thành công";
        header('Location: ../list_ticket_address.php');
        exit(0);
    }
    else{
        $_SESSION['message'] = "Không thành công";
        header('Location: ../list_ticket_address.php');
        exit(0);
        // echo '<script> alert("Thêm thất bại ")</script>';
    }
}


?>