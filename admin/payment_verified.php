<?php
  include 'includes/page_head.php';
  include '../config/database.php';

  $qry_show_payment_verified = "SELECT ot.id_ticket, ot.id_order_table, ot.id_payment_slip, ot.order_number, ot.name, ot.id_number, ot.email, ot.phone_number, ps.id_payment_slip, ps.payment_slip_img, t.id_ticket, t.class, t.price, t.price_real FROM order_table ot INNER JOIN payment_slip ps ON ot.id_payment_slip = ps.id_payment_slip INNER JOIN ticket t ON ot.id_ticket = t.id_ticket WHERE id_status = 3";
  $exe_qry_payment_verified = mysqli_query($db, $qry_show_payment_verified);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Payment Verified | Administrator</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="" name="description" />
        <meta content="" name="author" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- DataTables -->
        <link href="assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- Sweet Alert -->
        <link href="assets/plugins/sweet-alert2/sweetalert2.min.css" rel="stylesheet" type="text/css">
        <link href="assets/plugins/animate/animate.css" rel="stylesheet" type="text/css">
        <!-- Sweet-Alert  -->
        <script src="assets/plugins/sweet-alert2/sweetalert2.min.js"></script>
        <script src="assets/pages/jquery.sweet-alert.init.js"></script>

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/metisMenu.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

    </head>

    <?php

    error_reporting(0);
    ini_set('display_errors', 0);

      if ($_GET['alert'] == verified) {
          echo '<input type="hidden">';
          echo '<script>

          swal({
              title: "Success",
              text: "Success approved the payment slip!",
              type: "success",
              confirmButtonColor: "#8CD4F5",
              confirmButtonText: "Okay",
              closeOnConfirm: false,
          });
          </script>';
      }else if ($_GET['alert'] == verifiedError) {
          echo '<input type="hidden">';
          echo '<script>

          swal({
              title: "Error",
              text: "Error!",
              type: "error",
              confirmButtonColor: "#DD6B55",
              confirmButtonText: "Okay",
              closeOnConfirm: false,
          });
          </script>';
      }
    ?>

    <body>

        <!-- Top Bar Start -->
          <?php include 'includes/top_bar.php'; ?>
        <!-- Top Bar End -->

        <div class="page-wrapper">


            <!-- Page Content-->
            <div class="page-content">

                <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="float-right">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Its Our Festival</a></li>
                                        <li class="breadcrumb-item active">Payment Verified</li>
                                    </ol><!--end breadcrumb-->
                                </div><!--end /div-->
                                <h4 class="page-title">Payment Verified Data</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div><!--end row-->
                    <!-- end page title end breadcrumb -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="mt-0 header-title">Payment Verified</h4><br>

                                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                          <tr>
                                              <th>Order Number</th>
                                              <th>Name</th>
                                              <th>ID Number</th>
                                              <th>Email</th>
                                              <th>Phone Number</th>
                                              <th>Payment Slip</th>
                                          </tr>
                                          </thead>


                                          <tbody>
                                            <?php
                                              while ($row_payment_verified = mysqli_fetch_assoc($exe_qry_payment_verified)) {

                                            ?>
                                            <tr>
                                              <td><?php echo $row_payment_verified['order_number']; ?></td>
                                              <td><?php echo $row_payment_verified['name']; ?></td>
                                              <td><?php echo $row_payment_verified['id_number']; ?></td>
                                              <td><?php echo $row_payment_verified['email']; ?></td>
                                              <td><?php echo $row_payment_verified['phone_number']; ?></td>
                                              <td>
                                                <a target="_blank" href="../view/upload/payment_slip/<?php echo $row_payment_verified['payment_slip_img']; ?>">
                                                  <img class="image" src="../view/upload/payment_slip/<?php echo $row_payment_verified['payment_slip_img']; ?>" alt="Payment Slip" style="width:50px;max-width:50px">
                                                </a>
                                              </td>
                                            </tr>
                                          <?php
                                            }
                                          ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->

                </div><!-- container -->
            </div>
            <!-- end page content -->


            <?php include 'includes/footer.php'; ?>
        </div>
        <!-- end page-wrapper -->

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/waves.min.js"></script>
        <script src="assets/js/jquery.slimscroll.min.js"></script>

        <script src="assets/plugins/apexcharts/apexcharts.min.js"></script>
        <script src="assets/pages/jquery.analytics_dashboard.init.js"></script>


        <!-- Required datatable js -->
        <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="assets/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
        <script src="assets/plugins/datatables/jszip.min.js"></script>
        <script src="assets/plugins/datatables/pdfmake.min.js"></script>
        <script src="assets/plugins/datatables/vfs_fonts.js"></script>
        <script src="assets/plugins/datatables/buttons.html5.min.js"></script>
        <script src="assets/plugins/datatables/buttons.print.min.js"></script>
        <script src="assets/plugins/datatables/buttons.colVis.min.js"></script>
        <!-- Responsive examples -->
        <script src="assets/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="assets/plugins/datatables/responsive.bootstrap4.min.js"></script>
        <script src="assets/pages/jquery.datatable.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>

    </body>
</html>
