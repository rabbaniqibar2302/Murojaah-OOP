<?php

class Produk {

    public  $judul,
            $penulis,
            $penerbit,
            $harga;

    public function __construct($judul, $penulis, $penerbit, $harga) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }

}

$produk1 = new Produk("Naruto", "masasi kisimoto", "Shonen Jump", 3000);
$produk2 = new Produk("Uncharted", "Neil Drucgkmann", "Sony Computer", 250000);

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
// Constructor itu metode atau magic(metode) yang berfungsi untuk menjalankan perintah pertama dalam class tersebut 

// sebaliknya destructor bersifat mengakhirkan metode 