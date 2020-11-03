<?php 

include "includes/header.php";

include "clasess/email.php";

$data = data::all();

$data8 = $data[7]['data'];

$data8 = json_decode($data8);

?>

<!-- Start Slider Area -->

<div id="home" class="slider-area 

<?php

if($session == 1){

  echo 'box-edit';

}

?>

">

<?php

if($session == 1){

  echo "<a href='#' class='btn btn-warning float-right rounded-0' style='position: absolute;top: 0;right: 0;z-index: 10;

  ' onclick =\"showModal('forms.php',{action:'form',id:'8'})\">Edit</a>";

}

?>

<div class="bend niceties preview-2">

  <div id="ensign-nivoslider" class="slides">

    <img src="<?=$data8[1];?>" alt="" title="#slider-direction-1" />

    <img src="<?=$data8[4];?>" alt="" title="#slider-direction-2" />

    <img src="<?=$data8[7];?>" alt="" title="#slider-direction-3" />

  </div>

  <!-- direction 1 -->

  <div id="slider-direction-1" class="slider-direction slider-one">

    <div class="container">

      <div class="row">

        <div class="col-md-12 col-sm-12 col-xs-12">

          <div class="slider-content">

            <!-- layer 1 -->

            <div class="layer-1-1 hidden-xs wow slideInDown" data-wow-duration="2s" data-wow-delay=".2s">

              <h2 class="title1"><?= htmlspecialchars_decode($data8[0]);?></h2>

            </div>

            <!-- layer 2 -->

            <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">

              <h1 class="title2"><?= htmlspecialchars_decode($data8[2]);?></h1>

            </div>

            <!-- layer 3 -->

            <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">

              <a class="ready-btn right-btn page-scroll" href="<?=$data8[10];?>"><?=$data8[9];?></a>

              <a class="ready-btn page-scroll" href="<?=$data8[12];?>"><?=$data8[11];?></a>

            </div>

          </div>

        </div>

      </div>

    </div>

  </div>



  <!-- direction 2 -->

  <div id="slider-direction-2" class="slider-direction slider-two">

    <div class="container">

      <div class="row">

        <div class="col-md-12 col-sm-12 col-xs-12">

          <div class="slider-content text-center">

            <!-- layer 1 -->

            <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">

              <h2 class="title1"><?= htmlspecialchars_decode($data8[3]);?> </h2>

            </div>

            <!-- layer 2 -->

            <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">

              <h1 class="title2"><?= htmlspecialchars_decode($data8[5]);?></h1>

            </div>

            <!-- layer 3 -->

            <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">

              <a class="ready-btn right-btn page-scroll" href="<?=$data8[10];?>"><?=$data8[9];?></a>

              <a class="ready-btn page-scroll" href="<?=$data8[12];?>"><?=$data8[11];?></a>

            </div>

          </div>

        </div>

      </div>

    </div>

  </div>

  <!-- direction 3 -->

  <div id="slider-direction-3" class="slider-direction slider-two">

    <div class="container">

      <div class="row">

        <div class="col-md-12 col-sm-12 col-xs-12">

          <div class="slider-content">

            <!-- layer 1 -->

            <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">

              <h2 class="title1"><?=htmlspecialchars_decode($data8[6]);?></h2>

            </div>

            <!-- layer 2 -->

            <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">

              <h1 class="title2"><?=htmlspecialchars_decode($data8[8]);?></h1>

            </div>

            <!-- layer 3 -->

            <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">

              <a class="ready-btn right-btn page-scroll" href="<?=$data8[10];?>"><?=$data8[9];?></a>

              <a class="ready-btn page-scroll" href="<?=$data8[12];?>"><?=$data8[11];?></a>

            </div>

          </div>

        </div>

      </div>

    </div>

  </div>

</div>

</div>

<!-- End Slider Area -->

<?php

$data0 = $data[0]['data'];

$data0 = json_decode($data0);

?>

<!-- Start Suscrive Area -->

<div class="suscribe-area">

  <div class="container">

  <div class="row">

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs=12   <?php

  if($session == 1){

    echo 'box-edit';

  }

  ?>">

          <?php

    if($session == 1){

      echo "<a href='#' class='btn btn-warning btnc float-right rounded-0' onclick =\"showModal('forms.php',{action:'form',id:'1'})\">Edit</a>";

    }

    ?> 

      <div class="suscribe-text text-center">

        <h3><?= $data0[0] ?></h3>

        <a class="sus-btn" href="<?= $data0[2] ?>" target="_blank"><?= $data0[1] ?></a>

      </div>

    </div>

  </div>

</div>

</div>

<!-- End Suscrive Area -->



<!-- Start latest News Area -->

