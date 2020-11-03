<?php 
require_once "../../clasess/db.php";
require_once "../../clasess/model.php";
require_once "../../clasess/tables.php";
require_once "../clasess/gallery.php";

if(!isset($_POST['action'])){
  exit;
}
$action = model::secure($_POST['action']);

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

if($action == 'table'){
  $draw = model::secure($_POST["draw"]);
  $start  = model::secure($_POST["start"]);//Paging first record indicator.
  $length = model::secure($_POST['length']);//Number of records that the ta
  $recordsTotal = $recordsFiltered = gallery::count_all();
  $gallery = gallerycat::all_sql("ORDER BY sort limit $start, $length ");
  if ($gallery) {
    foreach ($gallery as $value) {
      $id = $value['id'] ;
      $value['image'] = "<img src='../".$value["image"]."' alt='".$value["image"]."' width='100px' height='100px'>";
      $value['actions'] = "<span title='Update'>
      <a href='gallery_manage1.php?id=$id' >
      <i class='fa fa-edit' aria-hidden='true'></i>
      </a>
      </span>
      <span title='Remove'>
      <a class='action' url='gallery.php' 
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
if($action == 'table1'){
  $id = model::secure($_POST["id"]);
  $draw = model::secure($_POST["draw"]);
  $start  = model::secure($_POST["start"]);//Paging first record indicator.
  $length = model::secure($_POST['length']);//Number of records that the ta
  $recordsTotal = $recordsFiltered = gallery::count_all();
  $gallery = gallery::all_sql("where gallery_cat_id = $id ORDER BY sort limit $start, $length ");
  if ($gallery) {
    foreach ($gallery as $value) {
      $id = $value['id'] ;
      $value['image'] = "<img src='../".$value["image"]."' alt='".$value["image"]."' width='100px' height='100px'>";
      $value['actions'] = "<span title='Update'>
      <a href='gallery_edit.php?id=$id' >
      <i class='fa fa-edit' aria-hidden='true'></i>
      </a>
      </span>
      <span title='Remove'>
      <a class='action' url='gallery.php' 
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
  $id = model::secure($_POST['id']);
  $gallery_cat_id = model::secure($_POST['gallery_cat_id']);
  $title = model::secure($_POST['title']);
  $sort = model::secure($_POST['sort']);
  if (empty($id) || empty($gallery_cat_id) || empty($title)) {
    $json['notification'] = array('type'=>'danger', 'msg'=>' Data not completed!');
    exit(json_encode($json, JSON_PRETTY_PRINT));
  }
  $image = gallery::where('id',$id )['image'];        
  if (empty($_FILES['image']['name'])) {
    $image = $image ;
  }else{
    $image =imagehandler("image");
  }
  $x = array();
  $x['gallery_cat_id'] = $gallery_cat_id;
  $x['title'] = $title;
  $x['image'] = $image;
  $x['sort'] = $sort;
  $update = gallery::updateArray($x,'id',$id);
  if ($update = true) {
    $json['notification'] = array('type'=>'success', 'msg'=>'Data updated!');
    $json['redirect'] = 'gallery_manage.php';
    exit(json_encode($json, JSON_PRETTY_PRINT));
  }
  $json['notification'] = array('type'=>'danger', 'msg'=>' Data not updated!');
  $json['reload'] = true;
  exit(json_encode($json, JSON_PRETTY_PRINT));
}

if($action == 'add'){
  $gallery_cat_id = model::secure($_POST['gallery_cat_id']);
  $title = model::secure($_POST['title']);
  $sort = model::secure($_POST['sort']);
  $image = $_FILES['image']['name'];
  if (empty($gallery_cat_id) || empty($title)) {
    $json['notification'] = array('type'=>'danger', 'msg'=>'Data not completed!');
    exit(json_encode($json, JSON_PRETTY_PRINT));
  }
  $array = explode(".",$_FILES["image"]["name"]);
  $fileName = $array[0];
  $fileExtension = strtolower(end($array));
  if($fileExtension == "zip"){
    if(is_dir("../../img/gallery/".$fileName) == false){
      move_uploaded_file($_FILES["image"]["tmp_name"],"../../img/gallery".$_FILES["image"]["name"]);
      $zip = new ZipArchive();
      $zip -> open("../../img/gallery".$_FILES["image"]["name"]);
      for($num = 0; $num < $zip->numFiles; $num++){
        $fileInfo = $zip->statIndex($num);
        $zip->extractTo("../../img/gallery/".$fileName);
        $x = array();
        $x['gallery_cat_id'] = $gallery_cat_id;
        $x['title'] = $title;
        $x['image'] = "img/gallery/".$fileName."/".$fileInfo["name"];
        $x['sort'] = $sort;
        $save = gallery::saveArray($x);
      }
      if ($save) {
        $json['notification'] = array('type'=>'success', 'msg'=>'Data updated!');
        $json['reload'] = true;
        exit(json_encode($json, JSON_PRETTY_PRINT));
      }
      $zip->close();
      unlink("../../img/gallery".$_FILES["image"]["name"]);
    }else{
      $json['notification'] = array('type'=>'danger', 'msg'=>'Has already been unzipped');
      $json['reload'] = true;
      exit(json_encode($json, JSON_PRETTY_PRINT));
    }
  }elseif ($fileExtension == "png" || $fileExtension == "jpg") {
    $image  = imagehandler("image");
    $x = array();
    $x['gallery_cat_id'] = $gallery_cat_id;
    $x['title'] = $title;
    $x['image'] = $image;
    $x['sort'] = $sort;
    $save = gallery::saveArray($x);
    if($save){
      $json['notification'] = array('type'=>'success', 'msg'=>'Data updated!');
      $json['reload'] = true;
      exit(json_encode($json, JSON_PRETTY_PRINT));
    }
    $json['notification'] = array('type'=>'danger', 'msg'=>'Data not completed');
    $json['reload'] = true;
    exit(json_encode($json, JSON_PRETTY_PRINT)); 
  }else{
    $json['notification'] = array('type'=>'danger', 'msg'=>'An unknown error');
    $json['reload'] = true;
    exit(json_encode($json, JSON_PRETTY_PRINT)); 
  }
}

if($action == 'deleteform'){
  $id = model::secure($_POST['id']);
  $sql = new gallery;
  $sql->id = $id;
  $sql->delete();
  if($sql = true){
    $json['notification'] = array('type'=>'success', 'msg'=>'Data Deleted!');
    $json['reload'] = true;
    exit(json_encode($json, JSON_PRETTY_PRINT));
  }
  $json['notification'] = array('type'=>'danger', 'msg'=>' Data not Deleted!');
  $json['reload'] = true;
  exit(json_encode($json, JSON_PRETTY_PRINT));
}