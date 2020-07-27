<?php
  error_reporting(0);
  ini_set('display_errors', 0);

  if(isset($_GET['orderNumber'])){
    $orderNumber = $_GET['orderNumber'];
  }else{
    header ("location:registration.php?alert=notOrder");
  }

?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <!-- The above 3 meta tags *must* come first in the head -->

    <!-- SITE TITLE -->
    <title> <?php $title = 'Order Number'; ?> Order Number</title>
    <meta name="description" content="Responsive EventHunt HTML Template"/>
    <meta name="keywords" content="Bootstrap3, Event,  Conference, Meetup, Template, Responsive, HTML5"/>
    <meta name="author" content="themearth.com"/>

    <!--  FAVICON AND TOUCH ICONS -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico"/>
    <!-- this icon shows in browser toolbar -->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico"/>
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
    <link rel="stylesheet" href="assets/libs/bootstrap/css/bootstrap.min.css" media="all"/>

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="assets/libs/fontawesome/css/font-awesome.min.css" media="all"/>

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="assets/libs/maginificpopup/magnific-popup.css" media="all"/>

    <!-- Time Circle -->
    <link rel="stylesheet" href="assets/libs/timer/TimeCircles.css" media="all"/>

    <!-- OWL CAROUSEL CSS -->
    <link rel="stylesheet" href="assets/libs/owlcarousel/owl.carousel.min.css" media="all" />
    <link rel="stylesheet" href="assets/libs/owlcarousel/owl.theme.default.min.css" media="all" />

    <!-- GOOGLE FONT -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Oswald:400,700%7cRaleway:300,400,400i,500,600,700,900"/>

    <!-- MASTER  STYLESHEET  -->
    <link id="lgx-master-style" rel="stylesheet" href="assets/css/style-default.min.css" media="all"/>

    <!-- SWEETALERT -->
    <script src="assets/sweetalert/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/sweetalert/sweetalert.css">

    <!-- MODERNIZER CSS  -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>


<?php

//kode php ini kita gunakan untuk menampilkan pesan data salah
if ($_GET['alert'] == success) {
    echo '<input type="hidden">';
    echo '<script>

    swal({
        title: "Success",
        text: "The order has made!",
        type: "success",
        confirmButtonColor: "#8CD4F5",
        confirmButtonText: "Okay",
        closeOnConfirm: false,
    });
    </script>';
}

?>


<body class="home">

<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->

<div class="lgx-container ">
<!-- ***  ADD YOUR SITE CONTENT HERE *** -->


<!--HEADER-->
<?php include 'includes/partials/header.php' ?>
<!--HEADER END-->



    <!--Banner Inner-->
    <section>
        <div class="lgx-banner lgx-banner-inner">
            <div class="lgx-page-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="lgx-heading-area">
                                <div class="lgx-heading lgx-heading-white">
                                    <h2 class="heading">Order Number</h2>
                                </div>
                                <ul class="breadcrumb">
                                    <li><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i>Home</a></li>
                                    <li class="active">Order Number</li>
                                </ul>
                            </div>
                        </div>
                    </div><!--//.ROW-->
                </div><!-- //.CONTAINER -->
            </div><!-- //.INNER -->
        </div>
    </section> <!--//.Banner Inner-->


    <main>
        <div class="lgx-page-wrapper">
            <!--News-->
            <section>
                <div class="container">
                    <div class="row">

                        <div class="col-sm-12 col-md-6 col-md-offset-3">
                          <div class="jumbotron">
                            <h2 class="display-4">#<?php echo $orderNumber; ?></h2>
                            <p class="lead">
                              Please save your order number to complete the transaction! Just input your order number & check your next step on <u><a href="status.php">STATUS PAGE</a></u>
                            </p>
                            <hr class="my-4">
                            <p class="lead" align="center">
                              <a class="btn btn-primary btn-lg" href="status.php" role="button">STATUS PAGE</a>
                            </p>
                          </div>
                        </div> <!--//.COL-->
                    </div>
                </div><!-- //.CONTAINER -->
            </section>
            <!--News END-->
        </div>
        <section>
            <div class="lgx-registration-simple">
                <div class="lgx-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="lgx-registration-area-simple">
                                    <div class="lgx-heading lgx-heading-white">
                                        <h2 class="heading">Check Your Registration Status!</h2>
                                        <h3 class="subheading">Experience the conference wherever you are. Register now for online access. Tune in live for the
                                            <br>keynotes and watch sessions on demand. Also be sure to join our event</h3>
                                    </div>
                                    <a class="lgx-btn lgx-btn-red" href="status.php">STATUS</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- //.CONTAINER -->
                </div><!-- //.INNER -->
            </div>
        </section>
    </main>




<!--FOOTER-->
<?php include 'includes/partials/footer.php' ?>
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
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDQvRGGtL6OrpP5xVMxq_0NgiMiRhm3ycI"></script>

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
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/instafeed.js/1.4.1/instafeed.min.js"></script>-->
<script src="assets/libs/instafeed.min.js"></script>

<!-- CUSTOM SCRIPT  -->
<script src="assets/js/custom.script.js"></script>


<script type="text/javascript">
  <?php echo $jsArrayClass1; ?>
  function changeValue(class1){
    document.getElementById('price').value = dtClass1[class1].price;
};
</script>




</body>
</html>
