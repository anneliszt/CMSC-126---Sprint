<?php include('DBConnector.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>SCC Konbini Login</title>
  <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
	<!-- Displays logo -->
    <div class="konbini-logo">
		<img src="img/konbini-logo.png">
	</div>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
    <!-- Login form -->
  <form method="post" action="login.php">
  	<?php include('error.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>

	<!-- If user has no existing records, redirect to registration -->
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
</body>
</html>