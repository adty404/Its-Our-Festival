<header>
    <div id="lgx-header" class="lgx-header">
        <div class="lgx-header-position lgx-header-position-white lgx-header-position-fixed">
            <!--lgx-header-position-fixed lgx-header-position-white lgx-header-fixed-container lgx-header-fixed-container-gap lgx-header-position-white-->
            <div class="lgx-container">
                <!--lgx-container-fluid-->
                <nav class="navbar navbar-default lgx-navbar">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="lgx-logo">
                            <a href="index.php" class="lgx-scroll">
                                <img src="assets/img/logo.png" alt="Eventhunt Logo" />
                            </a>
                        </div>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <div class="lgx-nav-right navbar-right">
                            <div class="lgx-cart-area">
                              <?php
                                if ($title != "It's Our Festival") {
                                  echo '<a class="lgx-btn lgx-btn-red" href="index.php#lgx-registration">Buy Ticket</a>';
                                }else{
                                  echo '<a class="lgx-btn lgx-btn-red" href="#lgx-registration">Buy Ticket</a>';
                                }
                              ?>
                            </div>
                        </div>
                        <ul class="nav navbar-nav lgx-nav navbar-right">
                            <li><a class="lgx-scroll" href="index.php">Home</a></li>
                            <?php
                              if ($title != "It's Our Festival") {
                                echo '<li><a class="lgx-scroll" href="index.php#lgx-registration">Ticket</a></li>';
                              }else{
                                echo '<li><a class="lgx-scroll" href="#lgx-registration">Ticket</a></li>';
                              }
                            ?>
                            <li>
                                <a href="index.php" class="dropdown-toggle active" data-toggle="dropdown"
                                    role="button" aria-haspopup="true" aria-expanded="false">LineUp<span
                                        class="caret"></span></a>
                                <ul class="dropdown-menu multi-level">
                                  <?php
                                    if ($title != "It's Our Festival") {
                                      echo '<li><a href="index.php#lgx-speakers">LineUps</a></li>';
                                      echo '<li><a href="index.php#lgx-schedule">Rundown</a></li>';
                                    }else{
                                      echo '<li><a href="#lgx-speakers">LineUps</a></li>';
                                      echo '<li><a href="#lgx-schedule">Rundown</a></li>';
                                    }
                                  ?>
                                </ul>
                            <li>
                              <?php
                                if ($title != "It's Our Festival") {
                                  echo '<li><a class="lgx-scroll" href="index.php#lgx-photo-gallery">Experience</a></li>';
                                  echo '<li><a class="lgx-scroll" href="index.php#lgx-travelinfo">Information</a></li>';
                                  echo '<li><a class="lgx-scroll" href="index.php#lgx-sponsors">Sponsors</a></li>';
                                  echo '<li><a class="lgx-scroll" href="index.php#lgx-contact">Contact</a></li>';
                                  echo '<li><a class="lgx-scroll" href="status.php">Status</a></li>';
                                }else{
                                  echo '<li><a class="lgx-scroll" href="#lgx-photo-gallery">Experience</a></li>';
                                  echo '<li><a class="lgx-scroll" href="#lgx-travelinfo">Information</a></li>';
                                  echo '<li><a class="lgx-scroll" href="#lgx-sponsors">Sponsors</a></li>';
                                  echo '<li><a class="lgx-scroll" href="#lgx-contact">Contact</a></li>';
                                  echo '<li><a class="lgx-scroll" href="status.php">Status</a></li>';
                                }
                              ?>
                            </li>
                            </li>
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </nav>
            </div>
            <!-- //.CONTAINER -->
        </div>
    </div>
</header>
