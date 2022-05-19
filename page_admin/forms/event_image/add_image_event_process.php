<?php
    include '../../../Database.php';

    $code_event = $_POST['masukien']; 
    $images = $_FILES['img']['name'];
    $describe = $_POST['mota']; 
    $status = 1;
    //Xử lý ảnh
    $loaction_img = "../../../img/event/"; // Vị trí ảnh
    $name_img = $loaction_img . basename($_FILES["img"]["name"]);// Lấy vị trí lưu và lấy tên ảnh gốc
    $allowUpload   = true;
    $imageFileType = pathinfo($name_img,PATHINFO_EXTENSION);// Lấy phần mở rộng
    $allowtypes    = array('jpg', 'png', 'jpeg', 'gif'); // Những lại file được upload
    if (file_exists($name_img)) // Kiểm tra tồn tại
    {
        echo "Đã tồn tại ảnh, sẽ ghi đè lên ảnh cũ";
        $allowUpload = true;
    }
    if ($_FILES["img"]["size"] > 2100000)
    {
        echo "Không được upload ảnh lớn hơn 2.0 (MB).";
        $allowUpload = false;
    }
    if (!in_array($imageFileType,$allowtypes ))
    {
        echo "Chỉ được upload các định dạng JPG, PNG, JPEG, GIF";
        $allowUpload = false;
    }
    // foreach ($_FILES["img"]["name"]as $file){
    //     $name[] = $file;
    // }

    $add_image_event = "INSERT INTO images_event (`images_event_id`, `image_name`, `describe`, `status` )
                        VALUE ('".$code_event."', '".$images."', '".$describe."','".$status."')";

    if($result = $connect ->prepare($add_image_event)){?>
        <script>alert("Thêm thành công")</script><?php 

        if (move_uploaded_file($_FILES["img"]["tmp_name"], $name_img))
        {
            echo "File ". basename( $_FILES["img"]["name"]).
            " Đã upload thành công.". '<br>';
    
            echo "File lưu tại " . $name_img. '<br>';
            // echo 'Tổng file tải lên là: ' .count($name) . '<br>';
    
        }
    }else{?>
    
    <?php };
    // $result ->BindValue(':code_event',$code_event,PDO::PARAM_INT);
    // $result ->BindValue(':images',$images,PDO::PARAM_STR);
    // $result ->BindValue(':status',$status,PDO::PARAM_INT);
    // $result ->BindValue(':describe',$describe,PDO::PARAM_STR);
    $result->execute();

?>
<html>
<a href="<?php echo '../list_image_event.php'?>">Trở lại</a>
</html>