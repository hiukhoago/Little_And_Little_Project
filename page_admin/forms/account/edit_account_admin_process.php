<?php
    include '../../../Database.php';

    //Kiểm tra ảnh cũ hay mới
    if($_FILES["anhdaidien"]['name']=="")
      $avatar = $_POST['anhdaidien'];
    else
      $avatar = $_FILES["anhdaidien"]['name'];

    $id =  $_POST['id'];
    $user_name = $_POST['tendangnhap'];
    $password = $_POST['matkhau'];
    $last_name = $_POST['ho'];
    $fist_name = $_POST['ten'];
    $email = $_POST['email'];
    $phone_number = $_POST['sodienthoai'];
    $birthday = $_POST['ngaysinh'];
    $sex = $_POST['gioitinh'];
    $status = $_POST['trangthai'];

    $loaction_img = "../../../img/avatar/"; // Vị trí ảnh
    $name_img = $loaction_img . basename($_FILES["anhdaidien"]["name"]);// Lấy vị trí lưu và lấy tên ảnh gốc
    $allowUpload   = true;
    $imageFileType = pathinfo($name_img,PATHINFO_EXTENSION);// Lấy phần mở rộng
    $allowtypes    = array('jpg', 'png', 'jpeg', 'gif'); // Những lại file được upload
    if (file_exists($name_img)) // Kiểm tra tồn tại
    {
        echo "Đã tồn tại ảnh, vui lòng chọn ảnh khác";
        $allowUpload = false;
    }
    if ($_FILES["anhdaidien"]["size"] > 2100000)
    {
        echo "Không được upload ảnh lớn hơn 2.0 (MB).";
        $allowUpload = false;
    }
    if (!in_array($imageFileType,$allowtypes ))
    {
        echo "Chỉ được upload các định dạng JPG, PNG, JPEG, GIF";
        $allowUpload = false;
    }

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
    <?php 
      if (move_uploaded_file($_FILES["anhdaidien"]["tmp_name"], $name_img))
      {
          echo "File ". basename( $_FILES["anhdaidien"]["name"]).
          " Cập nhật ảnh thành công.";
  
          echo "File lưu tại " . $name_img;
  
      }
    }else{?>
      <script> alert("<?php echo "Lỗi: " . $sql . "<br>" . $connect->error; ?>"); </script> 
    <?php };

    $result->execute();

?>
<html>
<a href="<?php echo '../list_account_admin.php'?>">Trở lại</a>
</html>