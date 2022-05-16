<?php
    include '../../Database.php';

    $id=$_GET['id'];
    $ticket_address=$connect->prepare('SELECT * FROM ticket_address  where id = :id');
    $ticket_address ->bindValue(':id',$id,PDO::PARAM_STR);
    $ticket_address->execute();
    $row_ticket_address = $ticket_address->fetchALL();

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
                    <h4 class="card-title">Chỉnh sửa địa điểm mua vé</h4>
                    <form class="forms-sample" action="<?php echo './edit_ticket_address_process.php'?> " method="POST" enctype="multipart/form-data">
                      <div class="form-group">
                      <input type="text" hidden="true" class="form-control" name ="id" value="<?php echo $row_ticket_address[0]['id']; ?>">
                        <label for="exampleInputName2">Tên địa điểm</label>
                        <input name = "tendiadiem" value = "<?php echo $row_ticket_address[0]['ticket_address_name'];?>" type="text" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName2">Giá vé</label>
                        <input type="numner_format" value = "<?php echo $row_ticket_address[0]['ticket_address_price'];?>" name ="giave" class="form-control">
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Trạng thái</label>
                          <div class="col-sm-9">
                            <select class="form-control" name ="trangthai">
                            <?php
                                if( $row_ticket_address[0]['status']==1){ ?>
                                  <option value="1" <?php echo "selected = 'selected'";?> >Đang sử dụng</option>
                                  <option value="0">Hết hạn sử dụng</option>
                              <?php
                                }
                              ?>
                              <?php
                                if( $row_ticket_address[0]['status']==0){ ?>
                                  <option value="1">Đang sử dụng</option>
                                  <option value="0" <?php echo "selected = 'selected'";?>>Hết hạn sử dụng</option>
                              <?php
                                }
                              ?>
                            </select>
                          </div>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary me-2">Cập nhật</button>
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

