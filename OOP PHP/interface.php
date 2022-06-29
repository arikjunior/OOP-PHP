<?php
// Kelas Abstrak yang sama sekali tidak memiliki implementasi
// Template untuk kelas turunannya
// tidak boleh memiliki properti. hanya deklarasi method saja
// Harus definisinya saja
// semua method harus visibility public
// boleh mendeklarasikan __construct()
// satu class boleh mengimplementasikan banyak interface (cara menambah dengan menggunakan koma)
// Pada akhirnya akan mencapai Polimorphism

interface InfoProduk{
    public function getInfoProduk();
}

Abstract class Produk{ //class abstract
    protected $judul,
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

    abstract public function getInfo(); 

}

class Komik extends Produk implements InfoProduk {
    public $jmlHalaman;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0){
        parent::__construct($judul , $penulis , $penerbit , $harga );
        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfo(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }

    public function getInfoProduk(){
        $str = "Komik : {$this->getJudul()} | " . $this->getInfo() . " (Rp. {$this->getharga()}) - {$this->jmlHalaman} Halaman.";
        return $str;
    }
    
}

class Game extends Produk implements InfoProduk {
    public $wktMain;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $wktMain = 0){
        parent::__construct($judul , $penulis , $penerbit , $harga );
        $this->wktMain = $wktMain;
    }

    public function getInfo(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
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


// $product3 = new Produk();




?>