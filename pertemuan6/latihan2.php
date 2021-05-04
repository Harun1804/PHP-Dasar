<?php

$mahasiswa = [
    [
        "nama" => "Mhs 1",
        "npm" => "npm",
        "email" => "email",
        "jurusan" => "jurusan",
        "gambar" => "kiva.jpg"
    ],
    [
        "nama" => "Mhs 2",
        "npm" => "npm",
        "email" => "email",
        "jurusan" => "jurusan",
        "gambar" => "kiva.jpg"
    ],
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Associate</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"];?>">
            </li>
            <li>Nama : <?= $mhs["nama"];?></li>
            <li>npm : <?= $mhs["nama"];?></li>
            <li>Email : <?= $mhs["nama"];?></li>
            <li>Jurusan : <?= $mhs["nama"];?></li>
        </ul>
    <?php endforeach ?>
</body>
</html>