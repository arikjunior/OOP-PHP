<?php
// // cara 1
// // Tidak bisa dimasukkan didalam class (Global)
// define('NAMA', 'Arik Junior'); // Harus huruf besar semua
// echo NAMA;

// echo "<br>";
// // cara2
// // Bisa dimasukkan didalam class (konsep OOP)
// const UMUR = 24; // Harus huruf besar semua
// echo UMUR;

// class Coba{
//     // define('NAMA', 'Arik Junior'); //Error
//     const NAMA = "Arik Junior";
// }

// echo Coba::NAMA;

// Magic Constant :
// echo __LINE__; //Menampilkan baris code
// echo __FILE__; //Menampilkan tempat penyimpanan file sekarang
// echo __DIR__; //Directory yang bersangkutan

// function coba(){
//     return  __FUNCTION__; //Menentukan kita lagi berada di function apa
// }
// echo coba();

// class Coba {
//     public $kelas = __CLASS__; //Menentukan kita lagi berada di class apa
// }
// $obj = new Coba;
// echo $obj->kelas;

// echo __TRAIT__;
// echo __METHOD__;
// echo __NAMESPACE__;
?>