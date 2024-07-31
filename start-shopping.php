<?php session_start();
if (!isset($_SESSION['firstName'])) header("Location: login-customer.php" );//debugging trick ?>
<?php
$title = "Menu";
$stylesheet="css/start-shopping.css";

include "template.php";
?>

<?php function body() { ?>

    <center>
  <h2 class="welcome">Welcome <?php echo $_SESSION['firstName'] ?></h2>

  <div class="container1">


    <div class="row">
      <div class="col">
      </div>
      <div class="col">
      </div>
      <div class="col">
      </div>
      <div class="col">
        <a href="delivery.php"><img src="pics/finish-shopping.png" alt="finish shopping"height="100" width="150" ></a>
      </div>
    </div>
  </div>


    <br>
    <table>
      <tr>
          <div class="look">
            <form  action="searched-product.php" method="get">
            <input type="text" name="product" value="" placeholder="look for a product">
              <button type="submit"class="btn btn-primary">search</button>
            </form>
          </div>
      </tr>
      <div class="categories">

      <tr>
        <a href="fruits-veggies.php"><img src="pics/fruits-veggies.png" alt="fruits & veggies" height="300" width="1300"></a>
      </tr>
      <tr>
        <a href="by-milk-products.php"><img src="pics/by-milk-products.png" alt="by milk products"height="300" width ="1300"></a>
      </tr>
      <tr>
        <a href="seafood-meat-poultry.php"><img src="pics/seafood-meat-poultry.png" alt="fish meat"height="300" width="1300"></a>
      </tr>
      <tr>
        <a href="cooking.php"><img src="pics/cooking.png" alt="cooking" height="300" width="1300"></a>
      </tr>
      <tr>
        <a href="cosmetics.php"><img src="pics/cosmetics.png" alt="cosmetics"height="300" width="1300"></a>
      </tr>
      <tr>
        <a href="hygiene.php"><img src="pics/hygiene.png" alt="hygiene"height="300" width="1300"></a>
      </tr>
      <tr>
        <a href="flour-pasta-sides.php"><img src="pics/flour-pasta-sides.png" alt="flour pasta rice"height="300" width="1300"></a>
      </tr>
      </div>
<!--
      <div class="categories">

      <tr>
          <div class="container">
            <a class="test" href="fruits-veggies.php"><img class="image" src="pics/fruits-veggies.png" alt="fruits & veggies" ></a>
              <div class="overlay">
                  <div class="text">Fruits & veggies</div>
              </div>
          </div>
      </tr>

      <tr>
          <div class="container">
            <a href="by-milk-products.php"><img class="image"src="pics/by-milk-products.png" alt="by milk products"height="300" width ="1300"></a>
              <div class="overlay">
                  <div class="text">By-milk products</div>
              </div>
          </div>
      </tr>

      <tr>
          <div class="container">
            <a href="seafood-meat-poultry.php"><img class="image"src="pics/seafood-meat-poultry.png" alt="fish meat"></a>
              <div class="overlay">
                  <div class="text">By-milk products</div>
              </div>
          </div>
      </tr>


        <tr>
                <div class="container">
                  <a href="cooking.php"><img class="image" src="pics/cooking.png" alt="cooking" ></a>
                    <div class="overlay">
                        <div class="text">By-milk products</div>
                    </div>
                </div>
        </tr>

        <tr>
                <div class="container">
                  <a href="cosmetics.php"><img class="image"src="pics/cosmetics.png" alt="cosmetics"></a>
                    <div class="overlay">
                        <div class="text">By-milk products</div>
                    </div>
                </div>
        </tr>

        <tr>
                <div class="container">
                  <a href="hygiene.php"><img class="image" src="pics/hygiene.png" alt="hygiene"></a>
                    <div class="overlay">
                        <div class="text">By-milk products</div>
                    </div>
                </div>
        </tr>

        <tr>
                <div class="container">
                  <a href="flour-pasta-sides.php"><img class="image"src="pics/flour-pasta-sides.png" alt="flour pasta rice"></a>
                    <div class="overlay">
                        <div class="text">By-milk products</div>
                    </div>
                </div>
        </tr>

      </div>-->
    </table>
      </center>
<?php } ?>
