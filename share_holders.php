<?php include "includes/header.php";
require_once "clasess/db.php";
require_once "clasess/model.php";
require_once "clasess/tables.php";
$data = data::find(9);
$data9 = $data['data'];
$data9 = json_decode($data9);
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
                <h1 class="title2"><?= $data9[2] ?></h1>
              </div>
              <div class="layer3 wow zoomInUp" data-wow-duration="2s" data-wow-delay="1s">
                <h2 class="title3"><?= $data9[3] ?></h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END Header -->

<!-- <section class="bg-blue">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="text-right">
					<ul class="list-inline text-white px-5">
					  <li class="list-inline-item"><a href="indx.php">Home /</a></li>
					  <li class="list-inline-item">Our Company /</li>
					  <li class="list-inline-item">Shareholders</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section> -->

<section class="mt-50 mb-50">
	<div class="container  <?php
    if($session == 1){
      echo 'box-edit';
    }
    ?>">
		<div class="row">
    <div class="col-lg-12 col-md-12 text-center">
    <?php
    if($session == 1){
      echo "<a href='#' class='btn btn-warning btnc float-right rounded-0' onclick =\"showModal('forms.php',{action:'form',id:'9'})\">Edit</a>";
    }
    ?>
      <p><?= htmlspecialchars_decode($data9[0]) ?></p>
    </div>
    <div class="col-lg-12 col-md-12 text-center mt-50">
      <img src="<?= $data9[1] ?>" width="800px">							
    </div>
  </div>
</div>
</section>



<?php include "includes/footer.php"?>