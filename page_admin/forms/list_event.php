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
            <!-- Content -->
            <div class="col-lg-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Danh sách các sự kiện</h4>
                  <a type="button" class="btn btn-success btn-rounded btn-fw"href="./add_ticket.php">Thêm sự kiện mới</a>  
                  
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                            #
                          </th>
                          <th>
                            Tên sự kiện
                          </th>
                          <th>
                            Vị trí
                          </th>
                          <th>
                            Ngày bắt đầu
                          </th>
                          <th>
                            Ngày kết thúc
                          </th>
                          <th>
                            Giá vé
                          </th>
                          <th>
                            Mô tả
                          </th>
                          <th>
                            Chức năng
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          foreach ($row_event as $event)
                            {
                        ?>
                        <tr>
                          <td>
                            <?php echo $event['id'];?>
                          </td>
                          <td>
                          <?php echo $event['event_name'];?>
                          </td>
                          <td>
                          <?php echo $event['address'];?>
                          </td>
                          <td>
                          <?php echo $event['date_start'];?>
                          </td>
                          <td>
                          <?php echo $event['date_end'];?>
                          </td>
                          <td>
                          <?php echo $event['ticked_price'];?>
                          </td>
                          <td>
                          <?php echo $event['describe'];?>
                          </td>
                          <td>
                            <a type="button" class="btn btn-info btn-rounded btn-fw"href="./add_ticket.php">Detail</a>  
                            <a type="button" class="btn btn-secondary btn-rounded btn-fw"href="./add_ticket.php">Edit</a>  
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

