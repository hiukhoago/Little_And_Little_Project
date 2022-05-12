<?php 
  include '../../Database.php';

  $id=$_GET['id'];
  $detail_admin=$connect ->prepare('SELECT * FROM admins where id = :id');
  $detail_admin ->bindValue(':id',$id,PDO::PARAM_STR);
  $detail_admin->execute();
  $detail_admin_row = $detail_admin->fetchALL();
?>
<!DOCTYPE html>
<html lang="en">
<?php include ("../elements/head.php") ?>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <?php include ("../elements/header.php") ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <?php include ("../elements/partial.php") ?>
      <div class="main-panel"> 
        <div class="content-wrapper">
            <!-- Content -->
            <div class="col-lg-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Chi tiết tài khoản</h4>
                  <a type="button" class="btn btn-secondary btn-rounded btn-fw"href="<?php echo 'edit_account_admin.php?id='.$detail_admin_row[0]['id'];?>">Edit</a>  
                  <br> <br>
                  <label style="font-weight: bold;">ID : </label> <?php echo $detail_admin_row[0]['id']?><br> <br>
                  <label style="font-weight: bold;">Tên tài khoản :</label><?php echo $detail_admin_row[0]['user_name']?><br> <br>
                  <label style="font-weight: bold;">Mật khẩu: </label><?php echo $detail_admin_row[0]['password']?><br> <br>
                  <label style="font-weight: bold;">Họ: </label><?php echo $detail_admin_row[0]['last_name']?><br> <br>
                  <label style="font-weight: bold;">Tên: </label><?php echo $detail_admin_row[0]['fist_name']?><br> <br>
                  <label style="font-weight: bold;">Số điện thoại: </label><?php echo $detail_admin_row[0]['phone_number']?><br> <br>
                  <label style="font-weight: bold;">Email: </label><?php echo $detail_admin_row[0]['email']?><br> <br>
                  <label style="font-weight: bold;">Ngày sinh: </label><?php echo $detail_admin_row[0]['birthday']?><br> <br>
                  <label style="font-weight: bold;">Giới tính: </label><?php echo $detail_admin_row[0]['sex']?><br> <br>
                  <label style="font-weight: bold;">Tình trạng: </label><?php echo $detail_admin_row[0]['status']?><br> <br>
                  <label style="font-weight: bold;">Ảnh đại diện: </label><img src="<?php echo '../../img/avatar/' . $detail_admin_row[0]['avatar']?>"><br> <br>
                  <a type="button" class="btn btn-warning btn-rounded btn-fw"href="./list_account_admin.php">Quay lại</a>  
                </div>
              </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <?php include ("../elements/footer.php") ?>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
</body>
<?php include ("../elements/script.php") ?>
</html>

