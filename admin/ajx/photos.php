<?php 
require_once "../../clasess/db.php";
require_once "../../clasess/model.php";
require_once "../../clasess/tables.php";
require_once "../clasess/photos.php";
$config = config::find(1);
if(!isset($_POST['action'])){
  exit;
}

function imagehandler($image) {
  $base_file = pathinfo($_FILES[$image]["name"]);
  $db_file = "img/".$base_file['basename'];
  $target_file = "../../" . $db_file;
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

$action = model::secure($_POST['action']);

if($action == 'table'){
  $draw = model::secure($_POST["draw"]);
  $start  = model::secure($_POST["start"]);//Paging first record indicator.
  $length = model::secure($_POST['length']);//Number of records that the ta
  $recordsTotal = $recordsFiltered = photos::count_all();
  $photos = photos::all_sql("limit $start, $length");
  if ($photos) {
    foreach ($photos as $value) {
      $id = $value['id'] ;
      $pass = $value['pass'];
      $value['passd'] = "<p>".$config['domain']."/".$config['lang']."/".$value["pass"]."</p>" ;
      $value['pass'] = "<img src='../".$value["pass"]."' alt='".$value["pass"]."' width='100px' height='100px'>";
      $value['actions'] = "<span title='Update'><a href='photo_edit.php?id=$id'>
      <i class='fa fa-edit' aria-hidden='true'></i>
      </a>
      </span>
      <span title='Remove'>
      <a class='action' url='photos.php' 
      data = '{\"action\":\"deleteform\",\"id\":\"$id\"}' href='#' >
      <i class='fa fa-trash' aria-hidden='true'></i>
      </a>
      </span>" ;
      $data[] = $value ;
    }
  }
  /* Response to client before JSON encoding */
  $response = array(
    "draw" => intval($draw),
    "recordsTotal" => $recordsTotal,
    "recordsFiltered" => $recordsFiltered,
    "data" => $data
  );

  echo json_encode($response);  
}

if($action == 'update'){
  $id   = model::secure($_POST['id']);
  $image  = $_FILES['pass']['name'];

  if (empty($id) || empty($image)) {
    $json['notification'] = array('type'=>'danger', 'msg'=>' Data not completed!');
    exit(json_encode($json, JSON_PRETTY_PRINT));
  }

  $image = photos::where('id',$id )['pass'];        
  if (empty($_FILES['pass']['name'])) {
    $image = $image ;
  }else{
    $image = imagehandler("pass");
  }

  $x = array();
  $x['pass'] = $image;
  $update = photos::updateArray($x,'id',$id);
  if ($update) {
    $json['notification'] = array('type'=>'success', 'msg'=>'Data updated!');
    $json['redirect'] = 'photo_manage.php';
    exit(json_encode($json, JSON_PRETTY_PRINT));
  }
  $json['notification'] = array('type'=>'danger', 'msg'=>' Data not updated!');
  $json['reload'] = true;
  exit(json_encode($json, JSON_PRETTY_PRINT));
}

if($action == 'add'){
  $image  = $_FILES['pass']['name'];
  if (empty($image)) {
    $json['notification'] = array('type'=>'danger', 'msg'=>'Data not completed!');
    exit(json_encode($json, JSON_PRETTY_PRINT));
  }
  $image  = imagehandler("pass");
  $x = array();
  $x['pass']    = $image;
  $save = photos::saveArray($x);
  if($save){
    $json['notification'] = array('type'=>'success', 'msg'=>'Data Added!');
    $json['reload'] = true;
    exit(json_encode($json, JSON_PRETTY_PRINT));
  }
  $json['notification'] = array('type'=>'danger', 'msg'=>'Data not completed!');
  $json['reload'] = true;
  exit(json_encode($json, JSON_PRETTY_PRINT));
}

if($action == 'deleteform'){
  $id = model::secure($_POST['id']);
  $sql = new photos;
  $sql->id = $id;
  $sql->delete();
  if($sql){
    $json['notification'] = array('type'=>'success', 'msg'=>'Data Deleted!');
    $json['reload'] = true;
    exit(json_encode($json, JSON_PRETTY_PRINT));
  }
  $json['notification'] = array('type'=>'danger', 'msg'=>' Data not Deleted!');
  $json['reload'] = true;
  exit(json_encode($json, JSON_PRETTY_PRINT));
}