<div class="main-content-wrapper section-padding-50 pt-100" id="blog">

  <div class="container">



    <div class="row">

      <div class="col-md-12 col-sm-12 col-xs-12">

        <div class="section-headline text-center">

          <h2>latest News</h2>

        </div>

      </div>

    </div>



      

<?php

  $data1 = $data[1]['data'];

  $data1 = json_decode($data1);

?>









                <div class="row">



                  <div class="col-lg-6 col-md-12 col-sm-12 text-center <?php if($session == 1){echo 'box-edit';}?>">

                  <?php

                  if($session == 1){

                  echo "<a href='#' class='btn btn-warning btnc float-right rounded-0' onclick =\"showModal('forms.php',{action:'form',id:'2'})\">Edit</a>";

                  }

                  ?> 

                    <p class="text-center mt-40"><?= htmlspecialchars_decode($data1[0])?></p>

                    <div class="embed-responsive embed-responsive-16by9">

                      <iframe width="540" height="315" src="<?= $data1[1]; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                    </div>

                  </div>



                  <div class="col-lg-6 col-md-12 <?php if($session == 1){echo 'box-edit';}?>">

                  <?php

                  if($session == 1){

                    echo "<a href='news.php' class='btn btn-warning btnc float-right rounded-0' target='_blank'>Edit</a>";

                  }

                  ?>

                    <div class="world-catagory-slider owl-carousel wow fadeInUpBig" data-wow-delay="0.1s">

                      <?php $news = news::all_sql("ORDER BY sort");

                      foreach ($news as $news) {?>

                        <div class="single-blog-post">

                          <div class="post-thumbnail">

                            <a href="news_item.php?id=<?=$news['id'];?>">

                              <img src="<?=$news['image'];?>" alt="">

                            </a>

                          </div>

                          <div class="post-content">

                            <a href="news_item.php?id=<?=$news['id'];?>" class="headline">

                              <h5><?=$news['title'];?></h5>

                            </a>

                            <p><?=$news['short_desc'];?></p>

                          </div>

                        </div>

                      <?php } ?>

                    </div>

                  </div>

              </div>









   

  </div>

</div>

<!-- End latest News Area -->



<!-- Start About Area -->

<div id="about" class="about-area area-padding pt-100">

  <div class="container <?php if($session == 1){echo 'box-edit';}?>">



  <div class="row">

    <?php

    $data2 = $data[2]['data'];

    $data2 = json_decode($data2);

    ?>

    <div class="col-md-12 col-sm-12 col-xs-12">

        <?php

    if($session == 1){

      echo "<a href='#' class='btn btn-warning btnc float-right rounded-0' onclick =\"showModal('forms.php',{action:'form',id:'3'})\">Edit</a>";

    }

    ?> 

      <div class="section-headline text-center">

        <h2><?= $data2[0];?></h2>

      </div>

    </div>

  </div>

  <header class="section-header">

    <p><?= htmlspecialchars_decode($data2[1]);?></p>

  </header>

  <div class="row about-cols">

    <div class="col-md-4 wow fadeInUp">

      <div class="about-col">

        <div class="img">

          <img src="<?= $data2[2];?>" alt="" class="img-fluid">

          <div class="icon"><i class="fa fa-tachometer"></i></div>

        </div>

        <h2 class="title"><a href="#"><?= $data2[3];?></a></h2>

        <p><?= htmlspecialchars_decode($data2[4]);?></p>

      </div>

    </div>

    <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">

      <div class="about-col">

        <div class="img">

          <img src="<?= $data2[5];?>" alt="" class="img-fluid">

          <div class="icon"><i class="fa fa-list"></i></div>

        </div>

        <h2 class="title"><a href="#"><?= $data2[6];?></a></h2>

        <p><?= htmlspecialchars_decode($data2[7]);?></p>

      </div>

    </div>

    <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">

      <div class="about-col">

        <div class="img">

          <img src="<?= $data2[8];?>" alt="" class="img-fluid">

          <div class="icon"><i class="fa fa-eye"></i></div>

        </div>

        <h2 class="title"><a href="#"><?= $data2[9];?></a></h2>

        <p><?= htmlspecialchars_decode($data2[10]);?></p>

      </div>

    </div>

  </div>

</div>

</div>

<!-- End About Area -->



<!-- Start Service Area -->



<div id="services" class="main-content-wrapper area-padding">

  <div class="container <?php if($session == 1){echo 'box-edit';}?>">

    <div class="row">

      <div class="col-md-12 col-sm-12 col-xs-12">

      <?php if($session == 1){echo "<a href='admin/index.php' class='btn btn-warning btnc float-right rounded-0' target='_blank'>Edit</a>";}?>

        <div class="section-headline services-head text-center">

          <h2>Our Services</h2>

        </div>

      </div>

    </div>



    <div class="row text-center mt-3">

     <?php $item =items::all();

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

      <?php ++$i;} ?>

    </div>

  </div>

