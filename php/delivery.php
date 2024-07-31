<!DOCTYPE html>
<html>
<head>
    <title>DELIVERY</title>
</head>

<body>

    <?php
        $customer_id = $_SESSION['id'];
        $final_price = 0;
        include "connection.php";
        $cart = $db->cart()
        ->where("customer_id = ?", $customer_id)
        ->order("title");
    ?>
    <img width="600" height="336" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ_42kbik7aUQif4XGtPXihHtOHnNdAIgEIflWZv_kW3qDjqWydJAnCpfUq3P2vP1Hejfs&usqp=CAU" alt="delivery"><br>
    <h1 style="text-align:center">Don't want to make a displacement?</h1>
    <h3 style="text-align:center">We can make a delivery for you!</h3>

    <table>
        <tr>
            <td>
                <p style="text-align:center"><b>DELIVERY OFFER</b></p><br>
            </td>
            <td>
                <p style="text-align:center"><b>BASIC OFFER</b></p><br>
            </td>
        </tr>

        <tr>
            <td>
                <?php // how to get the last id of professional the last id in cart and in products
                  include "connection.php";
                  $i = -1;
                  $max = 0;
                  $sum = 0;
                  while($x <= $numProfessionals) {
                    $i++;
                    if (($sum > $max ) && () )
                  }
                          ?>
                <p><b><big>+</big></b>Delivery	10dt</p>

            </td>
            <td>
                <p><?php echo $product['name'];        echo $cart['quantity'];?> </p>
            </td>
            <?php } ?>
        </tr>

        <tr>
            <td>
                <p><a href="DeliveryConfirm.htm"><img height="20" width="20" src="https://png.pngtree.com/element_our/png/20181213/valid-vector-icon-png_267488.jpg" alt="Valid icon"><b>Valid</b></a></p>
            </td>
            <td>
                <p><a href="BasicOffer.htm"><img height="20" width="20" src="https://png.pngtree.com/element_our/png/20181213/valid-vector-icon-png_267488.jpg" alt="Valid icon"><b>Valid</b></a></p>
            </td>
        </tr>
    </table>
</body>
</html>
