<?php
include '../../config/database.php';

if (isset($_POST["uploadps"]))
 {
    #retrieve file title
    $order_number = $_POST['order_number'];

    #NEWWW
    $name = rand(1000,10000)."-".$_FILES['file']['name'];
    $target_dir = "../upload/payment_slip/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);

    // Select file type
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Valid file extensions
    $extensions_arr = array("jpg","jpeg","png","gif");

    // Check extension
    if( in_array($imageFileType,$extensions_arr) ){

      #sql query to insert into database
      $qry_insert_ps = "INSERT INTO payment_slip(payment_slip_img, reasons) VALUES('$name', '')";
      $exe_qry_insert_ps = mysqli_query($db, $qry_insert_ps);

      // Upload file
      move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);

      $find_ps = "SELECT * FROM payment_slip WHERE payment_slip_img='$name'";
      $exe_find_ps = mysqli_query($db, $find_ps);

      while ($row_ps = mysqli_fetch_assoc($exe_find_ps)) {
        $id_payment_slip = $row_ps['id_payment_slip'];
      }


      $qry_update_id_payment_slip = "UPDATE order_table SET id_payment_slip='$id_payment_slip', id_status='2' WHERE order_number='$order_number'";

      if(mysqli_query($db, $qry_update_id_payment_slip)){
          echo "<script>window.location = '../status.php?alert=successUpload'</script>";
      }
      else{
          echo "<script>window.location = '../status.php?alert=failedUpload'</script>";
      }



    }else{
      echo "<script>window.location = '../status.php?alert=invalidExtension'</script>";
    }

}
?>
