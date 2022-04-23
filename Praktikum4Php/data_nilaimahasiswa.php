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

  <div class="container ">
    <h3>Form Nilai Ujian</h3>

    <form method="POST" action="data_nilaimahasiswa.php">
      <div class="form-group row">
        <label for="" class="col-4 col-form-label">NIM</label> 
        <div class="col-8">
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="fa fa-address-card"></i>
              </div>
            </div> 
            <input id="" name="nim" type="text" class="form-control">
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
        <label for="text1" class="col-4 col-form-label">Nilai </label> 
        <div class="col-8">
          <input id="text1" name="nilai" type="text" class="form-control">
        </div>
        <div class="form-group row mx-auto mt-3">
        <div class="offset-4 col-8">
          <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </div>
    </form>
    <div class= "container">
    <?php
    require_once 'class_nilaimahasiswa.php';

    if($_POST){
        $ns = new NilaiMahasiswa( $_POST['nim'], $_POST['matkul'], $_POST['nilai']);
        $keterangan = $ns->hitungNilai();
        $hasil = $ns->grade($keterangan);
        $hasil2 = $ns->predikat($keterangan);
        echo "<br>";
        echo "NIM : " .$ns->nim;
        echo "<br>";
        echo "Matkul : " .$ns->matkul;
        echo "<br>";
        echo "Nilai : " .$ns->nilai;
        echo "<br>";
        echo "Status : " .$hasil;
        echo "<br>";
        echo "Grade : " .$hasil2;
    }
    ?>
    </div>