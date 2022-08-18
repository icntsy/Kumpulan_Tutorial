<?php 
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");
// ambil data dari mahasiswa / query data mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");
// cara cek error
// if( !$result) {
//     echo mysqli_error($conn);
// }

// ambil data (fetch) mahasiswa dari object result
// mysqli_fetch_row() mengembalikan nilai numerik(indexnya angka)
// mysqli_fetch_assoc() mengembalikan nilai associative
// mysqli_array() mengembalikan keduanya yaitu row dan assoc
// mysqli_fetch_object()

// $mhs = mysqli_fetch_row($result);
// var_dump($mhs[2]); //nim 

// $mhs = mysqli_fetch_object($result);
// var_dump($mhs->jurusan);

// while ( $mhs = mysqli_fetch_assoc($result)) {
// var_dump($mhs); 
// }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>
        <?php $i = 1; ?>
        <?php while( $row = mysqli_fetch_assoc($result)) :
        ?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href="">ubah</a> |
                <a href="">hapus</a>
            </td>
            <td><img src="images/<?= $row["gambar"]; ?>" width=" 50"></td>
            <td><?= $row["nim"] ?></td>
            <td><?= $row["nama"] ?></td>
            <td><?= $row["email"] ?></td>
            <td><?= $row["jurusan"] ?></td>
        </tr>
        <?php $i++; ?>
        <?php endwhile; ?>
    </table>
</body>

</html>