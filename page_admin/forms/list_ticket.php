<?php 
  include '../../Database.php';
  $result = $connect ->prepare('SELECT * FROM tickets');
  $result->execute();
  $row_ticket = $result ->fetchAll();
  //name address
  $ticket_address = $connect ->prepare('SELECT * FROM tickets,ticket_address WHERE ticket_address.id = tickets.id_ticket_address');
  $ticket_address->execute();
  $row_ticket_address = $ticket_address ->fetchAll();
  //name type
  $ticket_type = $connect ->prepare('SELECT * FROM tickets,ticket_type WHERE ticket_type.id = tickets.id_ticket_type');
  $ticket_type->execute();
  $row_ticket_type = $ticket_type ->fetchAll();
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
                  <a type="button" class="btn btn-success text-light btn-rounded btn-fw"href="./add_ticket.php">Thêm vé mới</a>  
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
                          <?php echo $row_ticket_address[0]['ticket_address_name'];?>
                          </td>
                          <td>
                          <?php echo $row_ticket_type[0]['ticket_type_name'];?>
                          </td>
                          <td>
                          <?php echo $ticket['date_use'];?>
                          </td>
                          <td class="text-center">
                          <?php if($ticket['status']==1) {echo '<i class="fa fa-check" aria-hidden="true"></i>';}else{ echo '<i class="fa fa-times" aria-hidden="true"></i>';}?>
                          </td>
                          <td> 
                            <a type="button" class="btn btn-info text-light btn-rounded btn-fw"href="<?php echo 'edit_ticket.php?id='.$ticket['id'];?>">Cập nhật</a>  
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

