<?php
class Produk{
    public $judul = "Marvel",
           $penulis = "Arik",
           $penerbit = "Indonesia",
           $harga = 45000;
    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }

}

// $produk1 = new Produk();
// $produk1->judul = 'Naruto';
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = 'Marvel';
// $produk2->Negara = 'Indonesia';
// var_dump($produk2); -->

$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kishimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 45000;

$produk4 = new Produk();
$produk4->judul = "Mario Bross";
$produk4->penulis = "Arik Junior";
$produk4->penerbit = "Playstation";
$produk4->harga = 125000;


echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();
