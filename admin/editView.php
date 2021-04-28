<?php 

require ('../config/config.php');

session_start();
$id = $_GET['id'];

if (!isset($_SESSION["data_user"])){
  header("Location: login.php");
}

$query = mysqli_query($conn, "SELECT * FROM dt_pemain WHERE id_pemain = '$id'");
$fetch = mysqli_fetch_assoc($query);

$o = explode(', ', $fetch['adm']);

if (isset($_POST['ubah'])){
    $id = $fetch['id_pemain'];
    $nama_pemain = $_POST['nama_pemain'];
    $kota = $_POST['kota'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $alamat = $_POST['alamat'];
    $ssb_now = $_POST['ssb_now'];
    $ayah = $_POST['ayah'];
    $ibu = $_POST['ibu'];
    $telphone = $_POST['telphone'];
    // logik upload gambar
    $gambarLama = $_POST['old_gambar'];
    if ( $_FILES['gambar']['error'] === 4){
        $gambar = $gambarLama;
    }else{
        $gambar = $_FILES['gambar']['name'];
        $source = $_FILES['gambar']['tmp_name'];
        $folder = 'ft_pemain/';
        move_uploaded_file($source, $folder.$gambar);
    }
    // 
    $bb = $_POST['bb'];
    $tb = $_POST['tb'];
    // 
    $adm = implode(', ', $_POST['adm']);
    // 
    $gol_darah = $_POST['gol_darah'];
    $jk = $_POST['jk'];
    //
    $sd = $_POST['sd'];
    $smp = $_POST['smp'];
    // 
    $rw_akademi = $_POST['rw_akademi'];
    $rw_prestasi = $_POST['rw_prestasi'];

    $query = mysqli_query($conn, "UPDATE dt_pemain SET
        nama_pemain = '$nama_pemain',
        kota = '$kota',
        tgl_lahir = '$tgl_lahir',
        alamat = '$alamat',
        ssb_now = '$ssb_now',
        ayah = '$ayah',
        ibu = '$ibu',
        telphone = '$telphone',
        gambar = '$gambar',
        bb = '$bb',
        tb = '$tb',
        adm = '$adm',
        gol_darah = '$gol_darah',
        jk = '$jk',
        sd = '$sd',
        smp = '$smp',
        rw_akademi = '$rw_akademi',
        rw_prestasi = '$rw_prestasi'
            
        WHERE id_pemain = '$id'
        ") or die (mysqli_error($conn));

    if($query){
        echo ' 
        <script>
        alert("Berhasil Ubah Data");
        window.location.href = "editData.php";
        </script>';
    }
}

  
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
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- icon title -->
    <link rel="icon" href="../image/logo.png">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

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
                                    <?= $_SESSION['data_user']['nama']; ?> - Web Developer
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
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-table"></i> <span>Tabel</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="dashboard.php"><i class="fa fa-circle-o"></i>Daftar Nama Pemain</a></li>
                        </ul>
                    </li>
                    <li class="treeview active">
                        <a href="#">
                            <i class="fa fa-edit"></i> <span>Formulir</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="tambahForm.php"><i class="fa fa-circle-o"></i>Tambah Data Pemain</a></li>
                            <li class="active"><a href="editData.php"><i class="fa fa-circle-o"></i>Edit Data Pemain</a></li>
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
                    <li><a href="dashboard.php"><i class="fa fa-dashboard"></i>Menu Utama</a></li>
                    <li><a href="#">Formulir</a></li>
                    <li class="active"><a href="#">Edit Data Pemain</a></li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <!-- Horizontal Form -->
                        <div class="box box-success">
                            <div class="box-header with-border">
                                <h3 class="box-title text-center" style="width:100%">Edit Data Pemain Baru</h3>
                                <a href="editData.php"><i class="fa fa-arrow-left"></i> Kembali ke Tabel</a>
                            </div>
                            <!-- /.box-header -->
                            <!-- form start  enctype="multipart/form-data"-->
                            <form class="form-horizontal" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="old_gambar" value="<?= $fetch['gambar']?>">
                                <div class="box-body">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="full_name" class="col-sm-2 control-label">Nama Lengkap</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="nama_pemain" class="form-control"
                                                    id="full_name" value="<?= $fetch['nama_pemain']; ?>"> 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Kota Lahir</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="kota" class="form-control" id="inputEmail3" value="<?= $fetch['kota']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Tgl Lahir</label>
                                            <div class="col-sm-8">
                                                <input type="date" name="tgl_lahir" class="form-control"
                                                    id="inputEmail3" value="<?= $fetch['tgl_lahir']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Alamat</label>
                                            <div class="col-sm-8">
                                                <textarea name="alamat" id="alamat" class="form-control" cols="20"
                                                    rows="4"><?= $fetch['alamat']; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">SSB Pemain Saat
                                                Ini</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="ssb_now" id="inputtext3" value="<?= $fetch['ssb_now']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputtext3" class="col-sm-2 control-label">Nama Ayah</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="inputtext3" name="ayah" value="<?= $fetch['ayah']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputtext3" class="col-sm-2 control-label">Nama Ibu</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="inputtext3" name="ibu" value="<?= $fetch['ibu']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputtext3" class="col-sm-2 control-label">Nomor
                                                Telphone</label>
                                            <div class="col-sm-8">
                                                <div class="input-group">
                                                    <span class="input-group-addon">+62</span>
                                                    <input type="text" class="form-control" id="inputtext3"
                                                        name="telphone" value="<?= $fetch['telphone']; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputtext3" class="col-sm-2 control-label">Foto Pemain</label>
                                            <div class="col-sm-8">
                                                <input type="file" class="form-control" id="inputtext3" name="gambar">
                                                <img src="ft_pemain/<?= $fetch['gambar']?>" style="max-width: 50px; max-height:50px; margin:5px;"> <br>
                                                <small class="text-info">*Usahakan foto menggunakan jersey SSB
                                                    Pemain</small>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputtext3" class="col-sm-2 control-label">Berat Badan</label>
                                            <div class="col-sm-8">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="inputtext3" name="bb" value="<?= $fetch['bb']; ?>">
                                                    <span class="input-group-addon">Kg</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputtext3" class="col-sm-2 control-label">Tinggi Badan</label>
                                            <div class="col-sm-8">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="inputtext3" name="tb" value="<?= $fetch['tb']; ?>">
                                                    <span class="input-group-addon">Cm</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Administrasi Pemain</label>
                                            <div class="col-sm-8">
                                                <div class="checkox">
                                                    <label>
                                                        <input type="checkbox" name="adm[]" class="minimal"
                                                            value="AKTE" <?php in_array('AKTE', $o) ? print 'checked' : ' ' ?>>AKTE 
                                                    </label>
                                                    <label style="margin-left: 3em;">
                                                        <input type="checkbox" name="adm[]" class="minimal"
                                                            value="NISN" <?php in_array('NISN', $o) ? print 'checked' : ' ' ?>>NISN
                                                    </label>
                                                    <label style="margin-left: 3em;">
                                                        <input type="checkbox" name="adm[]" class="minimal"
                                                            value="KK" <?php in_array('KK', $o) ? print 'checked' : ' ' ?>>KK
                                                    </label>
                                                    <label style="margin-left: 3em;">
                                                        <input type="checkbox" name="adm[]" class="minimal"
                                                            value="PASSPOR" <?php in_array('PASSPOR', $o) ? print 'checked' : ' ' ?>>PASSPOR
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputtext3" class="col-sm-2 control-label">Golongan
                                                Darah</label>
                                            <div class="col-sm-8">
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="gol_darah" value="A" <?php if ($fetch['gol_darah'] == "A") {
                                                        echo "checked";
                                                    } ?>> A
                                                    </label>  
                                                    <label style="margin-left: 2em;">
                                                        <input type="radio" name="gol_darah" value="AB" <?php if ($fetch['gol_darah'] == "AB") {
                                                        echo "checked";
                                                    } ?>> AB
                                                    </label>
                                                    <label style="margin-left: 2em;">
                                                        <input type="radio" name="gol_darah" value="B" <?php if ($fetch['gol_darah'] == "B") {
                                                        echo "checked";
                                                    } ?>> B
                                                    </label>
                                                    <label style="margin-left: 2em;">
                                                        <input type="radio" name="gol_darah" value="O" <?php if ($fetch['gol_darah'] == "O") {
                                                        echo "checked";
                                                    } ?>> O
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputtext3" class="col-sm-2 control-label">Jenis Kelamin</label>
                                            <div class="col-sm-8">
                                                <label>
                                                    <input type="radio" name="jk" value="Laki-Laki" <?php if ($fetch['jk'] == "Laki-Laki") {
                                                        echo "checked";
                                                    } ?>> Laki - Laki
                                                </label>
                                                <label style="margin-left: 3em;">
                                                    <input type="radio" name="jk" value="Perempuan" <?php if ($fetch['jk'] == "Perempuan") {
                                                        echo "checked";
                                                    } ?>> Perempuan
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="col-md-3 text-center">
                                        <label>Generated QrCode Automaticly</label>
                                        <h1>Gambar QRCODE</h1>
                                    </div> -->
                                    <div class="col-xs-12">
                                        <label class="text-center bg-success" style="width: 100%;margin:0;">Riwayat
                                            Pendidikan Formal</label>
                                        <table class="table table-bordered">
                                            <tr class="bg-green">
                                                <th class="text-center">SD</th>
                                                <th class="text-center">SMP</th>
                                            </tr>
                                            <tr>
                                                <td><input type="text" class="form-control" name="sd" placeholder="SD" value="<?= $fetch['sd']; ?>">
                                                </td>
                                                <td><input type="text" class="form-control" name="smp" value="<?= $fetch['smp']; ?>"
                                                        placeholder="SMP"></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="col-xs-12">
                                        <h3 class="box-title bg-green text-center" style="padding: 5px;">Riwayat Akademi
                                            Sepak Bola</h3>
                                        <!-- /.box-header -->
                                        <textarea class="textarea" placeholder="Place some text here" name="rw_akademi"
                                            style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?= $fetch['rw_akademi']; ?></textarea>
                                    </div>
                                    <div class="col-xs-12">
                                        <h3 class="box-title bg-green text-center" style="padding: 5px;">Riwayat
                                            Prestasi Sepak Bola</h3>
                                        <!-- /.box-header -->
                                        <textarea class="textarea" placeholder="Place some text here"
                                            style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"
                                            name="rw_prestasi"><?= $fetch['rw_prestasi']; ?></textarea>
                                    </div>
                                </div>

                                <!-- /.box-body -->
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-success pull-right btn-flat"
                                        name="ubah">Ubah
                                        Data</button>
                                </div>
                                <!-- /.box-footer -->
                            </form>
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

    <!-- SlimScroll -->
    <script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- page script -->
    <!-- Bootstrap WYSIHTML5 -->
    <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <script>
        $(function () {

            //bootstrap WYSIHTML5 - text editor
            $('.textarea').wysihtml5({
                toolbar: {
                    "image": false,
                    "link": false
                }
            })
        })
    </script>
</body>

</html>