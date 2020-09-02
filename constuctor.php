<?php

class produk{
     public $JenisKendaraan,
            $Merk, 
            $Kecepatan;
            
     public function getCetak() {
       return "$this->JenisKendaraan, $this->Merk, $this->Kecepatan";
     }
    
     public function __construct($JenisKendaraan="Jenis Kendaraan", $Merk="Merk", $Kecepatan="0 Km/h"){
       $this->JenisKendaraan = $JenisKendaraan;
       $this->Merk = $Merk;
       $this->Kecepatan = $Kecepatan;
     }
     
   }
   
   $produk1 = new produk("Motor", "CBR", "80 km/h");
   $produk2 = new produk("Mobil", "Avanza", "100 km/h");
   
   echo "Kendaraan 1: " . $produk1->getCetak(); 
   echo "<br>";
   echo "Kendaraan 2: " . $produk2->getCetak();

 ?>