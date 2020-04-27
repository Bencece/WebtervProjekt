<?php 
	include_once("header.php"); 
	include_once("authentication.php");
?>
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
			<img class="pepe" title="Pepe Pizzéria" src="img/pepelogo2.png" width="105">
			<h1 id="title">Pepe pizzéria</h1>
		</a>
	  </div>
	  <?php
	  	include_once("loginchecked.php");
		?>
	</div>
	<div class="contentBody">
      <!-- A menu beillesztése -->
      <?php include_once("menu.php");
	  ?>
		<div class="content loginPage">
			<div class="login" id="login">
				<div class="forms">
					<form method="POST" action="login.php" enctype="multipart/form-data">
					
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
							<input name="login" class="submits" type="submit" value="Bejelentkezés"/>
						</p>
					</form>
					
				</div>
			</div>
			<div class="register">
				<div class="forms">
					<form method="POST" action="login.php" enctype="multipart/form-data">
					<h2>Regisztráció új felhasználóknak</h2>
					<p><label>E-mail cím: <input name="email" class="regemail" type="email" placeholder="e-mail" required maxlength="25"/></label><p>
					<p><label>Felhasználónév:<input name="reguser" class="reguser" type="text" placeholder="username" required maxlength="25"/></label><p>
					<p><label>Jelszó: <input name="regpassword" class="regpw" type="password" placeholder="password" required maxlength="25"/></label><p>
					<p><label>Jelszó újra: <input name="regpassword2" class="regpw" type="password" placeholder="password" required maxlength="25"/></label><p>
					<p><label>Születésnap: <input type="date" id="birthday" name="birthday"></label>
					<br/>
					<input name="signup" class="submits"  type="submit" value="Regisztrálok"/>
				</form>
			</div>
			</div>
		</div>
	</div>
	<div class="footer">Pepe Pizza<sup>®</sup> 2020</div>
	<?php 
		$email = "";
		$username = "";
		$password = ""; 
		$password2 = "";
		$birthday = "";
						
		if (isset($_POST['signup'])){
			$email = $_POST['email'];
			$username = $_POST['reguser'];
			$password = $_POST['regpassword']; 
			$password2 = $_POST['regpassword2'];
			$birthday = $_POST['birthday'];
			$uzenet = registerUser($email, $username, $password, $password2, $birthday);
			echo "<script>
				alert('".$uzenet."');
				window.location.href = 'login.php';
			</script>";
		}
	?>
	<?php
		$username = "";
		$password = "";
		if (isset($_POST['login'])){
			$username = ($_POST['username']);
			$password = ($_POST['password']);
			$uzenet = loginUser($username, $password);
			echo "<script>
				alert('".$uzenet."');
				window.location.href = 'login.php';
			</script>";
		}
	?>
  </body>
</html>