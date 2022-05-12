<?php 
  include '../../Database.php';

  $id=$_GET['id'];
  $detail_image=$connect ->prepare('SELECT * FROM images_event where id = :id');
  $detail_image ->bindValue(':id',$id,PDO::PARAM_INT);
  $detail_image->execute();
  $detail_image_row = $detail_image->fetchALL();
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
                  <h4 class="card-title">Chi tiết ảnh sự kiện</h4>
                  <a type="button" class="btn btn-secondary btn-rounded btn-fw"href="<?php echo 'edit_image_event.php?id='.$detail_image_row[0]['id'];?>">Edit</a>  
                  <br> <br>
                  <label style="font-weight: bold;">ID : </label> <?php echo $detail_image_row[0]['id']?><br> <br>
                  <label style="font-weight: bold;">Mã ảnh sự kiện :</label><?php echo $detail_image_row[0]['images_event_id']?><br> <br>
                  <label style="font-weight: bold;">Mô tả: </label><?php echo $detail_image_row[0]['describe']?><br> <br>
                  <label style="font-weight: bold;">Trạng thái: </label><?php if($detail_image_row[0]['status']==1){echo 'Đang hoạt động';}else{echo 'Không hoạt động';} ?><br> <br>
                  <label style="font-weight: bold;">Ảnh: </label><?php echo $detail_image_row[0]['image_name']?><br> <br>
                  <a type="button" class="btn btn-warning btn-rounded btn-fw"href="./list_image_event.php">Quay lại</a>  
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

