<?php
include 'includes/header.php';
require_once "../clasess/db.php";
require_once "../clasess/model.php";
require_once "../clasess/tables.php";
require_once "clasess/cats.php";
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
						<h4 class="card-title"><i class="fa fa-plus-square"></i> Add Categories</h4>
					</div>
					<?php catsClass::form_add();?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php 
require 'includes/footer.php';
?>