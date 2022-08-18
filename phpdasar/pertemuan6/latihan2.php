<?php 
// $mahasiswa = [
//     ["Ica", "2003073", "ica@gmail.com", "Teknik Informatika"],
//     ["Natasya", "2003074", "natasya@gmail.com", "Teknik Informatika"]
// ];

// Array Associative
// efinisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri

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

// echo $mahasiswa[1]["tugas"][1];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach($mahasiswa as $mhs) : ?>
    <ul>
        <li>
            <img src="images/<?= $mhs["gambar"]; ?>">
        </li>
        <li>Nama : <?= $mhs["nama"]; ?></li>
        <li>NIM : <?= $mhs["nim"]; ?></li>
        <li>Email : <?= $mhs["email"]; ?></li>
        <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>

</html>