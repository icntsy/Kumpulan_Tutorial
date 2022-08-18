<?php 
session_start();
// cek session
if( !isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
// menyiapkan data untuk ditampilkan didalam tabel
// asc dari kecil ke besar dan desc dari besar ke kecil
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa ORDER BY id DESC");

// tombol cari diklik
if( isset($_POST["cari"])) {
    $mahasiswa = cari($_POST["keyword"]);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <style>
    .loader {
        width: 100px;
        position: absolute;
        top: 115px;
        left: 300px;
        z-index: -1;
        display: none;

    }
    </style>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/script.js"></script>
    </title>
</head>

<body><a href="logout.php">Logout</a>
    <h1>Daftar Mahasiswa</h1><a href=" tambah.php">Tambah Data Mahasiswa</a><br><br>
    <form action="" method="post"><input type="text" name="keyword" size="40" autofocus
            placeholder="masukkan keyword pencarian..." autocomplete="off" id="keyword"><button type="submit"
            name="cari" id="tombol-cari">Cari !</button>
        <img src="images/loader.gif" class="loader">
    </form><br>
    <div id="container">
        <table border=" 1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No.</th>
                <th>Aksi</th>
                <th>Gambar</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Jurusan</th>
            </tr><?php $i=1;
    ?><?php foreach($mahasiswa as $row) : ?><tr>
                <td><?=$i;
    ?></td>
                <td><a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a>| <a href="hapus.php?id=<?= $row["id"]; ?>"
                        onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?');">hapus</a></td>
                <td><img src=" images/<?= $row["gambar"]; ?>" width=" 50"></td>
                <td><?=$row["nim"] ?></td>
                <td><?=$row["nama"] ?></td>
                <td><?=$row["email"] ?></td>
                <td><?=$row["jurusan"] ?></td>
            </tr><?php $i++;
    ?><?php endforeach;
    ?>
        </table>
    </div>
</body>

</html>