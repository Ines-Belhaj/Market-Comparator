<?php
$title = "Menu";
include "template-market.php";
?>

<?php function body() { ?>
    <img width="650" height="350" src="https://tmstools.co.th/wp-content/uploads/2016/10/map-location-pin.jpg" alt="Local image"><br>
    <h1 style="text-align:center;">Locations</h1>
    <h2 style="text-align:center;">MODIFY your ADDRESS</h2>

    <?php $id = $_GET['id'];
    include "connection.php";
    $location = $db->location[$id]; // get by primary key
    if ($location){ ?>

    <form action="modify-location-template.php">
        <label for="city"><p><b>City: </b></p></label>
        <input type="text" name="city" value="<?php echo $location['city'] ?>" id="city">
        <br>

        <label for="region"><p><b>Region: </b></p></label>
        <input type="text" name="region" id="region" value="<?php echo $location['region'] ?>">
        <br>

        <label for="street"><p><b>Street: </b> </p></label>
        <input type="text" name="street" value="<?php echo $location['street'] ?>" id="street">
        <br>

        <label for="number"><p><b>Fax number: </b> </p></label>
        <input type="text" name="number" value="<?php echo $location['number'] ?>" id="number">
        <br>

        <input type="hidden" name="id" value="<?php echo $location['id'] ?>" />
        <button type="submit" style="float: right;margin:10px 18.2% 0 0;"><a href="modify-location-template.php"><small><b>CONFIRM</b></small></a></button>
        <button style="float: left;margin:10px 0 0 18.2%;" ><a href="location-menu.php"><small><b>CANCEL</b></small></a></button>
        <br>

    </form>

    <?php } ?>

    <p>
      <br>
        <img width="400" height="350" src="https://miro.medium.com/max/2400/0*8p7LXOrsVmt3jw6l.jpg" alt="map">
    </p>
<?php } ?>
