<?php
class newsClass extends model{

	public static function table(){
		?>
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>ID</th>
					<th>Image</th> 
					<th width="100px">Title</th> 
					<th width="200px">Short Text</th>
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
					{"data": "image"},
					{"data": "title"},
					{"data": "short_desc"},
					{"data": "actions"}
					],
					"ordering": false,
					"lengthMenu": [ 10, 25, 50],
					"processing": true,
					"serverSide": true,
					"ajax": {
						url: 'ajx/news.php',
						data: {action:'table'},
						type: 'POST'
					}
				});
			});
		</script>
		<?php
	}

	public static function form($id){
		$value = news::find($id);
		?>
		<form role="form"  onsubmit="submitForm(this,'news.php')" prevent-default>
			<div class="card-body">
				<input type="hidden" name="action" value="update">
				<input type="hidden" name="id" value="<?=$value['id']?>">
				<div class="box-body">

					<div class="form-group">
						<label for="image">Image:</label>
						<input class="form-control" type= "file" id="image" name="image">
					</div>

					<div class="form-group">
						<label for="title">Title:</label>
						<input class="form-control" type= "text" id="title" name="title" value="<?=$value['title']?>">
					</div>

					<div class="form-group">
						<label for="short_desc">Short Text:</label>
						<textarea class="form-control ckeditor" rows="5" name="short_desc" placeholder="short_desc..."><?=$value['short_desc']?></textarea>
					</div>
					<div class="form-group">
						<label for="long_desc">Long Text</label>
						<textarea class="form-control ckeditor" rows="10" name="long_desc" placeholder="long_desc..."><?=$value['long_desc']?></textarea>
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
		<form role="form"  onsubmit="submitForm(this,'news.php')" prevent-default>
			<div class="card-body">
				<input type="hidden" name="action" value="add">
				<div class="box-body">

					<div class="form-group">
						<label for="image">Image:</label>
						<input class="form-control" type= "file" id="image" name="image">
					</div>

					<div class="form-group">
						<label for="title">Title:</label>
						<input class="form-control" type= "text" id="title" name="title" placeholder="title...">
					</div>

					<div class="form-group">
						<label for="short_desc">Short Text:</label>
						<textarea class="form-control ckeditor" rows="5" name="short_desc" placeholder="short_desc..."></textarea>
					</div>
					<div class="form-group">
						<label for="long_desc">Long Text:</label>
						<textarea class="form-control ckeditor" rows="10" name="long_desc" placeholder="long_desc..."></textarea>
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