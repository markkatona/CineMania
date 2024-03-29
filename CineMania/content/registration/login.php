<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css?version=1">
</head>
<body>
  <div class="header">
  	<h2>Bejelentkezés</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Felhasználónév</label>
  		<input type="text" name="uname" >
  	</div>
  	<div class="input-group">
  		<label>Jelszó</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Bejelentkezés</button>
  	</div>
  	<p>
  		Még nem regisztrált? <a href="register.php">Regisztrálás</a>
  	</p>
	  <div class="input-group">
  		<button type="submit" class="btn" name="login_guest">Belépés Vendégként</button>
  	</div>
  </form>
</body>
</html>