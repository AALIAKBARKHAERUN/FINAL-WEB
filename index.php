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
                        <a class="nav-link active" aria-current="page" href="index.php">Beranda</a>
                    </li>
                    <li class="nav-item pe-2">
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

    <section>
        <h2 id="text"><span>Jelajahi Indonesia Bersama</span><br>TourGuide</h2>
        <img src="bird1.png" id="bird1">
        <img src="bird2.png" id="bird2">
        <img src="forest.png" id="forest">
        <a href="destination.php" id="btn">Jelajah</a>
        <img src="rocks.png" id="rocks">
        <img src="water.png" id="water">
    </section>

    <div class="sec">
        <h4>Destinasi Wisata Indonesia</h4>
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

        <!-- Carousel wrapper -->
        <div id="carouselVideoExample" class="carousel carousel-fade mt-5" data-bs-ride="carousel">

            <!-- Indicators -->
            <h3>Cerita Petualangan</h3>
            <div class="carousel-indicators">
                <button type="button" data-bs-slide-to="0" class="active" aria-label="Slide 1"></button>
                <button type="button" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>

            <!-- Inner -->
            <div class="carousel-inner">
                <!-- Single item -->
                <div class="carousel-item active mb-2">
                    <video class="img-fluid ratio ratio-16x9" controls class="d-block w-100">
                        <source src="video/slide1.mp4" type="video/mp4" />
                    </video>
                    <div class="carousel-caption d-none d-md-block">
                        <p>Kekayaan Alam Indonesia.</p>
                    </div>
                </div>

                <!-- Single item -->
                <div class="carousel-item mb-2">
                    <video class="img-fluid ratio ratio-16x9" controls class="d-block w-100">
                        <source src="video/slide2.mp4" type="video/mp4" />
                    </video>
                    <div class="carousel-caption d-none d-md-block">
                        <p>Gunung</p>
                    </div>
                </div>

                <!-- Single item -->
                <div class="carousel-item mb-2">
                    <video class="img-fluid ratio ratio-16x9" controls class="d-block w-100">
                        <source src="video/slide3.mp4" type="video/mp4" />
                    </video>
                    <div class="carousel-caption d-none d-md-block">
                        <p>Pantai</p>
                    </div>
                </div>

                <!-- Singel item-->
                <div class="carousel-item mb-2">
                    <video class="img-fluid ratio ratio-16x9" controls class="d-block w-100">
                        <source src="video/slide6.mp4" type="video/mp4" />
                    </video>
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Four slide island</h5>
                        <p>Pulau</p>
                    </div>
                </div>
            </div>
            <!-- Inner -->

            <!-- Controls -->
            <button class="carousel-control-prev" type="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>

            <button class="carousel-control-next" type="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!-- Carousel wrapper -->
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#094b65" fill-opacity="1"
            d="M0,64L48,96C96,128,192,192,288,197.3C384,203,480,149,576,133.3C672,117,768,139,864,170.7C960,203,1056,245,1152,250.7C1248,256,1344,224,1392,208L1440,192L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z">
        </path>
    </svg>

    <script>
    let text = document.getElementById('text');
    let bird1 = document.getElementById('bird1');
    let bird2 = document.getElementById('bird2');
    let btn = document.getElementById('btn');
    let rocks = document.getElementById('rocks');
    let forest = document.getElementById('forest');
    let water = document.getElementById('water');
    let header = document.getElementById('header');

    window.addEventListener('scroll', function() {
        let value = window.scrollY;

        text.style.top = 30 + value * -0.5 + '%';
        bird1.style.top = value * -1.5 + 'px';
        bird1.style.left = value * 2 + 'px';
        bird2.style.top = value * -1.5 + 'px';
        bird2.style.left = value * -5 + 'px';
        btn.style.marginTop = value * 1.0 + 'px';
        rocks.style.top = value * -0.12 + 'px';
        forest.style.top = value * 0.25 + 'px';
        header.style.top = value * 0.5 + 'px';
    })
    </script>

    <!--isi-->
    <div class="des">
        <h4>Destinasi Pilihan</h4>
    </div>

    <div id="destination">
        <div class="ms-5">
            <div class="m-4 d-flex">
                <div class="row text-center mt-5" id="perbesar">
                    <div class="col-sm-6 col-lg-3 mb-4 me-4" style="width: 18rem;">
                        <img src="image/card12.png" class="card-img-top mt-3" alt="pantaipink">
                        <p>Air Terjun Bidadari</p>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-4 me-4" style="width: 18rem;">
                        <img src="image/card11.png" class="card-img-top mt-3" alt="pantaipink">
                        <p>Gunung Tambora</p>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-4 me-4" style="width: 18rem;">
                        <img src="image/card10.png" class="card-img-top mt-3" alt="pantaipink">
                        <p>Pulau Satonda</p>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-4 me-4" style="width: 18rem;">
                        <img src="image/card9.png" class="card-img-top mt-3" alt="pantaipink">
                        <p>Pulau Ular</p>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-4 me-4" style="width: 18rem;">
                        <img src="image/card8.png" class="card-img-top mt-3" alt="pantaipink">
                        <p>Air Terjun Rora</p>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-4 me-4" style="width: 18rem;">
                        <img src="image/card7.png" class="card-img-top mt-3" alt="pantaipink">
                        <p>Pantai Lariti</p>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-4 me-4" style="width: 18rem;">
                        <img src="image/card6.png" class="card-img-top mt-3" alt="pantaipink">
                        <p>Uma Lengge</p>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-4 me-4" style="width: 18rem;">
                        <img src="image/card5.png" class="card-img-top mt-3" alt="pantaipink">
                        <p>Bukit Lambu</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--akhir isi-->


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
                        <i class="bi bi-envelope-open-fill"> tourguide@gmail.com</i><br></br>
                        <i class="bi bi-instagram"> Explortourguide</i><br></br>
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
            <p>Created with <i class="bi bi-heart-fill text-danger"></i> TourGuide
                <hr>
            </p>
        </div>
        <!-- Copyright -->
    </footer>

    <!--akhir contact-->

    <!--scrol top-->
    <a href="" class="scrollup" id="scroll-up">
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