<?php 
require_once "../../clasess/db.php";
require_once "../../clasess/model.php";
require_once "../../clasess/tables.php";
require_once "../clasess/cats.php";
if(!isset($_POST['action'])){
  exit;
}
$action = model::secure($_POST['action']);
if($action == 'table'){
  $draw = model::secure($_POST["draw"]);
  $start  = model::secure($_POST["start"]);//Paging first record indicator.
  $length = model::secure($_POST['length']);//Number of records that the ta
  $recordsTotal = $recordsFiltered = cats::count_all();
  $cats = cats::all_sql("ORDER BY sort limit $start, $length ");
  if($cats){
    foreach ($cats as $value) {
      $id = $value['id'] ;
      $value['actions'] = "<span title='Update'>
      <a href='categories-edit.php?id=$id' >
      <i class='fa fa-edit' aria-hidden='true'></i>
      </a>
      </span>
      <span title='Remove'>
      <a class='action' url='cats.php' 
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
  $cat  = model::secure($_POST['cat']);
  $sort = model::secure($_POST['sort']);
    if (empty($id) || empty($cat)) {
    $json['notification'] = array('type'=>'danger', 'msg'=>' Data not completed!');
    exit(json_encode($json, JSON_PRETTY_PRINT));
  }
    $x = array();
    $x['cat'] = $cat;
    $x['sort'] = $sort;
    $update = cats::updateArray($x,'id',$id);
  if ($update = true) {
    $json['notification'] = array('type'=>'success', 'msg'=>'Data updated!');
     $json['redirect'] = 'categories-manage.php';
    exit(json_encode($json, JSON_PRETTY_PRINT));
  }
  $json['notification'] = array('type'=>'danger', 'msg'=>' Data not updated!');
  $json['reload'] = true;
  exit(json_encode($json, JSON_PRETTY_PRINT));
}

if($action == 'add'){
  $cat  = model::secure($_POST['cat']);
  $sort = model::secure($_POST['sort']);
  if (empty($cat)) {
    $json['notification'] = array('type'=>'danger', 'msg'=>'Data not completed!');
    exit(json_encode($json, JSON_PRETTY_PRINT));
  }
  $x = array();
  $x['cat']  = $cat;
  $x['sort'] = $sort;
  $save = cats::saveArray($x);
  if($save){
    $json['notification'] = array('type'=>'success', 'msg'=>'Categorie Created!');
    $json['reload'] = true;
    exit(json_encode($json, JSON_PRETTY_PRINT));
  }
  $json['notification'] = array('type'=>'danger', 'msg'=>'Data not completed');
  $json['reload'] = true;
  exit(json_encode($json, JSON_PRETTY_PRINT));
}

if($action == 'deleteform'){
  $id      = model::secure($_POST['id']);
  $sql     = new cats;
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
exit;
?>
}