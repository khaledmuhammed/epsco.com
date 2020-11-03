<?php
session_start();// Starting Session
require_once '../clasess/db.php';
require_once '../clasess/model.php';
require_once '../clasess/tables.php';
if (isset($_SESSION['aname'])) {
    $user_check=$_SESSION['aname'];
    $row = admins::where('username',$user_check);
    $login_session = $row['username'];
};
//redirect to login page if not OK
if(!isset($login_session)){
    mysqli_close($conn); // Closing Connection
    echo "<script type='text/javascript'> document.location = '../login.php'; </script>";
    exit;
};
?>