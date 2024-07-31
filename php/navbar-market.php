<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <img src="pics/logo.png" alt="logo" height="100" width="120">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="professional-management-account.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="edit-professional-profile.php">Edit profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="popularity.php">Popularity</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            management
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="product-menu.php">products</a></li>
            <li><a class="dropdown-item" href="location-menu.php">locations</a></li>
            <li><a class="dropdown-item" href="order-menu.php">orders</a></li>
          </ul>
        </li>

      </ul>
      <form action="index.php" method="get" class="logout">
    <button type="submit" class="btn btn-dark"><b>log out</b></button>
      </form>
    </div>
  </div>
</nav>
