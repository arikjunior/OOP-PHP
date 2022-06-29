<?php
class Produk{
    public $judul,
           $penulis,
           $penerbit,
           $harga;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0){
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
    public function cetak(Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

$produk1 = new Produk("Naruto", "Arik Junior", "Playstation", 499999);
$produk2 = new Produk("Marvel", "Ambar", "Baba", 2500000);


echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";

$infProduk1 = new CetakInfoProduk();
echo $infProduk1->cetak($produk2);
