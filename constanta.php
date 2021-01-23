<?php

// define ( 'NAMA' , 'M Rizqi Akbar Rabbani' );

// echo NAMA;

// echo "<br>";

// const UMUR = 19;

// echo UMUR;

// class Coba {
//     const NAMA = ' M Rizqi Akbar Rabbani';
// }

// echo Coba::NAMA;

// echo __FILE__;

// function coba(){
//     return __FUNCTION__;
// }

// echo coba();

class Coba {
    public $kelas = __CLASS__;
}

$obj = new Coba ;
echo $obj->kelas;
// Connstanta itu bagian dari property metodh yg bisa kamu gunakan untuk mengetahui berbagai fungsi masing masing constanta tersebut dengan contoh diatas yaitu __class__ , dia mengeluarkan di echo bahwa ini class apa , dan Constanta itu harus Kapital hurufnya 