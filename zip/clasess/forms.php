<?php
class dataClass extends model{
	public static function form($id){
		if ($id == 1) {
			$data = data::where('id',1)['data'];
			$data = json_decode($data);
			?>

			<form role="form" onsubmit="submitForm(this,'forms.php')" prevent-default>

				<input type="hidden" name="id" value="1">
				<input type="hidden" name="action" value="submit">

				<div class="card-body">
					<div class="form-group">
						<label for="title">Title</label>
						<input type="text" class="form-control" id="title" name="title" value="<?= $data[0];?>" placeholder="title..." required>
					</div>

					<div class="form-group">
						<label for="btn">btn name</label>
						<input type="text" class="form-control" id="btn" name="btn" value="<?= $data[1];?>" placeholder="btn name" required>
					</div>

					<div class="form-group">
						<label for="button_link">File </label>
						<input type="file" class="form-control" name="button_link" id="button_link">
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" name="submit" class="btn btn-primary">Save changes</button>
				</div>
			</form>
			<?php
		}   
		if ($id == 2) {
			$data = data::where('id',2)['data'];
			$data = json_decode($data);
			?>
			<form role="form" onsubmit="submitForm(this,'forms.php')" prevent-default>

				<input type="hidden" name="id" value="2">
				<input type="hidden" name="action" value="submit">

				<div class="card-body">
					<div class="form-group">
						<label for="paragraph">Paragraph</label>
						<textarea id="editor" class="form-control" rows="10" name="paragraph" placeholder="Paragraph..." required><?= $data[0];?></textarea>
					</div>
					<div class="form-group">
						<label for="video_link">Video Link</label>
						<input type="text" class="form-control" id="video_link" name="video_link" value="<?= $data[1];?>" placeholder="Video Link" required>
					</div>


				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" name="submit" class="btn btn-primary">Save changes</button>
				</div>
			</form>
			<!-- <script src="https://cdn.ckeditor.com/4.11.4/standard/ckeditor.js"></script> -->
			<!--<script src="plugins/ckeditor/ckeditor.js"></script>-->

            <script>
                CKEDITOR.replace( 'editor' );
            </script>
            <script src="js/bootstrap-ckeditor-fix.js"></script>

			<?php
		}
		if ($id == 3) {
			$data = data::where('id',3)['data'];
			$data = json_decode($data);
			?>
			<form role="form" onsubmit="submitForm(this,'forms.php')" prevent-default>

				<input type="hidden" name="id" value="3">
				<input type="hidden" name="action" value="submit">

				<div class="card-body">
					<div class="form-group">
						<label for="title">Title</label>
						<input type="text" class="form-control" id="title" name="title" value="<?= $data[0];?>" placeholder="title..." required>
					</div>

					<div class="form-group">
						<label for="paragraph">Paragraph</label>
						<textarea id="editor1" class="form-control" rows="10" name="paragraph" placeholder="Paragraph..." required><?= $data[1];?></textarea>
					</div>

					<div class="form-group">
						<label for="img1">Image 1</label>
						<input type="file" class="form-control" id="img1" name="img1">
					</div>

					<div class="form-group">
						<label for="title1">Title 1</label>
						<input type="text" class="form-control" id="title1" name="title1" value="<?= $data[3];?>" placeholder="title 1..." required>
					</div>

					<div class="form-group">
						<label for="paragraph1">Paragraph1</label>
						<textarea id="editor2" class="form-control" rows="5" name="paragraph1" placeholder="Paragraph1..." required><?= $data[4];?></textarea>
					</div>

					<div class="form-group">
						<label for="img2">Image 2</label>
						<input type="file" class="form-control" id="img2" name="img2">
					</div>

					<div class="form-group">
						<label for="title2">Title 2</label>
						<input type="text" class="form-control" id="title2" name="title2" value="<?= $data[6];?>" placeholder="title 2..." required>
					</div>

					<div class="form-group">
						<label for="paragraph2">Paragraph2</label>
						<textarea id="editor3" class="form-control" rows="5" name="paragraph2" placeholder="Paragraph2..." required><?= $data[7];?></textarea>
					</div>

					<div class="form-group">
						<label for="img3">Image 3</label>
						<input type="file" class="form-control" id="img3" name="img3">
					</div>

					<div class="form-group">
						<label for="title3">Title 3</label>
						<input type="text" class="form-control" id="title3" name="title3" value="<?= $data[9];?>" placeholder="title 3..." required>
					</div>

					<div class="form-group">
						<label for="paragraph3">Paragraph3</label>
						<textarea id="editor4" class="form-control" rows="5" name="paragraph3" placeholder="Paragraph3..." required><?= $data[10];?></textarea>
					</div>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" name="submit" class="btn btn-primary">Save changes</button>
				</div>
			</form>
			<!-- <script src="https://cdn.ckeditor.com/4.11.4/standard/ckeditor.js"></script> -->
			<!--<script src="plugins/ckeditor/ckeditor.js"></script>-->

            <script>
                CKEDITOR.replace( 'editor1' );
                CKEDITOR.replace( 'editor2' );
                CKEDITOR.replace( 'editor3' );
                CKEDITOR.replace( 'editor4' );
            </script>
            <script src="js/bootstrap-ckeditor-fix.js"></script>
			<?php
		}
		if ($id == 4) {
			$data = data::where('id',4)['data'];
			$data = json_decode($data);
			?>
			<form role="form" onsubmit="submitForm(this,'forms.php')" prevent-default>

				<input type="hidden" name="id" value="4">
				<input type="hidden" name="action" value="submit">

				<div class="card-body">
					<div class="form-group">
						<label for="title1">Number 1</label>
						<input type="text" class="form-control" id="title1" name="title1" value="<?= $data[0];?>" placeholder="title1..." required>
					</div>
					<div class="form-group">
						<label for="paragraph1">Paragraph 1</label>
						<input type="text" class="form-control" id="paragraph1" name="paragraph1" value="<?= $data[1];?>" placeholder="paragraph" required>
					</div>


					<div class="form-group">
						<label for="title2">Number 2</label>
						<input type="text" class="form-control" id="title2" name="title2" value="<?= $data[2];?>" placeholder="title2..." required>
					</div>

					<div class="form-group">
						<label for="paragraph2">Paragraph 2</label>
						<input type="text" class="form-control" id="paragraph2" name="paragraph2" value="<?= $data[3];?>" placeholder="paragraph" required>
					</div>


					<div class="form-group">
						<label for="title3">Number 3</label>
						<input type="text" class="form-control" id="title3" name="title3" value="<?= $data[4];?>" placeholder="title3..." required>
					</div>

					<div class="form-group">
						<label for="paragraph3">Paragraph 3</label>
						<input type="text" class="form-control" id="paragraph3" name="paragraph3" value="<?= $data[5];?>" placeholder="paragraph" required>
					</div>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" name="submit" class="btn btn-primary">Save changes</button>
				</div>
			</form>
			<?php
		}	
		if ($id == 5) {
			$data = data::where('id',5)['data'];
			$data = json_decode($data);
			?>
			<form role="form" onsubmit="submitForm(this,'forms.php')" prevent-default>

				<input type="hidden" name="id" value="5">
				<input type="hidden" name="action" value="submit">
				<div class="card-body">
					<div class="form-group">
						<label for="title">Title Slider </label>
						<input type="text" class="form-control" id="title" name="title" value="<?= $data[12];?>" placeholder="title ...">
					</div>

					<div class="form-group">
						<label for="paragraph">Paragraph Slider </label>
						<input type="text" class="form-control" id="paragraph" name="paragraph" value="<?= $data[13];?>" placeholder="paragraph">
					</div>	
					<div class="form-group">
						<label for="title1">Title 1</label>
						<input type="text" class="form-control" id="title1" name="title1" value="<?= $data[0];?>" placeholder="title 1..." required>
					</div>

					<div class="form-group">
						<label for="paragraph1">Paragraph 1</label>
						<input type="text" class="form-control" id="paragraph1" name="paragraph1" value="<?= $data[1];?>" placeholder="paragraph" required>
					</div>
					<div class="form-group">
						<label for="img1">Image 1</label>
						<input type="file" class="form-control" id="img1" name="img1">
					</div>
					<div class="form-group">
						<label for="description1">Description 1</label>
						<textarea id="editor1" class="form-control" rows="10" name="description1" placeholder="description1..." required><?= $data[3];?></textarea>
					</div>

					<div class="form-group">
						<label for="title2">Title 2</label>
						<input type="text" class="form-control" id="title2" name="title2" value="<?= $data[4];?>" placeholder="title 2..." required>
					</div>

					<div class="form-group">
						<label for="paragraph2">Paragraph 2</label>
						<input type="text" class="form-control" id="paragraph2" name="paragraph2" value="<?= $data[5];?>" placeholder="paragraph" required>
					</div>
					<div class="form-group">
						<label for="img2">Image 2</label>
						<input type="file" class="form-control" id="img2" name="img2">
					</div>
					<div class="form-group">
						<label for="description2">Description 2</label>
						<textarea id="editor2" class="form-control" rows="10" name="description2" placeholder="description2..." required><?= $data[7];?></textarea>
					</div>

					<div class="form-group">
						<label for="title3">Title 3</label>
						<input type="text" class="form-control" id="title3" name="title3" value="<?= $data[8];?>" placeholder="title 3..." required>
					</div>

					<div class="form-group">
						<label for="paragraph3">Paragraph 3</label>
						<input type="text" class="form-control" id="paragraph3" name="paragraph3" value="<?= $data[9];?>" placeholder="paragraph" required>
					</div>
					<div class="form-group">
						<label for="img3">Image 3</label>
						<input type="file" class="form-control" id="img3" name="img3">
					</div>
					<div class="form-group">
						<label for="description3">Description 3</label>
						<textarea id="editor3" class="form-control" rows="10" name="description3" placeholder="description3..." required><?= $data[11];?></textarea>
					</div>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" name="submit" class="btn btn-primary">Save changes</button>
				</div>
			</form>
						<!-- <script src="https://cdn.ckeditor.com/4.11.4/standard/ckeditor.js"></script> -->
			<!--<script src="plugins/ckeditor/ckeditor.js"></script>-->

            <script>
                CKEDITOR.replace( 'editor1' );
                CKEDITOR.replace( 'editor2' );
                CKEDITOR.replace( 'editor3' );
            </script>
            <script src="js/bootstrap-ckeditor-fix.js"></script>
			<?php
		}	
		if ($id == 6) {
			$data = data::where('id',6)['data'];
			$data = json_decode($data);
			?>
			<form role="form" onsubmit="submitForm(this,'forms.php')" enctype="multipart/form-data"prevent-default>

				<input type="hidden" name="id" value="6">
				<input type="hidden" name="action" value="submit">

				<div class="card-body">
					<style>
						.hovereffect {
							width: 100%;
							height: 100%;
							float: left;
							overflow: hidden;
							position: relative;
							text-align: center;
							cursor: default;
						}

						.hovereffect .overlay {
							width: 60%;
							height: 100%;
							position: absolute;
							overflow: hidden;
							top: 0;
							left: 0;
							opacity: 0;
							filter: alpha(opacity=0);
							background-color: rgba(0,0,0,0.5);
							-webkit-transition: all 0.4s cubic-bezier(0.88,-0.99, 0, 1.81);
							transition: all 0.4s cubic-bezier(0.88,-0.99, 0, 1.81);
						}

						.hovereffect img {
							display: block;
							position: relative;
							-webkit-transition: all 0.4s cubic-bezier(0.88,-0.99, 0, 1.81);
							transition: all 0.4s cubic-bezier(0.88,-0.99, 0, 1.81);
						}

						.hovereffect h2 {
							text-transform: uppercase;
							color: #fff;
							text-align: center;
							position: relative;
							font-size: 17px;
							background: rgba(0,0,0,0.6);
							-webkit-transform: translatey(-100px);
							-ms-transform: translatey(-100px);
							transform: translatey(-100px);
							-webkit-transition: all 0.4s cubic-bezier(0.88,-0.99, 0, 1.81);
							transition: all 0.4s cubic-bezier(0.88,-0.99, 0, 1.81);
							padding: 10px;
						}

						.hovereffect a.info {
							text-decoration: none;
							display: inline-block;
							text-transform: uppercase;
							color: #fff;
							border: 1px solid #fff;
							background-color: transparent;
							opacity: 0;
							filter: alpha(opacity=0);
							-webkit-transition: all 0.4s ease;
							transition: all 0.4s ease;
							margin-top: 7px;
							padding: 7px 14px;
						}

						.hovereffect a.info:hover {
							box-shadow: 0 0 5px #fff;
						}

						.hovereffect:hover img {
							-ms-transform: scale(1.2);
							-webkit-transform: scale(1.2);
							transform: scale(1.2);
						}

						.hovereffect:hover .overlay {
							opacity: 1;
							filter: alpha(opacity=100);
						}

						.hovereffect:hover h2,.hovereffect:hover a.info {
							opacity: 1;
							filter: alpha(opacity=100);
							-ms-transform: translatey(0);
							-webkit-transform: translatey(0);
							transform: translatey(0);
						}

						.hovereffect:hover a.info {
							-webkit-transition-delay: .2s;
							transition-delay: .2s;
						}
					</style>
					<div class="row">
						<?php 
						foreach ($data as $data) {?>
							<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mt-4">
								<div class="hovereffect">
									<img class="img-responsive" src="<?=$data?>" width='100px' height='100px' title="delete">
									<div class="overlay">
										<a class="info action" href="#"url='forms.php' data ='{"action":"deleteClientLogo","id":"<?=$data?>"}'>Delete</a>
									</div>
								</div>
							</div>
						<?php } ?>
					</div>
					<div class="form-group mt-5">
						<label for="img1">Image</label>
						<input type="file" class="form-control" id="img1" name="clientlogo" required>
					</div>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" name="submit" class="btn btn-primary">Save changes</button>
				</div>
			</form>
			<?php
		}	
		if ($id == 7) {
			$data = data::where('id',7)['data'];
			$data = json_decode($data);
			?>
			<form role="form" onsubmit="submitForm(this,'forms.php')" prevent-default>

				<input type="hidden" name="id" value="7">
				<input type="hidden" name="action" value="submit">

				<div class="card-body">
					<div class="form-group">
						<label for="title">Title</label>
						<input type="text" class="form-control" id="title" name="title" value="<?= $data[0];?>" placeholder="title..." required>
					</div>

					<div class="form-group">
						<label for="mobile">Mobile</label>
						<input type="text" class="form-control" id="mobile" name="mobile" value="<?= $data[1];?>" placeholder="Mobile" required>
					</div>

					<div class="form-group">
						<label for="date">Date</label>
						<input type="text" class="form-control" id="date" name="date" value="<?= $data[2];?>" placeholder="date..." required>
					</div>

					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" class="form-control" id="email" name="email" value="<?= $data[3];?>" placeholder="email" required>
					</div>

					<div class="form-group">
						<label for="web">Web</label>
						<input type="text" class="form-control" id="web" name="web" value="<?= $data[4];?>" placeholder="web..." required>
					</div>

					<div class="form-group">
						<label for="location">Location</label>
						<input type="text" class="form-control" id="location" name="location" value="<?= $data[5];?>" placeholder="location" required>
					</div>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" name="submit" class="btn btn-primary">Save changes</button>
				</div>
			</form>
			<?php
		}
		if ($id == 8) {
			$data = data::where('id',8)['data'];
			$data = json_decode($data);
			?>
			<form role="form" onsubmit="submitForm(this,'forms.php')" enctype="multipart/form-data"prevent-default>

				<input type="hidden" name="id" value="8">
				<input type="hidden" name="action" value="submit">

				<div class="card-body">
					<div class="form-group">
						<label for="title1">Title 1</label>
						<input type="text" class="form-control" id="title1" name="title1" value="<?= $data[0];?>" placeholder="title 1..." required>
					</div>

					<div class="form-group">
						<label for="img1">Slider Image 1</label>
						<input type="file" class="form-control" id="img1" name="img1">
					</div>

					<div class="form-group">
						<label for="paragraph1">Description</label>
						<textarea id="editor1" class="form-control" rows="10" name="paragraph1" placeholder="paragraph1..." required><?= $data[2];?></textarea>
					</div>

					<div class="form-group">
						<label for="title2">Title 2</label>
						<input type="text" class="form-control" id="title2" name="title2" value="<?= $data[3];?>" placeholder="title 2..." required>
					</div>

					<div class="form-group">
						<label for="img2">Slider Image 2</label>
						<input type="file" class="form-control" id="img2" name="img2">
					</div>


					<div class="form-group">
						<label for="paragraph2">Description</label>
						<textarea id="editor2" class="form-control" rows="10" name="paragraph2" placeholder="paragraph2..." required><?= $data[5];?></textarea>
					</div>

					<div class="form-group">
						<label for="title3">Title 3</label>
						<input type="text" class="form-control" id="title3" name="title3" value="<?= $data[6];?>" placeholder="title 3..." required>
					</div>

					<div class="form-group">
						<label for="img3">Slider Image 3</label>
						<input type="file" class="form-control" id="img3" name="img3">
					</div>


					<div class="form-group">
						<label for="paragraph3">Description</label>
						<textarea id="editor3" class="form-control" rows="10" name="paragraph3" placeholder="paragraph3..." required><?= $data[8];?></textarea>
					</div>

					<div class="form-group">
						<label for="btn1">Button Name 1</label>
						<input type="text" class="form-control" id="btn1" name="btn1" value="<?= $data[9];?>" placeholder="btn name" required>
					</div>

					<div class="form-group">
						<label for="button_link1">Button Link 1</label>
						<input type="text" class="form-control" id="button_link1" name="button_link1" value="<?= $data[10];?>" placeholder="link_url 1..." required>
					</div>

					<div class="form-group">
						<label for="btn2">Button Name 2</label>
						<input type="text" class="form-control" id="btn2" name="btn2" value="<?= $data[11];?>" placeholder="btn name" required>
					</div>

					<div class="form-group">
						<label for="button_link2">Button Link 2</label>
						<input type="text" class="form-control" id="button_link2" name="button_link2" value="<?= $data[12];?>" placeholder="link_url 2..." required>
					</div>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" name="submit" class="btn btn-primary">Save changes</button>
				</div>
			</form>
            <!-- <script src="https://cdn.ckeditor.com/4.11.4/standard/ckeditor.js"></script> -->
            <!--<script src="plugins/ckeditor/ckeditor.js"></script>-->
            <script>
                CKEDITOR.replace('editor1');
                CKEDITOR.replace('editor2');
                CKEDITOR.replace('editor3');
            </script>
            <script src="js/bootstrap-ckeditor-fix.js"></script>
			<?php
		}	
		if ($id == 9) {
			$data = data::where('id',9)['data'];
			$data = json_decode($data);
			?>
			<form role="form" onsubmit="submitForm(this,'forms.php')" prevent-default>

				<input type="hidden" name="id" value="9">
				<input type="hidden" name="action" value="submit">
				<div class="card-body">

					<div class="form-group">
						<label for="title">Title </label>
						<input type="text" class="form-control" id="title" name="title" value="<?= $data[2];?>" placeholder="title ...">
					</div>

					<div class="form-group">
						<label for="paragraph">Paragraph </label>
						<input type="text" class="form-control" id="paragraph" name="paragraph" value="<?= $data[3];?>" placeholder="paragraph">
					</div>
					<div class="form-group">
						<label for="description">Description</label>
						<textarea id="editor1" class="form-control" rows="10" name="description" placeholder="description..." required><?= $data[0];?></textarea>
					</div>
					
					<div class="form-group">
						<label for="img1">Image 1</label>
						<input type="file" class="form-control" id="img1" name="img1">
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" name="submit" class="btn btn-primary">Save changes</button>
				</div>
			</form>
            <!-- <script src="https://cdn.ckeditor.com/4.11.4/standard/ckeditor.js"></script> -->
            <!--<script src="plugins/ckeditor/ckeditor.js"></script>-->
            <script>
                CKEDITOR.replace( 'editor1' );
            </script>
            <script src="js/bootstrap-ckeditor-fix.js"></script>
			<?php
		}
		if ($id == 10) {
			$data = data::where('id',10)['data'];
			$data = json_decode($data);
			?>
			<form role="form" onsubmit="submitForm(this,'forms.php')" prevent-default>

				<input type="hidden" name="id" value="10">
				<input type="hidden" name="action" value="submit">

					<div class="form-group">
						<label for="title">Title </label>
						<input type="text" class="form-control" id="title" name="title" value="<?= $data[1];?>" placeholder="title ...">
					</div>

					<div class="form-group">
						<label for="paragraph">Paragraph </label>
						<input type="text" class="form-control" id="paragraph" name="paragraph" value="<?= $data[2];?>" placeholder="paragraph">
					</div>			
				<div class="form-group">
					<label for="description">Description</label>
					<textarea id="editor1" class="form-control" rows="10" name="description" placeholder="description..." required><?= $data[0];?></textarea>
				</div>		
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" name="submit" class="btn btn-primary">Save changes</button>
			</div>
		</form>
        <!-- <script src="https://cdn.ckeditor.com/4.11.4/standard/ckeditor.js"></script> -->
        <!--<script src="plugins/ckeditor/ckeditor.js"></script>-->
        <script>
            CKEDITOR.replace( 'editor1' );
        </script>
        <script src="js/bootstrap-ckeditor-fix.js"></script>
		<?php
	}	
	if ($id == 11) {
		$data = data::where('id',11)['data'];
		$data = json_decode($data);
		?>
		<form role="form" onsubmit="submitForm(this,'forms.php')" prevent-default>

			<input type="hidden" name="id" value="11">
			<input type="hidden" name="action" value="submit">

			<div class="card-body">
					<div class="form-group">
						<label for="title">Title </label>
						<input type="text" class="form-control" id="title" name="title" value="<?= $data[1];?>" placeholder="title ...">
					</div>

					<div class="form-group">
						<label for="paragraph">Paragraph </label>
						<input type="text" class="form-control" id="paragraph" name="paragraph" value="<?= $data[2];?>" placeholder="paragraph">
					</div>	

				<div class="form-group">
					<label for="description">Description</label>
					<textarea id="editor1" class="form-control" rows="10" name="description" placeholder="description..." required><?= $data[0];?></textarea>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" name="submit" class="btn btn-primary">Save changes</button>
			</div>
		</form>
            <!-- <script src="https://cdn.ckeditor.com/4.11.4/standard/ckeditor.js"></script> -->
            <!--<script src="plugins/ckeditor/ckeditor.js"></script>-->
            <script>
                CKEDITOR.replace( 'editor1' );
            </script>
            <script src="js/bootstrap-ckeditor-fix.js"></script>
		<?php
	}
	if ($id == 12) {
		$data = data::where('id',12)['data'];
		$data = json_decode($data);
		?>
		<form role="form" onsubmit="submitForm(this,'forms.php')" enctype="multipart/form-data"prevent-default>

			<input type="hidden" name="id" value="12">
			<input type="hidden" name="action" value="submit">

			<div class="card-body">
					<div class="form-group">
						<label for="title">Title </label>
						<input type="text" class="form-control" id="title" name="title" value="<?= $data[2];?>" placeholder="title ...">
					</div>

					<div class="form-group">
						<label for="paragraph">Paragraph </label>
						<input type="text" class="form-control" id="paragraph" name="paragraph" value="<?= $data[3];?>" placeholder="paragraph">
					</div>	
				<div class="form-group">
					<label for="img1">Image</label>
					<input type="file" class="form-control" id="img1" name="img1" value="" placeholder="Image">
				</div>

				<div class="form-group">
					<label for="description2">Description</label>
					<textarea id="editor1" class="form-control" rows="10" name="description" placeholder="Description..." required><?= $data[1];?></textarea>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" name="submit" class="btn btn-primary">Save changes</button>
			</div>
		</form>
        <!-- <script src="https://cdn.ckeditor.com/4.11.4/standard/ckeditor.js"></script> -->
        <!--<script src="plugins/ckeditor/ckeditor.js"></script>-->
        <script>
            CKEDITOR.replace( 'editor1' );
        </script>
        <script src="js/bootstrap-ckeditor-fix.js"></script>
		<?php

	}
	if ($id == 13) {
		$data = data::where('id',13)['data'];
		$data = json_decode($data);
		?>
		<form role="form" onsubmit="submitForm(this,'forms.php')" enctype="multipart/form-data"prevent-default>

			<input type="hidden" name="id" value="13">
			<input type="hidden" name="action" value="submit">

			<div class="card-body">
				<div class="form-group">
					<label for="img">Logo</label>
					<input type="file" class="form-control" id="img" name="img">
				</div>

				<div class="form-group">
					<label for="title_sec1">Title</label>
					<input type="text" class="form-control" id="title_sec1" name="title_sec1" value="<?= $data[1];?>" placeholder="title section 1...">
				</div>

				<div class="form-group">
					<label for="title_link1">FaceBook</label>
					<input type="text" class="form-control" id="title_link1" name="title_link1" value="<?= $data[2];?>" placeholder="FaceBook link...">
				</div>

				<div class="form-group">
					<label for="title_link2">Twitter</label>
					<input type="text" class="form-control" id="title_link2" name="title_link2" value="<?= $data[3];?>" placeholder="Twitter link...">
				</div>

				<div class="form-group">
					<label for="title_link3">YouTube</label>
					<input type="text" class="form-control" id="title_link3" name="title_link3" value="<?= $data[4];?>" placeholder="YouTube link...">
				</div>

				<div class="form-group">
					<label for="title_link4">Instagram</label>
					<input type="text" class="form-control" id="title_link4" name="title_link4" value="<?= $data[5];?>" placeholder="Instagram link...">
				</div>

				<div class="form-group">
					<label for="title_link5">Linked in</label>
					<input type="text" class="form-control" id="title_link5" name="title_link5" value="<?= $data[6];?>" placeholder="Linked in link...">
				</div>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" name="submit" class="btn btn-primary">Save changes</button>
			</div>
		</form>
		<?php
	}
	if ($id == 14) {
		$data = data::where('id',14)['data'];
		$data = json_decode($data);
		?>
		<form role="form" onsubmit="submitForm(this,'forms.php')" enctype="multipart/form-data"prevent-default>

			<input type="hidden" name="id" value="14">
			<input type="hidden" name="action" value="submit">

			<div class="card-body">

				<div class="form-group">
					<label for="title_sec2">Title Section 2</label>
					<input type="text" class="form-control" id="title_sec2" name="title_sec2" value="<?= $data[0];?>" placeholder="Title Section 2...">
				</div>

				<div class="form-group">
					<label for="paragraph">Paragraph</label>
					<input type="text" class="form-control" id="paragraph" name="paragraph" value="<?= $data[1];?>" placeholder="Paragraph">
				</div>

				<div class="form-group">
					<label for="tel">Tel</label>
					<input type="text" class="form-control" id="tel" name="tel" value="<?= $data[2];?>" placeholder="Tel" required>
				</div>

				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" class="form-control" id="email" name="email" value="<?= $data[3];?>" placeholder="Email" required>
				</div>

				<div class="form-group">
					<label for="hours">Work Hours</label>
					<input type="text" class="form-control" id="hours" name="hours" value="<?= $data[4];?>" placeholder="Work Hours" required>
				</div>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" name="submit" class="btn btn-primary">Save changes</button>
			</div>
		</form>
		<?php
	}
if ($id == 15) {
		$data = data::where('id',15)['data'];
		$data = json_decode($data);
		?>
		<form role="form" onsubmit="submitForm(this,'forms.php')" prevent-default>

			<input type="hidden" name="id" value="15">
			<input type="hidden" name="action" value="submit">

			<div class="card-body">

					<div class="form-group">
						<label for="title">Title </label>
						<input type="text" class="form-control" id="title" name="title" value="<?= $data[0];?>" placeholder="title ...">
					</div>

					<div class="form-group">
						<label for="paragraph">Paragraph </label>
						<input type="text" class="form-control" id="paragraph" name="paragraph" value="<?= $data[1];?>" placeholder="paragraph">
					</div>	
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" name="submit" class="btn btn-primary">Save changes</button>
			</div>
		</form>
		<?php
	}
if ($id == 16) {
		$data = data::where('id',16)['data'];
		$data = json_decode($data);
		?>
		<form role="form" onsubmit="submitForm(this,'forms.php')" prevent-default>

			<input type="hidden" name="id" value="16">
			<input type="hidden" name="action" value="submit">

			<div class="card-body">

					<div class="form-group">
						<label for="title">Title </label>
						<input type="text" class="form-control" id="title" name="title" value="<?= $data[0];?>" placeholder="title ...">
					</div>

					<div class="form-group">
						<label for="paragraph">Paragraph </label>
						<input type="text" class="form-control" id="paragraph" name="paragraph" value="<?= $data[1];?>" placeholder="paragraph">
					</div>	
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" name="submit" class="btn btn-primary">Save changes</button>
			</div>
		</form>
		<?php
	}
if ($id == 17) {
		$data = data::where('id',17)['data'];
		$data = json_decode($data);
		?>
		<form role="form" onsubmit="submitForm(this,'forms.php')" prevent-default>

			<input type="hidden" name="id" value="17">
			<input type="hidden" name="action" value="submit">

			<div class="card-body">

					<div class="form-group">
						<label for="title">Title </label>
						<input type="text" class="form-control" id="title" name="title" value="<?= $data[0];?>" placeholder="title ...">
					</div>

					<div class="form-group">
						<label for="paragraph">Paragraph </label>
						<input type="text" class="form-control" id="paragraph" name="paragraph" value="<?= $data[1];?>" placeholder="paragraph">
					</div>	
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" name="submit" class="btn btn-primary">Save changes</button>
			</div>
		</form>
		<?php
	}
if ($id == 18) {
		$data = data::where('id',18)['data'];
		$data = json_decode($data);
		?>
		<form role="form" onsubmit="submitForm(this,'forms.php')" prevent-default>

			<input type="hidden" name="id" value="18">
			<input type="hidden" name="action" value="submit">

			<div class="card-body">

					<div class="form-group">
						<label for="title">Title </label>
						<input type="text" class="form-control" id="title" name="title" value="<?= $data[0];?>" placeholder="title ...">
					</div>

					<div class="form-group">
						<label for="paragraph">Paragraph </label>
						<input type="text" class="form-control" id="paragraph" name="paragraph" value="<?= $data[1];?>" placeholder="paragraph">
					</div>	
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" name="submit" class="btn btn-primary">Save changes</button>
			</div>
		</form>
		<?php
	}					
}}


