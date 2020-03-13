<!DOCTYPE html>
<html lang="hu">
  <head>
    <title>Kosár</title>
    <link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" media="print" href="print.css">
    <?php include "meta.php"; ?>
  </head>
  <body>
    <div class="header">
		<!--Logo -->
	  <div class="pepeholder">
		<a href="index.php">
			<img src="img\pepelogo2.png" align="left" width="105px">
			<h1 id="title">Pepe pizzéria</h1>
		</a>
	  </div>
    </div>
	<div class="contentBody">
      	<?php include "menu.php"; ?>
		<div id="kosar" class="content">
			<div class="sidebar">
			<h4>Sajtadagoló</h4>
			<hr style="1px solid grey" width="50%" align="left">
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
