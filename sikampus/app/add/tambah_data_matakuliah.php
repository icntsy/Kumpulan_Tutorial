<?php 
include('../../conf/config.php');
$kode = $_GET['kode'];
$mata_kuliah = $_GET['mata_kuliah'];
$prodi = $_GET['prodi'];
$query = mysqli_query($koneksi, "INSERT INTO tb_matakuliah (id,kode,mata_kuliah,prodi) VALUES ('','$kode','$mata_kuliah','$prodi')");
header('Location: ../index.php?page=data-matakuliah');
?>