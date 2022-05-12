<?php 
    $level="../";
    include '../../Database.php';
    $id=$_GET['id'];
    $edit_admin=$connect ->prepare('SELECT * FROM admins where id = :id');
    $edit_admin ->bindValue(':id',$id,PDO::PARAM_STR);
    $edit_admin->execute();
    $edit_admin_row = $edit_admin->fetchALL();
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
                    <h4 class="card-title">Chỉnh sửa tài khoản ADMIN</h4>
                    <form class="forms-sample" action = "<?php echo '../forms/account/edit_account_admin_process.php'?>" method="POST" enctype="multipart/form-data">
                      <div class="form-group">
                        <input type="text" hidden="true" class="form-control" name ="id" value="<?php echo $edit_admin_row[0]['id']; ?>">
                        <label for="exampleInputName1">Tên đăng nhập</label>
                        <input type="text"  class="form-control" name ="tendangnhap" value="<?php echo $edit_admin_row[0]['user_name']; ?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Mật khẩu</label>
                        <input type="text" name="matkhau" class="form-control" value="<?php echo $edit_admin_row[0]['password']; ?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Họ</label>
                        <input type="text" name="ho" class="form-control" value="<?php echo $edit_admin_row[0]['last_name']; ?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Tên</label>
                        <input type="text" name="ten" class="form-control" value="<?php echo $edit_admin_row[0]['fist_name']; ?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Email</label>
                        <input type="email" name="email" class="form-control" value="<?php echo $edit_admin_row[0]['email']; ?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Số điện thoại</label>
                        <input type="number"  name="sodienthoai" class="form-control" value="<?php echo $edit_admin_row[0]['phone_number']; ?>">
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Ngày sinh</label>
                          <div class="col-sm-9">
                            <input name = "ngaysinh" class="form-control" value="<?php echo $edit_admin_row[0]['birthday']; ?>"/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Giới tính</label>
                          <div class="col-sm-9">
                            <select class="form-control" name ="gioitinh">
                              <?php
                                if($edit_admin_row[0]['sex']=='Nam'){ ?>
                                  <option value="1" checked >Nam</option>
                                  <option value="2">Nữ</option>
                                  <option value="0">Khác</option>
                              <?php
                                }
                              ?>
                              <?php
                                if($edit_admin_row[0]['sex']=='Nữ'){ ?>
                                  <option value="2" checked >Nữ</option>
                                  <option value="1">Nam</option>
                                  <option value="0">Khác</option>
                              <?php
                                }
                              ?>
                              <?php
                                if($edit_admin_row[0]['sex']=='Khác'){ ?>
                                  <option value="0" checked >Khác</option>
                                  <option value="2">Nữ</option>
                                  <option value="1">Nam</option>
                              <?php
                                }
                              ?>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Trạng thái</label>
                          <div class="col-sm-9">
                            <select class="form-control" name ="trangthai">
                            <?php
                                if($edit_admin_row[0]['status']==1){ ?>
                                  <option value="1" checked >Hoạt động</option>
                                  <option value="0">Không hoạt động</option>
                              <?php
                                }
                              ?>
                              <?php
                                if($edit_admin_row[0]['status']==0){ ?>
                                  <option value="0" checked >Không hoạt động</option>
                                  <option value="1">Hoạt động</option>
                              <?php
                                }
                              ?>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Ảnh đại diện</label>
                        <img src="<?php echo '../../img/avatar/' . $edit_admin_row[0]['avatar']?>">
                        <input type="file" name="anhdaidien" >
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

