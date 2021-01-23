<?php

class Produk {

    public  $judul,
            $penulis,
            $penerbit,
            $harga,
            $jumlahHalaman,
            $waktuMain;

    public function __construct($judul = "Judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jumlahHalaman = 0, $waktuMain = 0, $tipe) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jumlahHalaman = $jumlahHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;

    }

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoLengkap(){
        // Komik : Naruto | Masassi kishimoto, Shonen Jump ( Rp. 30000 ) - brp halaman 
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        if($this->tipe == "Komik" ) {
            $str .= " - {$this->jumlahHalaman} Halaman.";
        } else if($this->tipe == "Game") {
            $str .= " - {$this->waktuMain} Jam.";
        }

        return $str;

    }

    
}


class CetakInfoProduk {
    public function cetak( Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

$produk1 = new Produk("Naruto", "masasi kisimoto", "Shonen Jump", 3000, 100, 0., "Komik");
$produk2 = new Produk("Uncharted", "Neil Drucgkmann", "Sony Computer", 250000, 0, 50, "Game");


// Komik : masasi kisimoto, Shonen Jump
// Game : Neil Drucgkmann, Sony Computer
// Naruto | masasi kisimoto, Shonen Jump (Rp. 3000)


// Komik : Naruto | Masshi kisimoto , Shonen Jump ( Rp. 300000) - 100 Halaman. 
// Game : uncharted | Neil Druckmann , Sony Computer ( Rp. 200000) - 50 Jam. 


echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();
// Inheritance juga bisa dibilang pewarisan berfungsi sebagai penyambung antar mama-class dengan child-class , dengan kata kunci extends kamu bisa menyambungkan mama-class dengan child-class