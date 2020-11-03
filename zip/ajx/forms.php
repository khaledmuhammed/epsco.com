<?php 
require_once "../clasess/db.php";
require_once "../clasess/model.php";
require_once "../clasess/tables.php";

require_once "../clasess/forms.php";

if(!isset($_POST['action'])){
	exit;
}

function imagehandler($image) {
	$base_file = pathinfo($_FILES[$image]["name"]);
	$db_file = "img/".$base_file['basename'];
	$target_file = "../" . $db_file;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	$uploadOk = 1;

	$check = getimagesize($_FILES[$image]["tmp_name"]);
	if($check == false) {
		echo "<div class=\"alert alert-danger\" role=\"alert\"><b>File# </b> is not an image.</div>";
		$uploadOk = 0;
	}

  	// Check file size
	if ($_FILES[$image]["size"] > 3145728) {
		echo "<div class=\"alert alert-danger\" role=\"alert\"><b>Image# </b> error, file is too large.</div>";
		$uploadOk = 0;
	}
  	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png") {
		echo "<div class=\"alert alert-danger\" role=\"alert\"><b>Image# </b> error, only JPG, PNG,JPEG are allowed.</div>";
		$uploadOk = 0;
	}
  	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
		echo "<div class=\"alert alert-danger\" role=\"alert\">Sorry, <b>Image# </b>  was not uploaded.</div>";
  	// if everything is ok, try to upload file
	} else {
		if (move_uploaded_file($_FILES[$image]["tmp_name"], $target_file)) {
			
			return($db_file);
		} 
	}
}

function filehandler($file) {

	
	$base_file = pathinfo($_FILES[$file]["name"]);
	$db_file = "file/".$base_file['basename'];
	$target_file = "../" . $db_file;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	$uploadOk = 1;

	$check = getimagesize($_FILES[$file]["tmp_name"]);

  	// Check file size
	if ($_FILES[$file]["size"] > 9999999999999999999999999) {
		echo "<div class=\"alert alert-danger\" role=\"alert\"><b>Image# </b> error, file is too large.</div>";
		$uploadOk = 0;
	}

  	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
		echo "<div class=\"alert alert-danger\" role=\"alert\">Sorry, <b>Image# </b>  was not uploaded.</div>";
  	// if everything is ok, try to upload file
	} else {
		if (move_uploaded_file($_FILES[$file]["tmp_name"], $target_file)) {
			
			return($db_file);
		} 
	}
}

$action = model::secure($_POST['action']);

if($action == 'form'){
	$id = model::secure($_POST['id']);
	dataClass::form($id);
}

