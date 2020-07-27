<?php include '../config/database.php'; ?>

<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

        <!-- SITE TITLE -->
        <title><?php $title = 'Status'; ?>It's Our Festival</title>
        <meta name="description" content="Event Procurement, Selling Tickets Online"/>
        <meta name="keywords" content="Event, Festival"/>
        <meta name="author" content="Millenia Saharani"/>

        <!-- FAVICON AND TOUCH ICONS -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico"/>
        <!-- This icon shows in browser toolbar -->
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico"/>
        <!-- This icon shows in browser toolbar -->
        <link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192" href="assets/img/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon/favicon-16x16.png">
        <link rel="manifest" href="assets/img/favicon/manifest.json">

        <!-- BOOTSTRAP CSS -->
        <link rel="stylesheet" href="assets/libs/bootstrap/css/bootstrap.min.css" media="all"/>

        <!-- FONT AWESOME -->
        <link rel="stylesheet" href="assets/libs/fontawesome/css/font-awesome.min.css" media="all"/>

        <!-- FONT AWESOME -->
        <link rel="stylesheet" href="assets/libs/maginificpopup/magnific-popup.css" media="all"/>

        <!-- TIME CIRCLE -->
        <link rel="stylesheet" href="assets/libs/timer/TimeCircles.css" media="all"/>

        <!-- OWL CAROUSEL CSS -->
        <link rel="stylesheet" href="assets/libs/owlcarousel/owl.carousel.min.css" media="all" />
        <link rel="stylesheet" href="assets/libs/owlcarousel/owl.theme.default.min.css" media="all"/>

        <!-- GOOGLE FONT -->
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Oswald:400,700%7cRaleway:300,400,400i,500,600,700,900"/>

        <!-- MASTER STYLESHEET -->
        <link id="lgx-master-style" rel="stylesheet" href="assets/css/style-default.min.css" media="all"/>

        <!-- SWEETALERT -->
        <script src="assets/sweetalert/sweetalert.min.js"></script>
        <link rel="stylesheet" type="text/css" href="assets/sweetalert/sweetalert.css"/>

        <!-- MODERNIZER CSS -->
        <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>

    <?php
        error_reporting(0);

        if ($_GET['alert'] == notFound) {
            echo '<input type="hidden">';
            echo '<script>
                    swal({
                        title: "Error!",
                        text: "Order number not found",
                        type: "error",
                        confirmButtonColor: "#DD6B55",
                        confirmButtonText: "Okay",
                        closeOnConfirm: false,
                    },
                    function(isConfirm) {
                        if (isConfirm) {
                            window.location = "status.php";
                        }
                    });
                  </script>';
        } else if($_GET['alert'] == successUpload) {
            echo '<input type="hidden">';
            echo '<script>
                    swal({
                        title: "Success!",
                        text: "Payment slip uploaded successfully. Please check your status periodically",
                        type: "success",
                        confirmButtonColor: "#8CD4F5",
                        confirmButtonText: "Okay",
                        closeOnConfirm: false,
                    });
                  </script>';
        } else if ($_GET['alert'] == failedUpload) {
            echo '<input type="hidden">';
            echo '<script>
                    swal({
                        title: "Error!",
                        text: "Payment slip not uploaded",
                        type: "error",
                        confirmButtonColor: "#DD6B55",
                        confirmButtonText: "Okay",
                        closeOnConfirm: false,
                    });
                  </script>';
        } else if ($_GET['alert'] == invalidExtension) {
            echo '<input type="hidden">';
            echo '<script>
                    swal({
                        title: "Error!",
                        text: "Type of file is not valid. Please re-upload your payment slip",
                        type: "error",
                        confirmButtonColor: "#DD6B55",
                        confirmButtonText: "Okay",
                        closeOnConfirm: false,
                    });
                  </script>';
        } else if($_GET['alert'] == successReset) {
            echo '<input type="hidden">';
            echo '<script>
                    swal({
                        title: "Success!",
                        text: "Payment slip status has been successfully reset. Please re-upload your payment slip",
                        type: "success",
                        confirmButtonColor: "#8CD4F5",
                        confirmButtonText: "Okay",
                        closeOnConfirm: false,
                    });
                  </script>';
        }
    ?>

    <body class="home">

        <div class="lgx-container ">

            <!-- HEADER :: START -->
            <?php include 'includes/partials/header.php' ?>
            <!-- HEADER :: END -->

            <!-- BANNER :: START -->
            <section>
                <div class="lgx-banner lgx-banner-inner">
                    <div class="lgx-page-inner">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="lgx-heading-area">
                                        <div class="lgx-heading lgx-heading-white">
                                            <h2 class="heading">Status</h2>
                                        </div>
                                        <ul class="breadcrumb">
                                            <li>
                                                <a href="index.php">
                                                    <i class="fa fa-home" aria-hidden="true"></i>Home
                                                </a>
                                            </li>
                                            <li class="active">Status</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- BANNER :: END -->

            <!-- MAIN CONTENT :: START -->
            <main>
                <div class="lgx-page-wrapper">

                    <!-- CHECK STATUS :: START -->
                    <section>
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12 col-md-6 col-md-offset-3">
                                    <h3 align="left">Order Number :</h3>
                                    <form class="form-group" action="status.php" method="POST">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="orderNumber" id="searchOrderNumber" placeholder="IOF20-5463728172"><br>

                                            <center>
                                                <button type="submit" name="searchOrderNumber" value="CHECK STATUS" class="lgx-btn hvr-glow hvr-radial-out"><span>CHECK STATUS</span></button>
                                            </center>
                                        </div>
                                    </form>

                                    <br>

                                    <?php
                                        if (isset($_POST['searchOrderNumber'])) {
                                            $orderNumber = $_POST['orderNumber'];
                                            $qry_find_order_number = "SELECT ot.id_order_table, ot.id_ticket, ot.id_payment, ot.id_status, ot.order_number, ot.name, ot.id_number, ot.email, ot.phone_number, t.id_ticket,  t.class, t.price_real, p.id_payment, p.payment, p.rek, s.id_status, s.status FROM order_table ot INNER JOIN ticket t ON ot.id_ticket = t.id_ticket INNER JOIN payment p ON ot.id_payment = p.id_payment INNER JOIN status s ON ot.id_status = s.id_status WHERE ot.order_number = '$orderNumber'";
                                            $exe_qry_find_order_number = mysqli_query($db, $qry_find_order_number);

                                            $is_exist = mysqli_num_rows($exe_qry_find_order_number);

                                            if ($is_exist < 1) {
                                                echo "<script>window.location = 'status.php?alert=notFound'</script>";
                                            } else {
                                    ?>

                                    <h4 align="center">Click the status button below for the information</h4>
                                    <h4 align="center" style="color: #ca396a;">Order Number = #<?php echo $orderNumber; ?></h4>

                                    <table class="table table-striped table-hover">
                                        <tbody>
                                            <?php
                                                while ($row_order_table = mysqli_fetch_assoc($exe_qry_find_order_number)) {
                                                    if ($row_order_table['id_status'] == 1) {
                                            ?>
                                            <tr>
                                                <th class="bg-success">Placed Order</th>
                                                <td class="bg-success">
                                                    <center>
                                                        <button type="button" class="btn btn-success" name="button" data-toggle="modal" data-target="#PlacedOrder"><i class="fa fa-check"></i></button>
                                                    </center>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="bg-danger">Payment Slip</th>
                                                <td class="bg-danger">
                                                    <center>
                                                        <button type="button" class="btn btn-danger" name="button" data-toggle="modal" data-target="#PaymentSlipUnCheck"><i class="fa fa-times"></i></button>
                                                    </center>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="bg-danger">Verifying Payment</th>
                                                <td class="bg-danger">
                                                    <center>
                                                        <button type="button" class="btn btn-danger" name="button" disabled><i class="fa fa-times"></i></button>
                                                    </center>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="bg-danger">Payment Verified</th>
                                                <td class="bg-danger">
                                                    <center>
                                                        <button type="button" class="btn btn-danger" name="button" disabled><i class="fa fa-times"></i></button>
                                                    </center>
                                                </td>
                                            </tr>

                                            <?php
                                                    } else if ($row_order_table['id_status'] == 2) {
                                            ?>

                                            <tr>
                                                <th class="bg-success">Placed Order</th>
                                                <td class="bg-success">
                                                    <center>
                                                        <button type="button" class="btn btn-success" name="button" data-toggle="modal" data-target="#PlacedOrder"><i class="fa fa-check"></i></button>
                                                    </center>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="bg-success">Payment Slip</th>
                                                <td class="bg-success">
                                                    <center>
                                                        <button type="button" class="btn btn-success" name="button" data-toggle="modal" data-target="#PaymentSlip"><i class="fa fa-check"></i></button>
                                                    </center>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="bg-info">Verifying Payment</th>
                                                <td class="bg-info">
                                                    <center>
                                                        <button type="button" class="btn btn-info" name="button" data-toggle="modal" data-target="#VerifyingPaymentWaiting">WAITING</button>
                                                    </center>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="bg-danger">Payment Verified</th>
                                                <td class="bg-danger">
                                                    <center>
                                                        <button type="button" class="btn btn-danger" name="button" disabled><i class="fa fa-times"></i></button>
                                                    </center>
                                                </td>
                                            </tr>

                                            <?php
                                                    } else if ($row_order_table['id_status'] == 3) {
                                            ?>

                                            <tr>
                                                <th class="bg-success">Placed Order</th>
                                                <td class="bg-success">
                                                    <center>
                                                        <button type="button" class="btn btn-success" name="button" data-toggle="modal" data-target="#PlacedOrder"><i class="fa fa-check"></i></button>
                                                    </center>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="bg-success">Payment Slip</th>
                                                <td class="bg-success">
                                                    <center>
                                                        <button type="button" class="btn btn-success" name="button" data-toggle="modal" data-target="#PaymentSlip"><i class="fa fa-check"></i></button>
                                                    </center>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="bg-success">Verifying Payment</th>
                                                <td class="bg-success">
                                                    <center>
                                                        <button type="button" class="btn btn-success" name="button" data-toggle="modal" data-target="#VerifyingPayment"><i class="fa fa-check"></i></button>
                                                    </center>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="bg-success">Payment Verified</th>
                                                <td class="bg-success">
                                                    <center>
                                                        <button type="button" class="btn btn-success" name="button" data-toggle="modal" data-target="#PaymentVerified"><i class="fa fa-check"></i></button>
                                                    </center>
                                                </td>
                                            </tr>

                                            <?php
                                                    } else if ($row_order_table['id_status'] == 5) {
                                            ?>

                                            <tr>
                                                <th class="bg-success">Placed Order</th>
                                                <td class="bg-success">
                                                    <center>
                                                        <button type="button" class="btn btn-success" name="button" data-toggle="modal" data-target="#PlacedOrder"><i class="fa fa-check"></i></button>
                                                    </center>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="bg-danger">Payment Slip</th>
                                                <td class="bg-danger">
                                                    <center>
                                                        <button type="button" class="btn btn-danger" name="button" data-toggle="modal" data-target="#PaymentSlipNotVerified">NOT VERIFIED</button>
                                                    </center>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="bg-danger">Verifying Payment</th>
                                                <td class="bg-danger">
                                                    <center>
                                                        <button type="button" class="btn btn-danger" name="button" disabled><i class="fa fa-times"></i></button>
                                                    </center>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="bg-danger">Payment Verified</th>
                                                <td class="bg-danger">
                                                    <center>
                                                        <button type="button" class="btn btn-danger" name="button" disabled><i class="fa fa-times"></i></button>
                                                    </center>
                                                </td>
                                            </tr>

                                            <?php
                                                    }
                                            ?>

                                        </tbody>
                                    </table>

                                    <h4 align="center">Please check the status periodically</h4>



                                    <!-- STEP 1 MODAL - PLACED ORDER :: START -->
                                    <div class="modal fade" id="PlacedOrder" tabindex="-1" role="dialog" aria-labelledby="PlacedOrderLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h3 class="modal-title" id="PlacedOrderLabel">Order Placed</h3>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <table class="table">
                                                        <tbody>
                                                            <tr>
                                                                <th>Name</th>
                                                                <td><?php echo $row_order_table['name']; ?></td>
                                                            </tr>

                                                            <tr>
                                                                <th>ID Number (KTP)</th>
                                                                <td><?php echo $row_order_table['id_number']; ?></td>
                                                            </tr>

                                                            <tr>
                                                                <th>Email</th>
                                                                <td><?php echo $row_order_table['email']; ?></td>
                                                            </tr>

                                                            <tr>
                                                                <th>Phone Number</th>
                                                                <td><?php echo $row_order_table['phone_number']; ?></td>
                                                            </tr>

                                                            <tr>
                                                                <th>Ticket Class</th>
                                                                <td><?php echo $row_order_table['class']; ?></td>
                                                            </tr>

                                                            <tr>
                                                                <th>Ticket Price</th>
                                                                <td><?php echo $row_order_table['price_real']; ?></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>

                                                    <?php
                                                        if ($row_order_table['id_status'] == 1 || $row_order_table['id_status'] == 5) {

                                                    ?>

                                                    <h5>*Please complete the payment. Transfer
                                                        <span style="color:red;">
                                                          Rp <?php echo $row_order_table['price_real']; ?>
                                                        </span> to
                                                        <span style="color:red;">
                                                          <?php echo $row_order_table['rek']; ?>
                                                          (<?php echo $row_order_table['payment']; ?>)
                                                        </span> and upload the payment slip to
                                                        <span style="color:red;">Payment Slip</span> status. Thank You!
                                                    </h5>

                                                    <?php
                                                        } else {
                                                        }
                                                    ?>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- STEP 1 MODAL - PLACED ORDER :: END -->



                                    <!-- STEP 2 MODAL - PAYMENT SLIP :: START -->
                                    <!-- Review Uploaded Payment Slip -->
                                    <div class="modal fade" id="PaymentSlip" tabindex="-1" role="dialog" aria-labelledby="PaymentSlipLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h3 class="modal-title" id="PaymentSlipLabel">Payment Slip</h3>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <center>
                                                        <h4 class="modal-title" id="PaymentSlipLabel">Your payment slip</h4>
                                                    </center>
                                                    <br>
                                                    <center>
                                                        <?php
                                                            $qry_find = "SELECT ot.id_payment_slip, ot.order_number, ps.id_payment_slip, ps.payment_slip_img FROM order_table ot INNER JOIN payment_slip ps ON ot.id_payment_slip = ps.id_payment_slip WHERE ot.order_number = '$orderNumber'";
                                                            $exe_qry_find = mysqli_query($db, $qry_find);

                                                            while ($row_ps = mysqli_fetch_assoc($exe_qry_find)) {
                                                        ?>

                                                        <img src="upload/payment_slip/<?php echo $row_ps['payment_slip_img']; ?>" alt="Payment Slip" width="200" height="200">

                                                        <?php
                                                            }
                                                        ?>
                                                    </center>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Reset Payment Slip -->
                                    <div class="modal fade" id="PaymentSlipNotVerified" tabindex="-1" role="dialog" aria-labelledby="PaymentSlipNotVerifiedLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h3 class="modal-title" id="PaymentSlipNotVerifiedLabel">Payment Slip</h3>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <center>
                                                        <?php
                                                            $qry_find = "SELECT ot.id_payment_slip, ot.order_number, ps.id_payment_slip, ps.payment_slip_img, ps.reasons FROM order_table ot INNER JOIN payment_slip ps ON ot.id_payment_slip = ps.id_payment_slip WHERE ot.order_number = '$orderNumber'";
                                                            $exe_qry_find = mysqli_query($db, $qry_find);

                                                            while ($row_ps = mysqli_fetch_assoc($exe_qry_find)) {
                                                        ?>
                                                        <h4 class="modal-title" id="PaymentSlipNotVerifiedLabel" style="color: red;">Your payment is not verified</h4>
                                                        <br>
                                                    </center>
                                                    <h5>Reason : <?php echo $row_ps['reasons']; ?> </h5>
                                                    <br><br>
                                                    <h5>*Click reset button to re-upload your payment slip.</h5>
                                                </div>
                                                <form class="form-group" action="process/reset_payment_slip.php" method="post">
                                                    <input type="hidden" name="order_number" value="<?php echo $orderNumber; ?>">
                                                    <input type="hidden" name="id_payment_slip" value="<?php echo $row_ps['id_payment_slip'] ?>">

                                                    <div class="modal-footer">
                                                        <button type="submit" name="resetps" value="Reset Status" class="btn btn-primary">Reset</button>
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                </form>

                                                <?php
                                                            }
                                                ?>

                                                    </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Upload Payment Slip -->
                                    <div class="modal fade" id="PaymentSlipUnCheck" tabindex="-1" role="dialog" aria-labelledby="PaymentSlipUnCheckLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h3 class="modal-title" id="PaymentSlipUnCheckLabel">Payment Slip</h3>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form class="form-group" method="post" action="process/upload_payment_slip.php" enctype="multipart/form-data">
                                                        <center>
                                                            <h4 class="modal-title" id="PaymentSlipUnCheckLabel">Upload your payment slip</h4>
                                                        </center>
                                                        <input class="form-control" type="File" name="file">
                                                        <input class="form-control" type="hidden" name="order_number" value="<?php echo $orderNumber; ?>">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" name="uploadps" value="UPLOAD" class="btn btn-primary">Upload</button>
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- STEP 2 MODAL - PAYMENT SLIP :: END -->



                                    <!-- STEP 3 MODAL - VERIFYING PAYMENT :: START -->
                                    <!-- Verified -->
                                    <div class="modal fade" id="VerifyingPayment" tabindex="-1" role="dialog" aria-labelledby="VerifyingPaymentLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h3 class="modal-title" id="VerifyingPaymentLabel">Verifying Payment</h3>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <center>
                                                        <h4 class="modal-title" id="VerifyingPaymentLabel">Admin has verified your payment slip</h4>
                                                    </center>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Waiting -->
                                    <div class="modal fade" id="VerifyingPaymentWaiting" tabindex="-1" role="dialog" aria-labelledby="VerifyingPaymentWaitingLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h3 class="modal-title" id="VerifyingPaymentWaitingLabel">Verifying Payment</h3>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <center>
                                                        <h4 class="modal-title" id="VerifyingPaymentWaitingLabel">Waiting to be verified</h4>
                                                        <h5>Your payment slip is being verified by admin.</h5>
                                                        <h5>Please check your status periodically.</h5>
                                                    </center>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- STEP 3 MODAL - VERIFYING PAYMENT :: END -->



                                    <!-- STEP 4 MODAL - PAYMENT VERIFIED :: START -->
                                    <div class="modal fade" id="PaymentVerified" tabindex="-1" role="dialog" aria-labelledby="PaymentVerifiedLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h3 class="modal-title" id="PaymentVerifiedLabel">Payment Verified</h3>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <center>
                                                        <h4 class="modal-title" id="PaymentVerifiedLabel">Your payment slip is verified</h4>
                                                        <h5>Ticket has sent to your registered email and phone number.</h5>
                                                    </center>
                                                    <br>
                                                    <center>
                                                        <a href="../admin/invoice/invoice.php?orderNumber=<?php echo $orderNumber; ?>">
                                                          <button class="btn btn-primary" type="button" name="INVOICE">INVOICE</button>
                                                        </a>
                                                    </center>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <?php
                                            }
                                          }
                                        }
                                    ?>
                                    <!-- STEP 4 MODAL - PAYMENT VERIFIED :: END -->

                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- CHECK STATUS :: END -->
                </div>
            </main>
            <!-- MAIN CONTENT :: END -->

            <!-- FOOTER :: START -->
            <?php include 'includes/partials/footer.php' ?>
            <!-- FOOTER :: END -->

        </div>

        <!-- *** SITE SCRIPT *** -->
        <!-- JQUERY -->
        <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>

        <!-- BOOTSTRAP JS -->
        <script src="assets/libs/bootstrap/js/bootstrap.min.js"></script>

        <!-- SMOOTH SCROLL -->
        <script src="assets/libs/jquery.smooth-scroll.js"></script>

        <!-- SKILLS SCRIPT -->
        <script src="assets/libs/jquery.validate.js"></script>

        <!-- If load google maps then load this api, change api key as it may expire for limit cross as this is provided with any theme -->
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDQvRGGtL6OrpP5xVMxq_0NgiMiRhm3ycI"></script>

        <!-- CUSTOM GOOGLE MAP -->
        <script type="text/javascript" src="assets/libs/gmap/jquery.googlemap.js"></script>

        <!-- MAGNIFIC POPUP JS LIBRARY -->
        <script type="text/javascript" src="assets/libs/maginificpopup/jquery.magnific-popup.min.js"></script>

        <!-- OWL CAROUSEL -->
        <script src="assets/libs/owlcarousel/owl.carousel.min.js"></script>

        <!-- COUNTDOWN -->
        <script src="assets/libs/countdown.js"></script>
        <script src="assets/libs/timer/TimeCircles.js"></script>

        <!-- COUNTER JS -->
        <script src="assets/libs/waypoints.min.js"></script>
        <script src="assets/libs/counterup/jquery.counterup.min.js"></script>

        <!-- SMOOTH SCROLL -->
        <script src="assets/libs/jquery.smooth-scroll.min.js"></script>
        <script src="assets/libs/jquery.easing.min.js"></script>

        <!-- TYPE JS -->
        <script src="assets/libs/typed/typed.min.js"></script>

        <!-- HEADER PARALLAX JS -->
        <script src="assets/libs/header-parallax.js"></script>

        <!-- INSTAFEED JS -->
        <script src="assets/libs/instafeed.min.js"></script>

        <!-- CUSTOM SCRIPT  -->
        <script src="assets/js/custom.script.js"></script>

        <script type="text/javascript">
            <?php echo $jsArrayClass1; ?>
                function changeValue(class1) {
                document.getElementById('price').value = dtClass1[class1].price;
            };
        </script>

    </body>
</html>
