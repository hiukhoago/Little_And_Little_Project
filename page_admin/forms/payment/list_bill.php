<?php 
   include '../../Database.php';
   $result = $connect ->prepare('SELECT * FROM bills');
   $result->execute();
  $row_bill = $result ->fetchAll();
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
                  <h4 class="card-title">Danh sách hóa đơn</h4>
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
                            Tên khách hàng
                          </th>
                          <th>
                            Ngày tạo
                          </th>
                          <th>
                            Ngày xóa
                          </th>
                          <th>
                            Ngày cập nhật
                          </th>
                          <th>
                            Tổng giá
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
                          foreach ($row_bill as $bill)
                            {
                        ?>
                        <tr>
                          <td>
                            <?php echo $bill['id'];?>
                          </td>
                          <td>
                          <?php echo $bill['visa_number'];?>
                          </td>
                          <td>
                          Trần Hiếu Khoa
                          </td>
                          <td>
                          <?php echo $bill['date_create'];?>
                          </td>
                          <td>
                          <?php if($bill['date_delete']==NULL){
                              echo 'Không có';
                              } else {echo $bill['date_delete'];};?>
                          </td>
                          <td>
                          <?php if($bill['date_update']==NULL){
                              echo 'Không có';
                              } else {echo $bill['date_update'];};?>
                          </td>
                          <td>
                          <?php echo $bill['total_price'];?>
                          </td>
                          <td>
                          <?php echo $bill['status'];?>
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

