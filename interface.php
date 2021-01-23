<?php
// Interface 
interface InfoProduk {
    public function getInfoProduk();
}

//Kelas Utama
abstract class Produk {

    protected $judul,
            $penulis,
            $penerbit,
            $harga,
            $diskon = 0;

    public function __construct($judul = "Judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function setJudul( $judul ){
        $this->judul = $judul;
    }
    public function getJudul(){
        return $this->judul;
    }
    public function setPenulis( $penulis ){
        $this->penulis = $penulis;
    }
    public function getPenulis(){
        return $this->penulis;
    }
    public function setPenerbit( $penerbit ){
        $this->penerbit = $penerbit;
    }
    public function getPenerbit(){
        return $this->penerbit;
    }
    public function setDiskon( $diskon ) {
        $this->diskon = $diskon;
    }
    public function getDiskon(){
        return $this->diskon;
    }
    public function setHarga( $harga ){
        $this->harga = $harga;
    }
    public function getHarga(){
        return $this->harga - ( $this->harga * $this->diskon / 100 );
    }

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }

    abstract public function getInfo();
    
}
// Kelas Komik 
class Komik extends Produk implements InfoProduk{
    public $jumlahHalaman;

    public function __construct( $judul = "Judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jumlahHalaman = 0 ){

        parent::__construct( $judul , $penulis , $penerbit , $harga);

        $this->jumlahHalaman = $jumlahHalaman;
    }
    public function getInfo(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        return $str;
    }
    public function getInfoProduk(){
        $str = "Komik : " . $this->getInfo() . " - {$this->jumlahHalaman} Halaman.";

        return $str;
    }
}
// Kelas Game
class Game extends Produk implements InfoProduk {
    public $waktuMain;

    public function __construct( $judul = "Judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0 ){

        parent::__construct( $judul , $penulis , $penerbit , $harga);

        $this->waktuMain = $waktuMain;
    }
    public function getInfo(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        return $str;
    }
    public function getInfoProduk(){
        $str = "Game : " . $this->getInfo() . " - {$this->waktuMain} Jam.";

        return $str;
    }
}

//Kelas Cetak info produk
class CetakInfoProduk {
    public $daftarProduk = [];

    public function tambahProduk( Produk $produk ){
        $this->daftarProduk[] = $produk;
    }

    public function cetak(){
        $str = "DAFTAR PRODUK : <br>";

        foreach( $this->daftarProduk as $p ){
            $str .= "- {$p->getInfoProduk()} <br>";
        }

        return $str;
    }
}
// insiasi class
$produk1 = new Komik("Naruto", "masasi kisimoto", "Shonen Jump", 3000, 100);
$produk2 = new Game("Uncharted", "Neil Drucgkmann", "Sony Computer", 250000, 50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk( $produk1 );
$cetakProduk->tambahProduk( $produk2 );

echo $cetakProduk->cetak();
// Penjelasan interface itu digunakan function tunggal yg bisa kamu liat dibagian atas , dengan tidak menggunakan class , yaitu interface , jenis class ini hanya diperbolehkan menggunakan type public , dan untuk menggunakan atau mengambil metode tersebut harus menggunakan kata kunci implement nama interface 