<?php
$title = "Menu";
include "template-market.php";
?>

<?php function body() { ?>
    <img width="650" height="350" src="https://tmstools.co.th/wp-content/uploads/2016/10/map-location-pin.jpg" alt="Local image"><br>
    <h1 style="text-align:center;">Locations</h1>
    <h2 style="text-align:center;">MODIFY your ADDRESS</h2>


    <?php
    $id = $_GET['id'];
    $city = $_GET['city'];
    $region = $_GET['region'];
    $street = $_GET['street'];
    $number = $_GET['number'];
    include "connection.php";
    $location = $db->location[$id];
    if(empty ($city)){
        $city = $location['city'];
    }
    if(empty ($region)){
        $region = $location['region'];
    }
    if(empty ($street)){
        $street = $location['street'];
    }
    if(empty ($number)){
        $number = $location['number'];
    }
    $newLocation = array(
            "city" => $city,
            "region" => $region,
            "street" => $street,
            "number" => $number,
    );
    $affected = $location->update($newLocation)
    //$address = $location['city'].$location['region'].$location['street'];
    ?>
    <form action="modify-location.php">
        <button type="submit"><a href="modify-location.php"><img width="25" height="25" class="center" src="https://image.flaticon.com/icons/png/512/59/59338.png" alt="escape icon" /></a></button>
        <input type="hidden" name="id" value="<?php echo $location['id'] ?>" />
    </form>
    <p style="text-align:center;"><big><b> You have changed the ADDRESS <?php //echo $address ?></b></big></p>
    <p style="text-align:center;"><small><b>Click Here to Confirm</b></small></p>
    <a href="location-menu.php"><img class="center" width="25" height="25" class="center" src="https://www.25project.org/wp-content/uploads/2019/11/confirm-smartphone-icon-with-png-and-vector-format-for-free-confirmation-png-512_512.png" alt="confirm icon" /></a>

<?php } ?>
