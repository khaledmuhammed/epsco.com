<?php
include "includes/header.php";
require_once "clasess/db.php";
require_once "clasess/model.php";
require_once "clasess/tables.php";
$data = data::find(17);
$data17 = $data['data'];
$data17 = json_decode($data17);
?>
<script>
$(document).ready(function(){
    $( "a[href^='news.php']" ).parent().addClass( "active" );
});
</script>
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
      echo "<a href='#' class='btn btn-warning  float-right rounded-0' onclick =\"showModal('forms.php',{action:'form',id:'17'})\">Edit</a>";
    }
    ?> 
            <div class="layer2 wow zoomIn" data-wow-duration="1s" data-wow-delay=".4s">
              <h1 class="title2"><?=$data17[0];?></h1>
            </div>
            <div class="layer3 wow zoomInUp" data-wow-duration="2s" data-wow-delay="1s">
              <h3 style="color: white;" class="title3"><?=$data17[1];?></h3>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END Header -->
  <!-- Start About Area -->
  <div id="about" class="about-area area-padding" style="background-color: #ffffff;">
    <div class="container <?php
  if($session == 1){
    echo 'box-edit';
  }
  ?>">
      <?php if($session == 1){
      echo "<a href='admin/news-manage.php' class='btn btn-warning btnc float-right rounded-0' target='_blanck'>Edit</a>";
      }
      ?>
      <div class="row about-cols">
       <?php $news =news::all_sql("ORDER BY sort");
       $i = 0;
       foreach ($news as $news) {
        if ($i%4 == 0) {
          ?>
        </div>
        <div class="row">
          <?php
        }
        ?>
        <div class="col-md-3">
          <div class="thumbnail-style thumbnail-kenburn">
            <div class="thumbnail-img">
              <div class="overflow-hidden">
                <a href="news_item.php?id=<?=$news['id'];?>">
                  <img src="<?= $news['image'];?>" alt="" class="img-responsive">
                </a>
              </div>
              <a class="btn-more hover-effect" href="news_item.php?id=<?=$news['id'];?>">read more +</a>             
            </div>
            <h3><a class="hover-effect" href="news_item.php?id=<?=$news['id'];?>"><?= $news['title']; ?></a></h3>
            <p><?= $news['short_desc']; ?></p>
          </div>
        </div> 
        <?php ++$i;} ?>
      </div>
    </div>
  </div>
    <!-- End About Area -->

    <?php include "includes/footer.php"?>