<?php
    include '../../../Database.php';

    $id =  $_POST['id'];
    $email = $_POST['email'];
    $sodienthoai = $_POST['sodienthoai']; 

    $update_member = "UPDATE members
                      SET phone_number = '" . $sodienthoai . "',
                      email = '" . $email . "'
                      WHERE id = '" . $id . "' ";
$result = $connect ->prepare($update_member);
    if($result->execute()){ 
      header('Location: ../list_account_member.php');
    }else{?>
      <script> alert("<?php echo "Lỗi: " . $sql . "<br>" . $connect->error; ?>"); </script> 
    <?php };

?>