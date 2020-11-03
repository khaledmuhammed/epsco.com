<?php
class galleryClass extends model{
	public static function table(){
		?>
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>ID</th>
					<th>Title</th>
					<th>Image</th> 
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
					{"data": "sort"},
					{"data": "actions"}
					],
					"ordering": false,
					"lengthMenu": [ 10, 25, 50],
					"processing": true,
					"serverSide": true,
					"ajax": {
						url: 'ajx/gallery.php',
						data: {action:'table'},
						type: 'POST'
					}
				});
			});
		</script>
		<?php
	}
	public static function table1($id){
		?>
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>ID</th>
					<th>Title</th>
					<th>Image</th> 
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
					{"data": "sort"},
					{"data": "actions"}
					],
					"ordering": false,
					"lengthMenu": [ 10, 25, 50],
					"processing": true,
					"serverSide": true,
					"ajax": {
						url: 'ajx/gallery.php',
						data: {action:'table1',id:'<?= $id ?>'},
						type: 'POST'
					}
				});
			});
		</script>
		<?php
	}
	public static function form($id){
		$value = gallery::find($id);
		$catId = $value['gallery_cat_id'];
		?>
		<form role="form" enctype="multipart/form-data"  onsubmit="submitForm(this,'gallery.php')" prevent-default >
			<div class="card-body">
				<input type="hidden" name="action" value="update">
				<input type="hidden" name="id" value="<?=$value['id']?>">
				<div class="box-body">

					<div class="form-group">
						<label for="gallery_cat_id">Choose Category To Edit</label>
						<select class="form-control select2" name="gallery_cat_id">
							<?= gallerycat::option_item($catId)?>		
						</select>
					</div>

					<div class="form-group">
						<label for="title">Title:</label>
						<input class="form-control" type= "text" id="title" name="title" value="<?=$value['title']?>">
					</div>

					<div class="form-group">
						<label for="image">Image:</label>
						<input class="form-control" type= "file" id="image" name="image">
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
		<?php 
}
	public static function form_add(){
		?>
		<form role="form" enctype="multipart/form-data"  onsubmit="submitForm(this,'gallery.php')" prevent-default>
			<div class="card-body">
				<input type="hidden" name="action" value="add">
				<input type="hidden" name="id" value="0">
				<div class="box-body">

					<div class="form-group">
						<label for="gallery_cat_id">Choose Category To Add</label>
						<select class="form-control select2" name="gallery_cat_id">
							<?= gallerycat::option_item()?>		
						</select>
					</div>

					<div class="form-group">
						<label for="title">Title:</label>
						<input class="form-control" type= "text" id="title" name="title">
					</div>

					<div class="form-group">
						<label for="image">Image:</label>
						<input class="form-control" type= "file" id="image" name="image">
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
		<?php 
	}
}