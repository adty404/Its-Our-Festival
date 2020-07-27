<?php
include '../../config/database.php';

if (isset($_POST['resetps'])) {
  $order_number = $_POST['order_number'];
  $id_payment_slip = $_POST['id_payment_slip'];

  $qry_delete_ps = "DELETE FROM payment_slip WHERE id_payment_slip = '$id_payment_slip'";
  $exe_qry_delete_ps = mysqli_query($db, $qry_delete_ps);

  $qry_update_id_status = "UPDATE order_table SET id_status = '1' WHERE order_number ='$order_number'";
  $exe_qry_update_id_status = mysqli_query($db, $qry_update_id_status);

  if ($exe_qry_delete_ps && $exe_qry_update_id_status) {
    echo "<script>window.location = '../status.php?alert=successReset'</script>";
  }
}
?>
