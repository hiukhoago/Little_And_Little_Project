<?php
    include '../../../Database.php';

    $id =  $_POST['id'];
    $id_event = $_POST['masukien'];
    $describe = $_POST['mota'];
    $status = $_POST['trangthai'];

    //Kiểm tra ảnh cũ hay mới
    if($_FILES['img']['name']=="")
    $img = $_POST['value_image'];// khai báo 1 cái thẻ input bên trang edit để lấy giá trị ảnh
    else
      $img = $_FILES['img']['name'];

    $loaction_img = "../../../img/event/"; // Vị trí ảnh
    $name_img = $loaction_img . basename($_FILES["img"]["name"]);// Lấy vị trí lưu và lấy tên ảnh gốc
    $allowUpload   = true;
    $imageFileType = pathinfo($name_img,PATHINFO_EXTENSION);// Lấy phần mở rộng
    $allowtypes    = array('jpg', 'png', 'jpeg', 'gif'); // Những lại file được upload

    if ($_FILES["img"]["size"] > 2100000)
    {
        echo "Không được upload ảnh lớn hơn 2.0 (MB).";
        $allowUpload = false;
    }
    // if (!in_array($imageFileType,$allowtypes ))
    // {
    //     echo "Chỉ được upload các định dạng JPG, PNG, JPEG, GIF";
    //     $allowUpload = false;
    // }

    $update_image_event = "UPDATE images_event
                      SET 
                      `images_event_id` = '" . $id_event . "',
                      `image_name` = '".$img."',
                      `status` = '" . $status . "' WHERE `id` = '" .$id. "' ";

$result = $connect ->prepare($update_image_event);
$result->execute();
if($result = $connect ->prepare($update_image_event)){?>
    <script>alert("Cập nhật thành công")</script>
<?php 
  if (move_uploaded_file($_FILES["img"]["tmp_name"], $name_img))
  {
      echo "File ". basename( $_FILES["img"]["name"]).
      " Cập nhật ảnh thành công.";

      echo "File lưu tại " . $name_img;

  }
}else{?>
  <script> alert("<?php echo "Lỗi: " . $sql . "<br>" . $connect->error; ?>"); </script> 
<?php };



?>
<html>
<a href="<?php echo '../list_image_event.php'?>">Trở lại</a>
</html>