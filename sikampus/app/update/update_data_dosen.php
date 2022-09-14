<?php 
include('../../conf/config.php');
$id =$_GET['id']; 
$nama = $_GET['nama'];
$nip = $_GET['nip'];
$alamat = $_GET['alamat'];
$query = mysqli_query($koneksi, "UPDATE tb_dosen SET nama='$nama', nip='$nip', alamat='$alamat' WHERE id='$id'");
header('Location: ../index.php?page=data-dosen');
?>