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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />
    <link rel="stylesheet" href="css/grid-gallery.css">

    <title>FOSSBAT</title>
</head>

<body>
    <section class="first">
        <nav class="navbar navbar-expand-lg navbar-light sticky-top bg-white">
            <a class="navbar-brand logo" href="#"><img src="image/logo.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link nav" href="index.php">Home</a>
                    </li> <span class="nav-link">|</span>
                    <li class="nav-item">
                        <a class="nav-link nav" href="jadwal.php">Jadwal Pertandingan</a>
                    </li> <span class="nav-link">|</span>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link text-dark font-weight-bold" href="gallery.php">Gallery</a>
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
    </section>
    <section>
        <div class="gallery">
            <h1 class="display-3 text-center">SELAMAT DATANG DI GALLERY FOSSBAT</h1>
        </div>
    </section>
    <section class="gallery-block grid-gallery">
            <div class="container">
                <div class="heading">
                    <h2>Gallery Pertandingan</h2>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4 item">
                        <a class="lightbox" href="image/image1.png">
                            <img class="img-fluid image scale-on-hover" src="image/image1.PNG">
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 item">
                        <a class="lightbox" href="image/image2.png">
                            <img class="img-fluid image scale-on-hover" src="image/image2.PNG">
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 item">
                        <a class="lightbox" href="image/image3.png">
                            <img class="img-fluid image scale-on-hover" src="image/image3.PNG">
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 item">
                        <a class="lightbox" href="image/image4.png">
                            <img class="img-fluid image scale-on-hover" src="image/image4.PNG">
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 item">
                        <a class="lightbox" href="image/image5.png">
                            <img class="img-fluid image scale-on-hover" src="image/image5.PNG">
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 item">
                        <a class="lightbox" href="image/image6.png">
                            <img class="img-fluid image scale-on-hover" src="image/image6.PNG">
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
        <script>
            baguetteBox.run('.grid-gallery', { animation: 'slideIn'});
        </script>
    <div class="fotter container">
        <blockquote class="blockquote text-right">
            <p class="mb-0">Tidak ada kemenangan tanpa kerja keras dan semangat pantang menyerah</p>
            <footer class="blockquote-footer">Someone famous in <cite title="Source Title">FOSSBAT</cite></footer>
        </blockquote>
    </div>


















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