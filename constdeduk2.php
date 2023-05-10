<?php
class kendaraan{
    public $nama;
    public $kec;
    public $warna;

    public function mobil(){
      return  "Nama : $this->nama <br>
         Kecepatan : $this->kec <br>
         Warna : $this->warna <br>";
    }
}

$mobilone = new kendaraan();
$mobilone ->nama = "fortuner";
$mobilone ->kec = "23456";
$mobilone ->warna = "merah";
echo $mobilone ->mobil();
