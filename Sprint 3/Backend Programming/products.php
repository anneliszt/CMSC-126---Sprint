<?php

    session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }

  $conn = mysqli_connect("localhost", "root", "", "addproduct");
  $results = mysqli_query($conn, "SELECT * FROM upload");
  $upload = mysqli_fetch_all($results, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="products.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;700;800;900&display=swap" rel="stylesheet">

<title>SCC Konbini</title>
</head>

<body>
    <!-- Header -->
    <img src= "img/header-img.png" alt="Konbini Header" class="header-image">
    <header class="header">
        <nav class="navbar">
            <ul class="nav-menu">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="about.php" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="products.php" class="nav-link">Products</a>
                    </li>
            </ul>
                <div class="content">
                <!-- Notification message -->
                <?php if (isset($_SESSION['success'])) : ?>
                <div class="error success" >
                    <h3>
                    <?php 
                        echo $_SESSION['success']; 
                        unset($_SESSION['success']);
                    ?>
                    </h3>
                </div>
                <?php endif ?>
                
                <!-- Displays username and logout button -->
                <?php  if (isset($_SESSION['username'])) : ?>
                    <p class="username"><strong><?php echo $_SESSION['username']; ?></strong></p>
                    <p> <a href="index.php?logout='1'" class="logout">logout</a> </p>
                <?php endif ?>
            </div>
            </nav>
    </header>

<!-- Products label -->
<div class="products-label">
    <img src="img/dango.png">
    <h>Our Products</h>
</div>

<!-- List of products -->
  <div class="container">
    <div class="row">
      <div class="column" style="margin-top: 30px;">
        
      <div class="add-product" >
            <a href="addProducts.php"><img src="img/add.png"></a></li>
      </div>
        
        <br>
        <br>
        <div class="table">
            <?php foreach ($upload as $user): ?>
                
                    <img src="<?php echo 'images/' . $user['image']?>" alt="">
                    
                    <div class="product-details">
                    <h><?php echo $user['product_name']?></h>
                    <br>
                    <h2><?php echo "Php ". $user['price']?></h2>

                        <div class="deletebtn">
                        <td> <?php echo
                            "<form action='deleteProducts.php' method='post'>".
                            "<input type= 'text' style='display:none;' name='id' value='".$user["id"]."'>".
                            "<button type='submit'>Remove</button>".
                            "</form>";
                            echo "</tr>";
                        ?></td>
                    </div>      
                    </div>
            <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>

<!-- Footer -->
<div class="rectangle1"></div>
  <div class="rectangle"></div>
  
  <footer class="footer">
    <div class="l-footer">
        <a id="home-more2" href="#home" class="noUnderline">
            <div class="footer-logo">
                <img src="img/konbini-logo.png" alt="Logo" />
            </div>
            <div class="footer-title">
                <h4>SCC Konbini</h4>
            </div>
        </a>
        <div class="socials">
            <a href="https://www.facebook.com/SCCKonbini"
                ><img src="img/facebook.png"
            /></a>
            <a href="https://www.instagram.com/scc.konbini/"
                ><img src="img/instagram.png"
            /></a>
        </div>
    </div>

    <div class="r-footer">
        <div class="box">
            <a id="home-link" href="index.php"><div>Home</div></a>
            <a id="about-link" href="about.php"><div>About</div></a>
            <a id="products-link" href="products.php"><div>Products</div></a>
        </div>
        <div class="footer-rights">
            <p>
                All Rights Reserved © 2022 <br />
                San Carlos City, Negros Occidental 6127
            </p>
        </div>
    </div>
</footer>
    <script src="script.js"></script>
</body>
</html>