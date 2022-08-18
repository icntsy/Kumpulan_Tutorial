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

class CetakInfoProduk {
    public function cetak(Produk $produk) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        Return $str;
    }
}


$produk1 = new Produk("Naruto", "Ica" , "Cakrawala", 50000);
$produk2 = new Produk("Doraemon", "Natasya" , "Laksamana", 40000);



echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";

$infoProduk1 = new cetakInfoProduk();
echo $infoProduk1->cetak($produk1);