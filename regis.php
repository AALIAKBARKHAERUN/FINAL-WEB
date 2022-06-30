<?php
    include 'function.php';

    if(isset($_POST["kirim"])){
        if(regis($_POST) > 0){
            echo "
                <script>
                    alert('Data Berhasil ditambahkan');
                    document.location.href = 'login.php';
                </script>
            ";
        }else{
            echo "
                <script>
                    alert('Data Gagal ditambahkan');
                    document.location.href = 'regis.php';
                </script>
            ";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link rel="stylesheet" href="regis.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!--bootsrap icon-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
</head>

<section class="vh-100">
    <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
                <img src="image/card4.png" class="img-fluid" alt="Sample image" width="400px">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">

                <form action="" method="post" class="shadow p-4">

                    <div class="form-outline mb-4">
                        <label for="nama" class="me-5">Nama: </label>
                        <input type="text" name="nama" id="nama" placeholder="Masukkan nama anda" required></br>
                    </div>

                    <div class="form-outline mb-4">
                        <label for="username" class="me-3">Username: </label>
                        <input type=" text" name="username" id="username" placeholder="Masukkan Username" required>
                    </div>

                    <div class="form-outline mb-4">
                        <label for="password" class="me-4">Password: </label>
                        <input type="password" name="password" id="password" placeholder="Masukkan Password"
                            required></br>
                    </div>

                    <div class="form-outline mb-4">
                        <label for="confirmpass" class="me-4">Password: </label>
                        <input type="password" name="confirmpass" id="confirmpass" placeholder="Konfirmasi Password"
                            required></br>
                    </div>

                    <a name="kembali" class="btn btn-danger" href="login.php">KEMBALI</a>
                    <button type="submit" name="kirim" class="btn btn-success">KIRIM</button>
                </form>
            </div>
        </div>
    </div>
</section>






<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>

</body>

</html>