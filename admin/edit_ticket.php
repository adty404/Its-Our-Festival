<?php
include '../config/database.php';
include 'includes/page_head.php';

$id_ticket        =   $_GET['id_ticket'];

$qry_show_ticket  =   "SELECT t.id_ticket, t.class, t.price, t.price_real, ti.id_ticket_info, ti.id_ticket, ti.info1, ti.info2, ti.info3, ti.info4, ti.info5, ti.info6 FROM ticket t INNER JOIN ticket_info ti ON ti.id_ticket = t.id_ticket WHERE t.id_ticket = '$id_ticket'";
$exe_qry_show_ticket = mysqli_query($db, $qry_show_ticket);

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Edit Ticket Data | Administrator</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="" name="description" />
        <meta content="" name="author" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/metisMenu.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

    </head>

    <body>

        <!-- Top Bar Start -->
        <div class="topbar">

            <!-- Navbar -->
            <nav class="topbar-main">
                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="projects/projects-index.html" class="logo">
                        <span>
                            <img src="assets/images/logo-sm.png" alt="logo-small" class="logo-sm">
                        </span>
                        <span>
                            <img src="assets/images/logo-dark.png" alt="logo-large" class="logo-lg">
                        </span>
                    </a>
                </div><!--topbar-left-->
                <!--end logo-->
            </nav>
            <!-- end navbar-->


             <!-- MENU Start -->
            <!-- MENU Start -->
            <div class="navbar-custom-menu">
                <div class="container-fluid">
                    <div id="navigation">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">
                            <li class="has-submenu">
                                <a href="javascript:;" class="navbar-link">
                                    <i class="fa fa-home"></i>
                                    <span>Home</span>
                                </a>
                                <ul class="submenu submenu-tab">
                                    <li><a href="dashboard.php"><i class="fa fa-desktop"></i>Dashboard</a></li>
                                </ul><!--end submenu-->
                            </li><!--end has-submenu-->

                            <li class="has-submenu">
                                <a href="javascript:;" class="navbar-link">
                                    <i class="fa fa-ticket-alt"></i>
                                    <span>Ticket</span>
                                </a>
                                <ul class="submenu submenu-tab">
                                    <li><a href="ticket.php"><i class="fa fa-ticket-alt"></i>Ticket Data</a></li>
                                </ul><!--end submenu-->
                            </li><!--end has-submenu-->

                            <li class="has-submenu">
                                <a href="javascript:;" class="navbar-link">
                                    <i class="fa fa-shopping-basket"></i>
                                    <span>Order</span>
                                </a>
                                <ul class="submenu submenu-tab">
                                  <li><a href="order_placed.php"><i class="fa fa-shopping-cart"></i>Order Placed</a></li>
                                  <li><a href="payment_slip.php"><i class="fa fa-money-check"></i>Payment Slip</a></li>
                                  <li><a href="payment_verified.php"><i class="fa fa-check-circle"></i>Payment Verified</a></li>
                                  <li><a href="payment_not_verified.php"><i class="fa fa-times-circle"></i>Payment Not Verified</a></li>
                                </ul><!--end submenu-->
                            </li><!--end has-submenu-->
                        </ul><!-- End navigation menu -->
                    </div> <!-- end navigation -->
                </div> <!-- end container-fluid -->
            </div> <!-- end navbar-custom -->
        </div>
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
                                        <li class="breadcrumb-item active"> Edit Ticket Data</li>
                                    </ol><!--end breadcrumb-->
                                </div><!--end /div-->
                                <h4 class="page-title"> Edit Ticket Data</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div><!--end row-->
                    <!-- end page title end breadcrumb -->

                    <div class="row">
                      <div class="col-lg-12">
                          <div class="card">
                              <div class="card-body">
                                  <h4 class="mt-0 header-title">Edit Ticket Data</h4><br>
                                  <?php
                                    while ($showTicket = mysqli_fetch_assoc($exe_qry_show_ticket)) {

                                  ?>
                                  <form method="POST" action="process/edit_ticket.php">
                                    <div class="form-group">
                                      <input type="hidden" name="id_ticket" value="<?php echo $id_ticket; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputClass">Class</label>
                                        <input type="text" name="class" class="form-control" id="exampleInputClass" aria-describedby="classHelp" placeholder="Enter ticket class" value="<?php echo $showTicket['class'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPrice">Price</label>
                                        <input type="text" name="price" class="form-control" id="exampleInputPrice" aria-describedby="priceHelp" placeholder="Enter the price" value="<?php echo $showTicket['price'] ?>">
                                        <small id="priceHelp" class="form-text text-muted">If the ticket price would be 1.600.000, please just input 1,6</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPriceReal">Real Price</label>
                                        <input type="text" name="price_real" class="form-control" id="exampleInputPriceReal" aria-describedby="priceRealHelp" placeholder="Enter real price of the ticket" value="<?php echo $showTicket['price_real'] ?>">
                                        <small id="priceRealHelp" class="form-text text-muted">Example inputs 1.600.000, 3.200.000, 6.000.000</small>
                                    </div>
                                      <div class="form-group">
                                          <label for="exampleInputInfo1">Info 1</label>
                                          <input type="text" name="info1" class="form-control" id="exampleInputInfo1" aria-describedby="info1Help" placeholder="Enter info 1" value="<?php echo $showTicket['info1'] ?>">
                                          <small id="info1Help" class="form-text text-muted">Example = 1 Ticket for 1 Wristband</small>
                                      </div>
                                      <div class="form-group">
                                          <label for="exampleInputInfo2">Info 2</label>
                                          <input type="text" name="info2" class="form-control" id="exampleInputInfo2" aria-describedby="info1Help" placeholder="Enter info 2" value="<?php echo $showTicket['info2'] ?>">
                                          <small id="info2Help" class="form-text text-muted">Example = 3 Day Pass</small>
                                      </div>
                                      <div class="form-group">
                                          <label for="exampleInputInfo3">Info 3</label>
                                          <input type="text" name="info3" class="form-control" id="exampleInputInfo3" aria-describedby="info3Help" placeholder="Enter info 3" value="<?php echo $showTicket['info3'] ?>">
                                          <small id="info3Help" class="form-text text-muted">Example = General Admission</small>
                                      </div>
                                      <div class="form-group">
                                          <label for="exampleInputInfo4">Info 4</label>
                                          <input type="text" name="info4" class="form-control" id="exampleInputInfo4" aria-describedby="info4Help" placeholder="Enter info 4" value="<?php echo $showTicket['info4'] ?>">
                                          <small id="info4Help" class="form-text text-muted">Example = Price Includes Tax 20%</small>
                                      </div>
                                      <div class="form-group">
                                          <label for="exampleInputInfo5">Info 5</label>
                                          <input type="text" name="info5" class="form-control" id="exampleInputInfo5" aria-describedby="info5Help" placeholder="Enter info 5" value="<?php echo $showTicket['info5'] ?>">
                                          <small id="info5Help" class="form-text text-muted">Example = Standing Party</small>
                                      </div>
                                      <div class="form-group">
                                          <label for="exampleInputInfo6">Info 6</label>
                                          <input type="text" name="info6" class="form-control" id="exampleInputInfo6" aria-describedby="info6Help" placeholder="Enter info 6" value="<?php echo $showTicket['info6'] ?>">
                                          <small id="info6Help" class="form-text text-muted">Example = No Merchandise / Get Merchandise</small>
                                      </div>
                                      <button type="submit" class="btn btn-gradient-primary">Update</button>
                                      <a href="ticket.php">
                                        <button type="button" class="btn btn-gradient-danger">Cancel</button>
                                      </a>
                                  </form>
                                <?php
                                  }
                                ?>
                              </div><!--end card-body-->
                          </div><!--end card-->
                      </div><!--end col-->
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

        <!-- App js -->
        <script src="assets/js/app.js"></script>

    </body>
</html>
