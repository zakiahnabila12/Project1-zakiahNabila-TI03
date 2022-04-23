<?php

class BMIpasien extends BMI{
    public $tanggal_periksa;

    function __construct($kode, $nama, $tmp_lahir, $tgl_lahir, $email, $gender, $berat, $tinggi, $tanggal_periksa){
        parent::__construct($kode, $nama, $tmp_lahir, $tgl_lahir, $email, $gender, $berat, $tinggi);
        $this->tanggal_periksa = $tanggal_periksa;
    }
}

?>