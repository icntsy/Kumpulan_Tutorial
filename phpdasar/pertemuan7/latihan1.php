<?php 
// SUPERGLOBALS
// variabel global milik PHP 
// merupakan array associative
// $_GET, $_POST, $_SESSION, $_COOKIE 

// $_GET

$mahasiswa = [
    [
        "nim" => "2003073",
        "nama" => "Ica",
        "email" => "ica@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "ii.png"
    ],
    [
        "nama" => "Natasya", 
        "nim" => "2003074",
        "email" => "natasya@gmail.com",
        "jurusan" => "Teknik Mesin",
        "gambar" => "download.jpg"
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
        <?php foreach ( $mahasiswa as $mhs) : ?>
        <li>
            <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nim=
            <?= $mhs["nim"]; ?>&email=<?= $mhs["email"]; ?>
            &jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
        </li>
        <?php endforeach ?>
    </ul>
</body>

</html>