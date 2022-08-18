<?php 

class Produk {
    public $judul,
           $penulis,
           $penerbit,
           $harga;
    
    public function __construct($judul ="judul", $penulis="penulis", $penerbit="penerbit", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    } 
}


$produk1 = new Produk("Naruto", "Ica" , "Cakrawala", 50000);
$produk2 = new Produk("Doraemon", "Natasya" , "Laksamana", 40000);
$produk3 = new Produk("Boba");


echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Kartun : " . $produk2->getLabel();

echo "<br>";
var_dump($produk3);