<!DOCTYPE html>
<html lang="hu">
  <head>
    <title>Bejelentkezés</title>
    <link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" media="print" href="print.css">
    <!-- Viewport beillesztése -->
    <?php include "meta.php"; ?>
  </head>
  <body>
    <div class="header">
		<!--Logo -->
	  <div class="pepeholder">
		<a href="index.php">
			<img class="pepe" src="img\pepelogo2.png" align="left" width="105px">
			<h1 id="title">Pepe pizzéria</h1>
		</a>
	  </div>
	</div>
	<div class="contentBody">
      	<!-- A menu beillesztése -->
      	<?php include "menu.php"; ?>
		<div class="content" style="display:flex">
			<div class="login" align="left">
				<div class="forms" align="left">
					<form>
						<h2 align=center>Kérlek jelentkezz be</h2>
						<p>
							<label for="username">Felhasználó:</label>
							<input name="username" type="text" style="" placeholder="username" required maxlength=25/>
						</p>
						<p>
							<label for="password">Jelszó:</label>
							<input name="password" type="password" placeholder="password" required maxlength=25/>
						</p>
						<br>
						<p>
							<input class="submits" type="submit" value="Bejelentkezés"/>
						</p>
					</form>
				</div>
			</div>
			<div class="register" align="left">
				<div class="forms" align="left">
					<form>
					<h2>Regisztráció új felhasználóknak</h2>
					<p>
						<label for="regemail">E-mail cím:</label><input class="regemail" type="email" style="" placeholder="e-mail" required maxlength=25/>
					</p>
					<p>
				<label for="regusername">Felhasználónév:</label><input name="reguser" class="reguser" type="text" placeholder="username" required maxlength=25 /></p>
				<p>
				<label for="regpassword">Jelszó:</label><input name="regpassword" class="regpw" type="password" placeholder="password" required maxlength=25/></p><br>
				<input class="submits" type="submit" value="Regisztrálok"/>
				</form>
			</div>
			</div>
		</div>
	</div>
    <div class="footer">Pepe Pizza<sup>®</sup> 2020</div>
  </body>
</html>