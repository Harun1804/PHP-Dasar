<?php
session_start();
if(!isset($_SESSION["login"])){
    header("location:login.php");
    exit;
}

require 'functions.php';

$mahasiswa = query("SELECT * FROM mahasiswa");
if(isset($_POST['cari'])){
    $mahasiswa = cari($_POST["keyword"]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
    <title>Halaman Admin</title>
    <style>
    .loader {
        width: 50px;
        position: absolute;
        z-index: -1;
        display: none;
    }

    @media print {
        .cetak {
            display: none;
        }
    }
    </style>
</head>
<body>
<a href="logout.php" class="cetak">Logout</a>
    <h1>Daftar Mahasiswa</h1>

    <form action="" method="post" class="cetak">

        <input type="text" name="keyword" size="30" autofocus placeholder="Masukan Keyword Pencarian" autocomplete="off" id="keyword">
        <button type="submit" name="cari" id="tombol-cari">Cari</button>

        <img src="img/loader.gif" class="loader">
    
    </form>

    <a href="tambah.php" class="cetak">Tambah Data Mahasiswa</a>

    <br>
    <div id="container">
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th class="cetak">Aksi</th>
            <th>Gambar</th>
            <th>NPM</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>

        <?php $i = 1 ;?>
        <?php foreach($mahasiswa as $row) : ?>
            <tr>
                <td><?= $i ;?></td>
                <td class="cetak">
                    <a href="ubah.php?id=<?= $row['id'];?>">Ubah</a> |
                    <a href="hapus.php?id=<?= $row['id'];?>" onclick="return confirm('Apakah Yakin ?')">Hapus</a>
                </td>
                <td>
                    <img src="img/<?= $row["gambar"];?>" width="50" height="50">
                </td>
                <td><?= $row["npm"]; ?></td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["email"]; ?></td>
                <td><?= $row["jurusan"]; ?></td>
            </tr>
        <?php $i++ ; ?>
        <?php endforeach ?>
    </table>
    </div>

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>