if ($action == 'submit') {

	$id = model::secure($_POST['id']);

	if ($id == 1) {
		$title = model::secure($_POST['title']);
		$btn = model::secure($_POST['btn']);
		if (!empty($button_link = $_FILES['button_link']['name'])) {
			$button_link = filehandler("button_link");
		}else{
			$data = data::where('id',1)['data'];        
			$button_link = json_decode($data);
			$button_link = $button_link[2];
		}
		$value = array($title,$btn,$button_link);
		$obj = json_encode($value,JSON_UNESCAPED_UNICODE);
		$x = array();
		$x['data'] = $obj;
		$update = data::updateArray($x,'id',$id);
		if ($update = true) {
			$json['notification'] = array('type'=>'success', 'msg'=>'Data updated!');
			$json['reload'] = true;
			exit(json_encode($json, JSON_PRETTY_PRINT));
		}
		$json['notification'] = array('type'=>'danger', 'msg'=>' Data not updated!');
		$json['reload'] = true;
		exit(json_encode($json, JSON_PRETTY_PRINT));
	}

	if ($id == 2) {
		$paragraph = model::secure($_POST['paragraph']);
		$video_link = model::secure($_POST['video_link']);
		$value = array($paragraph,$video_link);
		$obj = json_encode($value,JSON_UNESCAPED_UNICODE);
		$x = array();
		$x['data'] = $obj;
		$update = data::updateArray($x,'id',$id);
		if ($update = true) {
			$json['notification'] = array('type'=>'success', 'msg'=>'Data updated!');
			$json['reload'] = true;
			exit(json_encode($json, JSON_PRETTY_PRINT));
		}
		$json['notification'] = array('type'=>'danger', 'msg'=>' Data not updated!');
		$json['reload'] = true;
		exit(json_encode($json, JSON_PRETTY_PRINT));
	}
	if ($id == 3) {
		$title = model::secure($_POST['title']);
		$paragraph = model::secure($_POST['paragraph']);
		$title1 = model::secure($_POST['title1']);
		$paragraph1 = model::secure($_POST['paragraph1']);									
		$title2 = model::secure($_POST['title2']);
		$paragraph2 = model::secure($_POST['paragraph2']);
		$title3 = model::secure($_POST['title3']);
		$paragraph3 = model::secure($_POST['paragraph3']);

		$data = data::where('id',3)['data'];        
		$imageData = json_decode($data);

		if (empty($_FILES['img1']['name'])) {
			$img1 = $imageData[2];
		}else{
			$img1 = imagehandler("img1");
		}
		if (empty($_FILES['img2']['name'])) {
			$img2 = $imageData[5];
		}else{
			$img2 = imagehandler("img2");
		}
		if (empty($_FILES['img3']['name'])) {
			$img3 = $imageData[8];
		}else{
			$img3 = imagehandler("img3");
		}

		$value = array($title,$paragraph,$img1,$title1,$paragraph1,$img2,$title2,$paragraph2,$img3,$title3,$paragraph3);
		$obj = json_encode($value,JSON_UNESCAPED_UNICODE);
		$x = array();
		$x['data'] = $obj;
		$update = data::updateArray($x,'id',$id);
		if ($update = true) {
			$json['notification'] = array('type'=>'success', 'msg'=>'Data updated!');
			$json['reload'] = true;
			exit(json_encode($json, JSON_PRETTY_PRINT));
		}
		$json['notification'] = array('type'=>'danger', 'msg'=>' Data not updated!');
		$json['reload'] = true;
		exit(json_encode($json, JSON_PRETTY_PRINT));
	}

	if ($id == 4) {
		$title1 = model::secure($_POST['title1']);
		$paragraph1 = model::secure($_POST['paragraph1']);
		$title2 = model::secure($_POST['title2']);
		$paragraph2 = model::secure($_POST['paragraph2']);
		$title3 = model::secure($_POST['title3']);
		$paragraph3 = model::secure($_POST['paragraph3']);									
		
		$value = array($title1,$paragraph1,$title2,$paragraph2,$title3,$paragraph3);
		$obj = json_encode($value,JSON_UNESCAPED_UNICODE);
		$x = array();
		$x['data'] = $obj;
		$update = data::updateArray($x,'id',$id);
		if ($update = true) {
			$json['notification'] = array('type'=>'success', 'msg'=>'Data updated!');
			$json['reload'] = true;
			exit(json_encode($json, JSON_PRETTY_PRINT));
		}
		$json['notification'] = array('type'=>'danger', 'msg'=>' Data not updated!');
		$json['reload'] = true;
		exit(json_encode($json, JSON_PRETTY_PRINT));;
	}

	if ($id == 5) {
		$title = model::secure($_POST['title']);
		$paragraph = model::secure($_POST['paragraph']);
		$title1 = model::secure($_POST['title1']);
		$paragraph1 = model::secure($_POST['paragraph1']);
		$description1 = model::secure($_POST['description1']);
		$title2 = model::secure($_POST['title2']);
		$paragraph2 = model::secure($_POST['paragraph2']);
		$description2 = model::secure($_POST['description2']);
		$title3 = model::secure($_POST['title3']);
		$paragraph3 = model::secure($_POST['paragraph3']);
		$description3 = model::secure($_POST['description3']);
		$data = data::where('id',5)['data'];        
		$imageData = json_decode($data);

		if (empty($_FILES['img1']['name'])) {
			$img1 = $imageData[2];
		}else{
			$img1 = imagehandler("img1");
		}
		if (empty($_FILES['img2']['name'])) {
			$img2 = $imageData[6];
		}else{
			$img2 = imagehandler("img2");
		}
		if (empty($_FILES['img3']['name'])) {
			$img3 = $imageData[10];
		}else{
			$img3 = imagehandler("img3");
		}


		$value = array($title1,$paragraph1,$img1,$description1,$title2,$paragraph2,$img2,$description2,$title3,$paragraph3,$img3,$description3,$title,$paragraph);
		$obj = json_encode($value,JSON_UNESCAPED_UNICODE);

		$x = array();
		$x['data'] = $obj;
		$update = data::updateArray($x,'id',$id);
		if ($update = true) {
			$json['notification'] = array('type'=>'success', 'msg'=>'Data updated!');
			$json['reload'] = true;
			exit(json_encode($json, JSON_PRETTY_PRINT));
		}
		$json['notification'] = array('type'=>'danger', 'msg'=>' Data not updated!');
		$json['reload'] = true;
		exit(json_encode($json, JSON_PRETTY_PRINT));
	}

	if ($id == 6) {
		$data = data::where('id',6)['data'];
		$imageData = json_decode($data);
		if (!empty($_FILES['clientlogo']['name'])) {
			$image = imagehandler("clientlogo");
			array_push($imageData, $image);
			$obj = json_encode($imageData,JSON_UNESCAPED_UNICODE);
			$x = array();
			$x['data'] = $obj;
		$update = data::updateArray($x,'id',$id);
		if ($update = true) {
			$json['notification'] = array('type'=>'success', 'msg'=>'Data updated!');
			$json['reload'] = true;
			exit(json_encode($json, JSON_PRETTY_PRINT));
		}
		$json['notification'] = array('type'=>'danger', 'msg'=>' Data not updated!');
		$json['reload'] = true;
		exit(json_encode($json, JSON_PRETTY_PRINT));;
		}
	}

	if ($id == 7) {
		$title = model::secure($_POST['title']);
		$mobile = model::secure($_POST['mobile']);
		$date = model::secure($_POST['date']);									
		$email = model::secure($_POST['email']);
		$web = model::secure($_POST['web']);
		$location = model::secure($_POST['location']);

		$value = array($title,$mobile,$date,$email,$web,$location);
		$obj = json_encode($value,JSON_UNESCAPED_UNICODE);
		$x = array();
		$x['data'] = $obj;
		$update = data::updateArray($x,'id',$id);
		if ($update = true) {
			$json['notification'] = array('type'=>'success', 'msg'=>'Data updated!');
			$json['reload'] = true;
			exit(json_encode($json, JSON_PRETTY_PRINT));
		}
		$json['notification'] = array('type'=>'danger', 'msg'=>' Data not updated!');
		$json['reload'] = true;
		exit(json_encode($json, JSON_PRETTY_PRINT));
	}

	if ($id == 8) {
		$title1 = model::secure($_POST['title1']);
		$paragraph1 = model::secure($_POST['paragraph1']);									
		$btn1 = model::secure($_POST['btn1']);
		$btn2 = model::secure($_POST['btn2']);
		$title2 = model::secure($_POST['title2']);
		$paragraph2 = model::secure($_POST['paragraph2']);
		$title3 = model::secure($_POST['title3']);
		$paragraph3 = model::secure($_POST['paragraph3']);
		$button_link1 = model::secure($_POST['button_link1']);
		$button_link2 = model::secure($_POST['button_link2']);
		$data = data::where('id',8)['data'];        
		$imageData = json_decode($data);

		if (empty($_FILES['img1']['name'])) {
			$img1 = $imageData[1];
		}else{
			$img1 = imagehandler("img1");
		}
		if (empty($_FILES['img2']['name'])) {
			$img2 = $imageData[4];
		}else{
			$img2 = imagehandler("img2");
		}
		if (empty($_FILES['img3']['name'])) {
			$img3 = $imageData[7];
		}else{
			$img3 = imagehandler("img3");
		}

		$value = array($title1,$img1,$paragraph1,$title2,$img2,$paragraph2,$title3,$img3,$paragraph3,$btn1,$button_link1,$btn2,$button_link2);
		$obj = json_encode($value,JSON_UNESCAPED_UNICODE);
		$x = array();
		$x['data'] = $obj;
		$update = data::updateArray($x,'id',$id);
		if ($update = true) {
			$json['notification'] = array('type'=>'success', 'msg'=>'Data updated!');
			$json['reload'] = true;
			exit(json_encode($json, JSON_PRETTY_PRINT));
		}
		$json['notification'] = array('type'=>'danger', 'msg'=>' Data not updated!');
		$json['reload'] = true;
		exit(json_encode($json, JSON_PRETTY_PRINT));
	}

	if ($id == 9) {
		$description = model::secure($_POST['description']);
		$title = model::secure($_POST['title']);
		$paragraph = model::secure($_POST['paragraph']);	
		$data = data::where('id',9)['data'];        
		$imageData = json_decode($data);

		if (empty($_FILES['img1']['name'])) {
			$img1 = $imageData[1];
		}else{
			$img1 = imagehandler("img1");
		}
		$value = array($description,$img1,$title,$paragraph);
		$obj = json_encode($value,JSON_UNESCAPED_UNICODE);
		$x = array();
		$x['data'] = $obj;
		$update = data::updateArray($x,'id',$id);
		if ($update = true) {
			$json['notification'] = array('type'=>'success', 'msg'=>'Data updated!');
			$json['reload'] = true;
			exit(json_encode($json, JSON_PRETTY_PRINT));
		}
		$json['notification'] = array('type'=>'danger', 'msg'=>' Data not updated!');
		$json['reload'] = true;
		exit(json_encode($json, JSON_PRETTY_PRINT));
	}
	if ($id == 10) {
		$description = model::secure($_POST['description']);
		$title = model::secure($_POST['title']);
		$paragraph = model::secure($_POST['paragraph']);
		$value = array($description,$title,$paragraph);
		$obj = json_encode($value,JSON_UNESCAPED_UNICODE);
		$x = array();
		$x['data'] = $obj;
		$update = data::updateArray($x,'id',$id);
		if ($update = true) {
			$json['notification'] = array('type'=>'success', 'msg'=>'Data updated!');
			$json['reload'] = true;
			exit(json_encode($json, JSON_PRETTY_PRINT));
		}
		$json['notification'] = array('type'=>'danger', 'msg'=>' Data not updated!');
		$json['reload'] = true;
		exit(json_encode($json, JSON_PRETTY_PRINT));
	}
	if ($id == 11) {
		$description = model::secure($_POST['description']);
		$title = model::secure($_POST['title']);
		$paragraph = model::secure($_POST['paragraph']);
		$value = array($description,$title,$paragraph);
		$obj = json_encode($value,JSON_UNESCAPED_UNICODE);
		$x = array();
		$x['data'] = $obj;
		$update = data::updateArray($x,'id',$id);
		if ($update = true) {
			$json['notification'] = array('type'=>'success', 'msg'=>'Data updated!');
			$json['reload'] = true;
			exit(json_encode($json, JSON_PRETTY_PRINT));
		}
		$json['notification'] = array('type'=>'danger', 'msg'=>' Data not updated!');
		$json['reload'] = true;
		exit(json_encode($json, JSON_PRETTY_PRINT));
	}
	if ($id == 12) {
		$description = model::secure($_POST['description']);
		$title = model::secure($_POST['title']);
		$paragraph = model::secure($_POST['paragraph']);
		$data = data::where('id',12)['data'];        
		$imageData = json_decode($data);

		if (empty($_FILES['img1']['name'])) {
			$img1 = $imageData[0];
		}else{
			$img1 = imagehandler("img1");
		}

		$value = array($img1,$description,$title,$paragraph);
		$obj = json_encode($value, JSON_UNESCAPED_UNICODE);
		
		$x = array();
		$x['data'] = $obj;
		$update = data::updateArray($x,'id',$id);
		if ($update = true) {
			$json['notification'] = array('type'=>'success', 'msg'=>'Data updated!');
			$json['reload'] = true;
			exit(json_encode($json, JSON_PRETTY_PRINT));
		}
		$json['notification'] = array('type'=>'danger', 'msg'=>' Data not updated!');
		$json['reload'] = true;
		exit(json_encode($json, JSON_PRETTY_PRINT));
	}
	if ($id == 13) {
		$title_sec1 = model::secure($_POST['title_sec1']);
		$title_link1 = model::secure($_POST['title_link1']);
		$title_link2 = model::secure($_POST['title_link2']);
		$title_link3 = model::secure($_POST['title_link3']);
		$title_link4 = model::secure($_POST['title_link4']);
		$title_link5 = model::secure($_POST['title_link5']);
		$data = data::where('id',13)['data'];        
		$imageData = json_decode($data);

		if (empty($_FILES['img']['name'])) {
			$img = $imageData[0];
		}else{
			$img = imagehandler("img");
		}

		$value = array($img,$title_sec1,$title_link1,$title_link2,$title_link3,$title_link4,$title_link5);
		$obj = json_encode($value,JSON_UNESCAPED_UNICODE);
		
		$x = array();
		$x['data'] = $obj;
		$update = data::updateArray($x,'id',$id);
		if ($update = true) {
			$json['notification'] = array('type'=>'success', 'msg'=>'Data updated!');
			$json['reload'] = true;
			exit(json_encode($json, JSON_PRETTY_PRINT));
		}
		$json['notification'] = array('type'=>'danger', 'msg'=>' Data not updated!');
		$json['reload'] = true;
		exit(json_encode($json, JSON_PRETTY_PRINT));
	}

	if ($id == 14) {
		$title_sec2 = model::secure($_POST['title_sec2']);
		$paragraph = model::secure($_POST['paragraph']);
		$tel = model::secure($_POST['tel']);
		$email = model::secure($_POST['email']);
		$hours = model::secure($_POST['hours']);

		$value = array($title_sec2,$paragraph,$tel,$email,$hours);

		$obj = json_encode($value,JSON_UNESCAPED_UNICODE);
	
		$x = array();
		$x['data'] = $obj;
		$update = data::updateArray($x,'id',$id);
		if ($update = true) {
			$json['notification'] = array('type'=>'success', 'msg'=>'Data updated!');
			$json['reload'] = true;
			exit(json_encode($json, JSON_PRETTY_PRINT));
		}
		$json['notification'] = array('type'=>'danger', 'msg'=>' Data not updated!');
		$json['reload'] = true;
		exit(json_encode($json, JSON_PRETTY_PRINT));
	}
	if ($id == 15) {
		$title = model::secure($_POST['title']);
		$paragraph = model::secure($_POST['paragraph']);
		$value = array($title,$paragraph);
		$obj = json_encode($value,JSON_UNESCAPED_UNICODE);
		$x = array();
		$x['data'] = $obj;
		$update = data::updateArray($x,'id',$id);
		if ($update = true) {
			$json['notification'] = array('type'=>'success', 'msg'=>'Data updated!');
			$json['reload'] = true;
			exit(json_encode($json, JSON_PRETTY_PRINT));
		}
		$json['notification'] = array('type'=>'danger', 'msg'=>' Data not updated!');
		$json['reload'] = true;
		exit(json_encode($json, JSON_PRETTY_PRINT));
	}
	if ($id == 16) {
		$title = model::secure($_POST['title']);
		$paragraph = model::secure($_POST['paragraph']);
		$value = array($title,$paragraph);
		$obj = json_encode($value,JSON_UNESCAPED_UNICODE);
		$x = array();
		$x['data'] = $obj;
		$update = data::updateArray($x,'id',$id);
		if ($update = true) {
			$json['notification'] = array('type'=>'success', 'msg'=>'Data updated!');
			$json['reload'] = true;
			exit(json_encode($json, JSON_PRETTY_PRINT));
		}
		$json['notification'] = array('type'=>'danger', 'msg'=>' Data not updated!');
		$json['reload'] = true;
		exit(json_encode($json, JSON_PRETTY_PRINT));
	}
	if ($id == 17) {
		$title = model::secure($_POST['title']);
		$paragraph = model::secure($_POST['paragraph']);
		$value = array($title,$paragraph);
		$obj = json_encode($value,JSON_UNESCAPED_UNICODE);
		$x = array();
		$x['data'] = $obj;
		$update = data::updateArray($x,'id',$id);
		if ($update = true) {
			$json['notification'] = array('type'=>'success', 'msg'=>'Data updated!');
			$json['reload'] = true;
			exit(json_encode($json, JSON_PRETTY_PRINT));
		}
		$json['notification'] = array('type'=>'danger', 'msg'=>' Data not updated!');
		$json['reload'] = true;
		exit(json_encode($json, JSON_PRETTY_PRINT));
	}
	if ($id == 18) {
		$title = model::secure($_POST['title']);
		$paragraph = model::secure($_POST['paragraph']);
		$value = array($title,$paragraph);
		$obj = json_encode($value,JSON_UNESCAPED_UNICODE);
		$x = array();
		$x['data'] = $obj;
		$update = data::updateArray($x,'id',$id);
		if ($update = true) {
			$json['notification'] = array('type'=>'success', 'msg'=>'Data updated!');
			$json['reload'] = true;
			exit(json_encode($json, JSON_PRETTY_PRINT));
		}
		$json['notification'] = array('type'=>'danger', 'msg'=>' Data not updated!');
		$json['reload'] = true;
		exit(json_encode($json, JSON_PRETTY_PRINT));
	}
}

