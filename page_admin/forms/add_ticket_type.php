<?php
    include '../../Database.php';

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
          <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Thêm loại vé mới</h4>
                    <form class="forms-sample" action="<?php echo './add_ticket_type_process.php'?> " method="POST" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="exampleInputName2">Tên loại vé</label>
                        <input name = "tenloaive" type="text" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName2">Giá vé</label>
                        <input type="numner_format" name ="giave" class="form-control">
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Trạng thái</label>
                          <div class="col-sm-9">
                            <select class="form-control" name ="trangthai">
                              <option value="1">Đang sử dụng</option>
                              <option value="0">Hết hạn sử dụng</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary me-2">Thêm</button>
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

