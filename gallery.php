<?php
require_once 'includes/header.php';
require_once "clasess/db.php";
require_once "clasess/model.php";
require_once "clasess/tables.php";
$id = $_GET['id'];
$row = gallerycat::where('id',$id);
?>
<!-- Start Bottom Header -->
<div class="header-bg page-area">
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
  <!-- Start gallery Area -->

  <div id="gallery" class="main-content-wrapper area-padding">
    <div class="container">
      <div class="row text-center mt-3">
       <?php
       $sql = gallerycat::all_sql("where id = $id ORDER BY sort");
       if(count($sql) > 0) {
        foreach ($sql as $row) {
          $catID = $row['id'];
          $gallery = gallery::all_sql("WHERE gallery_cat_id = $catID ORDER BY sort ");
          if ($gallery) {
          $i = 0;
          foreach ($gallery as $gallery) {
            if ($i%4 == 0) {
              ?>
            </div>
            <div class="row">
              <?php
            }
            ?>
          <div class="col-md-3 col-sm-3 col-xs-12 photo">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="<?= $gallery['image']?>" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="<?= $gallery['image']?>">
                      <h4><?= $gallery['title']?></h4>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

            <?php ++$i;} }?>
          </div>
          <?php

        }
      }

      ?>
    </div>
  </div>
  <!-- End gallery Area -->

  <?php
  require 'includes/footer.php';
  ?>