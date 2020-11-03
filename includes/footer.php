  <!-- Start Footer bottom Area -->
  <footer>
    <div class="footer-area">
      <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12 <?php
      if($session == 1){
        echo 'box-edit';
      }
      ?>
      ">
        <?php
        if($session == 1){
          echo "<a href='#' class='btn btn-warning btnc float-right rounded-0' onclick =\"showModal('forms.php',{action:'form',id:'13'})\">Edit</a>";
        }
        ?>
        <?php
        $data1 = data::all();
        $data13 = $data1[12]['data'];
        $data13 = json_decode($data13);
        ?>
          <div class="footer-content">
            <div class="footer-head">
              <div class="footer-logo">
                <img src="<?= $data13[0];?>" alt="" title="" width="100px">
              </div>

              <p><?= $data13[1];?></p>
              <div class="footer-icons">
                <ul>
            <?php
              if ($data13[2]) {
            ?>
                  <li>
                    <a href="<?= $data13[2];?>" target="_blank"><i class="fa fa-facebook"></i></a>
                  </li>
            <?php
              }
              if ($data13[3]) {
            ?>

                  <li>
                    <a href="<?= $data13[3];?>" target="_blank"><i class="fa fa-twitter"></i></a>
                  </li>
            <?php
              }
              if ($data13[4]) {
            ?>
                  <li>
                    <a href="<?= $data13[4];?>" target="_blank"><i class="fa fa-youtube"></i></a>
                  </li>
            <?php
              }
              if ($data13[5]) {
            ?>
                  <li>
                    <a href="<?= $data13[5];?>" target="_blank"><i class="fa fa-instagram"></i></a>
                  </li>
            <?php
              }
              if ($data13[6]) {
            ?>
                  <li>
                    <a href="<?= $data13[6];?>" target="_blank"><i class="fa fa-linkedin"></i></a>
                  </li>
            <?php
              }
            ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- end single footer -->
        <div class="col-md-4 col-sm-4 col-xs-12 <?php
      if($session == 1){
        echo 'box-edit';
      }
      ?>
      ">
        <?php
        if($session == 1){
          echo "<a href='#' class='btn btn-warning btnc float-right rounded-0' onclick =\"showModal('forms.php',{action:'form',id:'14'})\">Edit</a>";
        }
        ?>
        <?php
        $data1 = data::all();
        $data14 = $data1[13]['data'];
        $data14 = json_decode($data14);
        ?>
          <div class="footer-content">
            <div class="footer-head">
              <h4><?= $data14[0];?></h4>
              <p>
                <?= $data14[1];?>
              </p>
              <div class="footer-contacts">
                <p><span>Tel: </span><?= $data14[2];?></p>
                <p><span>Email: </span><?= $data14[3];?></p>
                <p><span>Working Hours: </span><?= $data14[4];?></p>
              </div>
            </div>
          </div>
        </div>
         <!-- end single footer -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <h4>About EPSCO</h4>
                <!--<div class="flicker-img">-->
                <!--  <a href="#"><img src="img/portfolio/1.jpg" alt=""></a>-->
                <!--  <a href="#"><img src="img/portfolio/2.jpg" alt=""></a>-->
                <!--  <a href="#"><img src="img/portfolio/3.jpg" alt=""></a>-->
                <!--  <a href="#"><img src="img/portfolio/4.jpg" alt=""></a>-->
                <!--  <a href="#"><img src="img/portfolio/5.jpg" alt=""></a>-->
                <!--  <a href="#"><img src="img/portfolio/6.jpg" alt=""></a>-->
                <!--</div>-->
                <?php
                $data = data::find(3);
                $data2 = $data['data'];
                $data2 = json_decode($data2);
                ?>
                <p><?= htmlspecialchars_decode($data2[1]);?></p>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
  <div class="footer-area-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="copyright text-center">
            <p>&copy; Copyright <strong>EPSCO</strong> All Rights Reserved.</p>
          </div>
          <div class="credits">
          <div id="ABM">
            <div class="text">Powered by</div>
            <a id="relative" href="http://abmegypt.net" target="_blank">
              <span>
                <img class="img_ABM" src="img/abm.png" alt="ABM logo" border="0">
                <span id="text_ABM">We Control E-Marketing World</span>
              </span>
            </a>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 </footer>

 <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>



 <!-- JavaScript Libraries -->
 <script src="lib/bootstrap/js/bootstrap.min.js"></script>
 <script src="lib/owlcarousel/owl.carousel.min.js"></script>
 <script src="lib/venobox/venobox.min.js"></script>
 <script src="lib/knob/jquery.knob.js"></script>
 <script src="lib/wow/wow.min.js"></script>
 <script src="lib/parallax/parallax.js"></script>
 <script src="lib/easing/easing.min.js"></script>
 <script src="lib/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
 <script src="lib/appear/jquery.appear.js"></script>
 <script src="lib/isotope/isotope.pkgd.min.js"></script>
 <!-- Contact Form JavaScript File -->
 <script src="contactform/contactform.js"></script>
 <script src="js/main.js"></script>
 <!-- Plugins js -->
 <script src="js/plugins.js"></script>
 <!-- Active js -->
 <script src="js/active.js"></script>


 <!-- modal1 -->
<!--  <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      <div class="modal-body p-3">
        <div class="text-center">
          <div class="loader m-auto"></div>
          Loading...
        </div>
      </div>
    </div>
  </div>
</div> -->
<!-- END modal1 -->

<!-- modal1 Lock-->
<div class="modal fade" role="dialog" id="modal-lock" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog">
    <div class="modal-content" >
      <div class="modal-body p-3">
        <div class="text-center">
          <div class="loader m-auto"></div>
          Loading...
        </div>
      </div>
    </div>
  </div>
</div>
<!-- END modal Lock-->

<!-- result modal -->
<div class="modal fade" id="result-modal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      <div class="pt-3 text-center">
        <h5>RESULT</h5><div class="line-shape bg-blue line-shape-center"></div>
      </div>
      <div class="modal-body p-3">
        <div class="text-center">
          <div class="loader m-auto"></div>
          Loading...
        </div>
      </div>
    </div>
  </div>
</div>
<!-- END result modal -->

<!-- loading modal -->
<div class="modal fade mt-5" role="dialog" id="loading-modal" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-sm">
    <div class="modal-content p-2 text-center" >
      <div class="loader m-auto"></div>
      Loading...
    </div>
  </div>
</div>
<!-- END loading modal -->


<div class="modal lg fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
    </div>
  </div>
</div>


</body>

</html>