<?php 
include('../../conf/config.php');
$id =$_GET['id']; 
$kode = $_GET['kode'];
$mata_kuliah = $_GET['mata_kuliah'];
$prodi = $_GET['prodi'];
$query = mysqli_query($koneksi, "UPDATE tb_matakuliah SET kode='$kode', mata_kuliah='$mata_kuliah', prodi='$prodi' WHERE id='$id'");
 header('Location: ../index.php?page=data-matakuliah');
?>