<?php 
   include '../../Database.php';
   $result = $connect ->prepare('SELECT * FROM members');
   $result->execute();
  $row_member = $result ->fetchAll();
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
                  <h4 class="card-title">Danh sách khách hàng</h4>              
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                            #
                          </th>
                          <th>
                            Số thẻ visa
                          </th>
                          <th>
                            Họ và tên
                          </th>
                          <th>
                            Số điện thoại
                          </th>
                          <th>
                            Email
                          </th>
                          <th>
                            Ngày hết hạn thẻ
                          </th>
                          <th>
                            CVC/CVV
                          </th>
                          <th>
                            Chức năng
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          foreach ($row_member as $member)
                            {
                        ?>
                        <tr>
                          <td>
                            <?php echo $member['id'];?>
                          </td>
                          <td>
                          <?php echo $member['visa_number'];?>
                          </td>
                          <td>
                          <?php echo $member['full_name'];?>
                          </td>
                          <td>
                          <?php echo $member['phone_number'];?>
                          </td>
                          <td>
                          <?php echo $member['email'];?>
                          </td>
                          <td>
                          <?php echo $member['expiration_date'];?>
                          </td>
                          <td>
                          <?php echo $member['CVV_CVC'];?>
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

