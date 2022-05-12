<?php
    include '../../../Database.php';

    $code_event = $_POST['masukien']; 
    // $image = $_POST['img']; 
    $describe = $_POST['mota']; 
    $status = $_POST['trangthai']; 

    $add_image_event = "INSERT INTO images_event (images_event_id, image_name, describe, status )
                        VALUE (:code_event, '', :describe, :status)";

    if($result = $connect ->prepare($add_image_event)){?>
        <script>alert("Thêm thành công")</script>
    <?php }else{?>
    <script> alert("<?php echo "Lỗi: " . $sql . "<br>" . $connect->error; ?>"); </script> 
    <?php };
    $result ->BindValue(':code_event',$code_event,PDO::PARAM_INT);
    // $result ->BindValue(':image',$image,PDO::PARAM_STR);
    $result ->BindValue(':status',$status,PDO::PARAM_INT);
    $result ->BindValue(':describe',$describe,PDO::PARAM_STR);
    $result->execute();

?>
<html>
<a href="<?php echo '../list_image_event.php'?>">Trở lại</a>
</html>