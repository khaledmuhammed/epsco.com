<?php include "includes/header.php";
require_once "clasess/db.php";
require_once "clasess/model.php";
require_once "clasess/tables.php";
$data = data::find(12);
$data12 = $data['data'];
$data12 = json_decode($data12);
?>

<script>
$(document).ready(function(){
    $( "a[href^='iso.php']" ).parent().addClass( "active" );
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
                <h1 class="title2"><?= $data12[2];?></h1>
            </div>
            <div class="layer3 wow zoomInUp" data-wow-duration="2s" data-wow-delay="1s">
            	<h2 class="title3"><?= $data12[3];?></h2>
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
	<div class="container <?php
    if($session == 1){
      echo 'box-edit';
    }
    ?>
    ">
		<!-- ROW -->
		<div class="row text-center">
			<!-- BLOG BLOCK -->
			<div class="col-lg-12 col-md-12">
      <?php
      if($session == 1){
        echo "<a href='#' class='btn btn-warning btnc float-right rounded-0' onclick =\"showModal('forms.php',{action:'form',id:'12'})\">Edit</a>";
      }
      ?>
				<div class="item active"><img src="<?= $data12[0];?>" width="800px" height="800px" alt=""></div>
				<div dir="rtl" class="mt-50 mb-50">
					<?= htmlspecialchars_decode($data12[1]);?>
				</div><!-- //BLOG BLOCK -->
			</div><!-- //ROW -->
		</div><!-- //CONTAINER -->
	</div></div></div></section>
	
	<?php include "includes/footer.php"?>