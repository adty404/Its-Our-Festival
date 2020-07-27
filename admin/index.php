<!-- if session has admin->redirect to dashboard, if not->redirect to login. -->
<?php

session_start();
if (isset($_SESSION['username'])) {
    $username   = $_SESSION['username'];
    $nama       = $_SESSION['nama_lengkap'];

    echo "<script>window.location = 'dashboard.php'</script>";

}else if (empty($_SESSION['username'])) {

    echo "<script>window.location = 'auth/login.php'</script>";

}

?>
