<?php
  include 'includes/page_head.php';

  $qry_show_ticket = "SELECT t.id_ticket, t.class, t.price, t.price_real, ti.id_ticket_info, ti.id_ticket, ti.info1, ti.info2, ti.info3, ti.info4, ti.info5, ti.info6 FROM ticket t INNER JOIN ticket_info ti ON ti.id_ticket = t.id_ticket";
  $exe_qry_show_ticket = mysqli_query($db, $qry_show_ticket);

  $qry_count_ticket = "SELECT * FROM ticket";
  $exe_qry_count_ticket = mysqli_query($db, $qry_count_ticket);
  $count1 = mysqli_num_rows($exe_qry_count_ticket);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Ticket Data | Administrator</title>
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

      if ($_GET['alert'] == successAdd) {
          echo '<input type="hidden">';
          echo '<script>

          swal({
              title: "Success",
              text: "Ticket data successfully added!",
              type: "success",
              confirmButtonColor: "#8CD4F5",
              confirmButtonText: "Okay",
              closeOnConfirm: false,
          });
          </script>';
      }else if ($_GET['alert'] == failedAdd) {
          echo '<input type="hidden">';
          echo '<script>

          swal({
              title: "Error",
              text: "Ticket data input error!",
              type: "error",
              confirmButtonColor: "#DD6B55",
              confirmButtonText: "Okay",
              closeOnConfirm: false,
          });
          </script>';
      }else if ($_GET['alert'] == ticketFull) {
          echo '<input type="hidden">';
          echo '<script>

          swal({
              title: "Error",
              text: "Ticket data full!",
              type: "error",
              confirmButtonColor: "#DD6B55",
              confirmButtonText: "Okay",
              closeOnConfirm: false,
          });
          </script>';
      }else if ($_GET['alert'] == successEdit) {
          echo '<input type="hidden">';
          echo '<script>

          swal({
              title: "Success",
              text: "Ticket data has been updated successfully!",
              type: "success",
              confirmButtonColor: "#8CD4F5",
              confirmButtonText: "Okay",
              closeOnConfirm: false,
          });
          </script>';
      }else if ($_GET['alert'] == successDelete) {
          echo '<input type="hidden">';
          echo '<script>

          swal({
              title: "Success",
              text: "Ticket data has been deleted successfully!",
              type: "success",
              confirmButtonColor: "#8CD4F5",
              confirmButtonText: "Okay",
              closeOnConfirm: false,
          });
          </script>';
      }
      else if ($_GET['alert'] == failedEdit) {
          echo '<input type="hidden">';
          echo '<script>

          swal({
              title: "Error",
              text: "Edit ticket data error!",
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
                                        <li class="breadcrumb-item active">Ticket Data</li>
                                    </ol><!--end breadcrumb-->
                                </div><!--end /div-->
                                <h4 class="page-title">Ticket Data</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div><!--end row-->
                    <!-- end page title end breadcrumb -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                  <?php
                                    if ($count1 >= 4) {

                                    }else {

                                  ?>
                                  <a href="add_ticket.php">
                                    <button type="button" class="btn btn-gradient-success waves-effect waves-light" style="float:right;"><i class="mdi mdi-database-plus mr-2"></i>Add ticket data</button>
                                  </a>
                                  <?php
                                    }
                                  ?>


                                    <h4 class="mt-0 header-title">Ticket Data Table</h4>
                                    <p class="text-muted mb-3">Ticket Data. Max data input = 4
                                    </p>

                                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                        <tr>
                                            <th>Class</th>
                                            <th>Price</th>
                                            <th>Info 1</th>
                                            <th>Info 2</th>
                                            <th>Info 3</th>
                                            <th>Info 4</th>
                                            <th>Info 5</th>
                                            <th>Info 6</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        <?php
                                          while ($row_ticket = mysqli_fetch_assoc($exe_qry_show_ticket)) {

                                        ?>
                                        <tr>
                                          <td><?php echo $row_ticket['class']; ?></td>
                                          <td><?php echo $row_ticket['price_real']; ?></td>
                                          <td><?php echo $row_ticket['info1']; ?></td>
                                          <td><?php echo $row_ticket['info2']; ?></td>
                                          <td><?php echo $row_ticket['info3']; ?></td>
                                          <td><?php echo $row_ticket['info4']; ?></td>
                                          <td><?php echo $row_ticket['info5']; ?></td>
                                          <td><?php echo $row_ticket['info6']; ?></td>
                                            <td>
                                              <div class="btn-group">
                                                  <a href="edit_ticket.php?id_ticket=<?php echo $row_ticket['id_ticket']; ?>" data-toggle="tooltip" title="Edit" class="btn btn-gradient-warning waves-effect waves-light"><i class="fas fa-user-edit"></i></a>
                                                  <a href="process/delete_ticket.php?id_ticket=<?php echo $row_ticket['id_ticket']; ?>" data-toggle="tooltip" title="Delete" class="btn btn-gradient-danger waves-effect waves-light"><i class="fas fa-times-circle"></i></a>
                                              </div>
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
