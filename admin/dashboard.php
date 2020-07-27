<?php
  include 'includes/page_head.php';

  $qry_count_order_placed = "SELECT * FROM order_table WHERE id_status = 1";
  $exe_qry_count_order_placed = mysqli_query($db, $qry_count_order_placed);
  $count1 = mysqli_num_rows($exe_qry_count_order_placed);

  $qry_count_payment_slip_req = "SELECT * FROM order_table WHERE id_status = 2";
  $exe_qry_count_payment_slip_req = mysqli_query($db, $qry_count_payment_slip_req);
  $count2 = mysqli_num_rows($exe_qry_count_payment_slip_req);

  $qry_count_payment_verified = "SELECT * FROM order_table WHERE id_status = 3";
  $exe_qry_count_payment_verified = mysqli_query($db, $qry_count_payment_verified);
  $count3 = mysqli_num_rows($exe_qry_count_payment_verified);

  $qry_count_all_order_table = "SELECT * FROM order_table";
  $exe_qry_count_all_order_table = mysqli_query($db, $qry_count_all_order_table);
  $count4 = mysqli_num_rows($exe_qry_count_all_order_table);

  $qry_recent_order_placed = "SELECT * FROM order_table WHERE id_status = 1 ORDER BY id_order_table DESC";
  $exe_qry_recent_order_placed = mysqli_query($db, $qry_recent_order_placed);

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Dashboard | Administrator</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A premium admin dashboard template by Mannatthemes" name="description" />
        <meta content="Mannatthemes" name="author" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- DataTables -->
        <link href="assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/metisMenu.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

    </head>

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
                                        <li class="breadcrumb-item active">Dashboard</li>
                                    </ol><!--end breadcrumb-->
                                </div><!--end /div-->
                                <h4 class="page-title">Dashboard</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div><!--end row-->
                    <!-- end page title end breadcrumb -->


                    <div class="row justify-content-center">
                        <div class="col-md-6 col-lg-3">
                            <div class="card report-card bg-purple-gradient shadow-purple">
                                <div class="card-body">
                                    <div class="float-right">
                                        <i class="fa fa-cart-plus report-main-icon bg-icon-purple"></i>
                                    </div>
                                    <span class="badge badge-light text-purple">Order Placed</span>
                                    <h3 class="my-3"><?php echo $count1; ?></h3>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!--end col-->


                        <div class="col-md-6 col-lg-3">
                            <div class="card report-card bg-danger-gradient shadow-danger">
                                <div class="card-body">
                                    <div class="float-right">
                                        <i class="dripicons-clock report-main-icon bg-icon-danger"></i>
                                    </div>
                                    <span class="badge badge-light text-danger">Payment Slip Requests</span>
                                    <h3 class="my-3"><?php echo $count2; ?></h3>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!--end col-->


                        <div class="col-md-6 col-lg-3">
                            <div class="card report-card bg-success-gradient shadow-secondary">
                                <div class="card-body">
                                    <div class="float-right">
                                        <i class="dripicons-checkmark report-main-icon bg-icon-success"></i>
                                    </div>
                                    <span class="badge badge-light text-secondary">Payment Verified</span>
                                    <h3 class="my-3"><?php echo $count3; ?></h3>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!--end col-->


                        <div class="col-md-6 col-lg-3">
                            <div class="card report-card bg-warning-gradient shadow-warning">
                                <div class="card-body">
                                    <div class="float-right">
                                        <i class="fa fa-check-double report-main-icon bg-icon-warning"></i>
                                    </div>
                                    <span class="badge badge-light text-warning">Total Order</span>
                                    <h3 class="my-3"><?php echo $count4; ?></h3>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!--end col-->
                    </div><!--end row-->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mt-0 mb-3">Recent Order Placed</h4>
                                    <div class="table-responsive browser_users">
                                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th>Order Number</th>
                                                    <th>Name</th>
                                                    <th>ID Number</th>
                                                    <th>Email</th>
                                                    <th>Phone Number</th>
                                                </tr><!--end tr-->
                                            </thead>
                                            <tbody>
                                              <?php
                                                while ($row_recent_order_placed = mysqli_fetch_assoc($exe_qry_recent_order_placed)) {

                                              ?>
                                                <tr>
                                                  <td><?php echo $row_recent_order_placed['order_number']; ?></td>
                                                  <td><?php echo $row_recent_order_placed['name']; ?></td>
                                                  <td><?php echo $row_recent_order_placed['id_number']; ?></td>
                                                  <td><?php echo $row_recent_order_placed['email']; ?></td>
                                                  <td><?php echo $row_recent_order_placed['phone_number']; ?></td>
                                                </tr>
                                                <?php
                                                  }
                                                ?>
                                            </tbody>
                                        </table> <!--end table-->
                                    </div><!--end /div-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->
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
