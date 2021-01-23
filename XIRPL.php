<?php

class mobil {
    public  $Tahun,
            $Kecepatan,
            $Harga;

    public function __construct($Tahun, $Kecepatan, $Harga){
        $this->Tahun = $Tahun;
        $this->Kecepatan = $Kecepatan;
        $this->Harga = $Harga;
    }
        
    public function ambilData(){
        return "$this->Tahun
                $this->Kecepatan
                $this->Harga";
    }

}

class motor extends mobil {
    

}

$mobil1 = new mobil ("1989", "100kmh" ,10000);
$motor1 = new motor ("2020", "80kmh" ,30000);


echo " mobil lama : " . $mobil1 ->ambilData();
echo "<br>";
echo "Jenis Baru ! :";
echo "<br>";
echo " motor baru : " . $motor1 ->ambilData();
