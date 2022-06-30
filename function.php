<?php

    $conn= mysqli_connect('localhost','root','','wisata');
    if(mysqli_connect_errno()){
        echo"Gagal :" . mysqli_connect_error();
    }

    function query($query){
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows;
    }

    function query_single($query){
        global $conn;
        $result = mysqli_query($conn, $query);
        return $data = mysqli_fetch_assoc($result);
    }


    //tambah data
    function tambah($data){
        global $conn;

        $name = htmlspecialchars($data["nama"]);
        $content = htmlspecialchars($data["content"]);
        $pilih = htmlspecialchars($data["category"]);
        $foto = uploadfoto($_FILES);
        if (!$foto) {
                return false;
            }

        mysqli_query($conn, "INSERT INTO objek_wisata VALUES ('', '$name', '$content', '$foto', '$pilih')");

        return mysqli_affected_rows($conn);
    }

    function uploadfoto() {

        $namaFile = $_FILES['foto']['name'];
        $ukuranFile = $_FILES['foto']['size'];
        $error = $_FILES['foto']['error'];
        $tmpName = $_FILES['foto']['tmp_name'];

        //cek apakah tidak ada foto yang diupload
        if ($error === 4) {
            echo "<script>
                    alert('Pilih foto terlebih dahulu !');
                  </script>";

            return false;
        }

        //pastikan yang diupload adalah foto
        $ekstensifotoValid = ['jpeg', 'jpg', 'png'];
        $ekstensifoto = explode('.', $namaFile);
        $ekstensifoto = strtolower(end($ekstensifoto));
        if ( !in_array($ekstensifoto, $ekstensifotoValid)) {
            echo "<script>
                    alert('Yang di upload bukan foto !');
                  </script>";

            return false;
        }

        //cek jika ukuran terlalu besar
        if ( $ukuranFile > 2500000) {
            echo "<script>
                    alert('Ukuran foto terlalu besar !');
                  </script>";

            return false;
        }

        //lolos pengecekan, foto siap diupload
        // ubah nama foto baru
        $namaFileBaru = uniqid();
        $namaFileBaru .= '.';
        $namaFileBaru .= $ekstensifoto;
        move_uploaded_file($tmpName, 'foto/' . $namaFileBaru);

        return $namaFileBaru;

    }
     //edit data
     function edit_data($post){
        global $conn;
        $id = $post["id"];
        $nama = $post["nama"];
        $content = $post["content"];
        $category = $post["category"];
        $foto_lama = $post["foto-lama"];

        if($_FILES["foto"]["error"] === 4){
            $foto = $foto_lama;
        }

        else{
            $dir = "foto/";
            unlink($dir.$foto_lama);
            $foto = uploadfoto($_FILES);
        }

        $query = "UPDATE objek_wisata SET nama='$nama', content='$content', category='$category', foto='$foto' WHERE id='$id'";

        mysqli_query($conn, $query);

        if(mysqli_affected_rows($conn) > 0){
            header("location:tampil.php?sukses-edit=3");
        }

        else{
            header("location:tampil.php?sukses-edit=0");
        }
    }


    //hapus data
    function hapus_data($data){
        global $conn;
        $id = $data["id"];
        
        mysqli_query($conn, "DELETE FROM objek_wisata WHERE id=$id");

        return mysqli_affected_rows($conn);
    }

    //registrasi
    function regis($data){
        global $conn;

        $nama = stripslashes($data["nama"]);
        $username = stripslashes($data["username"]);
        $password = $data["password"];
        $confirmpass = $data["confirmpass"];
        
        //cek username sudah ada atau belum
        $result = mysqli_query($conn,"SELECT username FROM User WHERE username = '$username'");

        if(mysqli_fetch_assoc($result)){
            echo "
                <script>
                    alert('Username sudah terdaftar')
                </script>
            ";

            return false;
        }

        //cek konfirmasi password
        if($password !== $confirmpass){
            echo "
                <script>
                    alert('Konfirmasi Password tidak sesuai !!')
                </script>
            ";

            return false;
        }

        //enkripsi password
        $password = password_hash($password, PASSWORD_DEFAULT);

        //tambahkan user password ke database
        mysqli_query($conn, "INSERT INTO user VALUES('', '$nama', '$username', '$password')");

        return mysqli_affected_rows($conn);

    }
    
?>