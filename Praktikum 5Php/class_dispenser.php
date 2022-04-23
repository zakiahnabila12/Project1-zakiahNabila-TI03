<?php

class Dispenser{
  protected $volume;
  protected $hargaSegelas;
  private $volumeGelas;
  public $namaMinuman;

  function  volume($vol){
    $this->volume = $vol;
  }
}

class Minuman extends Dispenser
{
  public $uang;
  function __construct($uang, $namaMinuman, $volumeGelas, $harga)
  {
    $this->uang = $uang;
    $this->namaMinuman = $namaMinuman;
    $this->hargaSegelas = $harga;
    $this->volumeGelas = $volumeGelas;
  }

  function transaksi($uang)
  {
    $this->uang = $uang;
    return  $this->uang - $this->hargaSegelas;
  }

  function volumeSetelahdibeli()
  {
    $this->volume = $this->volume - $this->volumeGelas;
    return $this->volume;
  }

  function cetak()
  {
    echo '<h1>'. 'Data Dispenser '.'</h1>';
    echo '<br>';
    echo 'Nama Minuman : ' . $this->namaMinuman . "<br> <br>";
    echo 'Uang Saat ini : ' . $this->uang . "<br> <br>";
    echo 'kapasistas (volume) Dispenser : ' . $this->volume . 'ml' . "<br> <br>";
    echo 'Harga Pergelas : ' . $this->hargaSegelas . "<br> <br>";
    echo 'Volume Dispenser Saat Ini : ' . $this->volumeSetelahDibeli() . 'ml' . "<br> <br>";
    echo 'Sisa uang: ' . $this->transaksi($this->uang);
    echo '<br>';
    echo '<br>';
    echo '<h3>'. 'Buanglah Sampah pada Tempatnya '.'</h3>';
  }
}

$minuman = new Minuman(10000, 'LeMinerale', 4000, 6000);
$minuman->transaksi($minuman->uang);
$minuman->volume(8000);
$minuman->cetak();
?> 