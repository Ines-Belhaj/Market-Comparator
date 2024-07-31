<?php
$title = "Menu";
include "template-market.php";
?>

<?php function body() { ?>

    <img width="650" height="350" src="https://tmstools.co.th/wp-content/uploads/2016/10/map-location-pin.jpg" alt="Local image"><br>
    <h1 style="text-align:center;">Locations</h1>
    <h2 style="text-align:center;">ADD A LOCAL</h2>


    <form action="add-location.php">
        <button type="submit"><a href="add-location.php"><img width="25" height="25" class="center" src="https://image.flaticon.com/icons/png/512/59/59338.png" alt="escape icon" /></a></button>
        <input type="hidden" name="id" value="<?php echo $location['id'] ?>" />
    </form>
    <p style="text-align:center;"><big>You have added<b> A NEW LOCAL</b></big></p>
    <p style="text-align:center;"><small><b>Click Here to Confirm</b></small></p>
    <a href="location-menu.php"><img class="center" width="25" height="25" class="center" src="https://www.25project.org/wp-content/uploads/2019/11/confirm-smartphone-icon-with-png-and-vector-format-for-free-confirmation-png-512_512.png" alt="confirm icon" /></a>
<?php } ?>
