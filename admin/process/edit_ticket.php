<?php
include '../includes/page_head.php';
include '../../config/database.php';

$id_ticket = $_POST['id_ticket'];
$class = $_POST['class'];
$price = $_POST['price'];
$price_real = $_POST['price_real'];
$info1 = $_POST['info1'];
$info2 = $_POST['info2'];
$info3 = $_POST['info3'];
$info4 = $_POST['info4'];
$info5 = $_POST['info5'];
$info6 = $_POST['info6'];

$qry_update_ticket = "UPDATE ticket SET class = '$class', price = '$price', price_real = '$price_real' WHERE id_ticket = '$id_ticket'";
$exe_qry_update_ticket = mysqli_query($db, $qry_update_ticket);

if ($exe_qry_update_ticket) {
  $qry_update_ticket_info = "UPDATE ticket_info SET info1 = '$info1', info2 = '$info2', info3 = '$info3', info4 = '$info4', info5 = '$info5', info6 = '$info6' WHERE id_ticket = '$id_ticket'";
  $exe_qry_update_ticket_info = mysqli_query($db, $qry_update_ticket_info);

  echo "<script>window.location = '../ticket.php?alert=successEdit'</script>";
}else{
  echo "<script>window.location = '../ticket.php?alert=failedEdit'</script>";
}

?>
