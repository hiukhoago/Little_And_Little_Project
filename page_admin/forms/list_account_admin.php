<?php 
  include '../../Database.php';

  $result = $connect ->prepare('SELECT * FROM admins');
  $result->execute();
  $row_admin = $result ->fetchAll();
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
                  <h4 class="card-title">Danh sách admin</h4>
                  <a type="button" class="btn btn-success text-light btn-rounded btn-fw"href="./add_account.php">Thêm tài khoản</a>  
                  
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                            #
                          </th>
                          <th>
                            Tên tài khoản
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
                            Tình trạng
                          </th>
                          <th>
                            Chức năng
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          foreach ($row_admin as $admin)
                            {
                        ?>
                        <tr>
                          <td>
                            <?php echo $admin['id'];?>
                          </td>
                          <td>
                          <?php echo $admin['user_name'];?>
                          </td>
                          <td>
                          <?php echo $admin['last_name'];echo ' '; echo $admin['fist_name'];?>
                          </td>
                          <td>
                          <?php echo $admin['phone_number'];?>
                          </td>
                          <td>
                          <?php echo $admin['email'];?>
                          </td>
                          <td class="text-center">
                          <?php if($admin['status'] == 1){echo '<i class="fa fa-check" aria-hidden="true"></i>';}else{ echo '<i class="fa fa-times" aria-hidden="true"></i>';}?>
                          </td>
                          <td>
                            <a type="button" class="btn btn-info text-light btn-rounded btn-fw"href="<?php echo 'detail_account_admin.php?id='.$admin['id'];?> ">Chi tiết</a>  
                            <a type="button" class="btn btn-secondary text-light btn-rounded btn-fw"href="<?php echo 'edit_account_admin.php?id='.$admin['id'];?>">Cập nhật</a>  
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

