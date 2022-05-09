<?php
    include '../../Database.php';

    $id =  $_POST['id'];
    $address = $_POST['tendiadiem'];
    $price = $_POST['giave'];
    $status = $_POST['trangthai']; 

    $update_ticket_address = "UPDATE ticket_address
                      SET ticket_address_name = '" . $address . "',
                      ticket_address_price = '" . $price . "',
                      status = '" . $status . "'
                      WHERE id = '" . $id . "' ";

    if($result = $connect ->prepare($update_ticket_address)){?>
        <script>alert("Cập nhật thành công")</script>
    <?php }else{?>
      <script> alert("<?php echo "Lỗi: " . $sql . "<br>" . $connect->error; ?>"); </script> 
    <?php };

    $result->execute();

?>
<html>
<a href="<?php echo './list_ticket_address.php'?>">Trở lại</a>
</html>