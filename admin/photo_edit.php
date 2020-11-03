<?php
include 'includes/header.php';
require_once "../clasess/db.php";
require_once "../clasess/model.php";
require_once "../clasess/tables.php";
require_once "clasess/photos.php";
if (!isset($_GET['id']) || empty($_GET['id'])) {
?>
  <script>document.location = 'photos-manage.php';</script>
<?php
}
?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <div class="container">
              <div class="row">
                <div class="col-md-9">
                  <h4 class="card-title">
                    <i class="ion ion-edit"></i> Edit photos
                  </h4>
                </div>
              </div>
            </div>
          </div>
          <?php 
          $id = photos::secure($_GET['id']);
          photosClass::form($id); 
        ?>
      </div>
    </div>
  </div>
</div>
</section>
<?php 
require 'includes/footer.php';
?>