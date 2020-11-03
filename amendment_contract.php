<?php include "includes/header.php";
require_once "clasess/db.php";
require_once "clasess/model.php";
require_once "clasess/tables.php";
$data = data::find(10);
$data10 = $data['data'];
$data10 = json_decode($data10);
?>
<script>
$(document).ready(function(){
    $( "a[href^='#company']" ).parent().addClass( "active" );
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
              <h1 class="title2"><?= $data10[1];?></h1>
            </div>
            <div class="layer3 wow zoomInUp" data-wow-duration="2s" data-wow-delay="1s">
              <h3 style="color: white;" class="title3"><?= $data10[2];?></h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- END Header -->

<section class="mt-50 mb-50">

	<!-- CONTAINER -->
	<div class="container">

		<!-- ROW -->
		<div class="row <?php
    if($session == 1){
      echo 'box-edit';
    }
    ?>
    ">
    <!-- BLOG BLOCK -->
    <div class="col-lg-12 col-md-12">
    <?php
    if($session == 1){
      echo "<a href='#' class='btn btn-warning btnc float-right rounded-0' onclick =\"showModal('forms.php',{action:'form',id:'10'})\">Edit</a>";
    }
    ?> 
      <p><?= htmlspecialchars_decode($data10[0]) ?></p>
    </div><!-- //BLOG BLOCK -->
  </div><!-- //ROW -->
</div><!-- //CONTAINER -->
</section>

<?php include "includes/footer.php"?>