</div>

<!-- End Service Area -->



<!-- Start skill Area -->

<div class="our-skill-area fix hidden-sm">

  <div class="test-overly"></div>

  <div class="skill-bg area-padding-2">

    <div class="container <?php

    if($session == 1){echo 'box-edit';}?>">

    <div class="row">

      <?php

      $data3 = $data[3]['data'];

      $data3 = json_decode($data3);

      ?>

      <?php

      if($session == 1){

        echo "<a href='#' class='btn btn-warning btnc float-right rounded-0' style='z-index: 1;left: 86%;position: absolute;' onclick =\"showModal('forms.php',{action:'form',id:'4'})\">Edit</a>";

      }

      ?> 

      <div id="shiva" class="col-xs-12 col-sm-4 col-md-4 text-center">

        <h4 class="chart-text count" dur="3500"><?= $data3[0];?></h4>

        <h3 class="progress-h4"><?= $data3[1];?></h3>

      </div>



      <div id="shiva" class="col-xs-12 col-sm-4 col-md-4 text-center">

        <h4 class="chart-text count" dur="3500"><?= $data3[2];?></h4>

        <h3 class="progress-h4"><?= $data3[3];?></h3>

      </div>



      <div id="shiva" class="col-xs-12 col-sm-4 col-md-4 text-center">

        <h4 class="chart-text count" dur="2000"><?= $data3[4];?></h4>

        <h3 class="progress-h4"><?= $data3[5];?></h3>

      </div>



    </div>

  </div>

</div>

</div>

<!-- End skill Area -->



<script>





$(window).on('scroll',function() {

    if (checkVisible($('.count'))) {

      $('.count').each(function () {

          dur = $(this).attr('dur')

          $(this).prop('Counter',0).animate({

              Counter: $(this).text()

          }, {

              duration: dur*1,

              easing: 'swing',

              step: function (now) {

                  $(this).text(formatNumber(Math.ceil(now))+'+');

              }

          });

      });



      $(window).off('scroll');

    }

});



function checkVisible( elm, eval ) {

    eval = eval || "object visible";

    var viewportHeight = $(window).height(), // Viewport Height

        scrolltop = $(window).scrollTop(), // Scroll Top

        y = $(elm).offset().top,

        elementHeight = $(elm).height();   

    

    if (eval == "object visible") return ((y < (viewportHeight + scrolltop)) && (y > (scrolltop - elementHeight)));

    if (eval == "above") return ((y < (viewportHeight + scrolltop)));

}



function formatNumber(num) {

  return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,')

}

</script>



<!-- Start team Area -->

<div id="team" class="our-team-area area-padding">

  <div class="container <?php if($session == 1){echo 'box-edit';}?>">

    <div class="row">

    <?php

    $data4 = $data[4]['data'];

    $data4 = json_decode($data4);

    ?>

      <div class="col-md-12 col-sm-12 col-xs-12">

      <?php if($session == 1){echo "<a href='member.php' class='btn btn-warning btnc float-right rounded-0' target='_blank'>Edit</a>";}?>

        <div class="section-headline text-center">

          <h2>Members Of The Board</h2>

        </div>

      </div>

    </div>

    <div class="row">

      <div class="col-md-4 col-sm-4 col-xs-12">

        <div class="single-team-member">

          <div class="team-img">

            <a href="member.php#administation" class="text-center">

              <img src="<?=$data4[2];?>" alt="">

            </a>

            <div class="team-social-icon text-center">

              <ul>

                <li>

                  <a class = "page-scroll" href="member.php#administation">

                    <i class="fa fa-eye"></i>

                  </a>

                </li>

              </ul>

            </div>

          </div>

          <div class="team-content text-center">

            <h4><?= $data4[0];?></h4>

            <p><?= $data4[1];?></p>

          </div>

        </div>

      </div>

      <div class="col-md-4 col-sm-4 col-xs-12">

        <div class="single-team-member">

          <div class="team-img">

            <a href="member.php#chairman" class="text-center">

              <img src="<?= $data4[6];?>" alt="">

            </a>

            <div class="team-social-icon text-center">

              <ul>

                <li>

                  <a class = "page-scroll" href="member.php#chairman">

                    <i class="fa fa-eye"></i>

                  </a>

                </li>

              </ul>

            </div>

          </div>

          <div class="team-content text-center">

            <h4><?= $data4[4];?></h4>

            <p><?= $data4[5];?></p>

          </div>

        </div>

      </div>

      <div class="col-md-4 col-sm-4 col-xs-12">

        <div class="single-team-member">

          <div class="team-img">

            <a href="member.php#financial" class="text-center">

              <img src="<?= $data4[10];?>" alt="">

            </a>

            <div class="team-social-icon text-center">

              <ul>

                <li>

                  <a class = "page-scroll" href="member.php#financial">

                    <i class="fa fa-eye"></i>

                  </a>

                </li>

              </ul>

            </div>

          </div>

          <div class="team-content text-center">

            <h4><?= $data4[8];?></h4>

            <p><?= $data4[9];?></p>

          </div>

        </div>

      </div>

    </div>

  </div>

