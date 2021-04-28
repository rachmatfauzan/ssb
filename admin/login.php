<?php 

session_start();
require '../config/config.php';

if (isset($_SESSION["data_user"])) {
  header("Location: dashboard.php");
}

if(isset($_POST['masuk'])){
  $id = $_POST["id"];
  $psw = $_POST["psw"];
  
  $query = mysqli_query($conn, "SELECT * FROM user WHERE id_masuk = '$id'");
  $data = mysqli_fetch_assoc($query);
  $rows = mysqli_num_rows($query);

  if(mysqli_num_rows($query) == 1 ){

    if ($psw == $data['password']){
      $_SESSION['data_user'] = $data;
      var_dump($_SESSION["data_user"]);
      header('Location: dashboard.php');
    }else{
      echo ' 
      <script>
      alert("PASSWORD ANDA SALAH !!");
      </script>
      ';
    }
  } else {
    echo ' 
      <script>
      alert("ID TIDAK DITEMUKAN !!");
      </script>
      ';
  }
}




?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href="#"><img src="../image/logo.png" width="100%"></a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
      <p class="login-box-msg">Junjung Sportifitas Tanpa Batas</p>

      <form method="post">
        <div class="form-group has-feedback">
          <input type="text" class="form-control" placeholder="ID" name="id" autofocus>
          <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" class="form-control" placeholder="Password" name="psw">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-xs-4">
            <button type="submit" class="btn btn-success btn-block btn-flat" name="masuk">Masuk</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

    </div>
    <!-- /.login-box-body -->
  </div>
  <!-- /.login-box -->

  <!-- jQuery 3 -->
  <script src="../../bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- iCheck -->
  <script src="../../plugins/iCheck/icheck.min.js"></script>
</body>

</html>