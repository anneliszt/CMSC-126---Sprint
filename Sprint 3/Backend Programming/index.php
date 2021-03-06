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
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;700;800;900&display=swap" rel="stylesheet">
    <title>SCC Konbini</title>
</head>

<body>
    <img src= "img/header-img.png" alt="Konbini Header" class="header-image">

    <!-- Header -->
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

    <!--Carousel-->
    <div class="slideshow-container fade">

    <div class="Containers">
      <img src="img/carousel-img1.png">
    </div>
  
    <div class="Containers">
      <img src="img/carousel-img3.png">
    </div>
  
    <div class="Containers">
      <img src="img/carousel-img2.png">
    </div>
  
  </div>
  <br>
  
  <div style="text-align:center">
    <span class="dots" onclick="currentSlide(1)"></span>
    <span class="dots" onclick="currentSlide(2)"></span>
    <span class="dots" onclick="currentSlide(3)"></span>
  </div> 
  
  <!-- List of Qualities -->
  <div class="quick-links">
    <div class="caption">
        <div class="link-img">
            <img src="img/quality-1.png" alt="Logo" />
        </div>
        <h1>100% Authentic<br>Japanese Products</h1>
    </div>
 
        <div class="caption">
            <div class="link-img">
                <img src="img/quality-2.png" alt="Logo" />
            </div>
        <h1>Free Shipping</h1>
        </div>
 
        <div class="caption">
            <div class="link-img">
                <img src="img/quality-3.png" alt="Logo" />
            </div>
        <h1>Money Back Guarantee</h1>
        </div>
    </div>
  
    <!-- Small description -->
    <div class="small-about">
        <div class="description">
            <div class="description-box">
                <b>SCC KONBINI</b> is an online shop that started in 2020. 
                In SCC KONBINI we are selling products that are only 
                found in Japan! Everything at our store is made in 
                Japan and 100% original only. Customers can't enjoy 
                a wide variety of snacks, sweets, lifestyle products, 
                make-up and many more!. 
            </div>
            <div class="help-button">
                <a href="products.php" class="button">Go to Products</a>
            </div>
        </div>
        <img src="img/homepage-icon.png">
    </div>


<!-- Rectangles -->
  <div class="rectangle1"></div>
  <div class="rectangle"></div>
  
  <!-- Footer -->
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
                All Rights Reserved ?? 2022 <br />
                San Carlos City, Negros Occidental 6127
            </p>
        </div>
    </div>
</footer>
    <script src="myScript.js"></script>
</body>
</html>