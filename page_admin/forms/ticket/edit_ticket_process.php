<?php
    include '../../../Database.php';

    $id =  $_POST['id'];
    $address = $_POST['noimuave'];
    $type = $_POST['loaive'];
    $date = $_POST['ngaysudung'];
    $status = $_POST['trangthai']; 

    $update_ticket = "UPDATE tickets
                      SET id_ticket_address = '" . $address . "',
                      id_ticket_type = '" . $type . "',
                      date_use = '" . $date . "',
                      status = '" . $status . "'
                      WHERE id = '" . $id . "' ";

$result = $connect ->prepare($update_ticket);
    if($result->execute()){
      header('Location: ../list_ticket.php');
     }else{?>
      <script> alert("<?php echo "Lỗi: " . $sql . "<br>" . $connect->error; ?>"); </script> 
    <?php };
?>