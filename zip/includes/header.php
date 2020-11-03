<?php
require_once "clasess/db.php";
require_once "clasess/model.php";
require_once "clasess/tables.php";
require 'includes/session.php';
$session = 0;
if (isset($_SESSION['aid'])) {
  $session = 1;
}
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>EPSCO | Egyptian Petroleum Services Company</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="description" content="EPSCO">
  <meta name="author" content="EPSCO">
  <!-- Favicons -->
  <link href="favicon.ico" rel="icon">
  <!-- <link href="img/apple-touch-icon.png" rel="apple-touch-icon"> -->



    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">
    
    <!-- Bootstrap 4 CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="lib/nivo-slider/css/nivo-slider.css" rel="stylesheet">
    <link href="lib/owlcarousel/owl.carousel.css" rel="stylesheet">
    <link href="lib/owlcarousel/owl.transitions.css" rel="stylesheet">
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/venobox/venobox.css" rel="stylesheet">

    <!-- Nivo Slider Theme -->
    <link href="css/nivo-slider-theme.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    
    <!-- Responsive Stylesheet File -->
    <link href="css/responsive.css" rel="stylesheet">
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="plugins/ckeditor/ckeditor.js"></script>
    
    <!-- <script src="https://cdn.ckeditor.com/4.11.4/standard/ckeditor.js"></script> -->
    

    <script type="text/javascript" src="includes/core.js"></script>
    
    <!-- <script type="text/javascript" src="http://cdn.abmweb.net/core.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mouse0270-bootstrap-notify/3.1.7/bootstrap-notify.min.js"></script>

  <!-- =======================================================

    Theme Name: eBusiness

    Theme URL: https://bootstrapmade.com/ebusiness-bootstrap-corporate-template/

    Author: BootstrapMade.com

    License: https://bootstrapmade.com/license/

    ======================================================= -->

  </head>



  <body data-spy="scroll" data-target="#navbar-example">



    <div id="preloader"></div>

    <!-- Start header Area -->

    <header>

      <div id="sticker" class="header-area">

        <div class="container">

          <div class="row">

            <div class="col-md-12 col-sm-12">





<!--Navbar -->

<nav class="mb-1 navbar navbar-expand-lg navbar-dark default-color">



  <a class="navbar-brand" href="index.php">

    <img src="img/logo.png" alt="" title="" width="100px">

  </a>



  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"

    aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">

    <span class="navbar-toggler-icon"></span>

  </button>



  <div class="collapse navbar-collapse main-menu bg-nav" id="navbarSupportedContent-333">



    <ul class="navbar-nav mr-auto navbar-right">

      <li class="nav-item">

        <a class="nav-link active" href="index.php">Home</a>

      </li>

      <li class="nav-item">

        <a class="nav-link page-scroll" href="index.php#about">About US</a>

      </li>





      <li class="nav-item dropdown">

        <a href="#company" class="dropdown-toggle" data-toggle="dropdown">Our company

        </a>

        <ul class="dropdown-menu" role="menu">

          <li><a href='share_holders.php' >Share Holders</a></li>

          <li><a href='amendment_contract.php'>Amendment Contract</a></li>

          <li><a href='business_conduct.php'>Business Conducut</a></li>

          <li><a href='operations_areas.php'>Operations areas</a></li>

        </ul> 

      </li>







      <li class="nav-item">

        <a class="nav-link page-scroll" href="services.php">Services</a>

      </li>

      <li class="nav-item">

        <a class="nav-link page-scroll" href="index.php#team">Directors</a>

      </li>

      <li class="nav-item">

        <a class="nav-link page-scroll" href="news.php">News</a>

      </li>

      <li class="nav-item">

        <a class="nav-link page-scroll" href="iso.php">ISO-Certificates</a>

      </li>

      <li class="nav-item">

        <a class="nav-link page-scroll" href="gallerycat.php">Album</a>

      </li>

      <li class="nav-item">

        <a class="nav-link page-scroll" href="index.php#contact">Contact</a>

      </li>

<?php $config = config::find(1);

if($config['lang'] == 'ar'){

  ?>



      <li class="nav-item">

        <a class="nav-link page-scroll" href="../en">EN</a>

      </li>

  <?php }else{?>

      <li class="nav-item">

        <a class="nav-link page-scroll" href="../ar">عربي</a>

      </li>

<?php

}

 if($session == 1){

echo 

'<li class="nav-item dropdown">

  <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"aria-haspopup="true" aria-expanded="false">

    <i class="fa fa-user-circle"></i>

  </a>

  <div class="dropdown-menu dropdown-menu-right dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">

    <a class="dropdown-item" href="logout.php" style="color:black;padding: 10px 50px 10px;">Logout</a>

    <a class="dropdown-item" href="admin/index.php" style="color:black;padding: 10px 50px 10px;" target="_blanck">Admin</a>

  </div>

</li>';

}?>



    </ul>

  </div>

</nav>

<!--/.Navbar -->



            <!-- END: Navigation -->

          </div>

        </div>

      </div>

    </div>

  </header>

  <!-- End start header Area -->

