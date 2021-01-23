<?php

class Produk {

    public  $judul,
            $penulis,
            $penerbit;

    protected $diskon = 0;

    private $harga;

    public function __construct($judul = "Judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getHarga(){
        return $this->harga - ( $this->harga * $this->diskon / 100 );
    }

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        return $str;
    }
}

// Kelas Komik 
class Komik extends Produk {
    public $jumlahHalaman;

    public function __construct( $judul = "Judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jumlahHalaman = 0 ){

        parent::__construct( $judul , $penulis , $penerbit , $harga);

        $this->jumlahHalaman = $jumlahHalaman;
    }

    public function getInfoProduk(){
        $str = "Komik : " . parent::getInfoProduk() . " - {$this->jumlahHalaman} Halaman.";

        return $str;
    }
}

// Kelas Game
class Game extends Produk {
    public $waktuMain;

    public function __construct( $judul = "Judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0 ){

        parent::__construct( $judul , $penulis , $penerbit , $harga);

        $this->waktuMain = $waktuMain;
    }

    public function setDiskon( $diskon ) {
        $this->diskon = $diskon;
    }

    public function getInfoProduk(){
        $str = "Game : " . parent::getInfoProduk() . " - {$this->waktuMain} Jam.";

        return $str;
    }
}

//Kelas Cetak info produk
class CetakInfoProduk {
    public function cetak( Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

$produk1 = new Komik("Naruto", "masasi kisimoto", "Shonen Jump", 3000, 100);
$produk2 = new Game("Uncharted", "Neil Drucgkmann", "Sony Computer", 250000, 50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";

$produk2->setDiskon(50);
echo $produk2->getHarga();

//Penejelasan ada tiga yaitu public , protected dan private 
// Apa saja perbedaanya? 
// Public : Metode ini bisa kamu akses atau bisa kamu ambil dari luar class maupun beda class tanpa harus kamu menjadikan warisan ( extends ) 

// Protected : Metode ini hanya bisa diakses dan diambil oleh kelas yang berhubungan oleh kelas yg diatas Khusus pewarisan kebawah ( Extends ) 

// Private : Metode ini hanya dimiliki dan hanya boleh diakses oleh class yg memilikinya  ,tidak boleh di akses oleh metode diluar class tersebut maupun class turunan 