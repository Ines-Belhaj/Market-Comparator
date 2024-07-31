<?php
session_start();
?>
<?php
$title = "Menu";
include "template-market.php";
?>





<?php function body() { ?>
  <center>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <img width="650" height="350" src="https://tmstools.co.th/wp-content/uploads/2016/10/map-location-pin.jpg" alt="Local image"><br>
  <h1 style="text-align:center;">Locations</h1>
  <a href="add-location.php"><img align="right" width="30" height="30" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR7ZwJ-JKXJcyjqWJjRODdK7EAXtg2bgrH_IQPqNYci2ofIxkpQwj2tOSugzGjyNbpebu0&usqp=CAU"></a>
  <p style="text-align:right;"><small><b>ADD local</b></small></p>
  <br>
  <!-- The form -->
  <form class="example" action="search_location.php">
    <input style="text-align:center;" type="text" id="location1" name="location1" placeholder="Search location" >
    <button type="submit"><i class="fa fa-search"></i></button>
  </form>


<div style="text-align:center;">
  <table>
  <tr>
    <td>
        <p style="text-align:center;">City<p>
    </td>
    <td>
        <p style="text-align:center;">Region</p>
    </td>
    <td>
        <p style="text-align:center;">Street</p>
    </td>
    <td>
        <p style="text-align:center;">Fax number</p>
    </td>
    <td>
        <p></p>
    </td>
  </tr>


  <?php include "connection.php";
  $market_id = $_SESSION['id'];
  $location = $db->location()
    ->where("market_id = ?", $market_id);
  foreach ($location as $market_id => $location) {
  ?>
  <tr>
    <td>
        <p style="text-align:center;"><b><small><?php echo $location['city'] ?></small></b></p>
    </td>
    <td>
        <p style="text-align:center;"><b><small><?php echo $location['region'] ?></small></b></p>
    </td>
    <td>
        <p style="text-align:center;"><b><small><?php echo $location['street'] ?></small></b></p>
    </td>
    <td>
        <p style="text-align:center;"><b><small><?php echo $location['number'] ?></small></b></p>
    </td>

    <td>
        <form action="modify-location.php">
            <input type="hidden" name="id" value="<?php echo $location['id'] ?>" />
            <button type="submit"><img width="20" height="20" src="https://img.icons8.com/ios/452/change.png" alt="change info"></button>
        </form>

        <form action="delete-location.php">
            <input type="hidden" name="id" value="<?php echo $location['id'] ?>" />
            <button type="submit"><img width="20" height="20" src="https://icons-for-free.com/iconfiles/png/512/delete+remove+trash+trash+bin+trash+can+icon-1320073117929397588.png" alt="delete"></button>
        </form>
    </td>
  </tr>
<?php } ?>

</table>
</div>
</center>

<?php } ?>
