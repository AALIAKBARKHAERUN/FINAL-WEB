<?php

    include 'function.php';

    $objek_wisata = query("SELECT * FROM objek_wisata");

    if(isset($_POST["hapus"])){
        if(hapus_data($_POST) > 0){
            echo "
                <script>
                    alert('Data Berhasil dihapus');
                    document.location.href = 'tampil.php';
                </script>
            ";
        }else{
            echo "
                <script>
                    alert('Data Gagal dihapus');
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
    <title>Tampilan Data</title>
    <link rel="stylesheet" href="tampil.css">

    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

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

    <div id="isi">
        <div class="main-content">
            <header>
                <h2>
                    Tampil Data
                </h2>

                <div class="user-wrapper">
                    <img src="image/user.png" width="40px" height="40px" alt="">
                    <div>
                        <h4>Admin</h4>
                        <small>Selamat datang</small>
                    </div>
                </div>
            </header>
        </div>

        <table border="1" class="main-content mt-5">
            <div class="container">
                <tr>
                    <td class="col">NO.</td>
                    <td class="col">Nama</td>
                    <td class="col">content</td>
                    <td class="col">category</td>
                    <td class="col">foto</td>
                </tr>
            </div>

            <?php 
            $i = 1;
            foreach ($objek_wisata as $objek):
            ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $objek['nama']; ?></td>
                <td><?= $objek['content']; ?></td>
                <td><?= $objek['category']; ?></td>
                <td>
                    <img src="foto/<?= $objek['foto']; ?>" width="100px" class="mb-3">
                </td>
                <td>

                    <form action=" edit.php" method="post">
                        <input type="hidden" name="id" value="<?= $objek['id']; ?>">
                        <button type="submit" class="btn btn-success">EDIT</button>
                    </form>
                    <br>
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $objek['id']; ?>">
                        <button type="submit" name="hapus" class="btn btn-danger">HAPUS</button>
                    </form>
                </td>
            </tr>
            <?php
            $i++;
            endforeach;
        ?>
        </table>
    </div>

</body>

</html>
