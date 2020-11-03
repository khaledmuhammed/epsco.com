<?php
include 'includes/header.php';?>
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Dashboard</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
          <li class="breadcrumb-item active">Admin</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<section>
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
            <h3><?= news::count_all();?></h3>

            <p>News</p>
          </div>
          <div class="icon">
            <i class="ion ion-plus"></i>
          </div>
          <a href="news-add.php" class="small-box-footer">Add News <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-4 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3><?= cats::count_all();?></h3>

            <p>Service Category</p>
          </div>
          <div class="icon">
            <i class="ion ion-plus"></i>
          </div>
          <a href="categories-add.php" class="small-box-footer">Add Category Of Services <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-4 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
          <div class="inner">
            <h3><?= gallerycat::count_all(); ?></h3>

            <p>Gallery Category</p>
          </div>
          <div class="icon">
            <i class="ion ion-plus"></i>
          </div>
          <a href="gallery_categories-add.php" class="small-box-footer">Add Category Of Gallery <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
    </div>
   <div class="row">
      <div class="col-lg-4 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
          <div class="inner">
            <h3><?= items::count_all();?></h3>

            <p>Items</p>
          </div>
          <div class="icon">
            <i class="ion ion-plus"></i>
          </div>
          <a href="items-add.php" class="small-box-footer">Add Items <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-4 col-6">
        <!-- small box -->
        <div class="small-box bg-primary">
          <div class="inner">
            <h3><?= gallery::count_all();?></h3>

            <p>Gallery</p>
          </div>
          <div class="icon">
            <i class="ion ion-plus"></i>
          </div>
          <a href="gallery_add.php" class="small-box-footer">Add Gallery <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
    </div>
  </div>
</section>

<?php
  include 'includes/footer.php';
?>