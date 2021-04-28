<?php 
require '../config/config.php';

session_start();

$id =  $_GET['id'];

if (!isset($_SESSION["data_user"])){
  header("Location: login.php");
}


$query = mysqli_query($conn, "SELECT * FROM dt_pemain WHERE id_pemain = '$id'");
$fetch = mysqli_fetch_assoc($query);
$nama_pemain = $fetch['nama_pemain'];

$path = 'qrcode/';
$file = $path."kode".$id.".png";

require_once('../phpqrcode/qrlib.php');
$code = QRcode::png($nama_pemain,  $file, 'L', 8, 2);


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
            <a href="index2.html" class="logo">
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
                                        <a href="logout.php" class="btn btn-default btn-flat bg-green">Keluar <i
                                                class="fa fa-sign-out"></i> </a>
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
                            <li><a href="#"><i class="fa fa-circle-o"></i>Daftar Nama Pemain</a></li>
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
                    <li class="active"><a href="dashboard.php">Daftar Nama Pemain</a></li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box box-success">
                            <div class="box-header with-border">
                                <h3 class="box-title">Data Pemain</h3>
                                <a href="dashboard.php" class="pull-right"><i class="fa fa-arrow-left"></i> Kembali ke
                                    Tabel</a>
                            </div>
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <label class="control-label">- Nama Pemain -</label>
                                        <p><?= $fetch['nama_pemain']; ?></p>
                                        <hr>
                                        <label class="control-label">- Kota Kelahiran -</label>
                                        <p><?= $fetch['kota']; ?></p>
                                        <hr>
                                        <label class="control-label">- No telphone -</label>
                                        <p><?= $fetch['telphone']; ?></p>
                                        <hr>
                                        <label class="control-label">- Alamat Pemain -</label>
                                        <p><?= $fetch['alamat']; ?></p>
                                        <hr>
                                        <label class="control-label">- Tinggi Pemain -</label>
                                        <p><?= $fetch['tb']; ?> cm</p>
                                        <hr>
                                        <label class="control-label">- Adminsitrasi Pemain -</label>
                                        <p><?= $fetch['adm']; ?></p>
                                        <hr>
                                        <label class="control-label">- Riwayat SD -</label>
                                        <p><?= $fetch['sd']; ?></p>
                                        <hr>
                                        <label class="control-label">- SSB Saat Ini -</label>
                                        <p><?= $fetch['ssb_now']; ?></p>
                                        <hr>
                                        <?php $date = date_create($fetch['tgl_lahir']); ?>
                                        <label class="control-label">- Tgl Lahir -</label>
                                        <p><?= date_format($date, 'j F Y') ?></p>
                                        <hr>
                                        <label class="control-label">- Ayah -</label>
                                        <p><?= $fetch['ayah']; ?></p>
                                        <hr>
                                        <label class="control-label">- Ibu -</label>
                                        <p><?= $fetch['ibu']; ?></p>
                                        <hr>
                                        <label class="control-label">- Berat Badan -</label>
                                        <p><?= $fetch['bb']; ?> Kg</p>
                                        <hr>
                                        <label class="control-label">- Riwayat SMP -</label>
                                        <p><?= $fetch['smp']; ?></p>
                                        <hr>
                                    </div>
                                    <div class="col-sm-4">
                                        <center><img src="ft_pemain/<?= $fetch['gambar']?>"
                                                style="max-width:150px; max-height:150px; overflow:hidden;"></center>
                                        <h4 class="text-center bg-green">Qrcode Pemain</h4>
                                        <center><img src="qrcode/kode<?= $id?>.png"></center>
                                        <h5 class="text-center text-uppercase"><b><?= $fetch['nama_pemain']; ?></b></h5>
                                        <h4 class="text-center bg-red">Kartu Identitas Pemain</h4>
                                        <div class="kip" style="position:relative; width:fit-content">
                                            <center>
                                                <img src="../image/KIP.png" width="80%">
                                            </center>
                                            <div class="foto"
                                                style="position:absolute; top: 0px; transform:translate(4em,4em)">
                                                <img src="ft_pemain/<?= $fetch['gambar']?>"
                                                    style="border-radius: 50%; max-width:80px; max-height:80px">
                                            </div>
                                            <div class="logo"
                                                style="position:absolute; bottom:1.5em; transform: translate(5em,0);">
                                                <img src="../image/pssi.png" style="max-width: 25px;">
                                                <img src="../image/logo.png" style="max-width:30px">
                                            </div>
                                            <div class="judul"
                                                style="position: absolute; top:3em; transform: translate(10em,0 );">
                                                <b>Kartu Identitas Pemain (KIP)</b>
                                                <div class="isi"
                                                    style="font-size: 12px; margin-left:10px; max-width:150px">
                                                    <label>ID : <?= $fetch['id_pemain']; ?></label>
                                                    <h5 style="margin: 0;">Nama :</h5>
                                                    <b><?= $fetch['nama_pemain']; ?></b>
                                                    <h5 style="margin: 0;">Alamat :</h5>
                                                    <b style="max-width: 40px;"><?= $fetch['alamat']; ?></b>
                                                </div>
                                            </div>
                                            <div class="qrcode-kartu"
                                                style="position:absolute; top:0; right:4em; transform:translate(0, 5em)">
                                                <img src="qrcode/kode<?= $id?>.png" style='max-width:50px'>
                                            </div>
                                        </div> <br>
                                        <div class="col" style="word-wrap:break-word; margin-top:10px;">
                                            <label class="control-label">- Riwayat Akademi Bola Sebelumnya -</label>
                                            <p><?= $fetch['rw_akademi']; ?></p>
                                            <hr>
                                        </div>
                                        <div class="col" style="word-wrap: break-word;">
                                            <label class="control-label">- Riwayat Prestasi Bola Sebelumnya -</label>
                                            <p><?= $fetch['rw_prestasi']; ?></p>
                                            <hr>
                                        </div>
                                        <div class="col">
                                            <label class="control-label">- Jenis Kelamin -</label>
                                            <p><?= $fetch['jk']; ?></p>
                                            <hr>
                                        </div>
                                        <div class="col">
                                            <label class="control-label">- Golongan Darah -</label>
                                            <p><?= $fetch['gol_darah']; ?></p>
                                            <hr>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- /.row -->
                        </div>
                    </div>
                </div>

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