<table>
    <tr>
        <td>
          <?php foreach ($shoppingList as $item) { ?>
            <p><?php echo $product['name'];        echo $cart['quantity'];?> </p>
          <?php } ?>
        </td>
      </tr>

      <tr>
        <td>
            <p style="text-align:center"><b>DELIVERY OFFER</b></p><br>
        </td>
        <td>
            <p style="text-align:center"><b>BASIC OFFER</b></p><br>
        </td>
      </tr>

            <?php
              include "connection.php";
              $min = 0;
              $sum = 0;

              foreach ($db->professional() as $market)
          {
                $sum=0;
                foreach ($shoppingList as $item)
                {
                  foreach ($db->product() as $product)
                 {
                    if($item["product_id"]=$product["id"])
                    {
                      $sum=$item['quantity']*$product['price']+$sum;
                    }
                  }
                }
                if ($sum < $min)
                  {
                    $min=$sum;
                    $optimal=$market['id'];
                  }
          }
                    $optimaLMarket=$db->professional[$optimal];
                      ?><p><?php echo $optimalMarket['market_name']; ?></p>
                      <p><?php echo "your grocery costs".$sum." D"; ?></p>
                      <p><b><big>+</big></b>Delivery	10dt</p>

        </td>
      <td>
        <form action = "delivery-submit.php">
          <label for="address"><p><b>Address: </b></p></label>
          <input type="text" id="address" name="address" placeholder="Enter your address"><br><br>
          <button style="float: right;margin:10px 18.2% 0 0;"><a href="add-product-submit.php"><small><b>CONFIRM</b></small></a></button>
        </form>
      </td>


        <td>
            <p><a href="DeliveryConfirm.htm"><img height="20" width="20" src="https://png.pngtree.com/element_our/png/20181213/valid-vector-icon-png_267488.jpg" alt="Valid icon"><b>Valid</b></a></p>
        </td>
        <td>
            <p><a href="BasicOffer.htm"><img height="20" width="20" src="https://png.pngtree.com/element_our/png/20181213/valid-vector-icon-png_267488.jpg" alt="Valid icon"><b>Valid</b></a></p>
        </td>
    </tr>
</table>




<?php
  include "connection.php";
  $min = 10000000;
  $sum = 0;

  foreach ($db->professional() as $market)
{
    $sum=0;
    foreach ($shoppingList as $item)
    {
      foreach ($db->product() as $product)
     {
        if($item["product_id"]=$product["id"])
        {
          $sum=$item['quantity']*$product['price']+$sum;
        }
      }
    }
    $location = $db->location("market_id = ? ", $market['id'])->fetch();
    if (($sum < $min) && ($address == $location['city'] . $location['region']) )
      {
        $min=$sum;
        $optimal=$market['id'];
      }
}
        $optimalMarket=$db->professional[$optimal];
        $optimalLocation=$db->location[$optimal];
          ?><p>Your best market is: <?php echo $optimalMarket['market_name']; ?>
          street <?php echo $optimalLocation['street']; ?></p>
          <p><?php echo "your grocery costs".$sum." D"; ?></p>
</td>
