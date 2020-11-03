<?php include "includes/header.php";
require_once "clasess/db.php";
require_once "clasess/model.php";
require_once "clasess/tables.php";
$data = data::find(5);
$data4 = $data['data'];
$data4 = json_decode($data4);
?>

<script>
$(document).ready(function(){
    $( "a[href^='#team']" ).parent().addClass( "active" );
});
</script>

<!-- Start Bottom Header -->
<div class="header-bg page-area">
  <div class="home-overly"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="slider-content text-center">
          <div class="header-bottom">
            <div class="layer2 wow zoomIn" data-wow-duration="1s" data-wow-delay=".4s">
              <h1 class="title2"><?= $data4[12];?></h1>
            </div>
            <div class="layer3 wow zoomInUp" data-wow-duration="2s" data-wow-delay="1s">
              <h3 style="color: white;" class="title3"><?= $data4[13];?></h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- END Header -->
  <div class="container mb-50 <?php if($session == 1){echo 'box-edit';}?>">

  <?php 
    if($session == 1){
      echo "<a href='#' class='btn btn-warning btnc float-right rounded-0' onclick =\"showModal('forms.php',{action:'form',id:'5'})\">Edit</a>";
    }
  ?>

  <div class="row pt-150" id='administation'>
    <div class="col-md-4 text-center">
      <span><img src="<?= $data4[2];?>" alt=""></span>
      <div class="headline mt-25">
        <h3><?=$data4[0]?></h3>
        <p><?=$data4[1]?></p>
      </div>
    </div>
    <div class="col-md-8">
      <p><?= htmlspecialchars_decode($data4[3]);?></p>
    </div>
  </div>

  <hr>

  <div class="row pt-150" id='chairman'>
    <div class="col-md-4 text-center">
      <span><img src="<?= $data4[6];?>" alt=""></span>
      <div class="headline mt-25">
        <h3><?=$data4[4]?></h3>
        <p><?=$data4[5]?></p>
      </div>
    </div>
    <div class="col-md-8">
      <p><?= htmlspecialchars_decode($data4[7]);?></p>
    </div>
  </div>

  <hr>

  <div class="row pt-150 mb-50" id='financial'>
    <div class="col-md-4 text-center">
      <span><img  src="<?= $data4[10];?>" alt=""></span>
      <div class="headline mt-25">
        <h3><?=$data4[8]?></h3>
        <p><?=$data4[9]?></p>
      </div>
    </div>
    <div class="col-md-8">
      <p><?= htmlspecialchars_decode($data4[11]);?></p>
    </div>
  </div>

</div>
</div>
<?php include "includes/footer.php"?>