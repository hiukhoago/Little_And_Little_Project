<?php
    include '../../../Database.php';

    $id =  $_POST['id'];
    $name_event = $_POST['tensukien']; 
    $address = $_POST['diachi']; 
    $date_start = $_POST['ngaybatdau'];
    $date_end = $_POST['ngayketthuc'];
    $giaVe = $_POST['giave'];
    $describe1 = $_POST['mota1'];
    $describe2 = $_POST['mota2'];
    $describe3 = $_POST['mota3'];
    $status = $_POST['trangthai'];

    $update_ticket = "UPDATE events
                      SET event_name = '" . $name_event . "',
                      address = '" . $address . "',
                      date_start = '" . $date_start . "',
                      date_end = '" . $date_end . "',
                      ticket_price = '" . $giaVe . "',
                      describe_1 = '" . $describe1 . "',
                      describe_2 = '" . $describe2 . "',
                      describe_3 = '" . $describe3 . "',
                      status = '" . $status . "'
                      WHERE id = '" . $id . "' ";
$result = $connect ->prepare($update_ticket);
    if($result->execute()){
        header('Location: ../list_event.php');
    }else{?>
      <script> alert("<?php echo "Lỗi: " . $sql . "<br>" . $connect->error; ?>"); </script> 
    <?php };

    

?>