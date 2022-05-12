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
            <!-- Content -->
            <div class="col-lg-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Danh sách ảnh sự kiện</h4>
                  <a type="button" class="btn btn-success btn-rounded btn-fw"href="./add_image_event.php">Thêm ảnh mới</a>
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                            #
                          </th>
                          <th>
                            Mã ảnh sự kiện
                          </th>
                          <th>
                            Tên ảnh
                          </th>
                          <th>
                            Mô tả
                          </th>
                          <th>
                            Trạng thái
                          </th>
                          <th>
                            Chức năng
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          foreach ($row_image as $image)
                            {
                        ?>
                        <tr>
                          <td>
                            <?php echo $image['id'];?>
                          </td>
                          <td>
                          <?php echo $image['images_event_id'];?>
                          </td>
                          <td>
                          <?php echo $image['image_name'] ;?>
                          </td>
                          <td>
                          <?php echo $image['describe'] ;?>
                          </td>
                          <td>
                          <?php if($image['status']==1){echo 'Đang hoạt động';}else{echo 'Không hoạt động';} ;?>
                          </td>
                          <td>
                          <a type="button" class="btn btn-info btn-rounded btn-fw"href="<?php echo 'detail_image_event.php?id='.$image['id'];?>">Detail</a>  
                          <a type="button" class="btn btn-secondary btn-rounded btn-fw"href="<?php echo 'edit_image_event.php?id='.$image['id'];?>">Edit</a>
                          </td>
                        </tr>
                        <?php
                           }
                        ?>
                      </tbody>
                    </table>
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

