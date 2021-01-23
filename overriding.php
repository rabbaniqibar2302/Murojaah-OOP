<?php

class Produk {

    public  $judul,
            $penulis,
            $penerbit,
            $harga;

    public function __construct($judul = "Judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        return $str;

    }

    
}

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

class Game extends Produk {
    public $waktuMain;

    public function __construct( $judul = "Judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0 ){

        parent::__construct( $judul , $penulis , $penerbit , $harga);

        $this->waktuMain = $waktuMain;
    }

    public function getInfoProduk(){
        $str = "Game : " . parent::getInfoProduk() . " - {$this->waktuMain} Jam.";

        return $str;
    }
}

class CetakInfoProduk {
    public function cetak( Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

$produk1 = new Komik("Naruto", "masasi kisimoto", "Shonen Jump", 3000, 100);
$produk2 = new Game("Uncharted", "Neil Drucgkmann", "Sony Computer", 250000, 50);


// Komik : masasi kisimoto, Shonen Jump
// Game : Neil Drucgkmann, Sony Computer
// Naruto | masasi kisimoto, Shonen Jump (Rp. 3000)


// Komik : Naruto | Masshi kisimoto , Shonen Jump ( Rp. 300000) - 100 Halaman. 
// Game : uncharted | Neil Druckmann , Sony Computer ( Rp. 200000) - 50 Jam. 


echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
// Penjelasan overiding yaitu bisa dilihat dibagian metode getinfoproduk yg class turunan , ada kata kunci parent:: yang menunjukan dia bisa mengakses metode yang dimiliki oleh class atasan , jika class atasan punya metode 'mantap' , dan class turunan mau memakainya maka harus menggunakan kata kunci parent::nama metode tersebut 