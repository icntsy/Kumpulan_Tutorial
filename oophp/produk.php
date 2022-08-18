<?php 

// Jualan Produk
// Komik
// Game

class Produk {
    public $judul = "judul",
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = 0;
    
    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    } 
}

// $produk1 = new Produk();
// $produk1->judul ="Naruto";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul ="uuuu";
// $produk2->tambahProperty = "haha";
// var_dump($produk2);
$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Ica";
$produk3->penerbit = "Cakrawala";
$produk3 ->harga = 30000;

$produk4 = new Produk();
$produk4->judul = "Doraemon";
$produk4->penulis = "Natasya";
$produk4->penerbit = "Laksana";
$produk4->harga = 50000;

echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Kartun : " . $produk4->getLabel();