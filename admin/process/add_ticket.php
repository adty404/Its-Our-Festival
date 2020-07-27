<?php
include '../includes/page_head.php';
include '../../config/database.php';

$class = $_POST['class'];
$price = $_POST['price'];
$price_real = $_POST['price_real'];
$info1 = $_POST['info1'];
$info2 = $_POST['info2'];
$info3 = $_POST['info3'];
$info4 = $_POST['info4'];
$info5 = $_POST['info5'];
$info6 = $_POST['info6'];

$qry_count_ticket = "SELECT * FROM ticket";
$exe_qry_count_ticket = mysqli_query($db, $qry_count_ticket);
$count1 = mysqli_num_rows($exe_qry_count_ticket);

if ($count1 >= 4) {
	echo "<script>window.location = '../ticket.php?alert=ticketFull'</script>";
}else{
	$qry_input_ticket = "INSERT INTO ticket(class, price, price_real) VALUES('$class', '$price', '$price_real')";
	$exe_qry_input_ticket = mysqli_query($db, $qry_input_ticket);

	if($exe_qry_input_ticket){
		$qry_get_id	=	"SELECT * FROM ticket WHERE class = '$class'";
		$exe_qry_get_id	=	mysqli_query($db, $qry_get_id);

		while ($row_ticket = mysqli_fetch_assoc($exe_qry_get_id)) {
			$id_ticket = $row_ticket['id_ticket'];
		}

		$qry_input_ticket_info = "INSERT INTO ticket_info(id_ticket, info1, info2, info3, info4, info5, info6) VALUES('$id_ticket', '$info1', '$info2', '$info3', '$info4', '$info5', '$info6')";
		$exe_qry_input_ticket_info = mysqli_query($db, $qry_input_ticket_info);

		if ($exe_qry_input_ticket_info) {
			echo "<script>window.location = '../ticket.php?alert=successAdd'</script>";
		}
	}else{
		echo "<script>window.location = '../ticket.php?alert=failedAdd'</script>";
	}
}

?>
