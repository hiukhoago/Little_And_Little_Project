<?php
    include '../../../Database.php';

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

    //Kiểm tra ảnh cũ hay mới
    if($_FILES['anhdaidien']['name']=="")
    $avatar = $_POST['value_image'];// khai báo 1 cái thẻ input bên trang edit để lấy giá trị ảnh
    else
      $avatar = $_FILES['anhdaidien']['name'];

    $loaction_img = "../../../img/avatar/"; // Vị trí ảnh
    $name_img = $loaction_img . basename($_FILES["anhdaidien"]["name"]);// Lấy vị trí lưu và lấy tên ảnh gốc
    $allowUpload   = true;
    $imageFileType = pathinfo($name_img,PATHINFO_EXTENSION);// Lấy phần mở rộng
    $allowtypes    = array('jpg', 'png', 'jpeg', 'gif'); // Những lại file được upload

    if ($_FILES["anhdaidien"]["size"] > 2100000)
    {
        echo "Không được upload ảnh lớn hơn 2.0 (MB).";
        $allowUpload = false;
    }
    // if (!in_array($imageFileType,$allowtypes ))
    // {
    //     echo "Chỉ được upload các định dạng JPG, PNG, JPEG, GIF";
    //     $allowUpload = false;
    // }

    $update_admin = "UPDATE admins
                      SET phone_number = '" . $phone_number . "',
                      user_name = '" . $user_name . "',
                      password = '" . $password . "',
                      fist_name = '" . $fist_name . "',
                      last_name = '" . $last_name . "',
                      birthday = '" . $birthday . "',
                      sex = '" . $sex . "',
                      avatar = '" . $avatar . "',
                      status = '" . $status . "',
                      email = '" . $email . "' WHERE id ='".$id."' ";

$result = $connect ->prepare($update_admin);
    // $result ->BindValue(':id',$id,PDO::PARAM_INT);  
    // $result ->BindValue(':user_name',$user_name,PDO::PARAM_STR);
    // $result ->BindValue(':password',$password,PDO::PARAM_STR);
    // $result ->BindValue(':last_name',$last_name,PDO::PARAM_STR);
    // $result ->BindValue(':fist_name',$fist_name,PDO::PARAM_STR);
    // $result ->BindValue(':email',$email,PDO::PARAM_STR);
    // $result ->BindValue(':phone_number',$phone_number,PDO::PARAM_INT);
    // $result ->BindValue(':birthday',$birthday,PDO::PARAM_INT);
    // $result ->BindValue(':sex',$sex,PDO::PARAM_STR);
    // $result ->BindValue(':avatar',$avatar,PDO::PARAM_STR);
    // $result->bindValue(':status', $status, PDO::PARAM_INT);
    $result->execute();
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

?>
<html>
<a href="<?php echo '../list_account_admin.php'?>">Trở lại</a>
</html>