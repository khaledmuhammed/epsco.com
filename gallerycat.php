<?php
require_once 'includes/header.php';
require_once "clasess/db.php";
require_once "clasess/model.php";
require_once "clasess/tables.php";
$data = data::find(18);
$data18 = $data['data'];
$data18 = json_decode($data18);
?>
<script>
$(document).ready(function(){
    $( "a[href^='gallerycat.php']" ).parent().addClass( "active" );
});
</script>
<!-- Start Bottom Header -->
<div class="header-bg page-area">
  <div class="home-overly"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="slider-content text-center">
          <div class="header-bottom <?php
    if($session == 1){
      echo 'box-edit';
    }
    ?>">
     <?php
    if($session == 1){
      echo "<a href='#' class='btn btn-warning  float-right rounded-0' onclick =\"showModal('forms.php',{action:'form',id:'18'})\">Edit</a>";
    }
    ?> 
            <div class="layer2 wow zoomIn" data-wow-duration="1s" data-wow-delay=".4s">
              <h1 class="title2"><?=$data18[0];?></h1>
            </div>
            <div class="layer3 wow zoomInUp" data-wow-duration="2s" data-wow-delay="1s">
              <h3 style="color: white;" class="title3"><?=$data18[1];?></h3>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END Header -->
<!-- Start portfolio Area -->
  <div id="portfolio" class="portfolio-area area-padding fix">
    <div class="container <?php
    if($session == 1){
      echo 'box-edit';
    }
    ?>" >

         <?php
    if($session == 1){
      echo "<a href='admin/gallery_categories-manage.php' class='btn btn-warning btnc float-right rounded-0' target='_blank'>Edit</a>";}
    ?>

        <div class="row"> 
          <!-- single-awesome-project start -->
       <?php $gallerycat =gallerycat::all_sql("ORDER BY sort");
       $i = 0;
       foreach ($gallerycat as $gallerycat) {
        if ($i%3 == 0) {
          ?>
        </div>
        <div class="row">
          <?php
        }
        ?>
          <div class="col-md-4 col-sm-4 col-xs-12 design development">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="<?=$gallerycat['image']?>" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a href="gallery.php?id=<?=$gallerycat['id'];?>">
                      <h4><?=$gallerycat['title']?></h4>
                      <span><?=$gallerycat['description']?></span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php ++$i;} ?>
        </div>
    </div>
  </div>
  <!-- End portfolio Area -->


  <?php
  require 'includes/footer.php';
  ?>