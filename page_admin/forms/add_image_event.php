<?php
    include '../../Database.php';

    $result = $connect ->prepare('SELECT * FROM events');
    $result->execute();
    $row_event = $result ->fetchAll();
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
                    <h4 class="card-title">Thêm ảnh sự kiện mới</h4>
                    <form class="forms-sample" action="<?php echo '../forms/event_image/add_image_event_process.php'?> " method="POST" enctype="multipart/form-data">
                    <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Chọn sự kiện</label>
                          <div class="col-sm-9">
                            <select class="form-control" name="masukien">
                            <?php foreach ($row_event as $event)
                                    {
                            ?>
                              <option value = "<?php echo $event['id'];?>">
                              <?php if($event['status']==1){ 
                               echo $event['event_name'];}?></option>
                            <?php
                                    }
                            ?>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Tải ảnh sự kiện</label>
                        <input type="file" name="img" multiple>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Mô tả</label>
                        <textarea type="text" name="mota" class="form-control" placeholder="Mô tả"></textarea>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Trạng thái</label>
                          <div class="col-sm-9">
                            <select class="form-control" name ="trangthai">
                              <option value="1">Đang hoạt động</option>
                              <option value="0">Không hoạt động</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary me-2">Thêm</button>
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

