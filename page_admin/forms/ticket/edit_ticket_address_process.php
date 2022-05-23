<?php
    include '../../../Database.php';

    $id =  $_POST['id'];
    $address = $_POST['tendiadiem'];
    $price = $_POST['giave'];
    $status = $_POST['trangthai']; 

    $update_ticket_address = "UPDATE ticket_address
                      SET ticket_address_name = '" . $address . "',
                      ticket_address_price = '" . $price . "',
                      status = '" . $status . "'
                      WHERE id = '" . $id . "' ";
$result = $connect ->prepare($update_ticket_address);
    if($result->execute()){
      header('Location: ../list_ticket_address.php');
     }else{?>
      <script> alert("<?php echo "Lỗi: " . $sql . "<br>" . $connect->error; ?>"); </script> 
    <?php };
?>