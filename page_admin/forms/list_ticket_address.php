<?php 
   include '../../Database.php';
   $result = $connect ->prepare('SELECT * FROM ticket_address');
   $result->execute();
  $row_ticket_address = $result ->fetchAll();
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
                  <h4 class="card-title">Danh sách các địa điểm mua vé</h4>
                  <a type="button" class="btn btn-success btn-rounded btn-fw"href="./add_ticket_address.php">Thêm địa điểm mua vé</a>  
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                            #
                          </th>
                          <th>
                            Tên địa điểm mua vé
                          </th>
                          <th>
                            Giá vé
                          </th>
                          <th>
                            Tình trạng
                          </th>
                          <th>
                            Chức năng
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          foreach ($row_ticket_address as $ticket_address)
                            {
                        ?>
                        <tr>
                          <td>
                            <?php echo $ticket_address['id'];?>
                          </td>
                          <td>
                          <?php echo $ticket_address['ticket_address_name'];?>
                          </td>
                          <td>
                          <?php echo number_format( $ticket_address["ticket_address_price"],0)." VNĐ";?>
                          </td>
                          <td>
                          <?php if($ticket_address['status']==1) {echo 'Đang sử dụng';}else{ echo 'Hết hạn sử dụng';}?>
                          </td>
                          <td>
                          <a type="button" class="btn btn-secondary btn-rounded btn-fw"href="<?php echo 'edit_ticket_address.php?id='.$ticket_address['id'];?>">Edit</a>
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

