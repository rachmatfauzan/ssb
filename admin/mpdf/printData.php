<?php
// Require composer autoload
require_once __DIR__ . '/vendor/autoload.php';
require '../../config/config.php';
$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM dt_pemain WHERE id_pemain='$id'");
$fetch = mysqli_fetch_assoc($query);

$date = date_create($fetch['tgl_lahir']);
$date = date_format($date, 'j M Y');
// Create an instance of the class:
$mpdf = new \Mpdf\Mpdf();

$html = '
<!DOCTYPE html>
<html>
<head>
<style>
.logo{
    width:100%;
    text-align:center;
}
body{
    border: 2px solid grey;
    font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
}
h3{
    width:100%;
    text-align:center;
    background-color:#00A65A;
    color:white;
}
.row{
    display: inline;
}
p{
    margin:0;
    padding:5px;
    font-size:13px;
    background-color:rgb(221, 255, 241);
}

</style>


</head>
<body>
<div class="header">
    <div class="logo">
        <img src="../../image/logo.png" width="100">
    </div>
    <h3>Data Pemain FOSSBAT</h3>
</div>
    <hr style="margin:0; padding:0;"> <hr>
<div class="row">
    <div class="isi">
        <h6 style="margin:0; padding:0; ">-- Nama Pemain --</h6> 
        <p>'.$fetch['nama_pemain'].'</p>
        <h6 style="margin:0; padding:0; ">-- Kota Kelahiran --</h6> 
        <p>'.$fetch['kota'].'</p>
        <h6 style="margin:0; padding:0; ">-- tgl lahir --</h6> 
        <p>'.$date.'</p>
        <h6 style="margin:0; padding:0; ">-- SSB Saat Ini --</h6> 
        <p>'.$fetch['ssb_now'].'</p>
        <h6 style="margin:0; padding:0; ">-- Administrasi Pemain --</h6> 
        <p>'.$fetch['adm'].'</p>
        <h6 style="margin:0; padding:0; ">-- Golongan Darah --</h6> 
        <p>'.$fetch['gol_darah'].'</p>
        <h6 style="margin:0; padding:0; ">-- Jenis Kelamin --</h6> 
        <p>'.$fetch['jk'].'</p>
        <h6 style="margin:0; padding:0; ">-- Berat Badan --</h6> 
        <p>'.$fetch['bb'].' Kg</p>
        <h6 style="margin:0; padding:0; ">-- Tinggi Badan --</h6> 
        <p>'.$fetch['tb'].' Cm</p>
        <h6 style="margin:0; padding:0; ">-- Alamat --</h6> 
        <p>'.$fetch['alamat'].' Cm</p>
        <h6 style="margin:0; padding:0; ">-- Riwayat SD --</h6> 
        <p>'.$fetch['sd'].'</p>
        <h6 style="margin:0; padding:0; ">-- Riwayat SMP --</h6> 
        <p>'.$fetch['smp'].'</p>
    </div>
    
    <table cellspacing="10" style="width:100%; text-align:center">
        <tr>
            <th>Foto Pemain</th>
            <th>QrCode Pemain</th>
        </tr>
        <tr>
            <td><img src="../../admin/ft_pemain/'.$fetch['gambar'].'" style="max-width:100px; max-height:100px;"></td>
            <td> <img src="../qrcode/kode'.$fetch['id_pemain'].'.png" style="max-width:100px; max-height:100px;">
            <p style="text-transform:uppercase; background:none;">'.$fetch['nama_pemain'].'</p>
            </td>
        </tr> 
        <tr>
            <td colspan=2>
                <img src="../../image/pssi.png" width="100">
            </td>
        </tr>
    </table>
</div>
</body>

';
$mpdf->WriteHTML($html);
$mpdf->SetFooter('FOSSBAT Batam');

// Output a PDF file directly to the browser
$mpdf->Output('datapemain.pdf', 'I');


?>



<!DOCTYPE html>
<html>

<head>
    <style>
        .row-dalam {
            background-color: cadetblue;

        }
    </style>


</head>

<body class="hold-transition skin-black sidebar-mini">
    <div class="wrapper">
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box box-success">
                            <div class="box-header with-border">
                                <h3 class="box-title">Data Pemain</h3>
                            </div>
                            <div class="box-body">
                                <div class="row-dalam">
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
                                    <div class="col-sm-4">
                                        <center><img src="../../admin/ft_pemain/<?= $fetch['gambar']?>"
                                                style="max-width:150px; max-height:150px; overflow:hidden;"></center>
                                        <h4 class="text-center bg-green">Qrcode Pemain</h4>
                                        <center><img src="../qrcode/kode<?= $id?>.png"></center>
                                        <h5 class="text-center text-uppercase"><b><?= $fetch['nama_pemain']; ?></b></h5>
                                        <h4 class="text-center bg-red">Kartu Identitas Pemain</h4>
                                        <div class="kip" style="position:relative; width:fit-content">
                                            <center>
                                                <img src="../../image/KIP.png" width="40%">
                                            </center>
                                            <div class="foto"
                                                style="position:absolute; top: 0px; transform:translate(4em,4em)">
                                                <img src="../ft_pemain/<?= $fetch['gambar']?>"
                                                    style="border-radius: 50%; max-width:80px; max-height:80px">
                                            </div>
                                            <div class="logo"
                                                style="position:absolute; bottom:1.5em; transform: translate(5em,0);">
                                                <img src="../../image/pssi.png" style="max-width: 25px;">
                                                <img src="../../image/logo.png" style="max-width:30px">
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
                                                <img src="../qrcode/kode<?= $id?>.png" style='max-width:50px'>
                                            </div>
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


    </div>
</body>

</html>