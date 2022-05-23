<?php 
    $level="../";
    include '../../Database.php';
    $id=$_GET['id'];
    $edit_member=$connect ->prepare('SELECT * FROM members where id = :id');
    $edit_member ->bindValue(':id',$id,PDO::PARAM_STR);
    $edit_member->execute();
    $edit_member_row = $edit_member->fetchALL();
?>
<!DOCTYPE html>
<html lang="en">
<?php include('../elements/head.php') ?>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <?php include ('../elements/header.php') ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <?php include ('../elements/partial.php') ?>
      <div class="main-panel"> 
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Chỉnh sửa tài khoản khách hàng</h4>
                    <form class="forms-sample" action = "<?php echo '../forms/account/edit_account_member_process.php'?>" method="POST" enctype="multipart/form-data">
                      <div class="form-group">
                        <input type="text" hidden="true" class="form-control" name ="id" value="<?php echo $edit_member_row[0]['id']; ?>">
                        <label for="exampleInputName1">Số thẻ visa</label>
                        <input type="text" disabled class="form-control" name ="sothevisa" value="<?php echo $edit_member_row[0]['visa_number']; ?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Họ và tên</label>
                        <input type="text" disabled name="hovaten" class="form-control" value="<?php echo $edit_member_row[0]['full_name']; ?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Email</label>
                        <input type="email" name="email" class="form-control" value="<?php echo $edit_member_row[0]['email']; ?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Số điện thoại</label>
                        <input type="number"  name="sodienthoai" class="form-control" value="<?php echo $edit_member_row[0]['phone_number']; ?>">
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Ngày hết hạn</label>
                          <div class="col-sm-9">
                            <input name = "ngayhethan" disabled class="form-control" value="<?php echo $edit_member_row[0]['expiration_date']; ?>"/>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">CVV/CVC</label>
                        <input type="number" name="cvv" disabled class="form-control" value="<?php echo $edit_member_row[0]['CVV_CVC']; ?>">
                      </div>
                      <button type="submit" class="btn btn-primary me-2">Cập nhật</button>
                    </form>
                    <button class="btn btn-light">Trở lại</button>
                  </div>
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

