<?php include 'process/getticket.php'; ?> <!-- untuk memanggil file getticket.php, digunakan untuk mengambil  data ticket dari database dan ditampilkan pada halaman ini -->


<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <!-- The above 3 meta tags *must* come first in the head -->

    <!-- SITE TITLE -->
    <title><?php $title = "It's Our Festival"; ?> It's Our Festival</title> <!-- Gak terlalu penting, cuma buat penandaan bahwa ini halaman index, karena $title digunakan pada includes/partials/header.php untuk menentukan halaman apakah ini dan menyesuaikan link-link yang membutuhkan id, seperti index.php?#lgx-registration, dan lain-lain -->



    <meta name="description" content="Responsive EventHunt HTML Template" />
    <meta name="keywords" content="Bootstrap3, Event, Conference, Meetup, Template, Responsive, HTML5" />
    <meta name="author" content="themearth.com" />

    <!--  FAVICON AND TOUCH ICONS -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- this icon shows in browser toolbar -->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- this icon shows in browser toolbar -->
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
    <link rel="stylesheet" href="assets/libs/bootstrap/css/bootstrap.min.css" media="all" />

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="assets/libs/fontawesome/css/font-awesome.min.css" media="all" />

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="assets/libs/maginificpopup/magnific-popup.css" media="all" />

    <!-- Time Circle -->
    <link rel="stylesheet" href="assets/libs/timer/TimeCircles.css" media="all" />

    <!-- OWL CAROUSEL CSS -->
    <link rel="stylesheet" href="assets/libs/owlcarousel/owl.carousel.min.css" media="all" />
    <link rel="stylesheet" href="assets/libs/owlcarousel/owl.theme.default.min.css" media="all" />

    <!-- GOOGLE FONT -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Oswald:400,700%7cRaleway:300,400,400i,500,600,700,900" />

    <!-- MASTER  STYLESHEET  -->
    <link id="lgx-master-style" rel="stylesheet" href="assets/css/style-default.min.css" media="all" />

    <!-- MODERNIZER CSS  -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body class="home">

    <div class="lgx-container ">
        <!-- ***  ADD YOUR SITE CONTENT HERE *** -->

        <!--HEADER-->
        <?php include 'includes/partials/header.php' ?> <!-- Untuk mengimport/menginclude file section header yang berada pada includes/partials/header.php. Jadi kalau mau ngubah sesuatu yang ada di header, tinggal pergi file header.php aja, biar header di halaman lain juga ikut keubah. Jadi cuma ngubah 1 file aja -->
        <!--HEADER END-->


        <!--BANNER-->
        <section>
            <div class="lgx-banner lgx-banner4">
                <div class="lgx-banner-style">
                    <div class="lgx-inner lgx-inner-fixed">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="lgx-banner-info lgx-banner-info-center">
                                        <!-- COUNTDOWN -->
                                        <div class="circular-countdown-area">
                                            <div id="circular-countdown" data-date="2020-08-28 18:00:00"></div>
                                        </div>
                                        <!-- END COUNTDOWN -->
                                        <h4 class="subtitle">Welcome to</h4>
                                        <h2 class="title"><span id="lgx-typed-string">It's Our Festival 2020</span></h2>
                                        <h3 class="location"><i class="fa fa-map-marker"></i> JIExpo Kemayoran, Jakarta,
                                            Indonesia</h3>
                                        <h3 class="date"><i class="fa fa-calendar"></i> August 28 - 30, 2020</h3>
                                    </div>
                                </div>
                            </div>
                            <!--//.ROW-->
                        </div>
                        <!-- //.CONTAINER -->
                    </div>
                    <!-- //.INNER -->
                </div>
            </div>
        </section>
        <!--BANNER END-->


        <!--ABOUT-->
        <section>
            <div id="lgx-about" class="lgx-about">
                <div class="lgx-inner">
                    <div class="container">
                        <div class="row">

                            <!-- Video -->
                            <div class="col-sm-12">
                                <div class="lgx-about-video lgx-about-video-center">
                                    <div class="lgx-video-area lgx-video-area-center">
                                        <figure>
                                            <a href="#"><img src="http://placehold.it/1927x888" alt="Event Video"></a>
                                            <figcaption>
                                                <div class="video-icon">
                                                    <div class="lgx-vertical">
                                                        <a id="myModalLabel" class="icon" href="#" data-toggle="modal"
                                                            data-target="#lgx-modal">
                                                            <i class="fa fa-play " aria-hidden="true"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </figcaption>
                                        </figure>
                                        <!-- Modal-->
                                        <div id="lgx-modal" class="modal fade lgx-modal">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-hidden="true">×</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <iframe id="modalvideo"
                                                            src="https://www.youtube.com/embed/oSPR5Go05Vg"
                                                            allowfullscreen></iframe>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- //.Modal-->
                                    </div>
                                </div>
                            </div>

                            <!-- About -->
                            <div class="col-sm-12">
                                <div class="lgx-about-content-area lgx-about-content-area-center">
                                    <div class="lgx-heading">
                                        <h2 class="heading">It's Our Festival 2020</h2>
                                        <h3 class="subheading">#IOF20</h3>
                                    </div>
                                    <div class="lgx-about-content">
                                        <p class="text">
                                            It's Our Festival is an annual summer festival of music, arts, fashion and
                                            food taking place in Indonesia's capital of Jakarta. Since its inaugural
                                            edition in 2016, the festival has seen incredible performances from
                                            globally-known acts of different genres.
                                        </p>
                                        <div class="section-btn-area">
                                            <a class="lgx-btn" href="about.php">More About</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Where & When -->
                            <div class="col-sm-12">
                                <div class="lgx-about-service">
                                    <div class="lgx-single-service lgx-single-service-white">
                                        <span class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                                        <div class="text-area">
                                            <h2 class="title"><a href="#map">Where?</a></h2>
                                            <p><strong>JIExpo Kemayoran</strong> <br>Jakarta, Indonesia</p>
                                        </div>
                                    </div>
                                    <div class="lgx-single-service lgx-single-service-white">
                                        <span class="icon"><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                                        <div class="text-area">
                                            <h2 class="title"><a href="#">When?</a></h2>
                                            <p>Friday to Sunday<br>Aug 28 - 30, 2020 (06:00 PM to 02:00 AM)
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- //.CONTAINER -->
                </div>
                <!-- //.INNER -->
            </div>
        </section>
        <!--ABOUT END-->


        <!--REGISTRATION-->
        <section>
            <div id="lgx-registration" class="lgx-registration lgx-registration2">
                <!--lgx-registration2 lgx-registration3 lgx-registration4-->
                <div class="lgx-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="lgx-heading lgx-heading-white">
                                    <h2 class="heading">Grab Your Ticket Here!</h2>
                                    <h3 class="subheading">#IOF20</h3>
                                </div>
                                <div class="lgx-registration-area lgx-registration-area3">
                                    <!--lgx-registration-area2 lgx-registration-area3 "-->


                                    <!-- Ini perulangan buat nampilin data-data tiket dari database ke halaman ini -->
                                    <?php
                                      while ($showTicket = mysqli_fetch_array($exe_ticket)) {

                                    ?>
                                    <div class="lgx-single-registration">
                                        <div class="lgx-single-registration-inner">
                                            <div class="single-top">
                                                <h3 class="title"><?php echo $showTicket['class']; ?></h3>
                                                <h4 class="price"><i>Rp</i><?php echo $showTicket['price']; ?></h4>
                                            </div>
                                            <div class="single-bottom">
                                                <ul class="list-unstyled list">
                                                  <li><?php echo $showTicket['info1']; ?></li>
                                                  <li><?php echo $showTicket['info2']; ?></li>
                                                  <li><?php echo $showTicket['info3']; ?></li>
                                                  <li><?php echo $showTicket['info4']; ?></li>
                                                  <li><?php echo $showTicket['info5']; ?></li>
                                                  <li><?php echo $showTicket['info6']; ?></li>
                                                </ul>
                                                <a class="lgx-btn" href="registration.php">Buy Ticket</a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                      }
                                    ?>
                                    <!-- Penutup dari perulangan data tiket -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- //.CONTAINER -->
                </div>
                <!-- //.INNER -->
            </div>
        </section>
        <!--REGISTRATION END-->


        <!--SPEAKERS-->
        <section>
            <div id="lgx-speakers" class="lgx-speakers">
                <div class="lgx-inner">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="lgx-heading">
                                    <h2 class="heading">Lineups</h2>
                                    <h3 class="subheading">#IOF2020</h3>
                                </div>
                            </div>
                        </div>
                        <!--//.ROW-->
                        <div class="row">
                            <div class="col-xs-12">

                                <!-- HONNE -->
                                <div class="lgx-col5 lgx-single-speaker2">
                                    <figure>
                                        <a class="profile-img" href="speakers.php"><img
                                                src="http://placehold.it/800x860" alt="Speaker" /></a>
                                        <figcaption>
                                            <div class="social-group">
                                                <a class="sp-tw" href="#"><i class="fa fa-twitter"></i></a>
                                                <a class="sp-fb" href="#"><i class="fa fa-facebook"></i></a>
                                                <a class="sp-insta" href="#"><i class="fa fa-instagram"></i></a>
                                                <a class="sp-in" href="#"><i class="fa fa-linkedin"></i></a>
                                            </div>
                                            <div class="speaker-info">
                                                <h3 class="title"><a href="speaker.php">HONNE</a></h3>
                                                <!-- <h4 class="subtitle">Day 1</h4> -->
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>

                                <!-- LANY -->
                                <div class="lgx-col5 lgx-single-speaker2">
                                    <figure>
                                        <a class="profile-img" href="speakers.php"><img
                                                src="http://placehold.it/800x860" alt="Speaker" /></a>
                                        <figcaption>
                                            <div class="social-group">
                                                <a class="sp-tw" href="#"><i class="fa fa-twitter"></i></a>
                                                <a class="sp-fb" href="#"><i class="fa fa-facebook"></i></a>
                                                <a class="sp-insta" href="#"><i class="fa fa-instagram"></i></a>
                                                <a class="sp-in" href="#"><i class="fa fa-linkedin"></i></a>
                                            </div>
                                            <div class="speaker-info">
                                                <h3 class="title"><a href="speaker.php">LANY</a></h3>
                                                <!-- <h4 class="subtitle">Day 1</h4> -->
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>

                                <!-- RAISA -->
                                <div class="lgx-col5 lgx-single-speaker2">
                                    <figure>
                                        <a class="profile-img" href="speakers.php"><img
                                                src="http://placehold.it/800x860" alt="Speaker" /></a>
                                        <figcaption>
                                            <div class="social-group">
                                                <a class="sp-tw" href="#"><i class="fa fa-twitter"></i></a>
                                                <a class="sp-fb" href="#"><i class="fa fa-facebook"></i></a>
                                                <a class="sp-insta" href="#"><i class="fa fa-instagram"></i></a>
                                                <a class="sp-in" href="#"><i class="fa fa-linkedin"></i></a>
                                            </div>
                                            <div class="speaker-info">
                                                <h3 class="title"><a href="speaker.php">RAISA</a></h3>
                                                <!-- <h4 class="subtitle">Day 1</h4> -->
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>

                                <!-- NIKI -->
                                <div class="lgx-col5 lgx-single-speaker2">
                                    <figure>
                                        <a class="profile-img" href="speakers.php"><img
                                                src="http://placehold.it/800x860" alt="Speaker" /></a>
                                        <figcaption>
                                            <div class="social-group">
                                                <a class="sp-tw" href="#"><i class="fa fa-twitter"></i></a>
                                                <a class="sp-fb" href="#"><i class="fa fa-facebook"></i></a>
                                                <a class="sp-insta" href="#"><i class="fa fa-instagram"></i></a>
                                                <a class="sp-in" href="#"><i class="fa fa-linkedin"></i></a>
                                            </div>
                                            <div class="speaker-info">
                                                <h3 class="title"><a href="speaker.php">NIKI</a></h3>
                                                <!-- <h4 class="subtitle">Day 1</h4> -->
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>

                                <!-- TROYE SIVAN -->
                                <div class="lgx-col5 lgx-single-speaker2">
                                    <figure>
                                        <a class="profile-img" href="speakers.php"><img
                                                src="http://placehold.it/800x860" alt="Speaker" /></a>
                                        <figcaption>
                                            <div class="social-group">
                                                <a class="sp-tw" href="#"><i class="fa fa-twitter"></i></a>
                                                <a class="sp-fb" href="#"><i class="fa fa-facebook"></i></a>
                                                <a class="sp-insta" href="#"><i class="fa fa-instagram"></i></a>
                                                <a class="sp-in" href="#"><i class="fa fa-linkedin"></i></a>
                                            </div>
                                            <div class="speaker-info">
                                                <h3 class="title"><a href="speaker.php">TROYE SIVAN</a></h3>
                                                <!-- <h4 class="subtitle">Day 1</h4> -->
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>

                                <!-- KEHLANI -->
                                <div class="lgx-col5 lgx-single-speaker2">
                                    <figure>
                                        <a class="profile-img" href="speakers.php"><img
                                                src="http://placehold.it/800x860" alt="Speaker" /></a>
                                        <figcaption>
                                            <div class="social-group">
                                                <a class="sp-tw" href="#"><i class="fa fa-twitter"></i></a>
                                                <a class="sp-fb" href="#"><i class="fa fa-facebook"></i></a>
                                                <a class="sp-insta" href="#"><i class="fa fa-instagram"></i></a>
                                                <a class="sp-in" href="#"><i class="fa fa-linkedin"></i></a>
                                            </div>
                                            <div class="speaker-info">
                                                <h3 class="title"><a href="speaker.php">KEHLANI</a></h3>
                                                <!-- <h4 class="subtitle">Day 2</h4> -->
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>

                                <!-- SZA -->
                                <div class="lgx-col5 lgx-single-speaker2">
                                    <figure>
                                        <a class="profile-img" href="speakers.php"><img
                                                src="http://placehold.it/800x860" alt="Speaker" /></a>
                                        <figcaption>
                                            <div class="social-group">
                                                <a class="sp-tw" href="#"><i class="fa fa-twitter"></i></a>
                                                <a class="sp-fb" href="#"><i class="fa fa-facebook"></i></a>
                                                <a class="sp-insta" href="#"><i class="fa fa-instagram"></i></a>
                                                <a class="sp-in" href="#"><i class="fa fa-linkedin"></i></a>
                                            </div>
                                            <div class="speaker-info">
                                                <h3 class="title"><a href="speaker.php">SZA</a></h3>
                                                <!-- <h4 class="subtitle">Day 2</h4> -->
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>

                                <!-- SHEILA ON 7 -->
                                <div class="lgx-col5 lgx-single-speaker2">
                                    <figure>
                                        <a class="profile-img" href="speakers.php"><img
                                                src="http://placehold.it/800x860" alt="Speaker" /></a>
                                        <figcaption>
                                            <div class="social-group">
                                                <a class="sp-tw" href="#"><i class="fa fa-twitter"></i></a>
                                                <a class="sp-fb" href="#"><i class="fa fa-facebook"></i></a>
                                                <a class="sp-insta" href="#"><i class="fa fa-instagram"></i></a>
                                                <a class="sp-in" href="#"><i class="fa fa-linkedin"></i></a>
                                            </div>
                                            <div class="speaker-info">
                                                <h3 class="title"><a href="speaker.php">SHEILA ON 7</a></h3>
                                                <!-- <h4 class="subtitle">Day 2</h4> -->
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>

                                <!-- RICH BRIAN -->
                                <div class="lgx-col5 lgx-single-speaker2">
                                    <figure>
                                        <a class="profile-img" href="speakers.php"><img
                                                src="http://placehold.it/800x860" alt="Speaker" /></a>
                                        <figcaption>
                                            <div class="social-group">
                                                <a class="sp-tw" href="#"><i class="fa fa-twitter"></i></a>
                                                <a class="sp-fb" href="#"><i class="fa fa-facebook"></i></a>
                                                <a class="sp-insta" href="#"><i class="fa fa-instagram"></i></a>
                                                <a class="sp-in" href="#"><i class="fa fa-linkedin"></i></a>
                                            </div>
                                            <div class="speaker-info">
                                                <h3 class="title"><a href="speaker.php">RICH BRIAN</a></h3>
                                                <!-- <h4 class="subtitle">Day 2</h4> -->
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>

                                <!-- BILLIE EILISH -->
                                <div class="lgx-col5 lgx-single-speaker2">
                                    <figure>
                                        <a class="profile-img" href="speakers.php"><img
                                                src="http://placehold.it/800x860" alt="Speaker" /></a>
                                        <figcaption>
                                            <div class="social-group">
                                                <a class="sp-tw" href="#"><i class="fa fa-twitter"></i></a>
                                                <a class="sp-fb" href="#"><i class="fa fa-facebook"></i></a>
                                                <a class="sp-insta" href="#"><i class="fa fa-instagram"></i></a>
                                                <a class="sp-in" href="#"><i class="fa fa-linkedin"></i></a>
                                            </div>
                                            <div class="speaker-info">
                                                <h3 class="title"><a href="speaker.php">BILLIE EILISH</a></h3>
                                                <!-- <h4 class="subtitle">Day 2</h4> -->
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>

                                <!-- DUA LIPA -->
                                <div class="lgx-col5 lgx-single-speaker2">
                                    <figure>
                                        <a class="profile-img" href="speakers.php"><img
                                                src="http://placehold.it/800x860" alt="Speaker" /></a>
                                        <figcaption>
                                            <div class="social-group">
                                                <a class="sp-tw" href="#"><i class="fa fa-twitter"></i></a>
                                                <a class="sp-fb" href="#"><i class="fa fa-facebook"></i></a>
                                                <a class="sp-insta" href="#"><i class="fa fa-instagram"></i></a>
                                                <a class="sp-in" href="#"><i class="fa fa-linkedin"></i></a>
                                            </div>
                                            <div class="speaker-info">
                                                <h3 class="title"><a href="speaker.php">DUA LIPA</a></h3>
                                                <!-- <h4 class="subtitle">Day 3</h4> -->
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>

                                <!-- REX ORANGE COUNTY -->
                                <div class="lgx-col5 lgx-single-speaker2">
                                    <figure>
                                        <a class="profile-img" href="speakers.php"><img
                                                src="http://placehold.it/800x860" alt="Speaker" /></a>
                                        <figcaption>
                                            <div class="social-group">
                                                <a class="sp-tw" href="#"><i class="fa fa-twitter"></i></a>
                                                <a class="sp-fb" href="#"><i class="fa fa-facebook"></i></a>
                                                <a class="sp-insta" href="#"><i class="fa fa-instagram"></i></a>
                                                <a class="sp-in" href="#"><i class="fa fa-linkedin"></i></a>
                                            </div>
                                            <div class="speaker-info">
                                                <h4 class="title"><a href="speaker.php">REX ORANGE COUNTY</a></h4>
                                                <!-- <h4 class="subtitle">Day 3</h4> -->
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>

                                <!-- NADIN AMIZAH -->
                                <div class="lgx-col5 lgx-single-speaker2">
                                    <figure>
                                        <a class="profile-img" href="speakers.php"><img
                                                src="http://placehold.it/800x860" alt="Speaker" /></a>
                                        <figcaption>
                                            <div class="social-group">
                                                <a class="sp-tw" href="#"><i class="fa fa-twitter"></i></a>
                                                <a class="sp-fb" href="#"><i class="fa fa-facebook"></i></a>
                                                <a class="sp-insta" href="#"><i class="fa fa-instagram"></i></a>
                                                <a class="sp-in" href="#"><i class="fa fa-linkedin"></i></a>
                                            </div>
                                            <div class="speaker-info">
                                                <h3 class="title"><a href="speaker.php">NADIN AMIZAH</a></h3>
                                                <!-- <h4 class="subtitle">Day 3</h4> -->
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>

                                <!-- JOJI -->
                                <div class="lgx-col5 lgx-single-speaker2">
                                    <figure>
                                        <a class="profile-img" href="speakers.php"><img
                                                src="http://placehold.it/800x860" alt="Speaker" /></a>
                                        <figcaption>
                                            <div class="social-group">
                                                <a class="sp-tw" href="#"><i class="fa fa-twitter"></i></a>
                                                <a class="sp-fb" href="#"><i class="fa fa-facebook"></i></a>
                                                <a class="sp-insta" href="#"><i class="fa fa-instagram"></i></a>
                                                <a class="sp-in" href="#"><i class="fa fa-linkedin"></i></a>
                                            </div>
                                            <div class="speaker-info">
                                                <h3 class="title"><a href="speaker.php">JOJI</a></h3>
                                                <!-- <h4 class="subtitle">Day 3</h4> -->
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>

                                <!-- THE CHAINSMOKERS -->
                                <div class="lgx-col5 lgx-single-speaker2">
                                    <figure>
                                        <a class="profile-img" href="speakers.php"><img
                                                src="http://placehold.it/800x860" alt="Speaker" /></a>
                                        <figcaption>
                                            <div class="social-group">
                                                <a class="sp-tw" href="#"><i class="fa fa-twitter"></i></a>
                                                <a class="sp-fb" href="#"><i class="fa fa-facebook"></i></a>
                                                <a class="sp-insta" href="#"><i class="fa fa-instagram"></i></a>
                                                <a class="sp-in" href="#"><i class="fa fa-linkedin"></i></a>
                                            </div>
                                            <div class="speaker-info">
                                                <h4 class="title"><a href="speaker.php">THE CHAINSMOKERS</a></h4>
                                                <!-- <h4 class="subtitle">Day 3</h4> -->
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>

                            </div>
                        </div>
                        <!--//.ROW-->
                    </div>
                    <!-- //.CONTAINER -->
                </div>
                <!-- //.INNER -->
            </div>
        </section>
        <!--SPEAKERS END-->


        <!--SCHEDULE-->
        <section>
            <div id="lgx-schedule" class="lgx-schedule">
                <div class="lgx-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="lgx-heading lgx-heading-white">
                                    <h2 class="heading">Rundown</h2>
                                    <h3 class="subheading">#IOF20</h3>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="lgx-tab lgx-tab2">
                                    <!--lgx-tab2 lgx-tab-vertical-->
                                    <ul class="nav nav-pills lgx-nav lgx-nav-nogap lgx-nav-colorful">
                                        <!--lgx-nav-nogap lgx-nav-colorful-->
                                        <li class="active"><a data-toggle="pill" href="#home">
                                                <h3>First <span>Day</span></h3>
                                                <p><span>28 </span>Aug, 2020</p>
                                            </a></li>
                                        <li><a data-toggle="pill" href="#menu1">
                                                <h3>Second <span>Day</span></h3>
                                                <p><span>29 </span>Aug, 2020</p>
                                            </a></li>
                                        <li><a data-toggle="pill" href="#menu2">
                                                <h3>Third <span>Day</span></h3>
                                                <p><span>30 </span>Aug, 2020</p>
                                            </a></li>
                                    </ul>
                                    <div class="tab-content lgx-tab-content">

                                        <div id="home" class="tab-pane fade in active">

                                            <div class="panel-group" id="accordion" role="tablist"
                                                aria-multiselectable="true">

                                                <!-- HONNE -->
                                                <div class="panel panel-default lgx-panel">
                                                    <div class="panel-heading" role="tab" id="headingOne">
                                                        <div class="panel-title">
                                                            <a role="button" data-toggle="collapse"
                                                                data-parent="#accordion" href="#collapseOne"
                                                                aria-expanded="true" aria-controls="collapseOne">
                                                                <div class="lgx-single-schedule">
                                                                    <div class="author">
                                                                        <img src="http://placehold.it/800x800"
                                                                            alt="Speaker" />
                                                                    </div>
                                                                    <div class="schedule-info">
                                                                        <h4 class="time">07:30 <span>Pm</span> - 08:30
                                                                            <span>Pm</span></h4>
                                                                        <h3 class="title">HONNE</h3>
                                                                        <h4 class="author-info">Genre
                                                                            <span>Synthpop</span> , <span>Contemporary
                                                                                R&B</span></h4>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div id="collapseOne" class="panel-collapse collapse in"
                                                        role="tabpanel" aria-labelledby="headingOne">
                                                        <div class="panel-body">
                                                            <p class="text">
                                                                Songs: Someone That Loves You, Good Together, Day 1,
                                                                306, Crying Over You, Feels So Good, Me & You, Warm On a
                                                                Cold Night, Location Unknown.
                                                            </p>
                                                            <h4 class="location"><strong>Stage:</strong> #IOF20, Main
                                                                Stage, Outdoor</h4>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- LANY -->
                                                <div class="panel panel-default lgx-panel">
                                                    <div class="panel-heading" role="tab" id="headingTwo">
                                                        <div class="panel-title">
                                                            <a class="collapsed" role="button" data-toggle="collapse"
                                                                data-parent="#accordion" href="#collapseTwo"
                                                                aria-expanded="true" aria-controls="collapseTwo">
                                                                <div class="lgx-single-schedule">
                                                                    <div class="author">
                                                                        <img src="http://placehold.it/800x800"
                                                                            alt="Speaker" />
                                                                    </div>
                                                                    <div class="schedule-info">
                                                                        <h4 class="time">09:00 <span>Pm</span> - 09:30
                                                                            <span>Pm</span></h4>
                                                                        <h3 class="title">LANY</h3>
                                                                        <h4 class="author-info">Genre <span>Indie
                                                                                Pop</span> , <span>Synthpop</span></h4>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div id="collapseTwo" class="panel-collapse collapse"
                                                        role="tabpanel" aria-labelledby="headingTwo">
                                                        <div class="panel-body">
                                                            <p class="text">
                                                                Songs: Malibu Nights, Super Far, Mean It, Good Girls,
                                                                ILYSB.
                                                            </p>
                                                            <h4 class="location"><strong>Stage:</strong> Banana, Second
                                                                Stage, Indoor</h4>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- RAISA -->
                                                <div class="panel panel-default lgx-panel">
                                                    <div class="panel-heading" role="tab" id="headingThree">
                                                        <div class="panel-title">
                                                            <a class="collapsed" role="button" data-toggle="collapse"
                                                                data-parent="#accordion" href="#collapseThree"
                                                                aria-expanded="true" aria-controls="collapseThree">
                                                                <div class="lgx-single-schedule">
                                                                    <div class="author author-multi">
                                                                        <img src="http://placehold.it/800x800"
                                                                            alt="Speaker" />
                                                                        <img src="http://placehold.it/800x800"
                                                                            alt="Speaker" />
                                                                        <img src="http://placehold.it/800x800"
                                                                            alt="Speaker" />
                                                                        <img src="http://placehold.it/800x800"
                                                                            alt="Speaker" />
                                                                    </div>
                                                                    <div class="schedule-info">
                                                                        <h4 class="time">10:00 <span>Pm</span> - 11:00
                                                                            <span>Pm</span></h4>
                                                                        <h3 class="title">RAISA</h3>
                                                                        <h4 class="author-info">Genre <span>Music
                                                                                Pop</span></h4>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div id="collapseThree" class="panel-collapse collapse"
                                                        role="tabpanel" aria-labelledby="headingThree">
                                                        <div class="panel-body">
                                                            <p class="text">
                                                                Songs: Kali Kedua, Usai Di Sini, Jatuh Hati, Mantan
                                                                Terindah, Percayalah, Serba Salah.
                                                            </p>
                                                            <h4 class="location"><strong>Stage:</strong> Original, Park
                                                                Stage, Outdoor</h4>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- NIKI -->
                                                <div class="panel panel-default lgx-panel">
                                                    <div class="panel-heading" role="tab" id="headingfour">
                                                        <div class="panel-title">
                                                            <a class="collapsed" role="button" data-toggle="collapse"
                                                                data-parent="#accordion" href="#collapsefour"
                                                                aria-expanded="true" aria-controls="collapsefour">
                                                                <div class="lgx-single-schedule">
                                                                    <div class="author">
                                                                        <img src="http://placehold.it/800x800"
                                                                            alt="Speaker" />
                                                                    </div>
                                                                    <div class="schedule-info">
                                                                        <h4 class="time">11:30 <span>Pm</span> - 12:30
                                                                            <span>Am</span></h4>
                                                                        <h3 class="title">NIKI</h3>
                                                                        <h4 class="author-info">Genre <span>Contemporary
                                                                                R&B</span> , <span>Indie Folk</span>
                                                                        </h4>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div id="collapsefour" class="panel-collapse collapse"
                                                        role="tabpanel" aria-labelledby="headingThree">
                                                        <div class="panel-body">
                                                            <p class="text">
                                                                Songs: Lowkey, I Like U, Friends, Move, Spell, Warpaint,
                                                                Indigo, La La Lost You, Strange Land.
                                                            </p>
                                                            <h4 class="location"><strong>Stage:</strong> Millennial,
                                                                Another Stage, Indoor</h4>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- TROYE SIVAN -->
                                                <div class="panel panel-default lgx-panel">
                                                    <div class="panel-heading" role="tab" id="headingfive">
                                                        <div class="panel-title">
                                                            <a class="collapsed" role="button" data-toggle="collapse"
                                                                data-parent="#accordion" href="#collapsefive"
                                                                aria-expanded="true" aria-controls="collapsefive">
                                                                <div class="lgx-single-schedule">
                                                                    <div class="author">
                                                                        <img src="http://placehold.it/800x800"
                                                                            alt="Speaker" />
                                                                    </div>
                                                                    <div class="schedule-info">
                                                                        <h4 class="time">01:00 <span>Am</span> - 02:00
                                                                            <span>Am</span></h4>
                                                                        <h3 class="title">TROYE SIVAN</h3>
                                                                        <h4 class="author-info">Genre <span>Music
                                                                                Pop</span> , <span>Electro Pop</span>
                                                                        </h4>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div id="collapsefive" class="panel-collapse collapse"
                                                        role="tabpanel" aria-labelledby="headingThree">
                                                        <div class="panel-body">
                                                            <p class="text">
                                                                Songs: Youth, Fools, Dance To This, There For You,
                                                                Strawberries & Cigarettes, I'm So Tired, Wild.
                                                            </p>
                                                            <h4 class="location"><strong>Stage:</strong> #IOF20, Main
                                                                Stage, Outdoor</h4>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>


                                        <div id="menu1" class="tab-pane fade">

                                            <div class="panel-group" id="accordion2" role="tablist"
                                                aria-multiselectable="true">

                                                <!-- KEHLANI -->
                                                <div class="panel panel-default lgx-panel">
                                                    <div class="panel-heading" role="tab" id="headingOne2">
                                                        <div class="panel-title">
                                                            <a class="collapsed" role="button" data-toggle="collapse"
                                                                data-parent="#accordion2" href="#collapseOne2"
                                                                aria-expanded="true" aria-controls="collapseOne2">
                                                                <div class="lgx-single-schedule">
                                                                    <div class="author author-multi">
                                                                        <img src="http://placehold.it/800x800"
                                                                            alt="Speaker" />
                                                                        <img src="http://placehold.it/800x800"
                                                                            alt="Speaker" />
                                                                        <img src="http://placehold.it/800x800"
                                                                            alt="Speaker" />
                                                                    </div>
                                                                    <div class="schedule-info">
                                                                        <h4 class="time">07:30 <span>Pm</span> - 08:30
                                                                            <span>Pm</span></h4>
                                                                        <h3 class="title">KEHLANI</h3>
                                                                        <h4 class="author-info">Genre <span>Contemporary
                                                                                R&B</span> , <span>Hip Hop</span></h4>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div id="collapseOne2" class="panel-collapse collapse"
                                                        role="tabpanel" aria-labelledby="headingOne">
                                                        <div class="panel-body">
                                                            <p class="text">
                                                                Songs: Good Life, Gangsta, Distraction, Nights Like
                                                                This, Good Thing, Wanted, Honey, Crazy.
                                                            </p>
                                                            <h4 class="location"><strong>Stage:</strong> #IOF20, Main
                                                                Stage, Outdoor</h4>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- SZA -->
                                                <div class="panel panel-default lgx-panel">
                                                    <div class="panel-heading" role="tab" id="headingTwo2">
                                                        <div class="panel-title">
                                                            <a class="collapsed" role="button" data-toggle="collapse"
                                                                data-parent="#accordion2" href="#collapseTwo2"
                                                                aria-expanded="true" aria-controls="collapseTwo2">
                                                                <div class="lgx-single-schedule">
                                                                    <div class="author">
                                                                        <img src="http://placehold.it/800x800"
                                                                            alt="Speaker" />
                                                                    </div>
                                                                    <div class="schedule-info">
                                                                        <h4 class="time">09:00 <span>Pm</span> - 09:30
                                                                            <span>Pm</span></h4>
                                                                        <h3 class="title">SZA</h3>
                                                                        <h4 class="author-info">Genre <span>R&B</span> ,
                                                                            <span>Music Soul</span></h4>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div id="collapseTwo2" class="panel-collapse collapse"
                                                        role="tabpanel" aria-labelledby="headingTwo">
                                                        <div class="panel-body">
                                                            <p class="text">
                                                                Songs: Love Galore, What Lovers Do, The Weekend, All The
                                                                Stars.
                                                            </p>
                                                            <h4 class="location"><strong>Stage:</strong> Banana, Second
                                                                Stage, Indoor</h4>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- SHEILA ON 7 -->
                                                <div class="panel panel-default lgx-panel">
                                                    <div class="panel-heading" role="tab" id="headingThree2">
                                                        <div class="panel-title">
                                                            <a class="collapsed" role="button" data-toggle="collapse"
                                                                data-parent="#accordion2" href="#collapseThree2"
                                                                aria-expanded="true" aria-controls="collapseThree2">
                                                                <div class="lgx-single-schedule">
                                                                    <div class="author">
                                                                        <img src="http://placehold.it/800x800"
                                                                            alt="Speaker" />
                                                                    </div>
                                                                    <div class="schedule-info">
                                                                        <h4 class="time">10:00 <span>Pm</span> - 11:00
                                                                            <span>Pm</span></h4>
                                                                        <h3 class="title">SHEILA ON 7</h3>
                                                                        <h4 class="author-info">Genre <span>Music
                                                                                Pop</span> , <span>Rock
                                                                                Alternative</span></h4>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div id="collapseThree2" class="panel-collapse collapse"
                                                        role="tabpanel" aria-labelledby="headingThree">
                                                        <div class="panel-body">
                                                            <p class="text">
                                                                Songs: Dan, Berhenti Berharap, Seberapa Pantas, Sahabat
                                                                Sejati, Hari Bersamanya, Pemuja Rahasia, Sebuah Kisah
                                                                Klasik, Itu Aku, Anugerah Terindah Yang Pernah Kumiliki.
                                                            </p>
                                                            <h4 class="location"><strong>Stage:</strong> Original, Park
                                                                Stage, Outdoor</h4>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- RICH BRIAN -->
                                                <div class="panel panel-default lgx-panel">
                                                    <div class="panel-heading" role="tab" id="headingFour2">
                                                        <div class="panel-title">
                                                            <a class="collapsed" role="button" data-toggle="collapse"
                                                                data-parent="#accordion2" href="#collapseFour2"
                                                                aria-expanded="true" aria-controls="collapseFour2">
                                                                <div class="lgx-single-schedule">
                                                                    <div class="author">
                                                                        <img src="http://placehold.it/800x800"
                                                                            alt="Speaker" />
                                                                    </div>
                                                                    <div class="schedule-info">
                                                                        <h4 class="time">11:30 <span>Pm</span> - 12:30
                                                                            <span>Am</span></h4>
                                                                        <h3 class="title">RICH BRIAN</h3>
                                                                        <h4 class="author-info">Genre <span>Hip
                                                                                Hop</span></h4>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div id="collapseFour2" class="panel-collapse collapse"
                                                        role="tabpanel" aria-labelledby="headingFour">
                                                        <div class="panel-body">
                                                            <p class="text">
                                                                Songs: Dat Stick, Glow Like Dat, These Nights, 100
                                                                Degrees, History, Midsummer Madness.
                                                            </p>
                                                            <h4 class="location"><strong>Stage:</strong> Millennial,
                                                                Another Stage, Indoor</h4>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- BILLIE EILISH -->
                                                <div class="panel panel-default lgx-panel">
                                                    <div class="panel-heading" role="tab" id="headingFive2">
                                                        <div class="panel-title">
                                                            <a class="collapsed" role="button" data-toggle="collapse"
                                                                data-parent="#accordion2" href="#collapseFive2"
                                                                aria-expanded="true" aria-controls="collapseFive2">
                                                                <div class="lgx-single-schedule">
                                                                    <div class="author">
                                                                        <img src="http://placehold.it/800x800"
                                                                            alt="Speaker" />
                                                                    </div>
                                                                    <div class="schedule-info">
                                                                        <h4 class="time">01:00 <span>Am</span> - 02:00
                                                                            <span>Am</span></h4>
                                                                        <h3 class="title">BILLIE EILISH</h3>
                                                                        <h4 class="author-info">Genre <span>Electro
                                                                                Pop</span> , <span>Indie Pop</span></h4>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div id="collapseFive2" class="panel-collapse collapse"
                                                        role="tabpanel" aria-labelledby="headingFive">
                                                        <div class="panel-body">
                                                            <p class="text">
                                                                Songs: Bad Guy, Wish You Were Gay, Lovely, You Should
                                                                See Me In a Crown, I Don't Wanna Be You Anymore, When
                                                                The Party's Over.
                                                            </p>
                                                            <h4 class="location"><strong>Stage:</strong> #IOF20, Main
                                                                Stage, Outdoor</h4>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>


                                        <div id="menu2" class="tab-pane fade">

                                            <div class="panel-group" id="accordion3" role="tablist"
                                                aria-multiselectable="true">

                                                <!-- DUA LIPA -->
                                                <div class="panel panel-default lgx-panel">
                                                    <div class="panel-heading" role="tab" id="headingOne3">
                                                        <div class="panel-title">
                                                            <a class="collapsed" role="button" data-toggle="collapse"
                                                                data-parent="#accordion3" href="#collapseOne3"
                                                                aria-expanded="true" aria-controls="collapseOne3">
                                                                <div class="lgx-single-schedule">
                                                                    <div class="author">
                                                                        <img src="http://placehold.it/800x800"
                                                                            alt="Speaker" />
                                                                    </div>
                                                                    <div class="schedule-info">
                                                                        <h4 class="time">07:30 <span>Pm</span> - 08.30
                                                                            <span>Pm</span></h4>
                                                                        <h3 class="title">DUA LIPA</h3>
                                                                        <h4 class="author-info">Genre <span>Music
                                                                                Pop</span> , <span>Dance Pop</span> ,
                                                                            <span>Contemporary R&B</span></h4>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div id="collapseOne3" class="panel-collapse collapse"
                                                        role="tabpanel" aria-labelledby="headingOne">
                                                        <div class="panel-body">
                                                            <p class="text">
                                                                Songs: New Rules, IDGAF, Don't Start Now, Scared To Be
                                                                Lonely, One Kiss, No Lie.
                                                            </p>
                                                            <h4 class="location"><strong>Stage:</strong> #IOF20, Main
                                                                Stage, Outdoor</h4>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- REX ORANGE COUNTY -->
                                                <div class="panel panel-default lgx-panel">
                                                    <div class="panel-heading" role="tab" id="headingTwo3">
                                                        <div class="panel-title">
                                                            <a class="collapsed" role="button" data-toggle="collapse"
                                                                data-parent="#accordion3" href="#collapseTwo3"
                                                                aria-expanded="true" aria-controls="collapseTwo3">
                                                                <div class="lgx-single-schedule">
                                                                    <div class="author">
                                                                        <img src="http://placehold.it/800x800"
                                                                            alt="Speaker" />
                                                                    </div>
                                                                    <div class="schedule-info">
                                                                        <h4 class="time">09:00 <span>Pm</span> - 09:30
                                                                            <span>Pm</span></h4>
                                                                        <h3 class="title">REX ORANGE COUNTY</h3>
                                                                        <h4 class="author-info">Genre <span>Indie
                                                                                Pop</span> , <span>Neo Soul</span> ,
                                                                            <span>Lo-Fi</span></h4>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div id="collapseTwo3" class="panel-collapse collapse"
                                                        role="tabpanel" aria-labelledby="headingTwo">
                                                        <div class="panel-body">
                                                            <p class="text">
                                                                Songs: Sunflower, Untitled, Loving is Easy, Best Friend.
                                                            </p>
                                                            <h4 class="location"><strong>Stage:</strong> Banana, Second
                                                                Stage, Indoor</h4>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- NADIN AMIZAH -->
                                                <div class="panel panel-default lgx-panel">
                                                    <div class="panel-heading" role="tab" id="headingThree3">
                                                        <div class="panel-title">
                                                            <a class="collapsed" role="button" data-toggle="collapse"
                                                                data-parent="#accordion3" href="#collapseThree3"
                                                                aria-expanded="true" aria-controls="collapseThree3">
                                                                <div class="lgx-single-schedule">
                                                                    <div class="author">
                                                                        <img src="http://placehold.it/800x800"
                                                                            alt="Speaker" />
                                                                    </div>
                                                                    <div class="schedule-info">
                                                                        <h4 class="time">10:00 <span>Pm</span> - 11:00
                                                                            <span>Pm</span></h4>
                                                                        <h3 class="title">NADIN AMIZAH</h3>
                                                                        <h4 class="author-info">Genre <span>Music
                                                                                Pop</span></h4>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div id="collapseThree3" class="panel-collapse collapse"
                                                        role="tabpanel" aria-labelledby="headingThree">
                                                        <div class="panel-body">
                                                            <p class="text">
                                                                Songs: All Good, Rumpang, Amin Paling Serius, Star,
                                                                Seperti Tulang, All I Want (Cover), 1000x (Cover),
                                                                Sorai.
                                                            </p>
                                                            <h4 class="location"><strong>Stage:</strong> Original, Park
                                                                Stage, Outdoor</h4>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- JOJI -->
                                                <div class="panel panel-default lgx-panel">
                                                    <div class="panel-heading" role="tab" id="headingFour3">
                                                        <div class="panel-title">
                                                            <a class="collapsed" role="button" data-toggle="collapse"
                                                                data-parent="#accordion3" href="#collapseFour3"
                                                                aria-expanded="true" aria-controls="collapseFour3">
                                                                <div class="lgx-single-schedule">
                                                                    <div class="author">
                                                                        <img src="http://placehold.it/800x800"
                                                                            alt="Speaker" />
                                                                    </div>
                                                                    <div class="schedule-info">
                                                                        <h4 class="time">11:30 <span>Pm</span> - 12:30
                                                                            <span>Am</span></h4>
                                                                        <h3 class="title">JOJI</h3>
                                                                        <h4 class="author-info">Genre <span>R&B</span> ,
                                                                            <span>Trip Hop</span> , <span>Lo-Fi</span>
                                                                        </h4>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div id="collapseFour3" class="panel-collapse collapse"
                                                        role="tabpanel" aria-labelledby="headingFour">
                                                        <div class="panel-body">
                                                            <p class="text">
                                                                Songs: Slow Dancing In the Dark, Head In the Clouds,
                                                                Test Drive, Will He, Can't Get Over You, Midsummer
                                                                Madness.
                                                            </p>
                                                            <h4 class="location"><strong>Stage:</strong> Millennial,
                                                                Another Stage, Indoor</h4>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- THE CHAINSMOKERS -->
                                                <div class="panel panel-default lgx-panel">
                                                    <div class="panel-heading" role="tab" id="headingFive3">
                                                        <div class="panel-title">
                                                            <a class="collapsed" role="button" data-toggle="collapse"
                                                                data-parent="#accordion3" href="#collapseFive3"
                                                                aria-expanded="true" aria-controls="collapseFive3">
                                                                <div class="lgx-single-schedule">
                                                                    <div class="author">
                                                                        <img src="http://placehold.it/800x800"
                                                                            alt="Speaker" />
                                                                    </div>
                                                                    <div class="schedule-info">
                                                                        <h4 class="time">01:00 <span>Am</span> - 02:00
                                                                            <span>Am</span></h4>
                                                                        <h3 class="title">THE CHAINSMOKERS</h3>
                                                                        <h4 class="author-info">Genre <span>Electro
                                                                                Dance Music</span> , <span>Elelctro
                                                                                Pop</span> , <span>Electro House</span>
                                                                        </h4>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div id="collapseFive3" class="panel-collapse collapse"
                                                        role="tabpanel" aria-labelledby="headingFive">
                                                        <div class="panel-body">
                                                            <p class="text">
                                                                Songs: Closer, Roses, Paris, All We Know, Don't Let Me
                                                                Down, Something Just Like This, This Feeling, Inside
                                                                Out.
                                                            </p>
                                                            <h4 class="location"><strong>Stage:</strong> #IOF20, Main
                                                                Stage, Ourdoor</h4>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--//.ROW-->
                    </div>
                    <!-- //.CONTAINER -->
                </div>
                <!-- //.INNER -->
            </div>
        </section>
        <!--SCHEDULE END-->


        <!--PHOTO GALLERY-->
        <section>
            <div id="lgx-photo-gallery" class="lgx-gallery-popup lgx-photo-gallery-normal lgx-photo-gallery-black">
                <div class="lgx-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="lgx-heading lgx-heading-white">
                                    <h2 class="heading">Experience</h2>
                                    <h3 class="subheading">#IOF Official Gallery</h3>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="lgx-gallery-area">
                                    <div class="lgx-gallery-single">
                                        <figure>
                                            <img title="Memories One" src="http://placehold.it/1000x732"
                                                alt="Memories one" />
                                            <figcaption class="lgx-figcaption">
                                                <div class="lgx-hover-link">
                                                    <div class="lgx-vertical">
                                                        <a title="Memories One" href="http://placehold.it/1000x732">
                                                            <i class="fa fa-chain-broken" aria-hidden="true"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <!--Single photo-->
                                    <div class="lgx-gallery-single">
                                        <figure>
                                            <img src="http://placehold.it/1000x732" alt="Memories Two"
                                                title="Memories Two" />
                                            <figcaption class="lgx-figcaption">
                                                <div class="lgx-hover-link">
                                                    <div class="lgx-vertical">
                                                        <a title="Memories Two" href="http://placehold.it/1000x732">
                                                            <i class="fa fa-chain-broken" aria-hidden="true"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <!--Single photo-->
                                    <div class="lgx-gallery-single">
                                        <figure>
                                            <img src="http://placehold.it/1000x732" alt="Memories Three"
                                                title="Memories Three" />
                                            <figcaption class="lgx-figcaption">
                                                <div class="lgx-hover-link">
                                                    <div class="lgx-vertical">
                                                        <a title="Memories Three" href="http://placehold.it/1000x732">
                                                            <i class="fa fa-chain-broken" aria-hidden="true"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <!--Single photo-->
                                    <div class="lgx-gallery-single">
                                        <figure>
                                            <img src="http://placehold.it/1000x732" alt="Memories Four"
                                                title="Memories Four" />
                                            <figcaption class="lgx-figcaption">
                                                <div class="lgx-hover-link">
                                                    <div class="lgx-vertical">
                                                        <a title="Memories Four" href="http://placehold.it/1000x732">
                                                            <i class="fa fa-chain-broken" aria-hidden="true"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <!--Single photo-->
                                    <div class="lgx-gallery-single">
                                        <figure>
                                            <img src="http://placehold.it/1000x732" alt="Memories Five"
                                                title="Memories Five" />
                                            <figcaption class="lgx-figcaption">
                                                <div class="lgx-hover-link">
                                                    <div class="lgx-vertical">
                                                        <a title="Memories Five" href="http://placehold.it/1000x732">
                                                            <i class="fa fa-chain-broken" aria-hidden="true"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <!--Single photo-->
                                    <div class="lgx-gallery-single">
                                        <figure>
                                            <img src="http://placehold.it/1000x732" alt="Memories Six"
                                                title="Memories Six" />
                                            <figcaption class="lgx-figcaption">
                                                <div class="lgx-hover-link">
                                                    <div class="lgx-vertical">
                                                        <a title="Memories Six" href="http://placehold.it/1000x732">
                                                            <i class="fa fa-chain-broken" aria-hidden="true"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <!--Single photo-->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--PHOTO GALLERY END-->


        <!--TRAVEL INFO-->
        <section>
            <div id="lgx-travelinfo" class="lgx-travelinfo">
                <div class="lgx-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="lgx-heading">
                                    <h2 class="heading">Information</h2>
                                    <h3 class="subheading">#IOF20</h3>
                                </div>
                            </div>
                            <!--//main COL-->
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="lgx-travelinfo-content">
                                    <div class="lgx-travelinfo-single">
                                        <img src="assets/img/info-icon1.png" alt="location" />
                                        <h3 class="title">Venue</h3>
                                        <p class="info">JIExpo Kemayoran, Jakarta, Indonesia</p>
                                    </div>
                                    <div class="lgx-travelinfo-single">
                                        <img src="assets/img/info-icon2.png" alt="Transport" />
                                        <h3 class="title">Transport</h3>
                                        <p class="info">?</p>
                                    </div>
                                    <div class="lgx-travelinfo-single">
                                        <img src="assets/img/info-icon3.png" alt="Hotel & Restaurant" />
                                        <h3 class="title">Hotel & Restaurant</h3>
                                        <p class="info">Holiday Inn Express Hotel &</p>
                                        <p class="info">JIExpo Lounge</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--//.ROW-->
                    </div>
                    <!-- //.CONTAINER -->
                </div>
            </div>
        </section>
        <!--TRAVEL INFO END-->


        <!--GOOGLE MAP-->
        <div id="map" class="innerpage-section">
            <div class="lgxmapcanvas map-canvas-default" id="map_canvas">
            </div>
        </div>
        <!--GOOGLE MAP END-->


        <!--SPONSORED-->
        <section>
            <div id="lgx-sponsors" class="lgx-sponsors lgx-sponsors-black">
                <div class="lgx-inner-bg">
                    <div class="lgx-inner">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="lgx-heading lgx-heading-white">
                                        <h2 class="heading">Sponsors</h2>
                                        <h3 class="subheading">Thank you for being dedicated to building It's Our
                                            Festival 2020!</h3>
                                    </div>
                                </div>
                            </div>
                            <!--//main row-->
                            <div class="row">
                                <div class="col-xs-12">
                                    <h3 class="sponsored-heading first-heading">Gold Sponsors</h3>
                                    <div class="sponsors-area sponsors-area-bg">
                                        <div class="single">
                                            <a class="" href="#"><img src="http://placehold.it/467x157"
                                                    alt="sponsor" /></a>
                                        </div>
                                        <div class="single">
                                            <a class="" href="#"><img src="http://placehold.it/467x157"
                                                    alt="sponsor" /></a>
                                        </div>
                                        <div class="single">
                                            <a class="" href="#"><img src="http://placehold.it/467x157"
                                                    alt="sponsor" /></a>
                                        </div>
                                        <div class="single">
                                            <a class="" href="#"><img src="http://placehold.it/467x157"
                                                    alt="sponsor" /></a>
                                        </div>
                                    </div>
                                </div>
                                <!--//col-->
                            </div>
                            <!--//row-->
                            <div class="row">
                                <div class="col-xs-12">
                                    <h3 class="sponsored-heading secound-heading">Silver Sponsors</h3>
                                    <div class="sponsors-area sponsors-area-bg">
                                        <div class="single">
                                            <a class="" href="#"><img src="http://placehold.it/467x157"
                                                    alt="sponsor" /></a>
                                        </div>
                                        <div class="single">
                                            <a class="" href="#"><img src="http://placehold.it/467x157"
                                                    alt="sponsor" /></a>
                                        </div>
                                        <div class="single">
                                            <a class="" href="#"><img src="http://placehold.it/467x157"
                                                    alt="sponsor" /></a>
                                        </div>
                                    </div>
                                </div>
                                <!--//col-->
                            </div>
                            <!--//row-->
                            <div class="row">
                                <div class="col-xs-12">
                                    <h3 class="sponsored-heading third-heading">Platinum Sponsors</h3>
                                    <div class="sponsors-area sponsors-area-bg">
                                        <div class="single">
                                            <a class="" href="#"><img src="http://placehold.it/467x157"
                                                    alt="sponsor" /></a>
                                        </div>
                                        <div class="single">
                                            <a class="" href="#"><img src="http://placehold.it/467x157"
                                                    alt="sponsor" /></a>
                                        </div>
                                    </div>
                                </div>
                                <!--//col-->
                            </div>
                            <!--//row-->
                        </div>
                        <!--//container-->
                    </div>
                </div>
                <!--//lgx-inner-->
            </div>
        </section>
        <!--SPONSORED END-->


        <!-- GET TICKET -->
        <section>
            <div class="lgx-registration-simple">
                <div class="lgx-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="lgx-registration-area-simple">
                                    <div class="lgx-heading lgx-heading-white">
                                        <h2 class="heading">Get Ticket Now!</h2>
                                        <h3 class="subheading">Experience the conference wherever you are. Register now for online access. Tune in live for the
                                            <br>keynotes and watch sessions on demand. Also be sure to join our event</h3>
                                    </div>
                                    <a class="lgx-btn lgx-btn-red" href="registration.php">Registration</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- //.CONTAINER -->
                </div><!-- //.INNER -->
            </div>
        </section>
        <!-- GET TICKET END-->



        <!-- CONTACT -->
        <section>
            <div id="lgx-contact" class="lgx-contact">
                <div class="lgx-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="lgx-heading">
                                    <h2 class="heading">Get In Touch</h2>
                                    <h3 class="subheading">#IOF20</h3>
                                </div>
                            </div>
                            <!--//main COL-->
                            <div class="col-sm-12 col-md-6 col-md-offset-3">

                                <form method="POST" class="lgx-contactform" action="php/form-handler.php">
                                    <div class="form-group">
                                        <input type="text" name="lgxname" class="form-control lgxname" id="lgxname"
                                            placeholder="Enter your name" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="lgxemail" class="form-control lgxemail" id="lgxemail"
                                            placeholder="Enter your email" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="lgxsubject" class="form-control lgxsubject"
                                            id="lgxsubject" placeholder="Subject" required>
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control lgxmessage" name="lgxmessage" id="lgxmessage"
                                            rows="5" placeholder="We expect drop some line from you..."
                                            required></textarea>
                                    </div>
                                    <button type="submit" name="submit" value="contact-form"
                                        class="lgx-btn hvr-glow hvr-radial-out lgxsend lgx-send"><span>Send
                                            Message</span></button>
                                </form>

                                <!-- MODAL SECTION -->
                                <div id="lgx-form-modal" class="modal fade lgx-form-modal" tabindex="-1" role="dialog"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content lgx-modal-content">
                                            <div class="modal-header lgx-modal-header">
                                                <button type="button" class="close brand-color-hover"
                                                    data-dismiss="modal" aria-label="Close">
                                                    <i class="fa fa-power-off"></i>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="alert lgx-form-msg" role="alert"></div>
                                            </div>
                                            <!--//MODAL BODY-->
                                        </div>
                                    </div>
                                </div> <!-- //MODAL -->

                            </div>
                            <!--//.COL-->
                        </div>
                    </div><!-- //.CONTAINER -->
                </div>
            </div>
        </section>
        <!-- CONTACT END -->


        <!--FOOTER-->
          <?php include 'includes/partials/footer.php' ?> <!-- Sama fungsinya kaya header.php diatas -->
        <!--FOOTER END-->

    </div>
    <!--//.LGX SITE CONTAINER-->

    <!-- *** ADD YOUR SITE SCRIPT HERE *** -->
    <!-- JQUERY  -->
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>

    <!-- BOOTSTRAP JS  -->
    <script src="assets/libs/bootstrap/js/bootstrap.min.js"></script>

    <!-- Smooth Scroll  -->
    <script src="assets/libs/jquery.smooth-scroll.js"></script>

    <!-- SKILLS SCRIPT  -->
    <script src="assets/libs/jquery.validate.js"></script>

    <!-- if load google maps then load this api, change api key as it may expire for limit cross as this is provided with any theme -->
    <script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDQvRGGtL6OrpP5xVMxq_0NgiMiRhm3ycI"></script>

    <!-- CUSTOM GOOGLE MAP -->
    <script type="text/javascript" src="assets/libs/gmap/jquery.googlemap.js"></script>

    <!-- adding magnific popup js library -->
    <script type="text/javascript" src="assets/libs/maginificpopup/jquery.magnific-popup.min.js"></script>

    <!-- Owl Carousel  -->
    <script src="assets/libs/owlcarousel/owl.carousel.min.js"></script>

    <!-- COUNTDOWN   -->
    <script src="assets/libs/countdown.js"></script>
    <script src="assets/libs/timer/TimeCircles.js"></script>

    <!-- Counter JS -->
    <script src="assets/libs/waypoints.min.js"></script>
    <script src="assets/libs/counterup/jquery.counterup.min.js"></script>

    <!-- SMOTH SCROLL -->
    <script src="assets/libs/jquery.smooth-scroll.min.js"></script>
    <script src="assets/libs/jquery.easing.min.js"></script>

    <!-- type js -->
    <script src="assets/libs/typed/typed.min.js"></script>

    <!-- header parallax js -->
    <script src="assets/libs/header-parallax.js"></script>

    <!-- instafeed js -->
    <script src="assets/libs/instafeed.min.js"></script>

    <!-- CUSTOM SCRIPT  -->
    <script src="assets/js/custom.script.js"></script>

</body>

</html>
