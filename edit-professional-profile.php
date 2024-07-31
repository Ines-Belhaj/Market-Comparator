<?php session_start(); ?>
<?php
$title = "Menu";
$stylesheet="css/edit-profile.css";

include "template-market.php";
?>

<?php function body() { ?>
  <div class="box" style="text-align:center;">

    <img width="650" height="350" src="https://tmstools.co.th/wp-content/uploads/2016/10/map-location-pin.jpg" alt="Local image"><br>
    <h1 style="text-align:center;">Locations</h1>
    <h2 style="text-align:center;">MODIFY your ACCOUNT</h2>

    <?php
    $id = $_SESSION['id'];
    include "connection.php";
    $market = $db->professional[$id]; // get by primary key
    ?>
    <div class="form-group mx-sm-3 mb-2" >

  <form action="edit-professional-account-submit.php">
      <label for="marketName"><p><b>market name: </b>  </p></label>
      <input type="text" name="marketName" value=<?php echo $market['market_name'] ?> id="marketName">
  <br>
      <label for="email"><p><b>email: </b>  </p></label>
      <input type="text" name="email" id="email" value=<?php echo $market['email']?>>
  <br>
      <label for="address"><p><b>address: </b>   </p></label>
      <input type="text" name="address" value=<?php echo $market['address']?> id="address">
  <br>
      <label for="number"><p><b>number: </b>  </p></label>
      <input type="text" name="number" value=<?php echo $market['number'] ?> id="number">
  <br>
      <label for="password"><p><b>password: </b>  </p></label>
      <input type="text" name="password" value=<?php echo $market['password'] ?> id="password">
  <br>
      <div class="container">
        <div class="row">
          <div class="col">
            <button type="submit" class="btn btn-success"><small><b>save changes</b></small></a></button>
          </div>
          <div class="col">
            <button class="btn btn-warning"  ><a href="professional-management-account.php"><small><b>cancel</b></small></a></button>
          </div>
        </div>
          </div>
  </form>


</div>

</div>

<?php } ?>
