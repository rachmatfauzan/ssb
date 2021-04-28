<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="icon" href="image/logo.png">
    <link rel="stylesheet" href="css/style.css">

    <title>FOSSBAT</title>
</head>

<body>
    <section class="first">
        <nav class="navbar navbar-expand-lg navbar-light sticky-top bg-light">
            <a class="navbar-brand logo" href="#"><img src="image/logo.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link nav " href="index.php">Home</a>
                    </li> <span class="nav-link">|</span>
                    <li class="nav-item actived">
                        <a class="nav-link text-dark font-weight-bold" href="jadwal.php">Jadwal Pertandingan</a>
                    </li> <span class="nav-link">|</span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav" href="gallery.php">Gallery</a>
                    </li> <span class="nav-link">|</span>
                    <li class="nav-item">
                        <a class="nav-link nav" href="hubungi.php">Hubungi Kami</a>
                    </li>
                </ul>
                <span class="navbar-text">
                    <img src="image/pssi.png" class="pssi">
                </span>
            </div>
        </nav>
        <div class="row p-0 m-0 mt-4 bg-white">
            <div class="col-sm-2">
                <div class="table-responsive" style="overflow-x: hidden;">
                    <div class="row">
                        <div class="col text-success font-weight-bold">KLASEMEN 3 Teratas</div>
                    </div>
                    <table class="table table-bordered table-sm">
                        <thead>
                            <tr class="bg-success">
                                <th scope="col">TIM</th>
                                <th scope="col">POINT</th>
                            </tr>
                        </thead>
                        <tbody class="klasemen">
                            <tr>
                                <td>INDONESIA RAYA MUDA</td>
                                <td class="text-center">32</td>
                            </tr>
                            <tr>
                                <td>CITRAMAS</td>
                                <td class="text-center">1</td>
                            </tr>
                            <tr>
                                <td>BERMUDA FC</td>
                                <td class="text-center">25</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-sm-10">
                <div class="table-responsive" style="overflow-x: hidden;">
                    <div class="row">
                        <div class="col text-success font-weight-bold">KLASEMEN LIGA FOSSBAT</div>
                    </div>
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr class="bg-success">
                                <th width="3%">Posisi</th>
                                <th scope="col">TIM</th>
                                <th scope="col" class="text-center">POINT</th>
                            </tr>
                        </thead>
                        <tbody class="klasemen">
                            <tr>
                                <td class="text-center">1</td>
                                <td>INDONESIA RAYA MUDA</td>
                                <td class="text-center">32</td>
                            </tr>
                            <tr>
                                <td class="text-center">2</td>
                                <td>CITRAMAS</td>
                                <td class="text-center">29</td>
                            </tr>
                            <tr>
                                <td class="text-center">3</td>
                                <td>BERMUDA FC</td>
                                <td class="text-center">25</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row bg-white p-2 m-3">
            <div class="table-responsive">
                <div class="row">
                    <div class="col text-success font-weight-bold text-center">JADWAL PERTANDINGAN</div>
                </div>
                <table class="table table-striped table-sm">
                    <thead>
                        <tr class="bg-light">
                            <th colspan="5" class="text-center">Liga Fossbat Minggu 11</th>
                        </tr>
                        <tr class="bg-success">
                            <th width="10%">WAKTU</th>
                            <th scope="col" width="20%" class="text-right">TIM</th>
                            <th scope="col" width="5%" class="text-center">SCORE</th>
                            <th scope="col" width="5%" class="text-center">SCORE</th>
                            <th scope="col" width="30%" class="text-left">TIM</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Minggu, 09:45 WIB</td>
                            <td class="text-right">INDONESIA RAYA MUDA</td>
                            <td><input type="text" disabled class="form-control text-center" value="3"></td>
                            <td><input type="text" disabled class="form-control text-center" value="2"></td>
                            <td class="text-left">CITRAMAS</td>
                        </tr>
                        <tr>
                            <td>Minggu, 11:11 WIB</td>
                            <td class="text-right">BERMUDA</td>
                            <td><input type="text" disabled class="form-control text-center" value="6"></td>
                            <td><input type="text" disabled class="form-control text-center" value="0"></td>
                            <td class="text-left">TUNAS JAYA DURIANGKANG</td>
                        </tr>
                        <tr>
                            <td>Minggu, 14:10 WIB</td>
                            <td class="text-right">PATRIOT MUDA</td>
                            <td><input type="text" disabled class="form-control text-center" value="-"></td>
                            <td><input type="text" disabled class="form-control text-center" value="-"></td>
                            <td class="text-left">BINA PRESTASI</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="map">
            <label style="font-size:13px;" class="w-100 text-center bg-success mb-2 text-white"><strong>LOKASI
                    PERTANDINGAN !!</strong> <br> <small>Stadion Citra Mas</small></label>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15956.289768248946!2d104.1297175!3d1.1079032!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd3d45b6165fc2522!2sStadion%20Gelora%20Citramas!5e0!3m2!1sid!2sid!4v1618989073331!5m2!1sid!2sid"
                height="250" style="border:0;" allowfullscreen class="w-100"></iframe>
        </div>
    </section>







    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>