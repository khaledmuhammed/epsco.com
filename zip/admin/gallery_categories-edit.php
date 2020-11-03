<?php
include 'includes/header.php';
require_once "../clasess/db.php";
require_once "../clasess/model.php";
require_once "../clasess/tables.php";
require_once "clasess/gallerycat.php";
if (!isset($_GET['id']) || empty($_GET['id'])) {
?>
  <script>document.location = 'gallery_categories-manage.php';</script>
<?php
}
?>
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
                    <i class="ion ion-edit"></i> Edit Gallery Categories
                  </h4>
                </div>
              </div>
            </div>
          </div>
          <?php 
          $id = gallerycat::secure($_GET['id']);
          gallerycatClass::form($id); 
        ?>
      </div>
    </div>
  </div>
</div>
</section>
<?php 
require 'includes/footer.php';
?>