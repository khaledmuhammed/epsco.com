<?php
require_once "../clasess/db.php";
require_once "../clasess/model.php";
require_once "../clasess/tables.php";
if(!isset($_POST['action'])){
    exit;
}
$action = model::secure($_POST['action']);
if ($action == 'submit'){

    $adminname = model::secure($_POST['user_name']);
    $password = model::secure($_POST['password']);
    $result=admins::all_sql("WHERE username='$adminname' AND password='$password'");
    $count = count($result);
    foreach ($result as $value) {
        $user_id = $value['id'];
    }
    if($count == 1){

        session_start();
        $_SESSION['aname']= $adminname;
        $_SESSION['aid']= $user_id;
        $json['redirect'] = "index.php";
        exit(json_encode($json, JSON_PRETTY_PRINT));

    } else {

        $json['notification'] = array('type'=>'danger', 'msg'=>'username or password is not correct!');
        exit(json_encode($json, JSON_PRETTY_PRINT));
    }
    mysqli_close($conn);
}

