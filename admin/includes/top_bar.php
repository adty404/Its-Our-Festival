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
        <ul class="list-unstyled topbar-nav float-right mb-0">
            <li class="dropdown">
                <a class="nav-link dropdown-toggle waves-effect waves-light nav-user pr-0" data-toggle="dropdown" href="#" role="button"
                    aria-haspopup="false" aria-expanded="false">
                    <img src="assets/images/users/user-4.jpg" alt="profile-user" class="rounded-circle" />
                    <span class="ml-1 nav-user-name hidden-sm"><?php echo $nama; ?> <i class="mdi mdi-chevron-down"></i> </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#"><i class="dripicons-user text-muted mr-2"></i> Profile</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="auth/logout.php"><i class="dripicons-exit text-muted mr-2"></i> Logout</a>
                </div>
            </li><!--end dropdown-->
            <li class="menu-item">
                <!-- Mobile menu toggle-->
                <a class="navbar-toggle nav-link" id="mobileToggle">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </li> <!--end menu item-->
        </ul><!--end topbar-nav-->

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
