<?php

session_start();
if (isset($_SESSION['username'])) {
    $username   = $_SESSION['username'];
    $nama       = $_SESSION['nama_lengkap'];

    echo "<script>window.location = '../dashboard.php'</script>";
}

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Login | Administrator</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="" name="description" />
        <meta content="" name="author" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="../assets/images/favicon.ico">

        <!-- Sweet Alert -->
        <link href="../assets/plugins/sweet-alert2/sweetalert2.min.css" rel="stylesheet" type="text/css">
        <link href="../assets/plugins/animate/animate.css" rel="stylesheet" type="text/css">

        <!-- App css -->
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/metisMenu.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/style.css" rel="stylesheet" type="text/css" />

    </head>

    <body class="account-body accountbg">

        <!-- Log In page -->
        <div class="row vh-100 ">
            <div class="col-12 align-self-center">
                <div class="auth-page">
                    <div class="card auth-card shadow-lg">
                        <div class="card-body">
                            <div class="px-3">
                                <div class="auth-logo-box">
                                    <a href="#" class="logo logo-admin"><img src="../assets/images/logo-sm.png" height="55" alt="logo" class="auth-logo"></a>
                                </div><!--end auth-logo-box-->

                                <div class="text-center auth-logo-text">
                                    <h4 class="mt-0 mb-3 mt-5">Welcome</h4>
                                    <p class="text-muted mb-0">Sign in to continue to Administrator Page.</p>
                                </div> <!--end auth-logo-text-->


                                <form class="form-horizontal auth-form my-4" method="POST" action="process/login.php">

                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <div class="input-group mb-3">
                                            <span class="auth-form-icon">
                                                <i class="dripicons-user"></i>
                                            </span>
                                            <input type="text" name="username" class="form-control" id="username" placeholder="Enter username">
                                        </div>
                                    </div><!--end form-group-->

                                    <div class="form-group">
                                        <label for="userpassword">Password</label>
                                        <div class="input-group mb-3">
                                            <span class="auth-form-icon">
                                                <i class="dripicons-lock"></i>
                                            </span>
                                            <input type="password" name="password" class="form-control" id="userpassword" placeholder="Enter password">
                                        </div>
                                    </div><!--end form-group-->

                                    <div class="form-group mb-0 row">
                                        <div class="col-12 mt-2">
                                            <button name="login_admin" class="btn btn-gradient-primary btn-round btn-block waves-effect waves-light" type="submit">Log In <i class="fas fa-sign-in-alt ml-1"></i></button>
                                        </div><!--end col-->
                                    </div> <!--end form-group-->
                                </form><!--end form-->
                            </div><!--end /div-->
                        </div><!--end card-body-->
                    </div><!--end card-->
                    <div class="account-social text-center mt-4">
                        <h6 class="my-4">Or Login With</h6>
                        <ul class="list-inline mb-4">
                            <li class="list-inline-item">
                                <a href="" class="">
                                    <i class="fab fa-facebook-f facebook"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="" class="">
                                    <i class="fab fa-twitter twitter"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="" class="">
                                    <i class="fab fa-google google"></i>
                                </a>
                            </li>
                        </ul>
                    </div><!--end account-social-->
                </div><!--end auth-page-->
            </div><!--end col-->
        </div><!--end row-->
        <!-- End Log In page -->


        <!-- jQuery  -->
        <script src="../assets/js/jquery.min.js"></script>
        <script src="../assets/js/bootstrap.bundle.min.js"></script>
        <script src="../assets/js/metisMenu.min.js"></script>
        <script src="../assets/js/waves.min.js"></script>
        <script src="../assets/js/jquery.slimscroll.min.js"></script>

        <!-- Sweet-Alert  -->
        <script src="../assets/plugins/sweet-alert2/sweetalert2.min.js"></script>
        <script src="../assets/pages/jquery.sweet-alert.init.js"></script>

        <!-- App js -->
        <script src="../assets/js/app.js"></script>


        <?php

        error_reporting(0);
        ini_set('display_errors', 0);

        if ($_GET['alert'] == gagal_ditemukan) {
            echo '<input type="hidden">';
            echo '<script>
            swal({
                title: "Gagal",
                text: "Username atau Password tidak ditemukan!",
                type: "error",
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Okay",
                closeOnConfirm: false,
            },
            function(isConfirm){
                if (isConfirm) {
                    window.location = "login.php";
                }
            });

            </script>';
        }

        ?>
    </body>
</html>
