<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Regisztráció</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Regisztráció</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Keresztnév</label>
  	  <input type="text" name="fname" value="<?php echo $fname; ?>">
  	</div>
    <div class="input-group">
      <label>Vezetéknév</label>
      <input type="text" name="lname" value="<?php echo $lname; ?>">
    </div>
    <div class="input-group">
      <label>Felhasználónév</label>
      <input type="text" name="uname" value="<?php echo $uname; ?>">
    </div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Jelszó</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Telefonszám</label>
  	  <input type="text" name="telephone">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Regisztráció</button>
  	</div>
  	<p>
  		Már regisztráltál? <a href="login.php">Lépj be</a>
  	</p>
  </form>
</body>
</html>