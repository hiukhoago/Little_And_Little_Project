<?php
    include '../../Database.php';
    $id=$_GET['id'];
    $ticket=$connect->prepare('SELECT * FROM tickets  where id = :id');
    $ticket ->bindValue(':id',$id,PDO::PARAM_STR);
    $ticket->execute();
    $row_ticket = $ticket->fetchALL();

    $result = $connect ->prepare('SELECT * FROM ticket_address');
    $result->execute();
    $row_ticket_address = $result ->fetchAll();

    $result = $connect ->prepare('SELECT * FROM ticket_type');
    $result->execute();
    $row_ticket_type = $result ->fetchAll();

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
                    <h4 class="card-title">Chỉnh sửa vé</h4>
                    <form class="forms-sample" action="<?php echo './edit_ticket_process.php'?> " method="POST" enctype="multipart/form-data">
                      <div class="form-group">
                      <input type="text" hidden="true" class="form-control" name ="id" value="<?php echo $row_ticket[0]['id']; ?>">
                        <label for="exampleInputName1">Mã vé</label>
                        <input name = "code" value = "<?php echo $row_ticket[0]['ticket_code'];?>" class="form-control"  disabled>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Nơi mua vé</label>
                          <div class="col-sm-9">
                            <select class="form-control" name="noimuave">
                            <?php foreach ($row_ticket_address as $ticket_address)
                                    {
                                        echo ($ticket_address['ticket_address_name']);
                            ?>
                              <option value = "<?php echo $ticket_address['id'];?>"
                              <?php if($ticket_address['id']== $row_ticket[0]['id_ticket_address'])
                                  echo "selected = 'selected'";?>> 
                                  <?php echo ($ticket_address['ticket_address_name']);?>
                               </option>
                            <?php
                                    }
                            ?>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Loại vé</label>
                          <div class="col-sm-9">
                          <select class="form-control" name="loaive">
                            <?php foreach ($row_ticket_type as $ticket_type)
                                    {
                            ?>
                                <option value = "<?php echo $ticket_type['id'];?>">
                                <?php if($ticket_type['status']==1){ 
                                echo $ticket_type['ticket_type_name'];}?></option>
                            <?php
                                    }
                            ?>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Ngày sử dụng</label>
                          <div class="col-sm-9">
                            <input name = "ngaysudung" class="form-control" value = "<?php echo $row_ticket[0]['date_use'];?>"/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Trạng thái</label>
                          <div class="col-sm-9">
                            <select class="form-control" name ="trangthai">
                            <?php
                                if( $row_ticket[0]['status']==1){ ?>
                                  <option value="1" <?php echo "selected = 'selected'";?> >Đang sử dụng</option>
                                  <option value="0">Hết hạn sử dụng</option>
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

