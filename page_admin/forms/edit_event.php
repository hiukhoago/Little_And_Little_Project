<?php
    include '../../Database.php';
    
    $id=$_GET['id'];
    $event = $connect ->prepare('SELECT * FROM events where id = :id');
    $event ->bindValue(':id',$id,PDO::PARAM_INT);
    $event->execute();
    $row_event = $event ->fetchAll();

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
                    <form class="forms-sample" action="<?php echo '../forms/event/edit_event_process.php'?> " method="POST" enctype="multipart/form-data" >
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
                              <option value="Đầm Sen Park" <?php if( $row_event[0]['address']=='Đầm Sen Park') echo "selected = 'selected'";?>>Đầm Sen Park</option>
                              <option value="Quảng Trường La Mã" <?php if( $row_event[0]['address']=='Quảng Trường La Mã') echo "selected = 'selected'";?>>Quảng Trường La Mã</option>
                              <option value="Quảng Trường Âu Lạc" <?php if( $row_event[0]['address']=='Quảng Trường Âu Lạc') echo "selected = 'selected'";?>>Quảng Trường Âu Lạc</option>
                              <option value="Cầu Cửu Khúc" <?php if( $row_event[0]['address']=='Cầu Cửu Khúc') echo "selected = 'selected'";?>>Cầu Cửu Khúc</option>
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
                        <textarea type="text" name="mota1" class="form-control-des" ><?php echo $row_event[0]['describe_1'];?></textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Đoạn mô tả thứ 2:</label>
                        <textarea type="text" name="mota2" class="form-control-des" ><?php echo $row_event[0]['describe_2'];?></textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Đoạn mô tả thứ 3:</label>
                        <textarea type="text" name="mota3" class="form-control-des" ><?php echo $row_event[0]['describe_3'];?></textarea>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Trạng thái</label>
                          <div class="col-sm-9">
                            <select class="form-control" name ="trangthai">
                              <option value="1" <?php if( $row_event[0]['status']=='1') echo "selected = 'selected'";?>>Chờ hoạt động</option>
                              <option value="2"<?php if( $row_event[0]['status']=='2') echo "selected = 'selected'";?>>Đang hoạt động</option>
                              <option value="0"<?php if( $row_event[0]['status']=='0') echo "selected = 'selected'";?>>Không hoạt động</option>
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

