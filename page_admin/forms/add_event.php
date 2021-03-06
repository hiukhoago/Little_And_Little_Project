<?php
    include '../../Database.php';
    $result = $connect ->prepare('SELECT * FROM images_event');
    $result->execute();
    $row_image = $result ->fetchAll();
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
                    <h4 class="card-title">Thêm sự kiện mới</h4>
                    <form class="forms-sample" action="<?php echo '../forms/event/add_event_process.php'?> " method="POST" enctype="multipart/form-data" >
                      <div class="form-group">
                        <label for="exampleInputName1">Tên sự kiện</label>
                        <input type="text"  name="tensukien" class="form-control" id="exampleInputName1" placeholder="Tên sự kiện">
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Địa chỉ</label>
                          <div class="col-sm-9">
                            <select class="form-control" name ="diachi">
                              <option value="Đầm Sen Park">Đầm Sen Park</option>
                              <option value="Quảng Trường La Mã">Quảng Trường La Mã</option>
                              <option value="Quảng Trường Âu Lạc">Quảng Trường Âu Lạc</option>
                              <option value="Cầu Cửu Khúc">Cầu Cửu Khúc</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Ngày bắt đầu</label>
                          <div class="col-sm-9">
                            <input name = "ngaybatdau" class="form-control" placeholder="yyyy/mm/dd"/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Ngày kết thúc</label>
                          <div class="col-sm-9">
                            <input name = "ngayketthuc" class="form-control" placeholder="yyyy/mm/dd"/>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName2">Giá vé</label>
                        <input type="numner_format" name ="giave" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Đoạn mô tả thứ 1:</label>
                        <textarea type="text" name="mota1" class="form-control-des"  placeholder="Mô tả" rows="10"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Đoạn mô tả thứ 2:</label>
                        <textarea type="text" name="mota2" class="form-control-des"  placeholder="Mô tả" rows="10"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Đoạn mô tả thứ 3:</label>
                        <textarea type="text" name="mota3" class="form-control-des" placeholder="Mô tả" rows="10"></textarea>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Trạng thái</label>
                          <div class="col-sm-9">
                            <select class="form-control" name ="trangthai">
                              <option value="1">Chờ hoạt động</option>
                              <option value="2">Đang hoạt động</option>
                              <option value="0">Không hoạt động</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary me-2">Tạo</button>
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

