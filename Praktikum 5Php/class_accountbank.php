<?php

class AccountBank extends Account{
    public $customer;
    static $biaya_admin = 6500;

    function __construct($nomor,$saldo,$customer){
        parent::__construct($nomor,$saldo);
        $this->customer = $customer;
    }

    public function deposit($uang){
        return $this->saldo + $uang;
        $this->saldo_tambah = $this->saldo + $uang;
    }
    
    public function withdraw($uang){
        return $this->saldo - $uang;
       
    }
    
    public function cetak(){
        parent::cetak(); // panggil function milik parent
        echo '<br/>Customer : '.$this->customer;
    }

    public function getSaldo(){
        return $this->saldo;
    }

}

?>