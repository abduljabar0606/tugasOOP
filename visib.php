<?php
   class kendaraan{
    public $jenis;
    private $warna;
    protected $merk;

    public function __construct( $jenis = "motor", $warna = "ranbow", $merk = "bmw" ){ 
     $this->jenis = $jenis;
     $this->warna = $warna;
     $this->merk = $merk;
    }

    public function color(){
        return $this->warna;
    }

   }

class laut extends kendaraan{
    public function jenisjenis(){
        return $this->merk ;
    }
}

$kendaraan1 = new kendaraan();
echo "public :" . $kendaraan1->jenis."<br>";

$kendaraan1 = new laut();
echo "private :" . $kendaraan1->color()."<br>";
echo "protected :" . $kendaraan1->jenisjenis();