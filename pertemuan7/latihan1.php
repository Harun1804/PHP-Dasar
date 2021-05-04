<?php
//Variabel Scope
// $x = 10;

// function tampilX(){
//     global $x;
//     echo $x;
// }

// tampilX();

//superglobal
// $_GET
// $_POST
// $_SERVER info tentang server kita
// $_SESSION
// $_COOKIE
// $_REQUEST
// $_ENV

$mahasiswa = [
    [
        "nama" => "Mhs 1",
        "npm" => "npm 1",
        "email" => "email 1",
        "jurusan" => "jurusan 1",
        "gambar" => "kiva.jpg"
    ],
    [
        "nama" => "Mhs 2",
        "npm" => "npm 2",
        "email" => "email 2 ",
        "jurusan" => "jurusan 2",
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
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach($mahasiswa as $mhs) :?>
            <li>
                <a href="latihan2.php?nama=<?= $mhs["nama"] ?>&npm=<?= $mhs["npm"] ?>"><?= $mhs["nama"];?></a>
            </li>
        <?php endforeach ?>
    </ul>
</body>
</html>