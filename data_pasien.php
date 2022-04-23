<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
  <div class="container-fluid">
  <div class="row">
		<div class="col-md-3">
		</div>
		<div class="col-md-6">
        

<form class="form-horizontal" action="project01.php" method="POST">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="nama" name="nama" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir</label> 
    <div class="col-8">
      <input id="tmp_lahir" name="tmp_lahir" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir</label> 
    <div class="col-8">
      <input id="tgl_lahir" name="tgl_lahir" type="date" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <input id="email" name="email" type="email" class="form-control" required="required">
    </div>
  </div>
  
  <div class="form-group row">
    <label for="tb" class="col-4 col-form-label">Tinggi Badan</label> 
    <div class="col-8">
      <input id="tb" name="tb" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="bb" class="col-4 col-form-label">Berat Badan</label> 
    <div class="col-8">
      <input id="bb" name="bb" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="tgl_bmi" class="col-4 col-form-label">Tanggal Periksa</label> 
    <div class="col-8">
      <input id="tgl_bmi" name="tgl_bmi" type="date" class="form-control" required="required">
    </div>
</div>
  <div class="form-group row">
    <label class="col-4">Gender</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="gender" id="gender_0" type="radio" class="custom-control-input" value="L" required="required"> 
        <label for="gender_0" class="custom-control-label">Laki-Laki</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="gender" id="gender_1" type="radio" class="custom-control-input" value="P" required="required"> 
        <label for="gender_1" class="custom-control-label">Perempuan</label>
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <input value="Submit" class="btn btn-primary" type="submit" name="proses">
    </div>
  </div>
</form>
		</div>
		<div class="col-md-3">
		</div>
	</div>
  <div class="row">
    <div class="col-md-12">
      <?php
      require_once 'class_pasien.php';
      require_once 'class_bmi.php';
      require_once 'class_bmi_pasien.php';

      $proses= $_POST['proses'];
      $nama= $_POST['nama'];
      $tgl_lahir= $_POST['tgl_lahir'];
      $tmp_lahir= $_POST['tmp_lahir'];
      $email= $_POST['email'];
      $tinggi_badan= $_POST['tb'];
      $berat_badan= $_POST['bb'];
      $gender= $_POST['gender'];
      $tanggal_periksa= $_POST['tgl_bmi'];

      $pasien1 = new BMIpasien ('P001', 'Ahmad', 'Bogor', '2000-04-05', 'ahmad@gmail.com', 'L', 69.8, 169, '2022-01-10');
      $pasien2 = new BMIpasien ('P002', 'Rina', 'Jakarta', '2000-06-05', 'rina@gmail.com', 'P', 55.3, 165, '2022-01-10');
      $pasien3 = new BMIpasien ('P003', 'Luthfi', 'Depok', '2000-09-05', 'luthfi@gmail.com', 'L', 45.2, 171, '2022-01-11');
      $pasien4 = new BMIpasien ('P004', $nama, $tmp_lahir, $tgl_lahir, $email, $gender, $berat_badan, $tinggi_badan, $tanggal_periksa);
      
      if (!empty($proses)){
      echo 'Nilai BMI Anda Adalah'.$pasien4->hitung_BMI();
      echo '<br>';
      echo $pasien4->gambar_BMI();
      }
      ?>

    </div>

  </div>
	<div class="row">
		<div class="col-md-12">

<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Tanggal Periksa</th>
      <th scope="col">Kode</th>
      <th scope="col">Nama</th>
      <th scope="col">Gender</th>
      <th scope="col">Berat Badan</th>
      <th scope="col">Tinggi Badan</th>
      <th scope="col">Nilai BMI</th>
      <th scope="col">Status BMI</th>
    </tr>
  </thead>
  <?php


 
    echo '<tbody>
    <tr>
      <th scope="row">1</th>
      <td>'.$pasien1->tanggal_periksa.'</td>
      <td>'.$pasien1->kode.'</td>
      <td>'.$pasien1->nama.'</td>
      <td>'.$pasien1->gender.'</td>
      <td>'.$pasien1->berat.'</td>
      <td>'.$pasien1->tinggi.'</td>
      <td>'.$pasien1->hitung_BMI().'</td>
      <td>'.$pasien1->status_BMI().'</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>'.$pasien2->tanggal_periksa.'</td>
      <td>'.$pasien2->kode.'</td>
      <td>'.$pasien2->nama.'</td>
      <td>'.$pasien2->gender.'</td>
      <td>'.$pasien2->berat.'</td>
      <td>'.$pasien2->tinggi.'</td>
      <td>'.$pasien2->hitung_BMI().'</td>
      <td>'.$pasien2->status_BMI().'</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>'.$pasien3->tanggal_periksa.'</td>
      <td>'.$pasien3->kode.'</td>
      <td>'.$pasien3->nama.'</td>
      <td>'.$pasien3->gender.'</td>
      <td>'.$pasien3->berat.'</td>
      <td>'.$pasien3->tinggi.'</td>
      <td>'.$pasien3->hitung_BMI().'</td>
      <td>'.$pasien3->status_BMI().'</td>
    </tr>';
    if (!empty($proses)){
    echo '<tr>
      <th scope="row">4</th>
      <td>'.$tanggal_periksa.'</td>
      <td>'.$pasien4->kode.'</td>
      <td>'.$nama.'</td>
      <td>'.$gender.'</td>
      <td>'.$berat_badan.'</td>
      <td>'.$tinggi_badan.'</td>
      <td>'.$pasien4->hitung_BMI().'</td>
      <td>'.$pasien4->status_BMI().'</td>
    </tr> 
    </tbody>';
    }

  ?>
</table>
		</div>
	</div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
  </body>
</html>