<?php
// Move session_start to the top of the file
session_start();
?>

<header class="header mw-80 m-auto sticky-top">
  <nav class="navbar navbar-expand-lg navbar-light background-light" id="navb" style=" position: sticky;
    top: 0;
    z-index: 9999;
">
  <link rel="shortcut icon" href="./img/cart.png" type="image/x-icon">
    <div class="container-fluid ">
      <img src="./img/logo.png" alt="" style="width: 12rem;" />
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 navbar-brand ms-auto ">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="index.php">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="allproducts.php">MENU</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">ABOUT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#trendings">CONTACT US</a>
          </li>
        </ul>
        <!-- search -->
        <div class="search d-flex">
          <form method="GET" id="search-form">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for cards..." name="search" id="search-input">
              <div class="input-group-append">
                <button class="btn btn-dark searchbtn" type="submit">Search</button>
              </div>
            </div>
          </form>
        </div>

        <!-- Account dropdown -->
        <div class="dropdown" style="display: flex; align-items: center;">
          <span class="navbar-text">
            <a href="./cart.php"><img class="carts" src="./img/cart.png" alt="" style="width: 1.5rem; margin-right: -2rem;"></a>
            <!-- <img class="carts" src="./img/notification.png" alt="" style="width: 1.5rem; margin-right: -2rem;"> -->
            <img class="carts" src="./img/account.png" alt="" style="width: 1.5rem; margin-right: -2rem;">
          </span>
        </div>
        <!-- 2nd -->
        <div class="dropdown" style="display: flex; align-items: center;">
          <span class="navbar-text">
            <!-- <a href="./cart.php"><img class="carts" src="./img/cart.png" alt="" style="width: 1.5rem; margin-right: -2rem;"></a> -->
            <!-- <img class="carts" src="./img/notification.png" alt="" style="width: 1.5rem; margin-right: -2rem;"> -->
            <!-- <img class="carts" src="./img/account.png" alt="" style="width: 1.5rem; margin-right: -2rem;"> -->
          </span>
        </div>
        <div class="account d-flex "style="display: flex; align-items: center;">
          <?php
          // Check if the user is logged in
          // session_start();
          if (isset($_SESSION['username'])) {
            echo '<img src="images/profile.png" alt="" width="30px"><a href="#" class="btn"><b>' . $_SESSION['username'] . '</b>' . '</a>';
            echo '<a class="btn" href="logout.php">Log Out</a>';
          } else {
            echo '<a href="./login.php" class="btn" style="margin-left: 2rem;">Login</a>';
            // echo '<a href="signup.php" class="btn">Sign-Up</a>';
          }
          ?>
        </div>
      </div>
    </div>
  </nav>
</header>