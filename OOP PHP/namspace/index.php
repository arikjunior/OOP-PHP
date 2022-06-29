<?php
require_once 'App/init.php';

// $produk1 = new Komik("Naruto", "Arik Junior", "Playstation", 499999, 100);
// $produk2 = new Game("Marvel", "Ambar", "Baba", 250000, 50);

// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk($produk1);
// $cetakProduk->tambahProduk($produk2);

// echo $cetakProduk->cetak();

// echo "<hr>";



//Pemanggilan cara 1
new App\Service\User();
echo "<br>";
new App\Produk\User();

echo "<hr>";
//Pemanggilan cara 1
use App\Service\User as UserService;
use App\Produk\User as UserProduk;

new UserService();
echo "<br>";
new UserProduk();