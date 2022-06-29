<?php
require_once 'App/init.php';

$produk1 = new Komik("Naruto", "Arik Junior", "Playstation", 499999, 100);
$produk2 = new Game("Marvel", "Ambar", "Baba", 250000, 50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);

echo $cetakProduk->cetak();

echo "<hr>";

new Coba();