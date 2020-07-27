<?php
	include '../includes/page_head.php';
	include '../../config/database.php';

	$id_ticket 		=	$_GET['id_ticket'];

	$qry_del_ticket	=	"DELETE FROM ticket WHERE id_ticket = '$id_ticket'";
	$exe_del_ticket	=	mysqli_query($db, $qry_del_ticket);

	if($exe_del_ticket){
		echo "<script>window.location = '../ticket.php?alert=successDelete'</script>";
	}
?>
