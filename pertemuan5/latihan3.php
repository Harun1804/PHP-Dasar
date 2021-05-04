<?php
$mahasiswa = [["MHS 1","NPM","Jurusan 1","Email"],["MHS 2","NPM","Jurusan 2","Email"],["MHS 3","NPM","Jurusan 3","Email"]];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <?php foreach($mahasiswa as $mhs) : ?>
        <ul>
            <li>Nama : <?= $mhs[0] ;?></li>
            <li>NPM : <?= $mhs[1] ;?></li>
            <li>Jurusan : <?= $mhs[2] ;?></li>
            <li>Email : <?= $mhs[3] ;?></li>
        </ul>
    <?php endforeach ?>
</body>
</html>