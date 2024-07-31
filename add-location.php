<?php
$title = "add location";
include "template-market.php";
?>

<?php function body() { ?>

<img width="650" height="350" src="https://tmstools.co.th/wp-content/uploads/2016/10/map-location-pin.jpg" alt="Location image"><br>
<h1 style="text-align:center;">Locations</h1>
<h2 style="text-align:center;">ADD NEW Local</h2>

<div class="box" style="text-align:center;">
  <form action="add-location-submit.php">
    <label for="city"><p><b>City: </b></p></label>
    <input type="text" id="city" name="city"><br><br>

    <label for="region"><p><b>Region: </b></p></label>
    <input type="text" id="region" name="region"><br><br>

    <label for="street"><p><b>Street: </b></p></label>
    <input type="text" id="street" name="street"><br><br>

    <label for="number"><p><b>Fax number: </b></p></label>   <!--list the categories-->
    <input type="text" id="number" name="number"><br><br>

    <button style="float: right;margin:10px 18.2% 0 0;"><a href="add-location-submit.php"><small><b>CONFIRM</b></small></a></button>
  </form>
  <button style="float: left;margin:10px 0 0 18.2%;" ><a href="location-menu.php"><small><b>CANCEL</b></small></a></button>
</div>
<?php } ?>
