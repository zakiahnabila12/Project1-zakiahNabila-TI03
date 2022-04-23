<?php
class Account{
    public $nomor;
    public $saldo;

    function __construct($nomor,$saldo){
        $this->nomor = $nomor;
        $this->saldo = $saldo;
    }

    public function deposit($uang){
        $this->uang = $uang;
        return $this->saldo + $uang;
        $this->saldo_tambah = $this->saldo + $uang;
    }
    
    public function withdraw($uang){
        $this->uang = $uang;
        return  $this->saldo - $uang;
        $this->saldo_tambah = $this->saldo - $uang;

    }

    public function cetak(){
        echo 'Nomor Account : ' .$this->nomor;
        echo '<br/>Saldo : ' .$this->saldo;
    }

    public function cetak_deposit(){
        echo 'Saldo Terkini : ' .$this->saldo + $this->uang;
    }

    public function cetak_withdraw(){
        echo 'Saldo Terkini : ' .$this->saldo - $this->uang;
    }
}
?>