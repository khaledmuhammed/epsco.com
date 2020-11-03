<?php
class itemsClass extends model{
	public static function table(){
		?>
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>ID</th>
					<th>Title</th> 
					<th>Image</th> 
					<th>Short Text</th> 
					<th>Long Text</th> 
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
					{"data": "short_desc"},
					{"data": "long_desc"},
					{"data": "sort"},
					{"data": "actions"}
					],
					"ordering": false,
					"lengthMenu": [ 10, 25, 50],
					"processing": true,
					"serverSide": true,
					"ajax": {
						url: 'ajx/items.php',
						data: {action:'table'},
						type: 'POST'
					}
				});
			});
		</script>
		<?php
	}
	public static function form($id){
		$value = items::find($id);
		$catID = $value['cat'];
		?>
		<form role="form"  onsubmit="submitForm(this,'items.php')" prevent-default>
			<div class="card-body">
				<input type="hidden" name="action" value="update">
				<input type="hidden" name="id" value="<?=$value['id']?>">
				<div class="box-body">

					<div class="form-group">
						<label for="cat">Choose </label>
						<select class="form-control select2" name="cat">
							<?= cats::option_cat($catID)?>		
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
						<label for="short_desc">Short Text:</label>
						<textarea class="form-control ckeditor" rows="5" name="short_desc" placeholder="short_desc..."><?=$value['short_desc']?></textarea>
					</div>

					<div class="form-group">
						<label for="long_desc">Long Text</label>
						<textarea class="form-control ckeditor" rows="10" name="long_desc" placeholder="long_desc..."><?=$value['long_desc']?></textarea>
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
		<form role="form"  onsubmit="submitForm(this,'items.php')" prevent-default>
			<div class="card-body">
				<input type="hidden" name="action" value="add">
				<input type="hidden" name="id" value="0">
				<div class="box-body">

					<div class="form-group">
						<label for="cat">Choose Categorise</label>
						<select class="form-control select2" name="cat">
							<?= cats::option_cat()?>		
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
						<label for="short_desc">Short Text:</label>
						<textarea class="form-control ckeditor" rows="5" name="short_desc" placeholder="short_desc..."></textarea>
					</div>
					<div class="form-group">
						<label for="long_desc">Long Text</label>
						<textarea class="form-control ckeditor" rows="10" name="long_desc" placeholder="long_desc..."></textarea>
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