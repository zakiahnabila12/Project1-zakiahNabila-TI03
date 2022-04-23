<?php

class BMI extends Pasien {
    public $berat;
    public $tinggi;

    function __construct($kode, $nama, $tmp_lahir, $tgl_lahir, $email, $gender, $berat, $tinggi){
        parent::__construct($kode, $nama, $tmp_lahir, $tgl_lahir, $email, $gender);
        $this->berat = $berat;
        $this->tinggi = $tinggi / 100;
    }

    //function ke 2 sbg pendukung konstruktor
    function hitung_BMI(){
        if ($this->tinggi > 1 ) {
             $this->hasil = $this->berat / ($this->tinggi**2); 
            return $this->berat / ($this->tinggi**2);  //kuadrat
        }
        else{ 
           
             $this->hasil = $this->berat / (($this->tinggi * 100 )**2); 
            return $this->berat / (($this->tinggi * 100 )**2);
        }
    }

    //function ke 3 sbg pendukung
    function status_BMI(){
        if($this->hasil < 18.5){
            return 'Kekurangan Berat Badan';
            
        }
        elseif($this->hasil >= 18.5 && $this->hasil <= 24.9){
            return 'Normal Ideal';
            
        }
        elseif($this->hasil >= 25.0 && $this->hasil <= 29.9){
            return 'Kelebihaan Berat Badan';
            
        }
        elseif($this->hasil >= 30.0){
            return 'Obesitas';
            
        }
        else{
            return 'Data Tidak Valid';
            
        }
    }

    function gambar_BMI(){
        if($this->hasil < 18.5){
            return '<img src="kurus.png" alt="BMI Kurus">';
        }
        elseif($this->hasil >= 18.5 && $this->hasil <= 24.9){
            return '<img src="ideal.png"  alt="BMI Ideal">';
        }
        elseif($this->hasil >= 25.0 && $this->hasil <= 29.9){
            return '<img src="gemuk.png"  alt="BMI Gemuk">';
        }
        elseif($this->hasil >= 30.0){
            return '<img src="obesitas.png"  alt="BMI Obesitas">';
        }
        else{
            return '';
        }
    }

}

?>