<?php 
   include '../../Database.php';
   $result = $connect ->prepare('SELECT * FROM tickets');
   $result->execute();
  $row_ticket = $result ->fetchAll();
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
                  <h4 class="card-title">Danh sách vé</h4>
                  <a type="button" class="btn btn-success btn-rounded btn-fw"href="./add_ticket.php">Thêm vé mới</a>  
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                            #
                          </th>
                          <th>
                            Mã vé
                          </th>
                          <th>
                            Vị trí hoạt động
                          </th>
                          <th>
                            Loại vé
                          </th>
                          <th>
                            Ngày sử dụng
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
                          foreach ($row_ticket as $ticket)
                            {
                        ?>
                        <tr>
                          <td>
                            <?php echo $ticket['id'];?>
                          </td>
                          <td>
                          <?php echo $ticket['ticket_code'];?>
                          </td>
                          <td>
                          <?php echo $ticket['id_ticket_address'];?>
                          </td>
                          <td>
                          <?php echo $ticket['id_ticket_type'];?>
                          </td>
                          <td>
                          <?php echo $ticket['date_use'];?>
                          </td>
                          <td>
                          <?php if($ticket['status']==1) {echo 'Đang sử dụng';}else{ echo 'Hết hạn sử dụng';}?>
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

