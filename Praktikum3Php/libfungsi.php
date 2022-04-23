<?php
  


    $grade;
    $predikat;
    $keterangan;


    if ($nilai_akhir >= 0 && $nilai_akhir <= 35) {
      $grade = "E";
      $predikat = "Sangat Kurang";
      $keterangan = "Tidak Lulus";
    } else if ($nilai_akhir >= 36 && $nilai_akhir <= 55) {
      $grade = "D";
      $predikat = "Kurang";
      $keterangan = "Tidak Lulus";
    }  else if ($nilai_akhir >= 56 && $nilai_akhir <= 69) {
      $grade = "C";
      $predikat = "Cukup";
      $keterangan = "Lulus";
    } else if ($nilai_akhir >= 70 && $nilai_akhir <= 84) {
      $grade = "B";
      $predikat = "Memuaskan";
      $keterangan = "Lulus";
    }  else if ($nilai_akhir >= 85 && $nilai_akhir <= 100) {
      $grade = "A";
      $predikat = "Sangat Memuaskan";
      $keterangan = "Lulus";
    } else {
      $grade = "I";
      $predikat = "Tidak Ada";
      $keterangan = "Tidak Ada";
    }
    

    ?>