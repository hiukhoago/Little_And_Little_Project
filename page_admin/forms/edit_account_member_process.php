<?php
    include '../../Database.php';

    $id =  $_POST['id'];
    $email = $_POST['email'];
    $sodienthoai = $_POST['sodienthoai']; 

    $update_member = "UPDATE members
                      SET phone_number = '" . $sodienthoai . "',
                      email = '" . $email . "'
                      WHERE id = '" . $id . "' ";

    if($result = $connect ->prepare($update_member)){?>
        <script>alert("Cập nhật thành công")</script>
    <?php }else{?>
      <script> alert("<?php echo "Lỗi: " . $sql . "<br>" . $connect->error; ?>"); </script> 
    <?php };

    $result->execute();

?>
<html>
<a href="<?php echo './list_account_member.php'?>">Trở lại</a>
</html>