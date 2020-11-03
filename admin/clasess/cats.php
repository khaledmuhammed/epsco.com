<?php
class catsClass extends model{
	public static function table(){
		?>
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>ID</th>
					<th>Category</th> 
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
					{"data": "cat"},
					{"data": "sort"},
					{"data": "actions"}
					],
					"ordering": false,
					"lengthMenu": [ 10, 25, 50],
					"processing": true,
					"serverSide": true,
					"ajax": {
						url: 'ajx/cats.php',
						data: {action:'table'},
						type: 'POST'
					}
				});
			});
		</script>
		<?php
	}
	public static function form($id){
		$value = cats::find($id);
		?>
		<form role="form"  onsubmit="submitForm(this,'cats.php')" prevent-default>
			<div class="card-body">
				<input type="hidden" name="action" value="update">
				<input type="hidden" name="id" value="<?=$value['id']?>">
				<div class="box-body">
					<div class="form-group">
						<label for="cat">Category Name:</label>
						<input class="form-control" type= "text" id="cat" name="cat" value="<?=$value['cat']?>">
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
		<form role="form"  onsubmit="submitForm(this,'cats.php')" prevent-default>
			<div class="card-body">
				<input type="hidden" name="action" value="add">
				<input type="hidden" name="id" value="0">
				<div class="box-body">
					<div class="form-group">
						<label for="cat">Category Name:</label>
						<input class="form-control" type= "text" id="cat" name="cat">
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
	public static function submit_add($cat,$sort){
		$x = array();
		$x['cat']  = $cat;
		$x['sort'] = $sort;
		$save = cats::saveArray($x);

	}
}
