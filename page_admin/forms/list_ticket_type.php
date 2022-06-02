<?php 
   include '../../Database.php';
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
            <!-- Content -->
            <div class="col-lg-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Danh sách các loại vé</h4>
                  <a type="button" class="btn btn-success text-light btn-rounded btn-fw"href="./add_ticket_type.php">Thêm loại vé</a>
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                            #
                          </th>
                          <th>
                            Tên loại vé
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
                          foreach ($row_ticket_type as $ticket_type)
                            {
                        ?>
                        <tr>
                          <td>
                            <?php echo $ticket_type['id'];?>
                          </td>
                          <td>
                          <?php echo $ticket_type['ticket_type_name'];?>
                          </td>
                          <td>
                          <?php echo number_format( $ticket_type["ticket_type_price"],0)." VNĐ";?>
                          </td>
                          <td class="text-center">
                          <?php if($ticket_type['status']==1) {echo '<i class="fa fa-check" aria-hidden="true"></i>';}else{ echo '<i class="fa fa-times" aria-hidden="true"></i>';}?>
                          </td>
                          <td>
                          <a type="button" class="btn btn-info text-light btn-rounded btn-fw"href="<?php echo 'edit_ticket_type.php?id='.$ticket_type['id'];?>">Cập nhật</a>
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

