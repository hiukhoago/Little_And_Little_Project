<?php
    include '../../Database.php';
    
    $id=$_GET['id'];
    $event = $connect ->prepare('SELECT * FROM events where id = :id');
    $event ->bindValue(':id',$id,PDO::PARAM_INT);
    $event->execute();
    $row_event = $event ->fetchAll();

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
                    <h4 class="card-title">Chỉnh sửa sự kiện</h4>
                    <form class="forms-sample" action="<?php echo './edit_event_process.php'?> " method="POST" enctype="multipart/form-data" >
                      <div class="form-group">
                      <input type="text" hidden="true" class="form-control" name ="id" value="<?php echo $row_event[0]['id']; ?>">
                        <label for="exampleInputName1">Tên sự kiện</label>
                        <input type="text"  name="tensukien" class="form-control" value = "<?php echo $row_event[0]['event_name'];?>">
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Địa chỉ</label>
                          <div class="col-sm-9">
                            <select class="form-control" name ="diachi">
                              <option value="0">Đầm Sen Park</option>
                              <option value="1">Quảng Trường La Mã</option>
                              <option value="2">Quảng Trường Âu Lạc</option>
                              <option value="3">Cầu Cửu Khúc</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Ngày bắt đầu</label>
                          <div class="col-sm-9">
                            <input name = "ngaybatdau" class="form-control" value = "<?php echo $row_event[0]['date_start'];?>"/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Ngày kết thúc</label>
                          <div class="col-sm-9">
                            <input name = "ngayketthuc" class="form-control" value = "<?php echo $row_event[0]['date_end'];?>"/>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName2">Giá vé</label>
                        <input type="numner_format" name ="giave" class="form-control" value = "<?php echo $row_event[0]['ticket_price'];?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Đoạn mô tả thứ 1:</label>
                        <textarea type="text" name="mota" class="form-control" ><?php echo $row_event[0]['describe_1'];?></textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Đoạn mô tả thứ 2:</label>
                        <textarea type="text" name="mota" class="form-control" ><?php echo $row_event[0]['describe_2'];?></textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Đoạn mô tả thứ 3:</label>
                        <textarea type="text" name="mota" class="form-control" ><?php echo $row_event[0]['describe_3'];?></textarea>
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
                      <button type="submit" class="btn btn-primary me-2">Chỉnh sửa</button>
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

