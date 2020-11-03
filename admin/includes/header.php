<?php
require_once 'includes/session.php';
require_once "../clasess/db.php";
require_once "../clasess/model.php";
require_once "../clasess/tables.php";

// user SESSION
$uid = $_SESSION['aid'];
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>EPSCO | Egyptain Petroleum Services Company</title>
  <link href="../favicon.ico" rel="icon">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- iCheck -->
  <!-- <link rel="stylesheet" href="../plugins/iCheck/flat/blue.css"> -->
  <!-- Morris chart -->
  <link rel="stylesheet" href="../plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="../plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <!-- <link rel="stylesheet" href="../plugins/datepicker/datepicker3.css"> -->
  <!-- Daterange picker -->
  <!-- <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker-bs3.css"> -->
  <!-- bootstrap wysihtml5 - text editor -->
  <!-- <link rel="stylesheet" href="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css"> -->
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  <link href="../dist/css/style.css" rel="stylesheet">
  
  <script src="../plugins/jquery/jquery.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
  <script src="../plugins/jquery/jquery.min.js"></script>
  <script src="includes/core.js"></script>
  <link rel="stylesheet" href="../plugins/select2/select2.min.css">
  <script src="../plugins/select2/select2.min.js"></script>

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto ">
      <li class="nav-item dropdown ">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fa fa-user-circle" aria-hidden="true"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
             <div class="container mt-4">
                <div class="row mb-4">
                    <div class="col-lg-3 ml-4 text-center">
                        <a href="../logout.php" class="btn btn-primary">logout</a>
                    </div>
                </div>    
           </div>
            
                
        </div>
      </li>
      
      
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../dist/img/avatar5.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="#" class="d-block"><?php echo $_SESSION['aname']; ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open"><a href="index.php" class="nav-link"><i class="nav-icon fa fa-dashboard"></i><span>Dashboard</span></a></li>
            <li class="nav-item has-treeview">
            <a href="#users" class="nav-link">
              <i class="fa fa-file-text-o"></i>
              <p>
                News
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="news-add.php" class="nav-link">
                  <i class="fa fa-plus-square"></i>
                  <p>Add News</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="news-manage.php" class="nav-link">
                  <i class="fa fa-bars"></i>
                  <p>Manage News</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#services" class="nav-link">
              <i class="fa fa-bars"></i>
              <p>
                Services
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
          <li class="nav-item has-treeview">
            <a href="#services" class="nav-link">
              <i class="fa fa-folder-open-o"></i>
              <p>
                Categories
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="categories-add.php" class="nav-link">
                  <i class="fa fa-plus-square"></i>
                  <p>Add Categories</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="categories-manage.php" class="nav-link">
                  <i class="fa fa-bars"></i>
                  <p>Manage Categories</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#services" class="nav-link">
              <i class="fa fa-files-o"></i>
              <p>
                Items
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="items-add.php" class="nav-link">
                  <i class="fa fa-plus-square"></i>
                  <p>Add Items</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="items-manage.php" class="nav-link">
                  <i class="fa fa-bars"></i>
                  <p>Manage Items</p>
                </a>
              </li>
            </ul>
          </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#services" class="nav-link">
              <i class="fa fa-star"></i>
              <p>
                Gallery
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
          <li class="nav-item has-treeview">
            <a href="#services" class="nav-link">
              <i class="fa fa-folder-open-o"></i>
              <p>
                Categories
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="gallery_categories-add.php" class="nav-link">
                  <i class="fa fa-plus-square"></i>
                  <p>Add Categories</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="gallery_categories-manage.php" class="nav-link">
                  <i class="fa fa-bars"></i>
                  <p>Manage Categories</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#services" class="nav-link">
              <i class="ion ion-images"></i>
              <p>
                Image
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="gallery_add.php" class="nav-link">
                  <i class="fa fa-plus-square"></i>
                  <p>Add Image</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="gallery_manage.php" class="nav-link">
                  <i class="fa fa-bars"></i>
                  <p>Manage Image</p>
                </a>
              </li>
            </ul>
          </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#photo" class="nav-link">
              <i class="ion ion-images"></i>
              <p>
                Photo
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="photo_add.php" class="nav-link">
                  <i class="fa fa-plus-square"></i>
                  <p>Add Photo</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="photo_manage.php" class="nav-link">
                  <i class="fa fa-bars"></i>
                  <p>Manage Photo</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">