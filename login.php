<!DOCTYPE html>
<html lang="hu">
  <head>
    <title>Bejelentkezés</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- Viewport beillesztése -->
    <?php include "meta.php"; ?>
  </head>
  <body>
    <div class="header">
		<!--Logo -->
	  <div class="pepeholder">
		<a href="index.php">
			<img src="img\pepelogo2.png" align=left width="105px">
			<h1 id="title">Pepe pizzéria</h1>
		</a>
	  </div>
      <!-- A menu beillesztése -->
      <?php include "menu.php"; ?>
    </div>
    <div class="content" style="display:flex">
		<div class="login" style="margin-left: 20px; width:40%; background-color:#lightgrey; font-family:Arial" align=left>
			<div class="forms" align=left>
				<form>
				<h2 align=center>Kérlek jelentkezz be</h2>
				<p>
					<label for="username">Felhasználó:</label>
					<input name="username" type="text" style="" placeholder="username" required maxlength=25/></p>
				<p>
					<label for="password">Jelszó:</label>
					<input type="password" placeholder="password" required maxlength=25/></p><br>
					<p><input class="submits" type="submit" value="Bejelentkezés"/></p>
				</form>
			</div>
		</div>
		
		<div class="register" style="border-left:1px solid grey; margin-right:50px; padding-left:100px;" align=left>
			<div class="forms" align=left style="padding-right: 40px">
			<form>
			<h2>Regisztráció új felhasználóknak</h2>
			<p>
			<label for="regemail">E-mail cím:</label><input class="regemail" type="email" style="" placeholder="e-mail" required maxlength=25/></p>
			<p>
			<label for="regusername">Felhasználónév:</label><input class="reguser" type="text" placeholder="username" required maxlength=25 /></p>
			<p>
			<label for="regpassword">Jelszó:</label><input class="regpw" type="password" placeholder="password" required maxlength=25/></p><br>
			<input class="submits" type="submit" value="Regisztrálok"/>
			</form>
		</div>
		</div>

    </div>
    <div class="footer">Pepe Pizza<sup>®</sup> 2020</div>
  </body>
</html>