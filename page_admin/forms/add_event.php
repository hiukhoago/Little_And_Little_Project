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
                    <form class="forms-sample">
                      <div class="form-group">
                        <label for="exampleInputName1">Tên sự kiện</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Tên sự kiện">
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Địa chỉ</label>
                          <div class="col-sm-9">
                            <select class="form-control" name ="diachi">
                              <option value="1">Đầm sen Park</option>
                              <option value="0">Khác</option>
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
                        <label for="exampleInputName1">Mô tả</label>
                        <textarea type="text" class="form-control" id="exampleInputName1" placeholder="Mô tả"></textarea>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Ảnh</label>
                          <div class="col-sm-9">
                          <select class="form-control" name="anh">
                            <?php foreach ($row_image as $image)
                                    {
                            ?>
                                <option value = "<?php echo $image['images_event_id'];?>">
                                <?php echo $image['image_name'];?></option>
                            <?php
                                    }
                            ?>
                            </select>
                          </div>
                        </div>
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

