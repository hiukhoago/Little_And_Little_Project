<!DOCTYPE html>
<html lang="en">

<head>
<?php include ("head.php") ?>
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="./img/LogoDamSen.png" alt="logo">
              </div>
              <h4>ĐĂNG NHẬP</h4>
              <form class="pt-3" action="./login_process.php" method="post">
                <div class="form-group">
                  <input type="text" name = "tendangnhap" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Tên đăng nhập">
                </div>
                <div class="form-group">
                  <input type="password" name ="matkhau" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Mật khẩu">
                </div>
                <div class="right-w3l">
							    <input type="submit" class="btn btn-block btn-primary form-control" value="Đăng Nhập">
					  	  </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <a href="#" class="auth-link text-black">Quên mật khẩu?</a>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Bạn đã có tài khoản chưa? <a href="register.html" class="text-primary">Đăng ký</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <script src="../../js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
