<?php

require_once 'App/init.php';
$produk1 = new Komik("Naruto", "Ica" , "Cakrawala", 50000, 100);
$produk2 = new Game("Doraemon", "Natasya" , "Laksamana", 40000, 50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk( $produk1);
$cetakProduk->tambahProduk( $produk2);
echo $cetakProduk->cetak();

echo "<hr>";
new Coba();