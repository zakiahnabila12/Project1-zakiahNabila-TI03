<?php
require_once "class_persegipanjang.php";

$persegipanjang1 = new PersegiPanjang( 10,4 );
$persegipanjang2 = new PersegiPanjang( 9,5 );

echo "<br/>Luas Persegi Panjang I ".$persegipanjang1->getLuas();
echo "<br>Luas Persegi Panjang II ".$persegipanjang2->getLuas();
echo"<br>";
echo "Keliling Persegi Panjang I ".$persegipanjang1->getKeliling();
echo "<br>Keliling Persegi Panjang II ".$persegipanjang2->getKeliling();
?>