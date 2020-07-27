<?php
include '../../config/database.php';

$id_ticket    = $_POST['id_ticket'];
$id_payment   = $_POST['id_payment'];
$id_status    = 1;
$order_number = 'IOF20-' . time();
$name         = $_POST['name'];
$id_number    = $_POST['id_number'];
$email        = $_POST['email'];
$phone_number = $_POST['phone_number'];

// var_dump($phone_number);
$qry_input_order = mysqli_prepare($db, "INSERT INTO order_table(id_ticket, id_payment, id_status, order_number, name, id_number, email, phone_number) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

mysqli_stmt_bind_param($qry_input_order, 'ssssssss', $id_ticket, $id_payment, $id_status, $order_number, $name, $id_number, $email, $phone_number);

$result_input_order = mysqli_stmt_execute($qry_input_order);

if ($result_input_order){
  echo "<script>window.location = '../orderNumber.php?orderNumber=$order_number&alert=success'</script>";
} else {
  echo "<script>window.location = '../registration.php?alert=failed'</script>";
}
?>
