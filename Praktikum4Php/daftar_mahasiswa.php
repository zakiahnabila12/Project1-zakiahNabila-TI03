<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Daftar Mahasiswa</title>
  </head>
  <body>
<div class="container">
    <table class="table">
  <thead>  
    <tr>
      <th style="text-align: center;">No</th>
      <th style="text-align: center;">NIM</th>
      <th style="text-align: center;">Nama</th>
      <th style="text-align: center;">Prodi</th>
      <th style="text-align: center;">Thn Angkatan</th>
      <th style="text-align: center;">Ipk</th>
      <th style="text-align: center;">Predikat</th>
    </tr>
  </thead>
  <?php
  require_once 'class_mahasiswa.php';
  $mahasiswa1 = new Mahasiswa('01122222', 'zakiah', 2020, 'TI', 4.0);
  $mahasiswa2 = new Mahasiswa('01122233', 'nabila', 2020, 'TI', 4.0);
  $mahasiswa3 = new Mahasiswa('01122244', 'kiya', 2020, 'TI', 4.0);
echo '<tbody>

    <tr>
      <th scope="row">1</th>
      <td>'.$mahasiswa1->nim.'</td>
      <td>'.$mahasiswa1->nama.'</td>
      <td>'.$mahasiswa1->prodi.'</td>
      <td>'.$mahasiswa1->thn_angkatan.'</td>
      <td>'.$mahasiswa1->ipk.'</td>
      <td>'.$mahasiswa1->predikat_ipk().'</td>
    </tr>
    <tr>
        <th scope="row">2</th>
        <td>'.$mahasiswa2->nim.'</td>
        <td>'.$mahasiswa2->nama.'</td>
        <td>'.$mahasiswa2->prodi.'</td>
        <td>'.$mahasiswa2->thn_angkatan.'</td>
        <td>'.$mahasiswa2->ipk.'</td>
        <td>'.$mahasiswa2->predikat_ipk().'</td>
    </tr>
    <tr>
        <th scope="row">3</th>
        <td>'.$mahasiswa3->nim.'</td>
        <td>'.$mahasiswa3->nama.'</td>
        <td>'.$mahasiswa3->prodi.'</td>
        <td>'.$mahasiswa3->thn_angkatan.'</td>
        <td>'.$mahasiswa3->ipk.'</td>
        <td>'.$mahasiswa3->predikat_ipk().'</td>
    </tr>
  </tbody>';
?>
</table>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>