<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <div>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">No Account</th>
      <th scope="col">Pemilik</th>
      <th scope="col">Saldo</th>
    </tr>
  </thead>
  <?php
  require_once 'class_account.php';
  require_once 'class_accountbank.php';

  $ac1 = new AccountBank("C001",6000000,"Ahmad");
  $ac2 = new AccountBank("C002",5350000,"Budi");
  $ac3 = new AccountBank("C003",2500000,"Kurniawan");

  echo '<tbody>
    <tr>
      <th scope="row">1</th>
      <td>'.$ac1->nomor.'</td>
      <td>'.$ac1->customer.'</td>
      <td>'.$ac1->saldo.'</td>
    </tr>
    <tr>
    <th scope="row">2</th>
    <td>'.$ac2->nomor.'</td>
    <td>'.$ac2->customer.'</td>
    <td>'.$ac2->saldo.'</td>
    </tr>
    <tr>
    <th scope="row">3</th>
    <td>'.$ac3->nomor.'</td>
    <td>'.$ac3->customer.'</td>
    <td>'.$ac3->saldo.'</td>
    </tr>
  </tbody>';
  ?>
</table>
</div>    
<div class="container">
    <?php

$ac1 = new Account("C001",6000000);
$ac2 = new Account("C002",5350000);
$ac3 = new Account("C003",2500000);

$ac1->cetak();
$ac1->deposit(1000000);
echo '<br/> Menabung : 1000000<br/>';
$ac1->cetak_deposit();
echo'<hr>';

$ac1->cetak();
$ac1->withdraw(1500000);
echo '<br/>Transfer ke C003 : 1500000<br/>';
$ac1->cetak_withdraw();
echo '<hr>';

$ac1->cetak();
$ac1->withdraw(500000);
echo '<br/>Transfer ke C002 : 500000<br/>';
$ac1->cetak_withdraw();
echo '<hr>';

echo'<h2/></h2>';
$ac2->cetak();
$ac2->deposit(500000);
echo '<br/> Terima Uang dari C001 : 500000<br/>';
$ac2->cetak_deposit();
echo'<hr>';

echo'<h2/></h2>';
$ac3->cetak();
$ac3->deposit(1500000);
echo '<br/> Terima Uang dari C001 : 1500000<br/>';
$ac3->cetak_deposit();
echo'<hr>';

echo'<h2/></h2>';
$ac2->cetak();
$ac2->withdraw(2500000);
echo '<br/> Tarik Saldo : 2500000<br/>';
$ac2->cetak_withdraw();
echo'<hr>';

?>
    </div>
  </body>
</html>