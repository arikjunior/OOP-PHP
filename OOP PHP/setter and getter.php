<?php
class Produk{
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

    public function getInfoProduk(){
    //Komik :Naruto | Arik Junior, Shonen Jump (Rp. 35000) - 100 Halaman.
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
        $str = "Komik : {$this->getJudul()} | " . parent::getInfoProduk() . " (Rp. {$this->getharga()}) - {$this->jmlHalaman} Halaman.";
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
        $str = "Game : {$this->getJudul()} | " . parent::getInfoProduk() . " (Rp. {$this->getharga()}) - {$this->wktMain} Jam.";
        return $str;
    }

}

class CetakInfoProduk {
    public function cetak(Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

$produk1 = new Komik("Naruto", "Arik Junior", "Playstation", 499999, 100);
$produk2 = new Game("Marvel", "Ambar", "Baba", 250000, 50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";

// Jika Diskon
$produk2->setDiskon(50);
echo $produk2->getHarga();
echo "<hr>";

// Setter
$produk1->setPenulis("Kakashi");
// Getter
echo $produk1->getPenulis();