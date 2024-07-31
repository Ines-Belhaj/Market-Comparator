<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">

</head>
<body>
  <left>
  <img class="logo"src="pics/logo.png" alt="logo" height="150" width="150">
  </left>
<center>
  <?php if($_SESSION['wrong']){ ?>
<div class="retry">
    <h1>Your Email OR Password is wrong !!</h1>
    <h2>Try again</h2>
</div>
  <?php } ?>

<div class="form">

  <form   action="validation-customer.php">
    <div class="form-group mx-sm-3 mb-2" >
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="form-group mx-sm-3 mb-2">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" name="password">
    </div>
    <a href="reset-password.php">Have you forgotten your password?</a>
    </div >
    <button type="submit" class="btn btn-warning">login</button>
  </form>





</center>
</body>
</html>
