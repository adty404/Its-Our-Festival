<?php
  include 'includes/page_head.php';
  include '../config/database.php';

  $qry_show_payment_slip = "SELECT ot.id_payment_slip, ot.id_order_table, ot.id_ticket, ot.id_payment, ot.id_status, ot.order_number, ot.name, ot.id_number, ot.email, ot.phone_number, t.id_ticket,  t.class, t.price_real, p.id_payment, p.payment, p.rek, ps.id_payment_slip, ps.payment_slip_img FROM order_table ot INNER JOIN ticket t ON ot.id_ticket = t.id_ticket INNER JOIN payment p ON ot.id_payment = p.id_payment INNER JOIN payment_slip ps ON ot.id_payment_slip = ps.id_payment_slip WHERE id_status = 2";
  $exe_qry_payment_slip = mysqli_query($db, $qry_show_payment_slip);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Payment Slip | Administrator</title>
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
                                        <li class="breadcrumb-item active">Payment Slip</li>
                                    </ol><!--end breadcrumb-->
                                </div><!--end /div-->
                                <h4 class="page-title">Payment Slip Data</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div><!--end row-->
                    <!-- end page title end breadcrumb -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="mt-0 header-title">Payment Slip</h4><br>

                                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                          <tr>
                                              <th>Order Number</th>
                                              <th>Name</th>
                                              <th>ID Number</th>
                                              <th>Email</th>
                                              <th>Phone Number</th>
                                              <th>Total Transfer</th>
                                              <th>Bank</th>
                                              <th>Rek</th>
                                              <th>Payment Slip</th>
                                              <th>Action</th>
                                          </tr>
                                          </thead>


                                          <tbody>
                                          <?php
                                            while ($row_payment_slip = mysqli_fetch_assoc($exe_qry_payment_slip)) {

                                          ?>
                                          <tr>
                                              <td><?php echo $row_payment_slip['order_number']; ?></td>
                                              <td><?php echo $row_payment_slip['name']; ?></td>
                                              <td><?php echo $row_payment_slip['id_number']; ?></td>
                                              <td><?php echo $row_payment_slip['email']; ?></td>
                                              <td><?php echo $row_payment_slip['phone_number']; ?></td>
                                              <td><?php echo $row_payment_slip['price_real']; ?></td>
                                              <td><?php echo $row_payment_slip['payment']; ?></td>
                                              <td><?php echo $row_payment_slip['rek']; ?></td>
                                              <td>
                                                <a target="_blank" href="../view/upload/payment_slip/<?php echo $row_payment_slip['payment_slip_img']; ?>">
                                                  <img class="image" src="../view/upload/payment_slip/<?php echo $row_payment_slip['payment_slip_img']; ?>" alt="Payment Slip" style="width:50px;max-width:50px">
                                                </a>
                                              </td>
                                              <td>
                                                <div class="btn-group">
                                                    <a href="process/approve.php?id_ot=<?php echo $row_payment_slip['id_order_table']; ?>" data-toggle="tooltip" title="Approve" class="btn btn-gradient-warning waves-effect waves-light"><i class="fas fa-check-circle"></i></a>
                                                    <button type="button" class="btn btn-gradient-danger waves-effect waves-light" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-sm"><i class="fas fa-times-circle"></i></button>
                                                </div>
                                              </td>
                                          </tr>

                                          <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                              <div class="modal-dialog modal-sm">
                                                  <div class="modal-content">
                                                      <div class="modal-header">
                                                          <h5 class="modal-title mt-0" id="mySmallModalLabel">Reasons Why This Order Not Approved</h5>
                                                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                      </div>
                                                      <div class="modal-body">
                                                        <form method="POST" action="process/dont_approve.php">
                                                            <div class="form-group">
                                                              <input type="hidden" name="id_order_table" value="<?php echo $row_payment_slip['id_order_table']; ?>">

                                                              <input type="hidden" name="id_payment_slip" value="<?php echo $row_payment_slip['id_payment_slip']; ?>">
                                                            </div>

                                                            <div class="form-group">
                                                              <label for="message">Reasons</label>
                                                              <textarea class="form-control" name="reasons" rows="5"></textarea>
                                                            </div>


                                                            <button type="submit" class="btn btn-gradient-primary">Submit</button>
                                                            <button type="reset" class="btn btn-gradient-warning">Reset</button>
                                                        </form>
                                                      </div>
                                                  </div><!-- /.modal-content -->
                                              </div><!-- /.modal-dialog -->
                                          </div><!-- /.modal -->

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
