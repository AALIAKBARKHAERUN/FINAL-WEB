<?php 
    include 'function.php';

    $wisata = query("SELECT * FROM objek_wisata");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destinasi di Indonesia</title>
    <link rel="stylesheet" href="destinasi.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!--bootsrap icon-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">

    <!--unicons-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">

</head>

<body>

    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">     
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item pe-2">
                        <a class="nav-link" aria-current="page" href="index.php">Beranda</a>
                    </li>
                    <li class="nav-item pe-2">
                        <a class="nav-link" href="pemandu.php">Pemandu Wisata</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="destination.php">Destinasi</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!--akhir navbar-->

    <!--img cover-->

    <div id="bg">
        <div>
            <img src="image/bg.png" height="655px">
            <h3>DESTINASI</h3>
        </div>
    </div>

    <!--akhir img cover-->

    <!--tengah-->
    <div class="ms-5">
        <div class="m-4 mb-4 mt-5 d-flex">
            <div class="row text-center">
                <?php foreach ($wisata as $wst) : ?>
                <div class="card col-sm-6 col-lg-3 mb-4 me-4 border-0 shadow" style="width: 18rem;">
                    <img src="foto/<?= $wst['foto']; ?>" class="card-img-top mt-3" alt="pantaipink">
                    <div class="card-body">
                        <h5 class="card-title"><?= $wst['nama']; ?></h5>
                        <p class="card-text text-center"><?= $wst['content']; ?></p>
                        <a href="#" class="btn btn-primary">Jelajahi</a>
                        <!--harus rata button nya-->
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>


    <!--contact-->
    <footer class="text-center text-lg-start" id="contact">
        <!-- Grid container -->
        <div class="container p-4">
            <!--Grid row-->
            <div class="row">
                <!--Grid column-->
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0 mt-3">
                    <h3>Social Media</h3><br></br>
                    <div>
                        <i class="bi bi-facebook text-light"> TourGuide</i><br></br>
                        <i class="bi bi-envelope-open-fill"> TourGuide@gmail.com</i><br></br>
                        <i class="bi bi-instagram"> TourGuide</i><br></br>
                        <i class="bi bi-code-slash"> www.tourguide.com</i><br></br>
                    </div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3">
            <p>Created with <i class="bi bi-heart-fill text-danger"></i> by TourGuide
                <hr>
            </p>
        </div>
        <!-- Copyright -->
    </footer>

    <!--akhir contact-->

    <!--scrol top-->
    <a href="destination.php" class="scrollup" id="scroll-up">
        <i class="uil uil-arrow-up scrollup_icon"></i>
    </a>

    <!--akhir scrol top-->

    <!--main js-->

    <script src="main.js">

    </script>

    <!--akhir main js-->






    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>