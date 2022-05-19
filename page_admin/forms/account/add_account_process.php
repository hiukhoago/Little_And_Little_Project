<?php
    session_start();
    include '../../../Database.php';

    if ($_SERVER['REQUEST_METHOD'] !== 'POST')
    {
        echo "Sai phương thức";
        die;
    }

    $name_account = $_POST['tentaikhoan']; 
    $password = $_POST['matkhau'];
    $last_name = $_POST['ho'];
    $fist_name = $_POST['ten'];
    $email = $_POST['email'];
    $phone_number = $_POST['sodienthoai'];
    $birthday = $_POST['ngaysinh'];
    $sex = $_POST['gioitinh'];
    $avatar = $_FILES['anhdaidien']['name'];
    $status = $_POST['trangthai'];

    // Xử lý ảnh
    if (!isset($_FILES["anhdaidien"]))
    {
        echo "Sai định dạng";
        die;
    }
    $loaction_img = "../../../img/avatar/"; // Vị trí ảnh
    $name_img = $loaction_img . basename($_FILES["anhdaidien"]["name"]);// Lấy vị trí lưu và lấy tên ảnh gốc
    $allowUpload   = true;
    $imageFileType = pathinfo($name_img,PATHINFO_EXTENSION);// Lấy phần mở rộng
    $allowtypes    = array('jpg', 'png', 'jpeg', 'gif'); // Những lại file được upload
    if (file_exists($name_img)) // Kiểm tra tồn tại
    {
        echo "Đã tồn tại ảnh, sẽ ghi đè lên ảnh cũ";
        $allowUpload = true;
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

    // Xử lý còn lại
    $add_account_sql = "INSERT INTO admins (user_name, password, fist_name, last_name, phone_number, email, birthday, sex, avatar, status )
                        VALUE (:name_account, :password,:fist_name, :last_name, :phone_number, :email, :birthday, :sex, :avatar,1)";

    if($result = $connect ->prepare($add_account_sql)){?>
        <script>alert("Thêm thành công")</script>
    <?php 
     // di chuyển vào thư mục cần lưu trũ
     if (move_uploaded_file($_FILES["anhdaidien"]["tmp_name"], $name_img))
     {
         echo "File ". basename( $_FILES["anhdaidien"]["name"]).
         " Đã upload thành công.";
 
         echo "File lưu tại " . $name_img;
 
     }
    }else{?>
    <script> alert("<?php echo "Lỗi: " . $sql . "<br>" . $connect->error; ?>"); </script> 
    <?php };
    $result ->BindValue(':name_account',$name_account,PDO::PARAM_STR);
    $result ->BindValue(':password',$password,PDO::PARAM_STR);
    $result ->BindValue(':last_name',$last_name,PDO::PARAM_STR);
    $result ->BindValue(':fist_name',$fist_name,PDO::PARAM_STR);
    $result ->BindValue(':email',$email,PDO::PARAM_STR);
    $result ->BindValue(':phone_number',$phone_number,PDO::PARAM_INT);
    $result ->BindValue(':birthday',$birthday,PDO::PARAM_INT);
    $result ->BindValue(':sex',$sex,PDO::PARAM_STR);
    $result ->BindValue(':avatar',$avatar,PDO::PARAM_STR);
    $result->execute();

?>
<html>
    <a href="<?php echo '../list_account_admin.php'?>">Trở lại</a>
</html>