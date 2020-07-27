<?php
include '../includes/page_head.php';
include '../../config/database.php';

$id_order_table = $_POST['id_order_table'];
$id_payment_slip = $_POST['id_payment_slip'];
$reasons = $_POST['reasons'];

$qry_update_id_status = "UPDATE order_table SET id_status='5' WHERE id_order_table = '$id_order_table'";
$exe_qry_update_id_status = mysqli_query($db, $qry_update_id_status);

if ($exe_qry_update_id_status) {
  $qry_add_reasons = "UPDATE payment_slip SET reasons = '$reasons' WHERE id_payment_slip = '$id_payment_slip'";
  $exe_qry_add_reasons = mysqli_query($db, $qry_add_reasons);

  if ($exe_qry_add_reasons) {
    echo "<script>window.location = '../payment_not_verified.php?alert=notApproved'</script>";
  }else{
    echo "<script>window.location = '../payment_not_verified.php?alert=ApprovedError'</script>";
  }
}else{
  echo "<script>window.location = '../payment_not_verified.php?alert=ApprovedError'</script>";
}

?>
