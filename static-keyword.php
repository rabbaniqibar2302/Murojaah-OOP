<?php

// class ContohStatic {
//     public static $angka = 1;

//     public static function halo(){
//         return " Halo." . self::$angka++ . "kali. ";
//     }
// }

// echo ContohStatic::$angka;
// echo"<br>";
// echo ContohStatic::halo();
// echo"<hr>";
// echo ContohStatic::halo();

class Contoh {
    public static $angka = 1;

    public function halo() {
        return "Halo " . self::$angka++ . " kali. <br>";
    }
}

$obj = new Contoh;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();
echo"<hr>";
$obj2 = new Contoh;
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();

// Static bersifat tetap , jika saya menggunakan static untuk diatas makan halo akan terprint lanjut 1 sampai 6 , jika saya tidak memakai static , maka akan terulang 1 - 3 s/d 1 - 3