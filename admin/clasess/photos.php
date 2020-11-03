<?php
class photosClass extends model{

	public static function table(){
		?>
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>ID</th>
					<th>Image</th>
					<th>Pass Image</th>
					<th>Actions</th> 
				</tr>
			</thead>
			<tbody>
			</tbody>
		</table>
		<script>
			$(function () {
				$('.table').DataTable({
					"columns": [
					{"data": "id"},
					{"data": "pass"},
					{"data": "passd"},
					{"data": "actions"}
					],
					"ordering": false,
					"lengthMenu": [ 10, 25, 50],
					"processing": true,
					"serverSide": true,
					"ajax": {
						url: 'ajx/photos.php',
						data: {action:'table'},
						type: 'POST'
					}
				});
			});
		</script>
		<?php
	}

	public static function form($id){
		$value = photos::find($id);
		?>
		<form role="form"  onsubmit="submitForm(this,'photos.php')" prevent-default>
			<div class="card-body">
				<input type="hidden" name="action" value="update">
				<input type="hidden" name="id" value="<?=$value['id']?>">
				<div class="box-body">

					<div class="form-group">
						<label for="pass">Image:</label>
						<input class="form-control" type= "file" id="pass" name="pass">
					</div>

				</div>
				<div class="card-footer"> 
					<input class="btn btn-primary flat" type="submit" name="submit" value="Update" />
				</div>
			</div>
		</form>
		<!-- <script src="https://cdn.ckeditor.com/4.11.4/standard/ckeditor.js"></script> -->
		<script src="../plugins/ckeditor/ckeditor.js"></script>
		<?php 
	}

	public static function form_add(){
		?>
		<form role="form"  onsubmit="submitForm(this,'photos.php')" prevent-default>
			<div class="card-body">
				<input type="hidden" name="action" value="add">
				<div class="box-body">

					<div class="form-group">
						<label for="pass">Image:</label>
						<input class="form-control" type= "file" id="pass" name="pass">
					</div>

				</div>
				<div class="card-footer"> 
					<input class="btn btn-primary flat" type="submit" name="submit" value="Add" />
				</div>
			</div>
		</form>
		<!-- <script src="https://cdn.ckeditor.com/4.11.4/standard/ckeditor.js"></script> -->
		<script src="../plugins/ckeditor/ckeditor.js"></script>
		<?php 
	}
}