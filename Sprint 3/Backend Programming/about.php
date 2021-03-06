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
    <link rel="stylesheet" href="about.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;700;800;900&display=swap" rel="stylesheet">
    <title>SCC Konbini</title>
</head>

<body>
    <!-- Header/Navbar --> 
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

    <!-- About us page -->
    <div class="about-bini">
        <img src="img/bini-logo.png">
        <div class="about-caption">
            <h1>About SCC Konbini</h1>
            <p>SCC KONBINI is an online shop that started in 2020. <br> 
                In SCC KONBINI, we are selling products that are 
                only <br>found in Japan! Customers 
                can enjoy a wide variety <br>of snacks, sweets, 
                lifestyle products, make-up and <br>many more. 
            </p>
        </div>
    </div>
    
    <!-- List of services -->
    <div class="labels">
        <div class="line"></div>
        <div class="services">
            <h1>SERVICES</h1>
        </div>
        <div class="line"></div>
    </div>

    <div class="grid-container">
        <div class="grid-item"><img src="img/services-1.png">
            <div class="desc-grid">One-time payment</div>
        </div>
        <div class="grid-item"><img src="img/services-3.png">
            <div class="desc-grid">Advanced logistics</div>
        </div>
        <div class="grid-item"><img src="img/services-4.png">
            <div class="desc-grid">Easy and convenient payment</div>
        </div>
        <div class="grid-item"><img src="img/services-5.png">
            <div class="desc-grid">Professional warehouse service</div>
        </div>
    </div>
    
    <!-- Frequently Asked Questions -->
    <div class="labels">
        <div class="line"></div>
        <div class="faqs">
            <h1>Frequently Asked Questions</h1>
        </div>
        <div class="line"></div>
    </div>

    <section class="faq-container">
        <div class="faq-one">
            <!-- faq question -->
            <h1 class="faq-page">Ordering during COVID-19 </h1>
            <!-- faq answer -->
            <div class="faq-body">
                <p>Due to the uncertainty of recent global events and the impact of COVID-19, 
                    many of our community have reached out to us with questions. We hope to 
                    provide our community with updated, accessible information regarding 
                    our situation during this global crisis. Feel free to message/email 
                    (scckonbini@gmail.com) us your questions! </p>
            </div>
        </div>
        <hr class="hr-line">
        <div class="faq-two">
            <!-- faq question -->
            <h1 class="faq-page">How long does it take for my order to be delivered?</h1>
            <!-- faq answer -->
            <div class="faq-body">
                <p>Items will be shipped from Japan. We usually ship within 1-3 business 
                    days of receiving cleared payment but please note that it could take 
                    longer depending on the product and the quantity of items ordered. </p>
            </div>
        </div>
        <hr class="hr-line">
        <div class="faq-three">
            <!-- faq question -->
    <h1 class="faq-page">What if I want to buy a product not listed in the shop?</h1>
            <!-- faq answer -->
            <div class="faq-body">
                <p>Message or email us at scckonbini@gmail.com with a picture and name of 
                    the product. We'll try our best to look for it! There will be an 
                    additional fee if you want us to search for a specific product.</p>
            </div>
        </div>
    </section>


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
    <script src="about.js"></script>
</body>
</html>