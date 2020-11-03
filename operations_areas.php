<?php include "includes/header.php";
require_once "clasess/db.php";
require_once "clasess/model.php";
require_once "clasess/tables.php";
$data = data::find(15);
$data15 = $data['data'];
$data15 = json_decode($data15);
?>

<script>
$(document).ready(function(){
    $( "a[href^='#company']" ).parent().addClass( "active" );
});
</script>
<!-- Start Bottom Header -->
<div class="header-bg page-area">
  <div class="home-overly"></div>
  <div class="container ">
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
      echo "<a href='#' class='btn btn-warning  float-right rounded-0' onclick =\"showModal('forms.php',{action:'form',id:'15'})\">Edit</a>";
    }
    ?> 
              <div class="layer2 wow zoomIn" data-wow-duration="1s" data-wow-delay=".4s">
                <h1 class="title2"><?=$data15[0];?></h1>
              </div>
              <div class="layer3 wow zoomInUp" data-wow-duration="2s" data-wow-delay="1s">
                <h2 class="title3"><?=$data15[1];?></h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END Header -->
  <section class="mt-50 mb-50">
   <div class="container">
    <div class="row">
     <div class="col-lg-12 col-md-12">
      
       <div class="single_blog_post_content">
         <p class="margbot50"></p><center>
          <iframe src="https://www.google.com/maps/d/embed?wmode=transparent&amp;mid=1tSUBHrInM2q_5hBu-MHiXLuQ6hk" width="1000" height="550"></iframe>
          <!--img src="images/underconstruction .gif"-->
        </center><p></p>
      </div>

    </div><!-- //BLOG BLOCK -->
  </div><!-- //ROW -->
</div><!-- //CONTAINER -->
</section>

<?php include "includes/footer.php"?>