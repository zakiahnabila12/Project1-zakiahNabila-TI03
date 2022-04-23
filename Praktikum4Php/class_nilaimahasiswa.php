<?php 

//buat class
class NilaiMahasiswa{
    //buat properti

    public $nim;
    public $matkul;
    public $nilai;
    

    
    function __construct( $nim, $matkul, $nilai)
    {

        $this->nim = $nim;
        $this->matkul = $matkul;
        $this->nilai = $nilai;
    }
    function hitungNilai(){
        return $this->nilai;
    }

    
    function grade($keterangan){
        if ($keterangan > 55) {
            return "Lulus";
        }
        else{ return "Tidak Lulus";
        }
    }


   
    function predikat($keterangan){
        if ($keterangan >= 85 && $keterangan <= 100) {
            return "A";
        }elseif ($keterangan >= 70 && $keterangan <= 84) {
            return "B";
        }elseif ($keterangan >= 56 && $keterangan <= 69) {
            return "C";
        }elseif ($keterangan >= 36 && $keterangan <= 55) {
            return "D";
        }elseif ($keterangan >= 0 && $keterangan <= 35) {
            return "E";
        }else {
            return "I";
        }
    }
}


?>

