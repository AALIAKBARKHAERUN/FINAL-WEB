<?php 
    include 'function.php';
    $category = $_GET["category"];

    $wisata = query("SELECT * FROM objek_wisata WHERE category= '$category' ");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destinasi Di Indonesia</title>
    <link rel="stylesheet" href="index.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!--bootsrap icon-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">

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
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pemandu.php">Pemandu Wisata</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="destination.php">Destinasi</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--akhir navbar-->

    <div class="sec">
        <h4>Destinasi Wisata</h4>
        <hr class="mb-5">
        <div>
            <a href="category.php?category=beach">
                <img src="image/pantai.png">
            </a>
            <a href="category.php?category=mount">
                <img src="image/gunung.png">
            </a>
            <a href="category.php?category=river">
                <img src="image/sungai.png">
            </a>
            <a href="category.php?category=island">
                <img src="image/pulau.png">
            </a>
            <a href="category.php?category=hill">
                <img src="image/bukit.png">
            </a>
            <a href="category.php?category=waterfall">
                <img src="image/airterjun.png">
            </a>
        </div>
        <hr class="mt-5">
    </div>

    <!--tengah-->
    <div class="des">
        <h4>Destinasi Pilihan</h4>
    </div>
    <div class="container">
        <div class="m-4 mb-4 mt-5 d-flex">
            <div class="row text-center">
                <?php foreach ($wisata as $wst) : ?>
                <div class="card col-sm-6 col-lg-3 mb-4 me-4 border-0 shadow" style="width: 18rem;">
                    <img src="foto/<?= $wst['foto']; ?>" class="card-img-top mt-3" alt="pantaipink">
                    <div class="card-body">
                        <h5 class="card-title"><?= $wst['nama']; ?></h5>
                        <p class="card-text text-center"><?= $wst['content']; ?></p>
                        <a href="#" class="btn btn-primary">Jelajahi</a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>
