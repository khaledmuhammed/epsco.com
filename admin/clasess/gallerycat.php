<?php
class gallerycatClass extends model{
	public static function table(){
		?>
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>ID</th>
					<th>Title</th> 
					<th>Image</th> 
					<th>Description</th> 
					<th>Sort</th>
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
					{"data": "title"},
					{"data": "image"},
					{"data": "description"},
					{"data": "sort"},
					{"data": "actions"}
					],
					"ordering": false,
					"lengthMenu": [ 10, 25, 50],
					"processing": true,
					"serverSide": true,
					"ajax": {
						url: 'ajx/gallerycat.php',
						data: {action:'table'},
						type: 'POST'
					}
				});
			});
		</script>
		<?php
	}
	public static function form($id){
		$value = gallerycat::find($id);
		?>
		<form role="form"  onsubmit="submitForm(this,'gallerycat.php')" prevent-default>
			<div class="card-body">
				<input type="hidden" name="action" value="update">
				<input type="hidden" name="id" value="<?=$value['id']?>">
				<div class="box-body">

					<div class="form-group">
						<label for="title">Title:</label>
						<input class="form-control" type= "text" id="title" name="title" value="<?=$value['title']?>">
					</div>

					<div class="form-group">
						<label for="image">Image:</label>
						<input class="form-control" type= "file" id="image" name="image">
					</div>
						<div class="form-group">
					<label for="description2">Description</label>
					<textarea class="form-control ckeditor" rows="10" name="description" placeholder="Description..."><?=$value['description']?></textarea>
					</div>

					<div class="form-group">
						<label for="sort">Sort:</label>
						<input class="form-control" type= "text" id="sort" name="sort" value="<?=$value['sort']?>">
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
		<form role="form"  onsubmit="submitForm(this,'gallerycat.php')" prevent-default>
			<div class="card-body">
				<input type="hidden" name="action" value="add">
				<input type="hidden" name="id" value="0">
				<div class="box-body">

					<div class="form-group">
						<label for="title">Title:</label>
						<input class="form-control" type= "text" id="title" name="title">
					</div>

					<div class="form-group">
						<label for="image">Image:</label>
						<input class="form-control" type= "file" id="image" name="image">
					</div>

						<div class="form-group">
					<label for="description2">Description</label>
					<textarea class="form-control ckeditor" rows="10" name="description" placeholder="Description..."></textarea>
					</div>

					<div class="form-group">
						<label for="sort">Sort:</label>
						<input class="form-control" type= "text" id="sort" name="sort">
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