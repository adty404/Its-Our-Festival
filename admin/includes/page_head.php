<?php
/**
 * page_head.php
 *
 * Author: mill
 *
 * Header and Validation of each page, maybe.
 *
 */
include '../config/database.php';

session_start();
if (isset($_SESSION['username'])) {
    $username   = $_SESSION['username'];
    $nama       = $_SESSION['nama_lengkap'];
}else if (empty($_SESSION['username'])) {
    echo "<script>window.location = 'auth/login.php'</script>";
}


?>
