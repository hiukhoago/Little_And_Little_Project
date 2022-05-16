<?php
    include '../../../Database.php';

    $name_event = $_POST['tensukien']; 
    $address = $_POST['diachi']; 
    $date_start = $_POST['ngaybatdau'];
    $date_end = $_POST['ngayketthuc'];
    $giaVe = $_POST['giave'];
    $describe1 = $_POST['mota1'];
    $describe2 = $_POST['mota2'];
    $describe3 = $_POST['mota3'];

    $add_event_sql = "INSERT INTO events (event_name, address, date_start, date_end, ticked_price, describe_1, describe_2, describe_3)
                        VALUE (:name_event, :address,:date_start, :date_end, :giaVe, :describe1, :describe2, :describe3)";

if($result = $connect ->prepare($add_event_sql)){?>
    <script>alert("Thêm thành công")</script>
<?php }else{?>
  <script> alert("<?php echo "Lỗi: " . $sql . "<br>" . $connect->error; ?>"); </script> 
<?php };
    $result ->BindValue(':name_event',$name_event,PDO::PARAM_STR);
    $result ->BindValue(':address',$address,PDO::PARAM_STR);
    $result ->BindValue(':date_strart',$date_start,PDO::PARAM_INT);
    $result ->BindValue(':date_end',$date_end,PDO::PARAM_INT);
    $result ->BindValue(':giaVe',$giaVe,PDO::PARAM_INT);
    $result ->BindValue(':describe1',$describe1,PDO::PARAM_STR);
    $result ->BindValue(':describe2',$describe2,PDO::PARAM_STR);
    $result ->BindValue(':describe3',$describe3,PDO::PARAM_STR);
    $result->execute();

?>
<html>
<a href="<?php echo '../list_event.php'?>">Trở lại</a>
</html>