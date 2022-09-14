<?php 
include('../../conf/config.php');
$nama = $_GET['nama'];
$nim = $_GET['nim'];
$semester = $_GET['semester'];
// upload gambar

$query = mysqli_query($koneksi, "INSERT INTO mahasiswa (id,nama,nim,semester) VALUES ('','$nama','$nim','$semester')");
header('Location: ../index.php?page=data-mahasiswa');
?>