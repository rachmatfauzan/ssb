<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
        background: rgba(0, 0, 0, 1);
        background: -moz-linear-gradient(45deg, rgba(0, 0, 0, 1) 0%, rgba(14, 94, 94, 1) 76%, rgba(14, 94, 94, 1) 100%);
        background: -webkit-gradient(left bottom, right top, color-stop(0%, rgba(0, 0, 0, 1)), color-stop(76%, rgba(14, 94, 94, 1)), color-stop(100%, rgba(14, 94, 94, 1)));
        background: -webkit-linear-gradient(45deg, rgba(0, 0, 0, 1) 0%, rgba(14, 94, 94, 1) 76%, rgba(14, 94, 94, 1) 100%);
        background: -o-linear-gradient(45deg, rgba(0, 0, 0, 1) 0%, rgba(14, 94, 94, 1) 76%, rgba(14, 94, 94, 1) 100%);
        background: -ms-linear-gradient(45deg, rgba(0, 0, 0, 1) 0%, rgba(14, 94, 94, 1) 76%, rgba(14, 94, 94, 1) 100%);
        background: linear-gradient(45deg, rgba(0, 0, 0, 1) 0%, rgba(14, 94, 94, 1) 76%, rgba(14, 94, 94, 1) 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#000000', endColorstr='#0e5e5e', GradientType=1);
    }
    .box{
        position: relative;
    }
    .kip{
        border: 2px solid orange;
    }
    .ft-pemain{
        transform: translate(25em,2em);
        width: 200px;
        overflow: hidden;
        border-radius: 50%;
        max-height: 15em;
        position: absolute;
        top: 4em;
    }
    .ft-pemain img{max-width: 200px;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        position: relative;
    }
    .logo{
        transform: translate(25em,2em);
        width: 250px;
        display: flex;
        overflow: hidden;
        position: absolute;
        bottom: 4em;
    }
    .logo img{
        background-size: cover;
        background-position: center;
        max-width: 100px;
    }
</style>

<body>

    <div class="box">
        <div class="kip">
        <center><img src="../image/KIP.png" width="50%"></center>
        </div>
        <div class="ft-pemain">
            <img src="ft_pemain/top-skor.PNG">
        </div>
        <div class="logo">
            <img src="../image/pssi.png">
            <img src="../image/logo.png" >
        </div>
    </div>

</body>

</html>


<?php
// Require composer autoload
require_once __DIR__ . '/vendor/autoload.php';
require '../../config/config.php';
$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM dt_pemain WHERE id_pemain='$id'");
$fetch = mysqli_fetch_assoc($query);
// Create an instance of the class:
$mpdf = new \Mpdf\Mpdf();


$mpdf->WriteHTML('<h1>Hello '.$fetch["nama_pemain"].'</h1>');

// Output a PDF file directly to the browser
$mpdf->Output('datapemain.pdf', 'I');
?>