<?php
require 'functions.php';
if(isset($_POST["submit"])){
    if(tambah($_POST) > 0){
        echo "<script>
                alert('Data Berhasil Ditambahkan');
                document.location.href = 'index.php';
            </script>";
    }else{
        echo "<script>
                alert('Data Gagal Ditambahkan');
                document.location.href = 'index.php';
                </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="npm">NPM : </label>
                <input type="text" name="npm" id="npm" require>
            </li>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" require>
            </li>
            <li>
                <label for="email">Email : </label>
                <input type="email" name="email" id="email" require>
            </li>
            <li>
                <label for="jurusan">Jurusan : </label>
                <input type="text" name="jurusan" id="jurusan" require>
            </li>
            <li>
                <label for="gambar">Gambar : </label>
                <input type="file" name="gambar" id="gambar" require>
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data!</button>
            </li>
        </ul>
    </form>
</body>
</html>