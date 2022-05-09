<?php
    include '../../Database.php';

    $id =  $_POST['id'];
    $user_name = $_POST['tendangnhap'];
    $password = $_POST['matkhau'];
    $last_name = $_POST['ho'];
    $fist_name = $_POST['ten'];
    $email = $_POST['email'];
    $phone_number = $_POST['sodienthoai'];
    $birthday = $_POST['ngaysinh'];
    $sex = $_POST['gioitinh'];
    // $avatar = $_POST['anhdaidien'];
    $status = $_POST['trangthai'];

    $update_admin = "UPDATE admins
                      SET phone_number = '" . $phone_number . "',
                      user_name = '" . $user_name . "',
                      password = '" . $password . "',
                      fist_name = '" . $fist_name . "',
                      last_name = '" . $last_name . "',
                      birthday = '" . $birthday . "',
                      sex = '" . $sex . "',
                      avatar = '',
                      status = '" . $status . "',
                      email = '" . $email . "'
                      WHERE id = '" . $id . "' ";

    if($result = $connect ->prepare($update_admin)){?>
        <script>alert("Cập nhật thành công")</script>
    <?php }else{?>
      <script> alert("<?php echo "Lỗi: " . $sql . "<br>" . $connect->error; ?>"); </script> 
    <?php };

    $result->execute();

?>
<html>
<a href="<?php echo './list_account_admin.php'?>">Trở lại</a>
</html>