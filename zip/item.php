<?php
require_once 'includes/header.php';
require_once "clasess/db.php";
require_once "clasess/model.php";
require_once "clasess/tables.php";
$id = $_GET['id'];
$row = items::where('id',$id);
?>
<script>
$(document).ready(function(){
    $( "a[href^='services.php']" ).parent().addClass( "active" );
});
</script>
<!-- Start Bottom Header -->
<div class="header-bg page-area mb-50">
    <div class="home-overly"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="slider-content text-center">
            <div class="header-bottom">
              <div class="layer2 wow zoomIn" data-wow-duration="1s" data-wow-delay=".4s">
                <h1 class="title2"><?= $row['title'];?></h1>
            </div>
<!--               <div class="layer3 wow zoomInUp" data-wow-duration="2s" data-wow-delay="1s">
                <h3 style="color: white;" class="title3">EPSCO - Egyptian Petroleum Services Company Amendment Contract.</h3>
            </div> -->
        </div>
    </div>
</div>
</div>
</div>
</div>
<!-- END Header -->
<div class="container mb-50">
    <div class="content">
        <div class="row">
            <div class="col-md-4">
                <a href="assets/img/services/1546241148.jpg" class="fancybox img-hover-v1">
                    <span><img class="img-responsive img-bordered" src="<?= $row['image'];?>" alt=""></span>
                </a>
            </div>
            <div class="col-md-8">
                <p><?= $row['long_desc'];?></p>
            </div>
        </div>
    </div>
</div>
<?php
require 'includes/footer.php';
?>