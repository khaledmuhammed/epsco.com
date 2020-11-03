<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin area!</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href="../plugins/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>

    <body class="hold-transition login-page">
      <div class="login-box">
        <div class="login-logo">
          <a href="index.php">SEO Panel Script Login</a>
        </div><!-- /.login-logo -->

        <?php
        require_once "clasess/db.php";
        require_once "clasess/model.php";
        require_once "clasess/tables.php";
        require_once "clasess/admins.php";
        ?>

        <?php
        session_start();
        if (isset($_SESSION['aname'])) {
          $user_check = $_SESSION['aname'];
    // SQL Query To Fetch Complete Information Of User
    // $ses_sql=mysqli_query($conn , "SELECT `username` FROM `admins` WHERE username='$user_check'");
    // $row = mysqli_fetch_assoc($ses_sql);
          $login_session =admins::all_sql('WHERE username ="$user_check"');
        };
        if(isset($login_session)){
          echo "<script type='text/javascript'> document.location = 'index.php'; </script>";
        }
        ?>
        <div class="login-box-body">
          <p class="login-box-msg">Sign in to access</p>

          <?php adminsClass::form();?>
        </div><!-- /.login-box-body -->
      </div><!-- /.login-box -->

      <!-- jQuery 2.1.4 -->
      <script src="../plugins/jquery/jquery.min.js"></script>
      <script src="includes/core.js"></script>
      <!-- Bootstrap 3.3.5 -->
      <script src="../plugins/bootstrap/js/bootstrap.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/mouse0270-bootstrap-notify/3.1.7/bootstrap-notify.min.js"></script>
      <!-- iCheck -->
      <script src="../plugins/iCheck/icheck.min.js"></script>
      <script>
        $(function () {
          $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
        });
      </script>
    </body>
    </html>
