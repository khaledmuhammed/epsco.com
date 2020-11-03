<?php
include 'includes/header.php';
require_once "../clasess/db.php";
require_once "../clasess/model.php";
require_once "../clasess/tables.php";
require_once "clasess/items.php";
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
										<i class="fa fa-plus-square"></i> Add Items
									</h4>
								</div>
							</div>
						</div>
					</div>
					<?php itemsClass::form_add();?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php 
require 'includes/footer.php';
?>