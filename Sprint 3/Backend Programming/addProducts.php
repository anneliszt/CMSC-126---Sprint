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

  require_once('processForm.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="addProduct.css">
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

<div class="separator">
    <div class="delivery">
        <img src="img/delivery.png">
    </div>
    <div class="container">
        <div class="row">
        <div class="col-4 offset-md-4 form-div">
        
        <!-- Add new products form -->
        <form action="addProducts.php" method="post" enctype="multipart/form-data">
        <div class="add-title"><h>Add new products</h></div>
        
            <li class="link-to-products">
                <a href="products.php">View all products</a>
            </li>
            <?php if (!empty($msg)): ?>
            <div class="alert <?php echo $msg_class ?>" role="alert">
                <?php echo $msg; ?>
            </div>
            <?php endif; ?>
        
            <div class="form-group">
                <label>Product Name </label>
                <input type="text "name="product_name" class="form-control"></input>
                </div>
                <div class="form-group">
                <label>Price </label>
                <input type="number" name="price" class="form-control"></input>
                </div>
                <div class="form-group text-center" style="position: relative;" >
                <div class="img-div">
                    <div class="text-center img-placeholder"  onClick="triggerClick()">
                    </div>
                    <img src="img/upload-pic.png" class="image" onClick="triggerClick()" id="productDisplay">
                </div>
                <input type="file" name="productImage" onChange="displayImage(this)" id="productImage" class="form-control" style="display: none;">
                </div>
                <div class="form-group">
                <button type="submit" name="save_profile" class="btn btn-primary btn-block">Add Product</button>
                </div>
        </form>
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
            <a id="products-link" href="addProducts.php"><div>Products</div></a>
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