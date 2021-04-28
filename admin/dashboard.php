<?php 
require '../config/config.php';

session_start();


if (!isset($_SESSION["data_user"])){
  header("Location: login.php");
}

$query = mysqli_query($conn, "SELECT * FROM dt_pemain ORDER BY id_pemain DESC");
$jumlahPemain = mysqli_num_rows($query);

?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Data Tables</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="icon" href="../image/logo.png">
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

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

<body class="hold-transition skin-black sidebar-mini">
  <div class="wrapper">

    <header class="main-header">
      <!-- Logo -->
      <a href="dashboard.php" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><img src="../image/logo.png" width="60%"></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><img src="../image/logo.png" width="40%"></span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                <span class="hidden-xs"><?= $_SESSION['data_user']['nama']; ?></span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-body">
                  <p>
                    <?= $_SESSION['data_user']['nama']; ?> - Admin Fossbat <br>
                    <small>Member since Nov. 2012</small>
                  </p>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-right">
                    <a href="logout.php" class="btn btn-default btn-flat bg-green">Keluar <i class="fa fa-sign-out"></i>
                    </a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">MENU UTAMA</li>
          <li class="treeview active">
            <a href="#">
              <i class="fa fa-table"></i> <span>Tabel</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="active"><a href="#"><i class="fa fa-circle-o"></i>Daftar Nama Pemain</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-edit"></i> <span>Formulir</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="tambahForm.php"><i class="fa fa-circle-o"></i>Tambah Data Pemain</a></li>
              <li><a href="editData.php"><i class="fa fa-circle-o"></i>Edit Data Pemain</a></li>
            </ul>
          </li>

        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1 class="text-center">FOSSBAT (Forum Sekolah Sepak Bola Batam)</h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i>Menu Utama</a></li>
          <li><a href="#">Tabel</a></li>
          <li class="active"><a href="#">Daftar Nama Pemain</a></li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box box-success">
              <div class="box-header with-border">
                <h3 class="box-title"><i class="fa fa-folder-open"></i> Data Pemain Yang Telah Teregistrasi</h3>
                <div class="small-box bg-green">
                  <div class="inner text-Black">
                    <h3><?= $jumlahPemain; ?></h3>
                    <p>Pemain Lolos Registrasi</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-person-add"></i>
                  </div>
                  <a href="#" class="small-box-footer text-black" style="opacity: 0.6;">- Sportifitas Tanpa Batas -</a>
                </div>
              </div>
              <!-- /.box-header -->
              <div class="box-body table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th width="5%">No</th>
                      <th>Nama Pemain</th>
                      <th>Asal SSB</th>
                      <th>Tgl Lahir</th>
                      <th>Kota</th>
                      <th>Jenis Kelamin</th>
                      <th width="10%">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i =1; ?>
                    <?php foreach ($query as $data) : ?>
                    <tr style="text-transform: capitalize;">
                      <td class="text-center"><?= $i; ?></td>
                      <td><?= $data['nama_pemain']; ?></td>
                      <td><?= $data['ssb_now']; ?></td>
                      <?php $date = date_create($data['tgl_lahir']); ?>
                      <td><?= date_format($date, 'j F Y') ?></td>
                      <td><?= $data['kota']; ?></td>
                      <td><?= $data['jk']; ?></td>
                      <td>
                        <a href="mpdf/printData.php?id=<?=$data['id_pemain']?>" class="btn btn-flat btn-success btn-xs"><i class="fa fa-print"></i> PDF</a>
                        <a href="detail.php?id=<?= $data['id_pemain']?>" class="btn btn-flat btn-xs">Detail <i
                            class="fa fa-arrow-right"></i></a>
                      </td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>

                </table>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <div class="pull-right hidden-xs">
        <b>Version</b> 2.4.0
      </div>
      <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
      reserved.
    </footer>

  </div>
  <!-- ./wrapper -->

  <!-- jQuery 3 -->
  <script src="bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- DataTables -->
  <script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <!-- SlimScroll -->
  <script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="bower_components/fastclick/lib/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <!-- page script -->
  <script>
    $(function () {
      $('#example1').DataTable()
    })
  </script>
</body>

</html>