<?php
include '../includes/page_head.php';
include '../../config/database.php';

$id_order_table = $_GET['id_ot'];

$qry_update_id_status = "UPDATE order_table SET id_status='3' WHERE id_order_table = '$id_order_table'";
$exe_qry_update_id_status = mysqli_query($db, $qry_update_id_status);

if ($exe_qry_update_id_status) {
  echo "<script>window.location = '../payment_verified.php?alert=verified'</script>";
}else{
  echo "<script>window.location = '../payment_verified.php?alert=verifiedError'</script>";
}

?>
