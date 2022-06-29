<?php
class Produk{
    public $judul,
           $penulis,
           $penerbit,
           $harga,
           $jmlHalaman,
           $wktMain,
           $tipe;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $wktMain = 0, $tipe = "tipe"){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->wktMain = $wktMain;
        $this->tipe = $tipe;
    }
    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoLengkap(){
    //Komik :Naruto | Arik Junior, Shonen Jump (Rp. 35000) - 100 Halaman.
    $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
    if ($this->tipe == "Komik"){
        $str .= " - {$this->jmlHalaman} Halaman.";
    }else if ($this->tipe == "Game"){
        $str .= " ~ {$this->wktMain} Hours";
    }
    return $str;
    }

}

class CetakInfoProduk {
    public function cetak(Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

$produk1 = new Produk("Naruto", "Arik Junior", "Playstation", 499999, 100, 0, "Komik");
$produk2 = new Produk("Marvel", "Ambar", "Baba", 2500000, 0, 50, "Game");

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();