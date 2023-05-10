<?php
class kendaraan{
    public function merkmobil($bil){
        echo "Merk mobil ".$bil;
    }
    public function namamobil($bil){
        echo "Nama mobil ".$bil;
    }
    public function warnamobil($bil){
        echo "Warna mobil ".$bil;
    }
    public function kecmobil($bil){
        echo "Kecepatan mobil ".$bil;
    }

}
$mobil = new kendaraan;
?>
<center>
<p>~mobil saya😎~</p>

<?php 
echo $mobil->merkmobil(': toyota');
echo "<br>";
echo $mobil->namamobil(': fortuner');
echo "<br>";
echo $mobil->warnamobil(': hitam ');
echo "<br>";
echo $mobil->kecmobil(': 250');
echo "<br><===========================================><br>";?>
<p>~mobil ayah🥸~</p>

<?php
echo $mobil->merkmobil(': Honda');
echo "<br>";
echo $mobil->namamobil(': Brio');
echo "<br>";
echo $mobil->warnamobil(': Merah ');
echo "<br>";
echo $mobil->kecmobil(': 500');