<?php
    include '../../Database.php';

    $result = $connect ->prepare('SELECT * FROM events');
    $result->execute();
    $row_event = $result ->fetchAll();

    $id=$_GET['id'];
    $result = $connect ->prepare('SELECT * FROM images_event WHERE id = :id');
    $result ->bindValue(':id',$id,PDO::PARAM_INT);
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
                    <h4 class="card-title">Chỉnh sửa ảnh</h4>
                    <form class="forms-sample" action="<?php echo '../forms/event_image/edit_image_event_process.php'?> " method="POST" enctype="multipart/form-data">
                    <div class="col-md-6">
                        <div class="form-group row">
                        <input type="text" hidden="true" class="form-control" name ="id" value="<?php echo $row_image[0]['id']; ?>">
                        <input type="text" hidden="true" class="form-control" name ="value_image" value="<?php echo $row_image[0]['image_name']; ?>">
                          <label class="col-sm-3 col-form-label">Chọn sự kiện</label>
                          <div class="col-sm-9">
                            <select class="form-control" name="masukien">
                            <?php foreach ($row_event as $event)
                                    {
                            ?>
                              <option value = "<?php echo $event['id'];?>"
                              <?php if(($event['id']==$row_image[0]['images_event_id'] )&& ($event['status']==1)){ 
                               echo "selected = 'selected'";}?>> 
                               <?php echo $event['event_name'];?>
                              </option>
                            <?php
                                    }
                            ?>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Ảnh sự kiện</label>
                        <img style="width:415px;" src="<?php echo '../../img/event/' . $row_image[0]['image_name']?>">
                        <input type="file" name="img" >
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Mô tả</label>
                        <textarea type="text" name="mota" class="form-control-des"><?php echo $row_image[0]['describe']; ?></textarea>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Trạng thái</label>
                          <div class="col-sm-9">
                            <select class="form-control" name ="trangthai">
                                <option value="0" <?php if($row_image[0]['status']==0) echo "selected = 'selected'";?>>Không hoạt động</option>
                                <option value="1" <?php if($row_image[0]['status']==1) echo "selected = 'selected'";?>>Đang hoạt động</option>
                            </select>
                          </div>
                        </div>
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

