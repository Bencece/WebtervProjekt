<?php 
	include_once("header.php"); 
	include_once("authentication.php");
?>
<!DOCTYPE html>
<html lang="hu">
  <head>
    <title>Bejelentkezés</title>
    <link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" media="print" href="print.css">
    <!-- Viewport beillesztése -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">
  </head>
  <body>
    <div class="header">
		<!--Logo -->
	  <div class="pepeholder">
		<a href="index.php">
			<img class="pepe" src="img\pepelogo2.png" width="105px">
			<h1 id="title">Pepe pizzéria</h1>
		</a>
	  </div>
	</div>
	<div class="contentBody">
      <!-- A menu beillesztése -->
      <?php include_once("menu.php"); ?>
		<div class="content loginPage">
			<div class="login" id="login">
				<div class="forms">
					<form>
						<h2>Kérlek jelentkezz be</h2>
						<p>
							<label>Felhasználó:
							<input name="username" type="text" placeholder="username" required maxlength="25"/></label>
						</p>
						<p>
							<label>Jelszó:
							<input name="password" type="password" placeholder="password" required maxlength="25"/></label>
						</p>
						<br>
						<p>
							<input class="submits" type="submit" value="Bejelentkezés"/>
						</p>
					</form>
				</div>
			</div>
			<div class="register">
				<div class="forms">
					<form>
					<h2>Regisztráció új felhasználóknak</h2>
					<p>
						<label>E-mail cím: <input class="regemail" type="email" placeholder="e-mail" required maxlength="25"/></label>
					</p>
					<p>
				<label>Felhasználónév:<input name="reguser" class="reguser" type="text" placeholder="username" required maxlength="25"/></label></p>
				<p>
				<label>Jelszó: <input name="regpassword" class="regpw" type="password" placeholder="password" required maxlength="25"/></label></p>
				<p>
					<label>Születésnap: <input type="date" id="birthday" name="birthday"></label>
				</p><br/>
				<input class="submits" type="submit" value="Regisztrálok"/>
				</form>
			</div>
			</div>
		</div>
	</div>
	<div class="footer">Pepe Pizza<sup>®</sup> 2020</div>
	<?php 
		//Teszt hívás
	  	$uzenet = registerUser("Elek", "elek2", "elek2", "elek@elek");
		echo "<script>alert('".$uzenet."');</script>";
	  ?>
  </body>
</html>