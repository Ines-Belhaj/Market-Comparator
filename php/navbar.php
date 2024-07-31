<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <img src="pics/logo.png" alt="logo" height="100" width="120">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="start-shopping.php"><b>Home</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="edit-customer-profile.php"><b>Edit profile</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cart.php"><b>Cart</b></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <b>categories</b>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="fruits-veggies.php"><b>fruits & veggies</b></a></li>
            <li><a class="dropdown-item" href="by-milk-products.php"><b>by-milk products</b></a></li>
            <li><a class="dropdown-item" href="cooking.php"><b>cooking</b></a></li>
            <li><a class="dropdown-item" href="cosmetics.php"><b>cosmetics</b></a></li>
            <li><a class="dropdown-item" href="flour-pasta-sides.php"><b>flour pasta sides</b></a></li>
            <li><a class="dropdown-item" href="hygiene.php"><b>hygiene</b></a></li>
            <li><a class="dropdown-item" href="seafood.php"><b>seafood</b></a></li>
          </ul>
        </li>

      </ul>
      <form action="index.php" method="get" class="logout">
    <button type="submit" class="btn btn-dark"><b>log out</b></button>
      </form>
    </div>
  </div>
</nav>
