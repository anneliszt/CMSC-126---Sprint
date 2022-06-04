<?php include('DBConnector.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>SCC Konbini Registration</title>
  <link rel="stylesheet" type="text/css" href="register.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;700;800;900&display=swap" rel="stylesheet">
</head>
<body>
	<!-- Displays logo -->
	<div class="konbini-logo">
		<img src="img/konbini-logo.png">
	</div>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <!-- Registration form -->
  <form method="post" action="register.php">
  	<?php include('error.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>