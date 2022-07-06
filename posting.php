<?php

    include 'function.php';

    if(isset($_POST["submit"])){
        if(tambah($_POST) > 0){
            echo "
                <script>
                    alert('Data Berhasil Ditambah');
                    document.location.href = 'tampil.php';
                </script>
            ";
        }else{
            echo "
                <script>
                    alert('Data Gagal ditambah');
                    document.location.href = 'tampil.php';
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
    <title>Dashbord Admin</title>

    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    <link rel="stylesheet" href="posting.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
    <div class="sidebar">
        <div class="sidebar-brand">
        </div>

        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="posting.php"><span class="las la-credit-card"></span>
                        <span>Posting</span></a>
                </li>
                <li>
                    <a href="tampil.php"><span class="las la-user"></span>
                        <span>Tampilan Data</span></a>
                </li>
                <li>
                    <a href="login.php"><img
                            src="https://img.icons8.com/external-sbts2018-flat-sbts2018/58/000000/external-logout-social-media-basic-1-sbts2018-flat-sbts2018.png"
                            class="bg-light me-4" width="20px" />Keluar</a>
                </li>
            </ul>
        </div>
    </div>

    <div>
        <div class="main-content">
            <header>
                <h2>
                    Posting
                </h2>

                <div class="user-wrapper">
                    <img src="image/user.png" width="40px" height="40px" alt="">
                    <div>
                        <h4>Admin</h4>
                        <small>Selamat datang</small>
                    </div>
                </div>
            </header>

            <div class="isi">
                <div class="col-md-6">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="Name" class="form-label">Nama Wisata</label>
                            <input id="Name" type="text" name="nama" class="form-control"
                                placeholder="masukkan nama wisata">
                        </div>
                        <div class="mb-3">
                            <label for="content" class="form-label">Content</label>
                            <textarea type="text" name="content" class="form-control">
                                </textarea>
                        </div>
                        <div class="mb-3">
                            <label for="foto" class="form-label">Gambar</label>
                            <input type="file" name="foto" id="foto" placeholder="masukkan foto anda" required>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="pilih" class="form-label">Category</label>
                            <select type="select" name="category" id="pilih">
                                <option value="Beach">Beach</option>
                                <option value="River">River</option>
                                <option value="Mount">Mount</option>
                                <option value="Hill">Hill</option>
                                <option value="Island">Island</option>
                                <option value="Waterfall">Waterfall</option>
                            </select>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary mb-5">Kirim</button>
                    </form>
                </div>
            </div>


            <!-- Optional JavaScript; choose one of the two! -->

            <!-- Option 1: Bootstrap Bundle with Popper -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
                crossorigin="anonymous">
            </script>
</body>

</html>
