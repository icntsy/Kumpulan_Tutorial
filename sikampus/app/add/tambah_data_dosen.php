<?php 
include('../../conf/config.php');
$nama = $_GET['nama'];
$nip = $_GET['nip'];
$alamat = $_GET['alamat'];
$query = mysqli_query($koneksi, "INSERT INTO tb_dosen (id,nama,nip,alamat) VALUES ('','$nama','$nip','$alamat')");
header('Location: ../index.php?page=data-dosen');
?>