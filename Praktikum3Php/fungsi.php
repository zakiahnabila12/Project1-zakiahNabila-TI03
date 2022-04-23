<?php
// Cara membuat fungsi
// function namafungsi(parameter){
    // code disini
//}

function luaspersegi($sisi){
    $rumus = $sisi * $sisi;
    return $rumus;
}

echo "Hasilnya adalah : " .luaspersegi(10);
echo "<br>";

// bikin fungsi nama

function nama(){
    echo "Nama saya Zakiah";
}

nama();
 echo "<br>";
// fungsi menggunakan parameter

function perkenalan($nama){
    echo "Perkenalkan Nama Saya :" . $nama;
}

perkenalan("Nabila");

//Parameter default sebagai jaga2 ketika lupa masukin parameter
//function perkenalan($nama = "Zakiah")
?>