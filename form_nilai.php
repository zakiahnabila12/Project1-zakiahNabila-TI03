<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Form Zakiah Nabila 0110221071</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>

  <div class="container mt-5 border border-primary rounded">
    <h3>Form Nilai Siswa</h3>

    <form method="POST" action="form_nilai.php">
      <div class="form-group row">
        <label for="" class="col-4 col-form-label">Nama Lengkap</label> 
        <div class="col-8">
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="fa fa-address-card"></i>
              </div>
            </div> 
            <input id="" name="nama" type="text" class="form-control">
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label for="Matkul" class="col-4 col-form-label">Mata Kuliah</label> 
        <div class="col-8">
          <select id="matkul" name="matkul" class="custom-select">
            <option value="ddp">Dasar-Dasar Pemrograman</option>
            <option value="pw">Pemrograman Web</option>
            <option value="bd">Basis Data</option>
          </select>
        </div>
      </div>
      <div class="form-group row">
        <label for="text1" class="col-4 col-form-label">Nilai UTS</label> 
        <div class="col-8">
          <input id="text1" name="uts" type="text" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="text2" class="col-4 col-form-label">Nilai UAS</label> 
        <div class="col-8">
          <input id="text2" name="uas" type="text" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="text" class="col-4 col-form-label">Nilai Tugas/Praktikum</label> 
        <div class="col-8">
          <input id="text" name="tugas" type="text" class="form-control">
        </div>
      </div> 
      <div class="form-group row">
        <div class="offset-4 col-8">
          <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </div>
    </form>

    <?php
    // ambil data input user
    $nama = $_POST['nama'];
    $matkul = $_POST['matkul'];
    $uts = $_POST['uts'];
    $uas = $_POST['uas'];
    $tugas = $_POST['tugas'];
    $nilai_akhir = ($uts + $uas + $tugas) / 3;


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

    </div>

    <div class="container border border-primary mt-5">
      <?php
      echo "Nama Siswa : $nama";
      echo "<br>Mata Kuliah : $matkul";
      echo "<br>Nilai UTS : $uts";
      echo "<br>Nilai UAS : $uas";
      echo "<br>NilaiTugas : $tugas";
      echo "<br>Nilai Akhir : $nilai_akhir";
      echo "<br>Grade : $grade";
      echo "<br>Predikat : $predikat";
      echo "<br>Keterangan : $keterangan";

      ?>
    </div>
  </body>
</html>