</div>

<!-- End Team Area -->



<!-- Start clients Area -->

<div class="suscribe-area">

  <div class="parallax section dbcolor">

    <div class="container <?php

    if($session == 1){

      echo 'box-edit';

    }

    ?>

    ">

    <div class="row">

      <?php

      $data5 = $data[5]['data'];

      $data5 = json_decode($data5);

      ?>

      <div class="col-md-12 col-sm-12 col-xs-12">

        <?php

              if($session == 1){

        echo "<a href='#' class='btn btn-warning btnc float-right rounded-0' onclick =\"showModal('forms.php',{action:'form',id:'6'})\">Edit</a>";

      }

      ?>

        <div class="section-headline text-center">

          <h2 class="text-white">Our clients</h2>

        </div>

      </div>

    </div>

    <div class="row logos">

<?php foreach ($data5 as $data5) {

?>      

    <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp mt-50">

        <a href="#"><img src="<?= $data5?>" alt="" class="img-repsonsive"></a>

    </div>

<?php } ?>

    </div><!-- end row -->

  </div><!-- end container -->

</div>

</div>

<!-- End clients Area -->



<!-- Start contact Area -->

<div id="contact" class="contact-area pt-100">

  <div class="contact-inner area-padding">

    <div class="contact-overly"></div>

    <div class="container <?php

    if($session == 1){

      echo 'box-edit';

    }

    ?>

    ">

    <div class="row">

      <?php

      $data6 = $data[6]['data'];

      $data6 = json_decode($data6);

      ?>

      <div class="col-md-12 col-sm-12 col-xs-12">

      <?php

      if($session == 1){

        echo "<a href='#' class='btn btn-warning btnc float-right rounded-0' onclick =\"showModal('forms.php',{action:'form',id:'7'})\">Edit</a>";

      }

      ?>

        <div class="section-headline text-center">

          <h2><?= $data6[0];?></h2>

        </div>

      </div>

    </div>

    <div class="row">

      <div class="col-md-4 col-sm-4 col-xs-12">

        <div class="contact-icon text-center">

          <div class="single-icon">

            <i class="fa fa-mobile"></i>

            <p>

              Tel: <?= $data6[1];?><br>

              <span>Working Hours: <?= $data6[2];?></span>

            </p>

          </div>

        </div>

      </div>

      <div class="col-md-4 col-sm-4 col-xs-12">

        <div class="contact-icon text-center">

          <div class="single-icon">

            <i class="fa fa-envelope-o"></i>

            <p>

              Email: <?= $data6[3];?><br>

              <span>Website: <?= $data6[4];?></span>

            </p>

          </div>

        </div>

      </div>

      <div class="col-md-4 col-sm-4 col-xs-12">

        <div class="contact-icon text-center">

          <div class="single-icon">

            <i class="fa fa-map-marker"></i>

            <p>

              Address: <?= $data6[5];?>

            </p>

          </div>

        </div>

      </div>

    </div>

    <div class="row">



      <!-- Start Google Map -->

      <div class="col-md-6 col-sm-6 col-xs-12">

        <!-- Start Map -->

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13814.540058245399!2d31.305220130296657!3d30.04732728420269!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583eff6d061541%3A0xfd3f5cecc4fdc973!2sEPSCO+-+Egyptian+Petroleum+Services+Co.!5e0!3m2!1sen!2seg!4v1558171082110!5m2!1sen!2seg" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>

        <!-- End Map -->

      </div>

      <!-- End Google Map -->



      <!-- Start  contact -->

      <div class="col-md-6 col-sm-6 col-xs-12">

        <div class="form contact-form">

          <div id="sendmessage">Your message has been sent. Thank you!</div>

          <div id="errormessage"></div>

          <?= emailClass::form();?>

        </div>

      </div>

      <!-- End Left contact -->

    </div>

  </div>

</div>

</div>

<!-- End Contact Area -->



<?php include "includes/footer.php"; ?>

