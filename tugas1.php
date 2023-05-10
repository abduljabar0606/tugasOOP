<?php

class sekola{
    public $nama;
    public $alamat;
    protected $jmlhsiswa = 3;
    protected $jmlhguru = 6;
    private $jmlhkelas = 4;

    public function ruangan(){
        return $this->jmlhkelas;
    }
    
}

class kelas extends sekola{

    public function setjmlhsiswa($jmlhsiswa){ 
        return $this->jmlhsiswa = $jmlhsiswa;
    }
    public function getjmlhsiswa(){ 
        return $this->jmlhsiswa;
    }

    public function setjmlhguru($jmlhguru){ 
        return $this->jmlhguru = $jmlhguru;
    }
    public function getjmlhguru(){ 
        return $this->jmlhguru;
    }

}

$data1 = new sekola();
$data1->nama = "SMK Wikrama";
$data1->alamat =  "Tajur City";

echo "Nama Sekola: " . $data1->nama . "<br>" .
     "Alamat : " . $data1->alamat . "<hr>";

$data2 = new kelas();
    $data2->setjmlhsiswa(5);
    echo "jumlah Siswa: " . $data2->getjmlhsiswa() . "<br>";

    $data2->setjmlhguru(7);
    echo "Banyka Guru: " . $data2->getjmlhguru() . "<hr>";

    
    echo "Jumlah Ruangan: " . $data1->ruangan() . " kelas";
