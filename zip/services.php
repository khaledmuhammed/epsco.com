<?php
require_once 'includes/header.php';
require_once "clasess/db.php";
require_once "clasess/model.php";
require_once "clasess/tables.php";
$data = data::find(16);
$data16 = $data['data'];
$data16 = json_decode($data16);
var_dump($data16);
?>
<script>
$(document).ready(function(){
    $( "a[href^='services.php']" ).parent().addClass( "active" );
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
      echo "<a href='#' class='btn btn-warning  float-right rounded-0' onclick =\"showModal('forms.php',{action:'form',id:'16'})\">Edit</a>";
    }
    ?> 
            <div class="layer2 wow zoomIn" data-wow-duration="1s" data-wow-delay=".4s">
              <h1 class="title2"><?=$data16[0];?></h1>
            </div>
            <div class="layer3 wow zoomInUp" data-wow-duration="2s" data-wow-delay="1s">
              <h3 style="color: white;" class="title3"><?=$data16[1];?></h3>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END Header -->
  <div class="container mt-50 <?php
    if($session == 1){
      echo 'box-edit';
    }
    ?> ">

      <?php
    if($session == 1){
      echo "<a href='admin/categories-manage.php' class='btn btn-warning btnc float-right rounded-0' target='_blanck'>Edit</a>";
    }
      $sql = cats::all_sql("ORDER BY sort");
      if(count($sql) > 0) {
        foreach ($sql as $row) {
         echo '<div class="headline"><h3><u>' . $row['cat'] . '</u></h3></div>';
         $catID = $row['id'];
         $item =items::all_sql("WHERE cat = $catID ORDER BY sort");
         ?>
         <div class="row text-center mt-3">
           <?php          
           $i = 0;
           foreach ($item as $item) {
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
                    <a href="item.php?id=<?=$item['id'];?>">
                      <img src="<?= $item['image'];?>" alt="" class="img-responsive">
                    </a>
                  </div>
                  <a class="btn-more hover-effect" href="item.php?id=<?=$item['id'];?>">read more +</a>             
                </div>
                <h3><a class="hover-effect" href="item.php?id=<?=$item['id'];?>"><?= $item['title']; ?></a></h3>
                <p><?= $item['short_desc']; ?></p>
              </div>
            </div> 
          <?php } ?>
        </div>
      <hr>
      <?php

    }
  }

  ?>
</div><!--/container-->		
<!--=== End Content Part ===-->

<?php
require 'includes/footer.php';
?>