// start delete client logo //
if($action == 'deleteClientLogo'){
	$id = model::secure($_POST['id']);
	$data = data::where('id',6)['data'];        
	$imageData = json_decode($data);
	if (($key = array_search($id, $imageData)) !== false) {
		unset($imageData[$key]);
	}
	$obj = json_encode(array_values($imageData));
	$x = array();
	$x['data'] = $obj;
	$update = data::updateArray($x,'id',6);
	if ($update = true) {
		$json['notification'] = array('type'=>'success', 'msg'=>'Data updated!');
		$json['reload'] = true;
		exit(json_encode($json, JSON_PRETTY_PRINT));
	}
	$json['notification'] = array('type'=>'danger', 'msg'=>' Data not updated!');
	$json['reload'] = true;
	exit(json_encode($json, JSON_PRETTY_PRINT));
}
// end delete client logo //

if($action == 'submit_email'){
	$name = model::secure($_POST['name']);
	$subject = model::secure($_POST['subject']);
	$txt = model::secure($_POST['message']);
	$headers = model::secure($_POST['email']);
	$to = "info@epsco.com.eg";
	$mail = mail($to,$subject,$txt,$headers);
	if($mail = true){
		$json['notification'] = array('type'=>'success', 'msg'=>'Done!');
		$json['reload'] = true;
		exit(json_encode($json, JSON_PRETTY_PRINT));
	}
	$json['notification'] = array('type'=>'danger', 'msg'=>' Data not updated!');
	$json['reload'] = true;
	exit(json_encode($json, JSON_PRETTY_PRINT));
}