<?php session_start();
$_SESSION['wrong']=false;
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
  </head>
  <body>
    <div class="logo">
      <left>
      <img src="pics/logo.png" alt="logo" height="150" width="150">
      </left>
    </div>
    <div class="">
      <center>
        <a href="login-customer.php"><img src="pics/customer.png" alt="customer"></a>
        <a href="login-professional.php"><img src="pics/market.png" alt="market"></a>
      </center>
    </div>

  </body>
</html>
