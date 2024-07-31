<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>subsicribe custom</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
  <left>
  <img src="pics/logo.png" alt="logo" height="150" width="150">
  </left>

  <center>
    <h1 style="text-align: center">Welcome to <b>HIZO</b></h1>
    <br>
  <div class="form">

    <form   action="register-submit-customer.php">
      <div class="form-group mx-sm-3 mb-2" >
        <label  class="form-label"> First name</label>
        <input type="text" class="form-control" name="firstName">
      </div>

      <div class="form-group mx-sm-3 mb-2" >
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
      </div>

      <div class="form-group mx-sm-3 mb-2" >
        <label for="exampleInputEmail1" class="form-label">Email address again</label>
        <input type="email" class="form-control" id="exampleInputEmail1"  name="checkEmail">
      </div>
      <div class="form-group mx-sm-3 mb-2" >
        <label  class="form-label">Number</label>
        <input type="text" class="form-control" name="number">
      </div>
      <div class="form-group mx-sm-3 mb-2">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="password">
      </div>
      <div class="form-group mx-sm-3 mb-2">
        <label  class="form-label">Password again</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="checkPassword">
      </div>
  <br>
      </div >
      <button type="submit" class="btn btn-warning">submit</button>
    </form>
    <br>
  </center>


</body>
</html>
