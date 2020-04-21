<?php include_once("header.php"); 
	if(!isset($_SESSION["user"])){
		header('Location: login.php');
		exit;
	}
?>
<!DOCTYPE html>
<html lang="hu">
  <head>
    <title>Kosár</title>
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
		<div id="kosar" class="content">
			<div class="sidebar">
			<h4>Sajtadagoló</h4>
			<hr style="border: 1px solid grey; margin-left: 0;" width="50%">
			<a href="#">Edámi</a>+200Ft
			<a href="#">Parmezán</a>+250Ft
			<a href="#">Cheddar</a>+400Ft
			<a href="#">Vörös Cheddar</a>+500Ft
			</div>
			<div class="contentCart">
				<p>Kosarad jelenleg üres!</p>
			</div>
		</div>
	</div>
    <div class="footer">Pepe Pizza<sup>®</sup> 2020</div>
  </body>
</html>
