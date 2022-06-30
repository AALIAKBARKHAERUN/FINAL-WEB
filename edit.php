<?php
    include 'function.php';
    $id = $_POST['id'];
    $objek_wisata = query_single("SELECT * FROM objek_wisata WHERE id='$id'");


    if(isset($_POST["submit"])){
        if(edit_data($_POST) > 0){
            echo "
                <script>
                    alert('Data Berhasil Diedit');
                    document.location.href = 'tampil.php';
                </script>
            ";
        }else{
            echo "
                <script>
                    alert('Data Gagal diedit');
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

    <link rel="stylesheet" href="edit.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>

    <div class="isi">
        <div class="col-md-6">
            <form action="" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="foto-lama" value="<?= $objek_wisata['foto']?>">
                <input type="hidden" name="id" value="<?= $objek_wisata['id'];?>" required>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Wisata</label>
                    <input id="nama" type="text" name="nama" class="form-control" placeholder="masukkan nama wisata"
                        value="<?= $objek_wisata['nama'];?>" required>
                </div>
                <div class=" mb-3">
                    <label for="content" class="form-label">Content</label>
                    <textarea type="text" name="content" class="form-control">
                    <?= $objek_wisata['content'];?>
                                </textarea>
                </div>
                <div class="mb-3">
                    <img src="foto/<?=$objek_wisata['foto'];?>" alt="" width="150px">
                </div>
                <div class="mb-3">
                    <label for="foto" class="form-label">foto</label>
                    <input type="file" name="foto" id="foto" placeholder="masukkan foto anda"
                        value="<?= $objek_wisata['foto'];?>" required>
                </div>
                <div class="mb-3 mt-3">
                    <label for="pilih" class="form-label">Category</label>
                    <select type="select" name="category" id="pilih" value="<?= $objek_wisata['category'];?>" required>>
                        <option value="Beach">Beach</option>
                        <option value="River">River</option>
                        <option value="Mount">Mount</option>
                        <option value="Hill">Hill</option>
                        <option value="Island">Island</option>
                        <option value="Waterfall">Waterfall</option>
                    </select>
                </div>
                <button type="submit" name="submit" class="btn btn-primary mb-2">Kirim</button>
                <div>
                    <a name="kembali" class="btn btn-danger" href="tampil.php">Kembali</a>
                </div>


            </form>
        </div>
    </div>





    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>