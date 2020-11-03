<?php 
include 'includes/header.php';
require_once "../clasess/db.php";
require_once "../clasess/model.php";
require_once "../clasess/tables.php";
require_once "clasess/items.php";
?>
<script>
	$(document).ready(function(){
		$( ".sidebar-menu li a[href^='#items']" ).parent().addClass( "active" );
		$( ".sidebar-menu li a[href^='items-manage.php']" ).parent().addClass( "active" );

	});
</script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="card card-info">
			<div class="card-header">
				<h4 class="card-title">
					<i class="fa fa-bars"></i> Items Manage
				</h4>
			</div>
			<div class="container-fluid">
				<div class="row" style="margin-top: 20px;">
					<!-- left column -->
					<div class="col-md-12">  
						<?php itemsClass::table();?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php 
require 'includes/footer.php';
?>