<?php
// Tidak dapat di instansiasi = tidak dapat membuat object dari class Abstract
// Menjadi kerangka dasar untuk kelas turunannya
// Minimal memiliki 1 method abstract

// Alasan :
// Merepresentasikan ide atau konsep dasar
// salah satu cara untuk menerapkan Polimorphism (konsep OOP yang lebih komplek)

abstract class Produk{ //class abstract
    private $judul,
           $penulis,
           $penerbit,
           $harga,
           $diskon = 0;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    // Setter
    public function setJudul($judul){
        // Agar mempermudah validadsi
        // if( ! is_string($judul) ){
        //     throw new Exception("Judul harus string");
        // }
        $this->judul = $judul;
    }

    // Getter
    public function getJudul(){
        return $this->judul;
    }

    public function setPenulis($penulis){
        $this->penulis = $penulis;
    }

    public function getPenulis(){
        return $this->penulis;
    }

    public function setPenerbit($penerbit){
        $this->penerbit = $penerbit;
    }

    public function getPenerbit(){
        return $this->penerbit;
    }

    public function setHarga($harga){
        $this->harga = $harga;
    }

    public function getHarga(){
        return $this->harga - ( $this->harga * $this->diskon / 100 );
    }

    public function setDiskon($diskon){
        $this->diskon = $diskon;
    }

    public function getDiskon(){
        return $this->diskon;
    }
    

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }

    abstract public function getInfoProduk(); //Method abstract
    
    public function getInfo(){
    $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
    return $str;
    }

}

class Komik extends Produk {
    public $jmlHalaman;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0){
        parent::__construct($judul , $penulis , $penerbit , $harga );
        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfoProduk(){
        $str = "Komik : {$this->getJudul()} | " . $this->getInfo() . " (Rp. {$this->getharga()}) - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

class Game extends Produk {
    public $wktMain;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $wktMain = 0){
        parent::__construct($judul , $penulis , $penerbit , $harga );
        $this->wktMain = $wktMain;
    }

    public function getInfoProduk(){
        $str = "Game : {$this->getJudul()} | " . $this->getInfo() . " (Rp. {$this->getharga()}) - {$this->wktMain} Jam.";
        return $str;
    }

}

class CetakInfoProduk {
    public $daftarProduk = []; //array();
    public function tambahProduk(Produk $produk){
        $this->daftarProduk[] = $produk;
    }
    public function cetak(){
        $str = "Daftar Produk: <br>";
        foreach($this->daftarProduk as $p){
            $str .= "- {$p->getInfoProduk()} <br>";
        }
        return $str;
    }
}


$produk1 = new Komik("Naruto", "Arik Junior", "Playstation", 499999, 100);
$produk2 = new Game("Marvel", "Ambar", "Baba", 250000, 50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);

echo $cetakProduk->cetak();













?>