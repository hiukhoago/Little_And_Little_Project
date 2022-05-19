<?php 
  $level="../";
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
                    <h4 class="card-title">Thêm tài khoản admin mới</h4>
                    <form class="forms-sample" action="<?php echo '../forms/account/add_account_process.php'?> " method="POST" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="exampleInputName1">Tên tài khoản</label>
                        <input type="text" class="form-control" name ="tentaikhoan" id="exampleInputName1" placeholder="Tên đăng nhập">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Mật khẩu</label>
                        <input type="password" name="matkhau" class="form-control" id="exampleInputPassword4" placeholder="Mật khẩu">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Họ</label>
                        <input type="text" name="ho" class="form-control" id="exampleInputName1" placeholder="Họ">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Tên</label>
                        <input type="text" name="ten" class="form-control" id="exampleInputName1" placeholder="Tên">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Email</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Số điện thoại</label>
                        <input type="number" name="sodienthoai" class="form-control" id="exampleInputEmail3" placeholder="Phone number">
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Ngày sinh</label>
                          <div class="col-sm-9">
                            <input name = "ngaysinh" class="form-control" placeholder="yyyy/mm/dd"/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Giới tính</label>
                          <div class="col-sm-9">
                            <select class="form-control" name ="gioitinh">
                              <option value="1">Nam</option>
                              <option value="2">Nữ</option>
                              <option value="0">Khác</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Trạng thái</label>
                          <div class="col-sm-9">
                            <select class="form-control" name ="trangthai">
                              <option value="1">Hoạt động</option>
                              <option value="0">Không hoạt động</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Ảnh đại diện</label>
                        <input type="file" name="anhdaidien" >
                      </div>
                      <button type="submit" class="btn btn-primary me-2">Tạo</button>
                      <button class="btn btn-light">Trở lại</button>
                    </form>
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

